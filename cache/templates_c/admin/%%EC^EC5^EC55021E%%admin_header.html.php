<?php /* Smarty version 2.6.20, created on 2016-07-11 05:01:26
         compiled from admin_header.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- 	<title>WoW Raid Manager ADMIN SECTION :: <?php echo $this->_tpl_vars['page_header_data']['title_guild_name']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['of_string']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['title_guild_server']; ?>
 :: <?php echo $this->_tpl_vars['page_header_data']['title_guild_description']; ?>
</title>  -->
		<title>WoW Raid Manager ADMIN SECTION :: <?php echo $this->_tpl_vars['page_header_data']['title_guild_name']; ?>
 @ <?php echo $this->_tpl_vars['page_header_data']['title_guild_server']; ?>
 :: <?php echo $this->_tpl_vars['page_header_data']['title_guild_description']; ?>
</title>
		<!-- 	<link rel="stylesheet" type="text/css" href="templates/default/style/calendar.css"> -->
		<link rel="stylesheet" type="text/css" href="../templates/default/style/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="../templates/default/style/cssToolTips.css">
<!-- 	<script src="/scripts/cal2.js" type="text/javascript"></script>  -->
<!--	<script src="/scripts/cal2_conf.js" type="text/javascript"></script>	 -->
		<script src="../scripts/phpRaid.js" type="text/javascript"></script>
		<script language="JavaScript" src="../includes/wowarmory/js/qtip.js" type="text/JavaScript"></script>
		<script language="JavaScript" src="../includes/wowarmory/js/tw-sack.js" type="text/JavaScript"></script>
		<script language="JavaScript" src="../includes/wowarmory/js/ajax-dynamic-content.js" type="text/JavaScript"></script>		
		<link rel="stylesheet" href="../includes/wowarmory/style.php" type="text/css" title="wow">
		<link rel="shortcut icon" href="../templates/default/images/favicon.ico">
		<link rel="icon" href="../templates/default/images/favicon.ico" type="image/x-icon">
		<link rel="alternate" title="<?php echo $this->_tpl_vars['page_header_data']['title_guild_name']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['of_string']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['title_guild_server']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['rss_feed_string']; ?>
" type="application/rss+xml" href="../rss.php">

	</head>
	<body>
		<!-- DO NOT REMOVE OR YOU RISK BREAKING TOOLTIPS -->
<!-- 	<div id="dhtmltooltip"></div> -->
<!--	<script src="scripts/tooltips.js" type="text/javascript"></script> -->
<!--	<script src="scripts/fixedtooltip.js" type="text/javascript"></script> -->
		<!-- END TOOLTIP CODE -->
		<div align="center">
			<div id="container">
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr id="banner">
						<td width="50%"><a href="<?php echo $this->_tpl_vars['page_header_data']['header_link']; ?>
"><img src="../<?php echo $this->_tpl_vars['page_header_data']['header_logo']; ?>
" border="0" alt="Site Logo"></a></td>
<!-- 					<td width="50%" valign="top"><div align="right" style="margin-right:3px; font-size:10px; color:#ffffff"><?php echo $this->_tpl_vars['page_header_data']['login_form_open']; ?>
 <strong><?php echo $this->_tpl_vars['page_header_data']['login_username']; ?>
</strong> <?php echo $this->_tpl_vars['page_header_data']['login_password']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['login_remember_hidden']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['login_button']; ?>
<br><?php echo $this->_tpl_vars['page_header_data']['login_change_pass']; ?>
<?php echo $this->_tpl_vars['page_header_data']['login_form_close']; ?>
</div></td>  -->
					</tr>
				</table>
				<div id="topHeader">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr valign="top">
							<td width="50%"><div align="left" style="margin-left:10px"><strong><?php echo $this->_tpl_vars['page_header_data']['guild_time_string']; ?>
:</strong> <?php echo $this->_tpl_vars['page_header_data']['guild_date']; ?>
 - <?php echo $this->_tpl_vars['page_header_data']['guild_time']; ?>
</div></td>
							<td width="50%"><div align="right" style="margin-right:10px"></div></td>
						</tr>
					</table>
				</div>
				<table width="100%" cellpadding="0" cellspacing="0" align="center">
					<tr valign="top">
						<td id="leftMenuBackground" width="150px">
							<div class="menuHeader"><?php echo $this->_tpl_vars['menus']['main_menu_header']; ?>
</div>
							<?php echo $this->_tpl_vars['menus']['main_menu']; ?>
<br>
							<div class="menuHeader"><?php echo $this->_tpl_vars['menus']['gen_conf_menu_header']; ?>
</div>
							<?php echo $this->_tpl_vars['menus']['gen_conf_menu']; ?>
<br>
							<div class="menuHeader"><?php echo $this->_tpl_vars['menus']['style_menu_header']; ?>
</div>
							<?php echo $this->_tpl_vars['menus']['style_menu']; ?>
<br>
							<div class="menuHeader"><?php echo $this->_tpl_vars['menus']['user_mgt_menu_header']; ?>
</div>
							<?php echo $this->_tpl_vars['menus']['user_mgt_menu']; ?>
<br>
							<div class="menuHeader"><?php echo $this->_tpl_vars['menus']['table_conf_menu_header']; ?>
</div>
							<?php echo $this->_tpl_vars['menus']['table_conf_menu']; ?>
<br>
							<div class="menuHeader"><?php echo $this->_tpl_vars['menus']['logs_menu_header']; ?>
</div>
							<?php echo $this->_tpl_vars['menus']['logs_menu']; ?>

						</td>
						<td id="leftMenuBorder" width="5px">&nbsp;</td>
						<td id="contentContainer">
<!--  					<?php echo $this->_tpl_vars['page_header_data']['site_disabled_warning']; ?>
  -->
							<center>
								<h1><?php echo $this->_tpl_vars['admin_index_header']; ?>
</h1>
							</center>