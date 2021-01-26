<?php if(!defined("__XE__"))exit;
$this->config->autoescape = 'on'; ?>
<!--#Meta:modules/admin/tpl/js/config.js--><?php $__tmp=array('modules/admin/tpl/js/config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/session/tpl/js/session.js--><?php $__tmp=array('modules/session/tpl/js/session.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($lang->menu_gnb_sub['adminConfigurationFtp'], ENT_QUOTES, 'UTF-8', false) : ($lang->menu_gnb_sub['adminConfigurationFtp'])) ?></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/admin/tpl/config_ftp/1'){ ?><div class="message <?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->XE_VALIDATOR_MESSAGE_TYPE, ENT_QUOTES, 'UTF-8', false) : ($__Context->XE_VALIDATOR_MESSAGE_TYPE)) ?>">
	<p><?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->XE_VALIDATOR_MESSAGE, ENT_QUOTES, 'UTF-8', false) : ($__Context->XE_VALIDATOR_MESSAGE)) ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/admin/ruleset/installFtpInfo.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" id="ftp_form" method="post" class="x_form-horizontal" ><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="installFtpInfo" />
	<input type="hidden" name="module" value="admin" />
	<input type="hidden" name="act" value="procAdminUpdateFTPInfo" />
	<input type="hidden" name="success_return_url" value="<?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->success_return_url, ENT_QUOTES, 'UTF-8', false) : ($__Context->success_return_url)) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/admin/tpl/config_ftp/1" />
	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label" for="ftp_host"><?php echo $lang->ftp_host ?></label>
			<div class="x_controls">
				<input type="text" name="ftp_host" id="ftp_host" value="<?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->ftp_info['host'] ?: 'localhost', ENT_QUOTES, 'UTF-8', false) : ($__Context->ftp_info['host'] ?: 'localhost')) ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="ftp_port"><?php echo $lang->ftp_port ?></label>
			<div class="x_controls">
				<input type="number" name="ftp_port" id="ftp_port" value="<?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->ftp_info['port'] ?: '21', ENT_QUOTES, 'UTF-8', false) : ($__Context->ftp_info['port'] ?: '21')) ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="ftp_user"><?php echo $lang->user_id ?></label>
			<div class="x_controls">
				<input type="text" name="ftp_user" id="ftp_user" value="<?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->ftp_info['user'], ENT_QUOTES, 'UTF-8', false) : ($__Context->ftp_info['user'])) ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="ftp_pass"><?php echo $lang->password ?></label>
			<div class="x_controls">
				<input type="password" name="ftp_pass" id="ftp_pass" value="" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="ftp_path"><?php echo $lang->msg_ftp_installed_ftp_realpath ?></label>
			<div class="x_controls">
				<input type="text" name="ftp_path" id="ftp_path" style="min-width:90%" value="<?php echo ($this->config->autoescape === 'on' ? htmlspecialchars($__Context->ftp_info['path'] ?: _XE_PATH_, ENT_QUOTES, 'UTF-8', false) : ($__Context->ftp_info['path'] ?: _XE_PATH_)) ?>" />
				<br />
				<p class="x_help-block"><?php echo $lang->msg_ftp_autodetected_ftp_realpath ?> : <?php echo ($this->config->autoescape === 'on' ? htmlspecialchars(_XE_PATH_, ENT_QUOTES, 'UTF-8', false) : (_XE_PATH_)) ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<div class="x_control-label"><?php echo $lang->use_ftp_passive_mode ?></div>
			<div class="x_controls">
				<label class="x_inline" for="ftp_pasv_y">
					<input type="radio" name="ftp_pasv" id="ftp_pasv_y" value="Y"<?php if($__Context->ftp_info['pasv']){ ?> checked="checked"<?php } ?> />
					<?php echo $lang->cmd_yes ?>
				</label>
				<label class="x_inline" for="ftp_pasv_n">
					<input type="radio" name="ftp_pasv" id="ftp_pasv_n" value="N"<?php if(!$__Context->ftp_info['pasv']){ ?> checked="checked"<?php } ?> />
					<?php echo $lang->cmd_no ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->use_sftp_support ?></label>
			<div class="x_controls">
				<label class="x_inline" for="ftp_sftp_y"><input type="radio" name="ftp_sftp" id="ftp_sftp_y" value="Y"<?php if($__Context->ftp_info['sftp']){ ?> checked="checked"<?php };
if(!$__Context->sftp_support){ ?> disabled<?php } ?> /> <?php echo $lang->cmd_yes ?></label>
				<label class="x_inline" for="ftp_sftp_n"><input type="radio" name="ftp_sftp" id="ftp_sftp_n" value="N"<?php if(!$__Context->ftp_info['sftp']){ ?> checked="checked"<?php } ?> /> <?php echo $lang->cmd_no ?></label>
				<?php if(!$__Context->sftp_support){ ?><p class="x_help-black"><?php echo $lang->disable_sftp_support ?></p><?php } ?>
			</div>
		</div>
	</section>
	<div class="btnArea" style="margin-top:0">
		<input type="submit" value="<?php echo $lang->cmd_save ?>" class="x_btn x_btn-primary x_pull-right" />
	</div>
</form>
