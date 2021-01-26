<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/file/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/file/tpl/upload_config/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/file/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal section"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="file" />
	<input type="hidden" name="act" value="procFileAdminInsertUploadConfig" />
	<input type="hidden" name="xe_validator_id" value="modules/file/tpl/upload_config/1" />
	
	<div class="x_control-group">
		<label for="allowed_filesize" class="x_control-label"><?php echo $lang->allowed_filesize ?></label>
		<div class="x_controls">
			<input type="number" min="0" name="allowed_filesize" id="allowed_filesize" value="<?php echo $__Context->config->allowed_filesize ?>" size="7" style="min-width:80px" /> MB
			<p class="x_help-block"><?php echo $lang->about_allowed_filesize_global ?><br /><?php echo sprintf($lang->about_allowed_size_limits, ini_get('upload_max_filesize')) ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label for="allowed_attach_size" class="x_control-label"><?php echo $lang->allowed_attach_size ?></label>
		<div class="x_controls">
			<input type="number" min="0" name="allowed_attach_size" id="allowed_attach_size" value="<?php echo $__Context->config->allowed_attach_size ?>" size="7" style="min-width:80px" /> MB
			<p class="x_help-block"><?php echo $lang->about_allowed_attach_size_global ?><br /><?php echo sprintf($lang->about_allowed_size_limits, ini_get('upload_max_filesize')) ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label for="allowedFiletypes" class="x_control-label"><?php echo $lang->allowed_filetypes ?></label>
		<div class="x_controls">
			<input id="allowedFiletypes" type="text" name="allowed_filetypes" value="<?php echo implode(', ', $__Context->config->allowed_extensions) ?>" />
			<p class="x_help-block"><?php echo $lang->about_allowed_filetypes ?></p>
		</div>
	</div>
	<section class="section">
		<h1><?php echo $lang->image ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->image_autoconv ?></label>
			<div class="x_controls">
				<label for="image_autoconv_bmp2jpg">
					<input type="checkbox" name="image_autoconv_bmp2jpg" id="image_autoconv_bmp2jpg" value="Y"<?php if($__Context->config->image_autoconv['bmp2jpg']){ ?> checked="checked"<?php };
if(!function_exists('imagebmp')){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->image_autoconv_bmp2jpg ?>
				</label>
				<label for="image_autoconv_png2jpg">
					<input type="checkbox" name="image_autoconv_png2jpg" id="image_autoconv_png2jpg" value="Y"<?php if($__Context->config->image_autoconv['png2jpg']){ ?> checked="checked"<?php };
if(!function_exists('imagepng')){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->image_autoconv_png2jpg ?>
				</label>
				<label for="image_autoconv_webp2jpg">
					<input type="checkbox" name="image_autoconv_webp2jpg" id="image_autoconv_webp2jpg" value="Y"<?php if($__Context->config->image_autoconv['webp2jpg']){ ?> checked="checked"<?php };
if(!function_exists('imagewebp')){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->image_autoconv_webp2jpg ?>
				</label>
				<p class="x_help-block"><?php echo $lang->about_image_autoconv ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->max_image_size ?></label>
			<div class="x_controls">
				<input type="number" min="0" name="max_image_width" id="max_image_width" value="<?php echo $__Context->config->max_image_width ?>" size="7" style="min-width:80px" /> &times;
				<input type="number" min="0" name="max_image_height" id="max_image_height" value="<?php echo $__Context->config->max_image_height ?>" size="7" style="min-width:80px" /> px &nbsp;
				<select name="max_image_size_action" id="max_image_size_action">
					<option value=""><?php echo $lang->max_image_size_action_nothing ?></option>
					<option value="block"<?php if($__Context->config->max_image_size_action === 'block'){ ?> selected="selected"<?php } ?>><?php echo $lang->max_image_size_action_block ?></option>
					<option value="resize"<?php if($__Context->config->max_image_size_action === 'resize'){ ?> selected="selected"<?php } ?>><?php echo $lang->max_image_size_action_resize ?></option>
				</select>
				<p class="x_help-block">
					<?php echo $lang->about_max_image_size ?>
					<label for="max_image_size_admin">
						<input type="checkbox" name="max_image_size_admin" id="max_image_size_admin" value="Y"<?php if($__Context->config->max_image_size_admin === 'Y'){ ?> checked="checked"<?php } ?> />
						<?php echo $lang->max_image_size_admin ?>
					</label>
				</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->image_quality_adjustment ?></label>
			<div class="x_controls">
				<select name="image_quality_adjustment" style="min-width:80px">
					<?php for($__Context->q = 50; $__Context->q <= 100; $__Context->q += 5){ ?>
						<option value="<?php echo $__Context->q ?>"<?php if($__Context->config->image_quality_adjustment === $__Context->q){ ?> selected="selected"<?php } ?>><?php echo $__Context->q ?>%<?php if($__Context->q === 75){ ?> (<?php echo $lang->standard ?>)<?php } ?></option>
					<?php } ?>
				</select>
				<p class="x_help-block"><?php echo $lang->about_image_quality_adjustment ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->image_autorotate ?></label>
			<div class="x_controls">
				<label for="image_autorotate_Y" class="x_inline">
					<input type="radio" name="image_autorotate" id="image_autorotate_Y" value="Y"<?php if($__Context->config->image_autorotate === true){ ?> checked="checked"<?php };
if(!function_exists('exif_read_data')){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->cmd_yes ?>
				</label>
				<label for="image_autorotate_N" class="x_inline">
					<input type="radio" name="image_autorotate" id="image_autorotate_N" value="N"<?php if($__Context->config->image_autorotate !== true){ ?> checked="checked"<?php };
if(!function_exists('exif_read_data')){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->cmd_no ?>
				</label>
				<p class="x_help-block"><?php echo $lang->about_image_autorotate ?></p>
				<?php if(!function_exists('exif_read_data')){ ?><p class="x_text-info"><?php echo $lang->msg_cannot_use_exif ?></p><?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->image_remove_exif_data ?></label>
			<div class="x_controls">
				<label for="image_remove_exif_data_Y" class="x_inline">
					<input type="radio" name="image_remove_exif_data" id="image_remove_exif_data_Y" value="Y"<?php if($__Context->config->image_remove_exif_data === true){ ?> checked="checked"<?php };
if(!function_exists('exif_read_data')){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->cmd_yes ?>
				</label>
				<label for="image_remove_exif_data_N" class="x_inline">
					<input type="radio" name="image_remove_exif_data" id="image_remove_exif_data_N" value="N"<?php if($__Context->config->image_remove_exif_data !== true){ ?> checked="checked"<?php };
if(!function_exists('exif_read_data')){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->cmd_no ?>
				</label>
				<p class="x_help-block"><?php echo $lang->about_image_remove_exif_data ?></p>
				<?php if(!function_exists('exif_read_data')){ ?><p class="x_text-info"><?php echo $lang->msg_cannot_use_exif ?></p><?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->image_autoconv_gif2mp4 ?></label>
			<div class="x_controls">
				<label for="image_autoconv_gif2mp4_Y" class="x_inline">
					<input type="radio" name="image_autoconv_gif2mp4" id="image_autoconv_gif2mp4_Y" value="Y"<?php if($__Context->config->image_autoconv['gif2mp4'] === true){ ?> checked="checked"<?php };
if(!$__Context->is_ffmpeg){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->cmd_yes ?>
				</label>
				<label for="image_autoconv_gif2mp4_N" class="x_inline">
					<input type="radio" name="image_autoconv_gif2mp4" id="image_autoconv_gif2mp4_N" value="N"<?php if($__Context->config->image_autoconv['gif2mp4'] !== true){ ?> checked="checked"<?php };
if(!$__Context->is_ffmpeg){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->cmd_no ?>
				</label>
				<p class="x_help-block"><?php echo $lang->about_image_autoconv_gif2mp4 ?></p>
				<?php if(!$__Context->is_ffmpeg){ ?><p class="x_text-info"><?php echo $lang->msg_cannot_use_ffmpeg ?></p><?php } ?>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $lang->video ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->video_thumbnail ?></label>
			<div class="x_controls">
				<label for="video_thumbnail_Y" class="x_inline">
					<input type="radio" name="video_thumbnail" id="video_thumbnail_Y" value="Y"<?php if($__Context->config->video_thumbnail === true){ ?> checked="checked"<?php };
if(!$__Context->is_ffmpeg){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->cmd_yes ?>
				</label>
				<label for="video_thumbnail_N" class="x_inline">
					<input type="radio" name="video_thumbnail" id="video_thumbnail_N" value="N"<?php if($__Context->config->video_thumbnail !== true){ ?> checked="checked"<?php };
if(!$__Context->is_ffmpeg){ ?> disabled="disabled"<?php } ?> />
					<?php echo $lang->cmd_no ?>
				</label>
				<p class="x_help-block"><?php echo $lang->about_video_thumbnail ?></p>
				<?php if(!$__Context->is_ffmpeg){ ?><p class="x_text-info"><?php echo $lang->msg_cannot_use_ffmpeg ?></p><?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->video_mp4_gif_time ?></label>
			<div class="x_controls">
				<input type="number" min="0" name="video_mp4_gif_time" value="<?php echo $__Context->config->video_mp4_gif_time ?>" style="min-width:80px"<?php if(!$__Context->is_ffmpeg){ ?> disabled="disabled"<?php } ?> /> <?php echo $lang->unit_sec ?>
				<p class="x_help-block"><?php echo $lang->about_video_mp4_gif_time ?></p>
				<?php if(!$__Context->is_ffmpeg){ ?><p class="x_text-info"><?php echo $lang->msg_cannot_use_ffmpeg ?></p><?php } ?>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>FFmpeg</h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->ffmpeg_path ?></label>
			<div class="x_controls">
				<input type="text" name="ffmpeg_command" value="<?php echo $__Context->config->ffmpeg_command ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->ffprobe_path ?></label>
			<div class="x_controls">
				<input type="text" name="ffprobe_command" value="<?php echo $__Context->config->ffprobe_command ?>" />
			</div>
		</div>
	</section>
	
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $lang->cmd_save ?></button>
		</div>
	</div>
</form>
