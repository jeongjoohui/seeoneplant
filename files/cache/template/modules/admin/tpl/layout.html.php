<?php if(!defined("__XE__"))exit;
$this->config->autoescape = 'on'; ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_header.html') ?>
<div class="content" id="content">
	<?php if(Context::isBlacklistedPlugin($__Context->blacklisted_plugin_name = strtolower(preg_replace('/^disp([A-Z][a-z0-9_]+)[A-Z].+$/', '$1', $__Context->act)))){ ?><div class="message error" style="margin-top:15px">
		<p>
			<em class="x_label x_label-important"><?php echo $lang->msg_warning ?></em> <?php echo $lang->msg_blacklisted_module ?><br />
			<?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($lang->get('admin.msg_blacklisted_reason.'.$__Context->blacklisted_plugin_name), ENT_QUOTES, 'UTF-8', false) : ($lang->get('admin.msg_blacklisted_reason.'.$__Context->blacklisted_plugin_name))) ?>
		</p>
	</div><?php } ?>
	<?php echo $__Context->content ?>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_footer.html') ?>
