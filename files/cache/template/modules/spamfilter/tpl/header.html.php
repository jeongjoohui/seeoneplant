<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/spamfilter/tpl/css/spamfilter_admin.css--><?php $__tmp=array('modules/spamfilter/tpl/css/spamfilter_admin.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/spamfilter/tpl/js/spamfilter_admin.js--><?php $__tmp=array('modules/spamfilter/tpl/js/spamfilter_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $lang->spamfilter ?></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/spamfilter/tpl/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
    <p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
