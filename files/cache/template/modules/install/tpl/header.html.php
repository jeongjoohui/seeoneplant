<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/css/install.css--><?php $__tmp=array('modules/install/tpl/css/install.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/install/tpl/js/install.js--><?php $__tmp=array('modules/install/tpl/js/install.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div<?php if($__Context->lang_type == 'ko'){ ?> class="x"<?php };
if($__Context->lang_type != 'ko'){ ?> class="x enfont"<?php } ?>>
	<div id="header">
		<h1><span class="green">rhymi</span><span class="red">x</span></h1>
		<h2>Version <strong><?php echo __XE_VERSION__ ?></strong> Installation</h2>
	</div>
