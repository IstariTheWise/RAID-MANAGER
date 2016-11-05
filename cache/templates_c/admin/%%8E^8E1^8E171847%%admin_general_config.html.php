<?php /* Smarty version 2.6.20, created on 2016-07-11 05:01:30
         compiled from admin_general_config.html */ ?>
<form action="<?php echo $this->_tpl_vars['config_data']['form_action']; ?>
" method="post" name="configure" id="configure">
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['general_header']; ?>
</div>
<br>
<div class="contentBody">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td valign="top" class="forumline"> 
           <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">

		      <tr>
		        <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['language_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['language']; ?>
</td>
		      </tr>
		      <tr> 
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['persistent_db_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['persistent_db']; ?>
</td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['disable_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['disable_site']; ?>
</td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['debug_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['debug_mode']; ?>
</td>
		      </tr>
			  <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['enable_five_man_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['enable_five_man']; ?>
</td>
		      </tr>
			  <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['default_group_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['default_group_value']; ?>
</td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['records_per_page_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['records_per_page']; ?>
</td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['old_raids_index_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['num_old_raids_index']; ?>
</td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['auto_mark_raids_old_text']; ?>
</strong></td>
		        <td class="row2"><?php echo $this->_tpl_vars['config_data']['auto_mark_raids_old']; ?>
</td>
		      </tr>
			</table>
		</td>
	</tr>
</table>
</div>
<br>
<div class="contentHeader"><?php echo $this->_tpl_vars['config_data']['side_cfg_header']; ?>
</div><br>
<div class="contentBody">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td valign="top" class="forumline"> 
           <table width="100%" border="0" cellspacing="1" cellpadding="3" class="dataOutline">
		      <tr>
		        <td width="200" class="row1"><strong><?php echo $this->_tpl_vars['config_data']['site_name_text']; ?>
</strong></td>
		        <td class="row2"><input name="site_name" size="60" type="text" class="post" value="<?php echo $this->_tpl_vars['config_data']['site_name_value']; ?>
"></td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['site_description_text']; ?>
</strong></td>
		        <td class="row2"><input name="site_desc" size="60" type="text" class="post" value="<?php echo $this->_tpl_vars['config_data']['site_description_value']; ?>
"></td>
		      </tr>
		      <tr>
		        <td class="row1"><strong><?php echo $this->_tpl_vars['config_data']['site_server_text']; ?>
</strong></td>
		        <td class="row2"><input name="site_server" size="60" type="text" class="post" value="<?php echo $this->_tpl_vars['config_data']['site_server_value']; ?>
"></td>
		      </tr>
			</table>
		</td>
	</tr>
</table>           
<br>
</div>
<div align="center" class="button">
	<input type="submit" value="<?php echo $this->_tpl_vars['config_data']['button_submit']; ?>
" name="submit" class="mainoption">
	<input type="reset" value="<?php echo $this->_tpl_vars['config_data']['button_reset']; ?>
" name="reset" class="liteoption">
</div>
</form>