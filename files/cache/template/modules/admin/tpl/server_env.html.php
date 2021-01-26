<?php if(!defined("__XE__"))exit;
$this->config->autoescape = 'on'; ?>
<!--#Meta:modules/admin/tpl/js/menu_setup.js--><?php $__tmp=array('modules/admin/tpl/js/menu_setup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $lang->server_env ?></h1>
</div>
<section class="section">
	<div class="server_env"><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->str_info, ENT_QUOTES, 'UTF-8', false) : ($__Context->str_info)) ?></div>
</section>
