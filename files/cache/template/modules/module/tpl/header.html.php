<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/module_admin.js--><?php $__tmp=array('modules/module/tpl/js/module_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/module/tpl/css/module_admin.less--><?php $__tmp=array('modules/module/tpl/css/module_admin.less','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $lang->installed_modules ?></h1>
</div>
<script>
	xe.lang.favorite_on = '<?php echo lang("favorite") ?> (<?php echo lang("on") ?>)';
	xe.lang.favorite_off = '<?php echo lang("favorite") ?> (<?php echo lang("off") ?>)';
</script>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispModuleAdminContent'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispModuleAdminContent') ?>"><?php echo $lang->installed_modules ?></a>
	</li>
	<li<?php if($__Context->act=='dispModuleAdminCategory'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispModuleAdminCategory') ?>"><?php echo $lang->module_category ?></a>
	</li>
</ul>
