<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/autoinstall/tpl','header.html') ?>
<!--#Meta:modules/autoinstall/tpl/js/waiting.js--><?php $__tmp=array('modules/autoinstall/tpl/js/waiting.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<h2><?php echo $__Context->package->title ?></h2>
<p><?php echo $__Context->package->type ?> (<?php echo $__Context->package->path ?>)</p>
<?php if($__Context->package->avail_remove){ ?>
	<div class="x_alert x_alert-block">
		<p><?php echo $lang->description_uninstall ?></p>
	</div>
	<div class="x_well x_clearfix">
		<?php if(!$__Context->directModuleInstall->toBool()){ ?>
			<p><?php echo $lang->msg_direct_install_not_supported ?></p>
			<ul>
				<?php if($__Context->directModuleInstall->get('path'))foreach($__Context->directModuleInstall->get('path') as $__Context->path){ ?><li><?php echo $__Context->path ?></li><?php } ?>
			</ul>
		<?php } ?>
		<?php if($__Context->show_ftp_note){ ?>
			<p><?php echo $lang->ftp_form_title ?>. (<a href="<?php echo getUrl('', 'module', 'admin', 'act', 'dispAdminConfigFtp') ?>">FTP Setup</a>)</p>
		<?php } ?>
	</div>
	<?php if(!$__Context->show_ftp_note){ ?><div>
		<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/autoinstall/tpl/uninstall/1'){ ?><div class="message error">
			<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
		</div><?php } ?>
		<?php Context::addJsFile("modules/autoinstall/ruleset/ftp.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal" method="post" ><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="ftp" />
			<input type="hidden" name="module" value="autoinstall" />
			<input type="hidden" name="act" value="procAutoinstallAdminUninstallPackage" />
			<input type="hidden" name="package_srl" value="<?php echo $__Context->package_srl ?>" />
			<input type="hidden" name="return_url" value="<?php echo $__Context->return_url ?>" />
			<?php if(!$__Context->need_password || $__Context->directModuleInstall->toBool()){ ?><input type="hidden" name="ftp_password" value="dummy" /><?php } ?>
			<input type="hidden" name="xe_validator_id" value="modules/autoinstall/tpl/uninstall/1" />
			<?php if($__Context->need_password && !$__Context->directModuleInstall->toBool()){ ?>
				<div class="x_control-group">
					<label class="x_control-label" for="ftp_password">FTP <?php echo $lang->password ?></label>
					<div class="x_controls">
						<input type="password" name="ftp_password" id="ftp_password" value="" />
						<span class="x_help-block"><?php echo $lang->about_ftp_password ?></span>
					</div>
				</div>
			<?php } ?>
			<div class="x_clearfix btnArea">
				<div class="x_pull-right">
					<input class="x_btn x_btn-primary" type="submit" value="<?php echo $lang->cmd_delete ?>" />
				</div>
			</div>
		</form>
	</div><?php } ?>
<?php } ?>
<?php if(!$__Context->package->avail_remove){ ?>
	<div class="x_alert x_alert-error">
		<?php if($__Context->package->deps){ ?><p><?php echo $lang->msg_dependency_package ?></p><?php } ?>
		<?php if(!$__Context->package->deps){ ?><p><?php echo $lang->msg_does_not_support_delete ?></p><?php } ?>
	</div>
	<?php if($__Context->package->deps){ ?><div class="x_well">
		<p><?php echo $lang->dependant_list ?>:</p>
		<ul>
			<?php if($__Context->package->deps)foreach($__Context->package->deps as $__Context->dep_package_srl){ ?><li><?php echo $__Context->installed[$__Context->dep_package_srl]->title ?></li><?php } ?>
		</ul>
	</div><?php } ?>
<?php } ?>
