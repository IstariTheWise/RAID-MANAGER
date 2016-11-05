<?php
/***************************************************************************
 *                             auth_phpbb3.php
 *                            -------------------
 *   begin                : July 22, 2008
 *	 Dev                  : Carsten Hölbing
 *	 email                : hoelbin@gmx.de
 *
 *	 based on 			  : auth_e107.php @ Douglas Wagner
 *   copyright            : (C) 2007-2008 Douglas Wagner
 *   email                : douglasw0@yahoo.com
 *
 ***************************************************************************/

/***************************************************************************
*
*    WoW Raid Manager - Raid Management Software for World of Warcraft
*    Copyright (C) 2007-2008 Douglas Wagner
*
*    This program is free software: you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation, either version 3 of the License, or
*    (at your option) any later version.
*
*    This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
****************************************************************************/

if ( !defined('IN_PHPRAID'))
	print_error("Hacking Attempt", "Invalid access detected", 1);

if(isset($_GET['phpraid_dir']) || isset($_POST['phpraid_dir']))
	die("Hacking attempt detected!");

//This is NOT SAFE to turn on.
$BridgeSupportPWDChange = FALSE;
$Bridge2ColumGroup = FALSE;

/*********************************************** 
 * Table and Column Names - change per CMS.
 ***********************************************/
// Column Name for the ID field for the User.
$db_user_id = "user_id";
// Column Name for the ID field for the Group the User belongs to.
$db_group_id = "group_id";
// Column Name for the UserName field.
$db_user_name = "username";
// Column Name for the User's E-Mail Address
$db_user_email = "user_email";
// Column Name for the User's Password
$db_user_password = "user_password";

$db_table_user_name = "users";
$db_table_group_name = "user_group";

$table_prefix = $phpraid_config['phpbb3_table_prefix'];

// if (isset($phpraid_config[$phpraid_config['auth_type'].'_db_name']))
	// $table_prefix = $phpraid_config[$phpraid_config['auth_type'].'_db_name'] . ".". $phpraid_config[$phpraid_config['auth_type'].'_table_prefix'];
// else
	// $table_prefix = $phpraid_config[$phpraid_config['auth_type'].'_table_prefix'];

$auth_user_class = $phpraid_config[$phpraid_config['auth_type'].'_auth_user_class'];
$auth_alt_user_class = $phpraid_config[$phpraid_config['auth_type'].'_alt_auth_user_class'];

// Table Name were save all  Groups/Class Infos
$db_table_allgroups = "groups";
// Column Name for the ID field for the Group/Class.
$db_allgroups_id = "group_id";
// Column Name for the Groups/Class Name field.
$db_allgroups_name = "group_name";

//change password in WRM DB

// NOTE for PHPBB3 It is unknown if the password generated by this function will actually produce
//   a valid password for PHPBB3.
function db_password_change($profile_id, $dbusernewpassword)
{
	global $db_user_id, $db_group_id, $db_user_name, $db_user_email, $db_user_password, $db_table_user_name; 
	global $db_table_group_name, $auth_user_class, $auth_alt_user_class, $table_prefix, $db_raid, $phpraid_config;

	require ($phpraid_dir . "includes/functions_pwdhash.php");
	
	// setup Password Hasher Routine
	$pwd_hasher = new PasswordHash(8, FALSE);

	//Convert PWD: Write CMS specific code here to convert the input PWD to the format of the CMS. 
	
	//IT IS UNKNOWN IF THIS WILL ACTUALLY WORK.
	$initString = '$H$';
	$dbusernewpassword = $pwd_hasher->HashPassword($dbusernewpassword, $initString);

	/*********************************************************************
	 * Do not modify anything below here.
	 *********************************************************************/
	//check: is profile_id in CMS DB
	$sql = sprintf(	"SELECT ".$db_user_id.
					" FROM " . $table_prefix . $db_table_user_name . 
					" WHERE ".$db_user_id." = %s", 
					quote_smart($profile_id)
			);
			
	$result = $db_raid->sql_query($sql) or print_error($sql, $db_raid->sql_error(), 1);
	if ($db_raid->sql_numrows($result) != 1) {
		//user not found in WRM DB
		return 2;
	}

	// Profile ID Exists, Update CMS with new password.
	$sql = sprintf(	"UPDATE " . $table_prefix . $db_table_user_name . 
					" SET ".$db_user_password." = %s WHERE " . $db_user_id . " = %s", 
					quote_smart($dbusernewpassword), quote_smart($profile_id)
			);

	if (($db_raid->sql_query($sql) or print_error($sql, $db_raid->sql_error(), 1)) == true)
	{
		//pwd change
		return 1;
	}
	else
	{
		//pwd NOT change
		return 0;
	} 
}

//compare password
//return value -> $db_pass (Password from CMS database) upon success, FALSE upon fail.
function password_check($oldpassword, $profile_id, $encryptflag)
{
	global $db_user_id, $db_group_id, $db_user_name, $db_user_email, $db_user_password, $db_table_user_name; 
	global $db_table_group_name, $auth_user_class, $auth_alt_user_class, $table_prefix, $db_raid, $phpraid_config;
	
	require ($phpraid_dir . "includes/functions_pwdhash.php");
	
	// setup Password Hasher Routine
	$pwd_hasher = new PasswordHash(8, FALSE);

	$sql_passchk = sprintf(	"SELECT " . $db_user_password . 
							" FROM " . $table_prefix . $db_table_user_name . 
							" WHERE " . $db_user_id . " = %s", quote_smart($profile_id)
			);
	$result_passchk = $db_raid->sql_query($sql_passchk) or print_error($sql_passchk, $db_raid->sql_error(), 1);
	$data_passchk = $db_raid->sql_fetchrow($result_passchk, true);
	$db_pass = $data_passchk[$db_user_password];
	
	if ($encryptflag)
	{ // Encrypted Password Sent in, Check directly against DB.
		if (defined('DEBUG') && DEBUG)
		{
			fwrite($stdoutfptr, "  Encrypted Password Sent In.\n");
			fwrite($stdoutfptr, "  Password If Check (Equals) :\n");
			fwrite($stdoutfptr, "    -> Input Password: '" . $oldpassword . "'\n");
			fwrite($stdoutfptr, "    -> Database Password: '" . $db_pass . "'\n");
		}
		
		if ($oldpassword == $db_pass)
			return $db_pass;
		else
			return FALSE;
	}
	else
	{ // Non-encrypted password sent in, encrypt and check against DB.
		$initString = '$H$';
		$testVal = $pwd_hasher->CheckPassword($oldpassword, $db_pass, $initString);

		if (defined('DEBUG') && DEBUG)
		{
			fwrite($stdoutfptr, "  Encrypted Password NOT Sent In.\n");
			fwrite($stdoutfptr, "  Password If Check (Return Code) :\n");
			fwrite($stdoutfptr, "    -> Return Code from Password Check: " . var_dump($testVal) . "\n");
		}
		
		if ($testVal)
			return $db_pass;
		else
			return FALSE;
	}
	
}


?>