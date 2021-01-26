<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/admin/tpl/css/admin.bootstrap.css--><?php $__tmp=array('modules/admin/tpl/css/admin.bootstrap.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/css/admin.css--><?php $__tmp=array('modules/admin/tpl/css/admin.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x popup">
    <?php echo $__Context->content ?>
</div>
<script>
	jQuery(function() {
		setTimeout(setFixedPopupSize, 500);
	});
    var _isPoped = true;
</script>
