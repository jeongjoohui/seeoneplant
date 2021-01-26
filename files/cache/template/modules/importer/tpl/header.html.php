<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/importer/tpl/js/importer_admin.js--><?php $__tmp=array('modules/importer/tpl/js/importer_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  $__Context->type_list = array('module'=>$lang->type_module, 'ttxml'=>$lang->type_ttxml, 'member'=>$lang->type_member, 'sync'=>$lang->type_syncmember, 'message'=>$lang->type_message)  ?>
<div class="x_page-header">
	<h1><?php echo $lang->importer ?></h1>
</div>
<p><?php echo nl2br($lang->about_importer) ?></p>
