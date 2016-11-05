<?php /* Smarty version 2.6.20, created on 2016-07-10 22:45:32
         compiled from header.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--    <title>WoW Raid Manager :: <?php echo $this->_tpl_vars['page_header_data']['title_guild_name']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['of_string']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['title_guild_server']; ?>
 :: <?php echo $this->_tpl_vars['page_header_data']['title_guild_description']; ?>
</title>  -->
		<title>WoW Raid Manager :: <?php echo $this->_tpl_vars['page_header_data']['title_guild_name']; ?>
 @ <?php echo $this->_tpl_vars['page_header_data']['title_guild_server']; ?>
 :: <?php echo $this->_tpl_vars['page_header_data']['title_guild_description']; ?>
</title>
		<link rel="stylesheet" href="includes/wowarmory/style.php" type="text/css" title="wow">
		<link rel="shortcut icon" href="templates/default/images/favicon.ico">
		<link rel="icon" href="templates/default/images/favicon.ico" type="image/x-icon">
		<link rel="alternate" title="<?php echo $this->_tpl_vars['page_header_data']['title_guild_name']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['of_string']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['title_guild_server']; ?>
 <?php echo $this->_tpl_vars['page_header_data']['rss_feed_string']; ?>
" type="application/rss+xml" href="rss.php">
		<link rel="stylesheet" type="text/css" href="templates/default/style/calendar.css">
		<link rel="stylesheet" type="text/css" href="templates/default/style/stylesheet.css">
		<link rel="stylesheet" type="text/css" href="templates/default/style/cssToolTips.css">
		<script src="scripts/cal2.js" type="text/javascript"></script>
		<script src="scripts/cal2_conf.js" type="text/javascript"></script>
		<script src="scripts/phpRaid.js" type="text/javascript"></script>
<!--	
		<script language="JavaScript" src="includes/wowarmory/js/qtip.js" type="text/JavaScript"></script>
		<script language="JavaScript" src="includes/wowarmory/js/tw-sack.js" type="text/JavaScript"></script>
		<script language="JavaScript" src="includes/wowarmory/js/ajax-dynamic-content.js" type="text/JavaScript"></script>	
-->
	</head>
	<body class="<?php echo $this->_tpl_vars['page_header_data']['body_width']; ?>
">
		<div align="center">
			<div id="container">
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr id="banner">
						<td width="50%"><a href="<?php echo $this->_tpl_vars['page_header_data']['header_link']; ?>
"><img src="<?php echo $this->_tpl_vars['page_header_data']['header_logo']; ?>
" border="0" alt="Site Logo"></a></td>
						<td width="50%" valign="top">
							<!-- Login Box -->
							<?php echo $this->_tpl_vars['page_header_data']['login_form']; ?>

						</td>
					</tr>
				</table>
				<div id="topHeader">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr valign="top">
							<td width="50%"><div align="left" style="margin-left:10px"><strong><?php echo $this->_tpl_vars['page_header_data']['guild_time_string']; ?>
:</strong> <?php echo $this->_tpl_vars['page_header_data']['guild_date']; ?>
 - <?php echo $this->_tpl_vars['page_header_data']['guild_time']; ?>
</div></td>
							<td width="50%"><div align="right" style="margin-right:10px"></div>&nbsp;</td>
						</tr>
					</table>
				</div>
				<table width="100%" cellpadding="0" cellspacing="0" align="center">
					<tr valign="top">