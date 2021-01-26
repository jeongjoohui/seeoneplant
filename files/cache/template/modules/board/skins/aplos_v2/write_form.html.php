<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2','_config.html') ?>
<div class="board-wrapper">
	<div class="absc article-write rs">
		<form action="./" method="post" onsubmit="return procFilter(this, window.insert)" class="write-form"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="content" value="<?php if($__Context->oDocument->getContentText()){;
echo $__Context->oDocument->getContentText();
}else{;
echo htmlspecialchars($__Context->mi->writeform_default_content);
} ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
			<div class="wf-section wfs-option">
				<h3 class="wf-section-title"><?php echo $lang->setting ?></h3>
				<?php if($__Context->grant->manager){ ?>
					<input type='text' name="title_color" id="title_color"<?php if($__Context->oDocument->get('title_color')!='N'){ ?> value="<?php echo $__Context->oDocument->get('title_color') ?>"<?php } ?> />
				<?php } ?>
				<span class="ab-checkbox">
					<?php if($__Context->grant->manager){ ?><input type="checkbox" name="is_notice" value="Y"<?php if($__Context->oDocument->isNotice()){ ?> checked="checked"<?php } ?> id="is_notice" /><?php } ?>
					<?php if($__Context->grant->manager){ ?><label for="is_notice" class="ab-btn"><?php echo $lang->notice ?></label><?php } ?>
				</span>
				<?php if($__Context->grant->manager){ ?><span class="ab-checkbox">
					<span style="display: inline-block;"><input type="checkbox" name="title_bold" id="title_bold" value="Y"<?php if($__Context->oDocument->get('title_bold')=='Y'){ ?> checked="checked"<?php } ?> />
					<label for="title_bold" class="ab-btn"><?php echo $lang->title_bold ?></label></span>
				</span><?php } ?>
				<span class="ab-checkbox">
					<input type="checkbox" name="comment_status" value="ALLOW"<?php if($__Context->oDocument->allowComment()){ ?> checked="checked"<?php } ?> id="comment_status" />
					<label for="comment_status" class="ab-btn"><?php echo $lang->allow_comment ?></label>
				</span>
				<span class="ab-checkbox">
					<input type="checkbox" name="allow_trackback" value="Y"<?php if($__Context->oDocument->allowTrackback()){ ?> checked="checked"<?php } ?> id="allow_trackback" />
					<label for="allow_trackback" class="ab-btn"><?php echo $lang->allow_trackback ?></label>
				</span>
				<?php if($__Context->is_logged){ ?><span class="ab-checkbox">
					<input type="checkbox" name="notify_message" value="Y"<?php if($__Context->oDocument->useNotify()){ ?> checked="checked"<?php } ?> id="notify_message" />
					<label for="notify_message" class="ab-btn"><?php echo $lang->notify ?></label>
				</span><?php } ?>
				<?php if(is_array($__Context->status_list)){ ?>
					<?php if($__Context->status_list)foreach($__Context->status_list AS $__Context->key=>$__Context->value){ ?>
					<?php if($__Context->mi->writeform_secret == ''){ ?><span class="ab-checkbox">
						<input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>" <?php if($__Context->oDocument->get('status') == $__Context->key || ($__Context->key == 'PUBLIC' && !$__Context->document_srl)){ ?>checked="checked"<?php } ?> />
						<label for="<?php echo $__Context->key ?>" class="ab-btn"><?php echo $__Context->value ?></label>
					</span><?php } ?>
					<?php if($__Context->mi->writeform_secret == 'y'){ ?><span class="ab-checkbox">
						<input type="radio" name="status" value="<?php echo $__Context->key ?>" id="<?php echo $__Context->key ?>" <?php if($__Context->oDocument->get('status') == $__Context->key || ($__Context->key == 'SECRET' && !$__Context->document_srl)){ ?>checked="checked"<?php } ?> />
						<label for="<?php echo $__Context->key ?>" class="ab-btn"><?php echo $__Context->value ?></label>
					</span><?php } ?>
					<?php } ?>
				<?php } ?>
			</div>
			<div class="wf-section wfs-header clear">
				<?php if($__Context->module_info->use_category=='Y'){ ?><div class="wfsh-category">
					<h3 class="wf-section-title"><?php echo $lang->category ?></h3>
					<select id="category" name="category_srl">
						<?php if($__Context->mi->writeform_category_default==''){ ?>
							<option value=""><?php echo $lang->no_category ?></option>
						<?php } ?>
						<?php if($__Context->category_list)foreach($__Context->category_list as $__Context->val){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?> selected="selected"<?php } ?>>
							<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?>
						</option><?php } ?>
					</select>
				</div><?php } ?>
				<div class="wfsh-title"<?php if($__Context->module_info->use_category!='Y'){ ?> style="width: 100%;"<?php } ?>>
					<h3 class="wf-section-title"><?php echo $lang->title ?></h3>
					<?php if($__Context->oDocument->getTitleText()){ ?><input type="text" name="title" class="wf-input" title="<?php echo $lang->title ?>"<?php if(defined('RX_VERSION')){ ?> value="<?php echo escape($__Context->oDocument->getTitleText(), false) ?>"<?php }else{ ?> value="<?php echo htmlspecialchars($__Context->oDocument->getTitleText()) ?>"<?php } ?>style="<?php if($__Context->oDocument->get('title_color')!='N'){ ?>color: #<?php echo $__Context->oDocument->get('title_color') ?>;<?php };
if($__Context->oDocument->get('title_bold')=='Y'){ ?>font-weight: bold;<?php } ?>" /><?php } ?>
					<?php if(!$__Context->oDocument->getTitleText()){ ?><input type="text" name="title" class="wf-input" title="<?php echo $lang->title ?>" placeholder="<?php echo $lang->input_title ?>" /><?php } ?>
				</div>
			</div>
			<?php if(count($__Context->extra_keys)){ ?><div class="wf-section wfs-ex"<?php if(($__Context->mi->writeform_exvar == 'admin' && !$__Context->grant->manager)){ ?> style="display: none;"<?php } ?>>
				<h3 class="wf-section-title"><?php echo $lang->input_extra_form ?></h3>
				<?php if(count($__Context->extra_keys)){ ?><table class="wfs-ex-table" summary="Extra Form">
				<?php if($__Context->extra_keys)foreach($__Context->extra_keys as $__Context->key=>$__Context->val){ ?>
					<tr>
						<th scope="row"><?php if($__Context->val->is_required=='Y'){ ?>*<?php } ?> <?php echo $__Context->val->name ?></th>
						<td><?php echo $__Context->val->getFormHTML() ?></td>
					</tr>
				<?php } ?>
				</table><?php } ?>
				<span class="is_req align-right ab-point-color">* : <?php echo $lang->is_required ?></span>
			</div><?php } ?>
			<div class="wf-section wfs-editor">
				<h3 class="wf-section-title" style="margin-bottom: 0.5em;"><?php echo $lang->content ?></h3>
				<?php echo $__Context->oDocument->getEditor() ?>
			</div>
			<div class="wf-section wfs-tags">
				<h3 class="wf-section-title"><?php echo $lang->tag ?></h3>
				<input type="text" name="tags" id="tags" value="<?php echo htmlspecialchars($__Context->oDocument->get('tags')) ?>" class="wf-input" title="Tag" placeholder="<?php echo $lang->tag ?> [<?php echo $lang->about_tag ?>]" />
			</div>
			<?php if(!$__Context->is_logged){ ?><div class="wf-section wfs-author clear">
				<span class="non-member-input">
					<span><?php echo $lang->writer ?></span><input type="text" name="nick_name" id="userName" class="iText userName"  value="<?php echo htmlspecialchars($__Context->oDocument->get('nick_name')) ?>" placeholder="<?php echo $lang->writer ?>" />
				</span><span class="non-member-input">
					<span><?php echo $lang->password ?></span><input type="password" name="password" id="userPw" class="iText userPw" placeholder="<?php echo $lang->password ?>" />
				</span>
			</div><?php } ?>
			<div>
				<?php if($__Context->oDocument->get('document_srl') && $__Context->module_info->update_log == 'Y'){ ?><span class="item">
					<label for="reason_update" class="iLabel"><?php echo $lang->reason_update ?></label>
					<input type="text" name="reason_update" id="reason_update" value="" class="iText" style="width:300px" title="reason update" />
				</span><?php } ?>
			</div>
			<?php if($__Context->captcha){ ?><div class="wf-section write_captcha">
				<?php echo $__Context->captcha ?>
			</div><?php } ?>
			<div class="wf-section wfs-tool clear">
				<?php if(!$__Context->oDocument->isExists() || $__Context->oDocument->get('status') == 'TEMP'){ ?>
					<?php if($__Context->is_logged){ ?><button class="ab-btn" type="button" onclick="doDocumentSave(this);"><?php echo $lang->cmd_temp_save ?></button><?php } ?>
					<?php if($__Context->is_logged){ ?><button class="ab-btn" type="button" onclick="doDocumentLoad(this);"><?php echo $lang->cmd_load ?></button><?php } ?>
				<?php } ?>
				<button id="cmd_reg" type="submit" class="ab-btn<?php if($__Context->mi->write_btn_style == 'border'){ ?> ab-point-bacolor ab-border-1 ab-point-color<?php }elseif($__Context->mi->write_btn_style == 'fill'){ ?> ab-point-bgcolor ab-text-white<?php }else{ ?> ab-point-color<?php } ?> fr" onclick="correctColorValue()"><?php echo $lang->cmd_registration ?></button>
			</div>
		</form>
	</div>
</div>
<style>
	@media screen and (max-width: 768px) {
		.xefu-dropzone-message{
			display: none !important;
		}
		.upload_info {
			display: inline-block !important;
			margin: 0 !important;
			margin-left: 5px !important;
		}
	}
</style>
<!--#Meta:modules/board/skins/aplos_v2/assets/js/spectrum.js--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/js/spectrum.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script type="text/javascript">
var $ = jQuery;
$("#title_color").spectrum({
  showPaletteOnly: true,
	preferredFormat: "hex",
  togglePaletteOnly: true,
  togglePaletteMoreText: '<?php echo $lang->color_picker_more ?>',
  togglePaletteLessText: '<?php echo $lang->color_picker_less ?>',
  chooseText: "<?php echo $lang->color_picker_choose ?>",
  cancelText: "<?php echo $lang->color_picker_cancel ?>",
	hideAfterPaletteSelect:true,
	showInput: true,
	containerClassName: 'title-color-picker-modal',
	replacerClassName: 'title-color-picker',
  move: function (color) {
      updateColor(color);
  },
  show: function () {
  },
  beforeShow: function () {
  },
  hide: function (color) {
      updateColor(color);
  },
  palette: [
		["#000000", "#434343", "#666666", "#999999", "#b7b7b7", "#cccccc", "#d9d9d9", "#efefef", "#f3f3f3", "#ffffff"],
    ["#980000", "#ff0000", "#ff9900", "#ffff00", "#00ff00", "#00ffff", "#4a86e8", "#0000ff", "#9900ff", "#ff00ff"],
    ["#e6b8af", "#f4cccc", "#fce5cd", "#fff2cc", "#d9ead3", "#d9ead3", "#c9daf8", "#cfe2f3", "#d9d2e9", "#ead1dc"],
    ["#dd7e6b", "#ea9999", "#f9cb9c", "#ffe599", "#b6d7a8", "#a2c4c9", "#a4c2f4", "#9fc5e8", "#b4a7d6", "#d5a6bd"],
    ["#cc4125", "#e06666", "#f6b26b", "#ffd966", "#93c47d", "#76a5af", "#6d9eeb", "#6fa8dc", "#8e7cc3", "#c27ba0"],
    ["#a61c00", "#cc0000", "#e69138", "#f1c232", "#6aa84f", "#45818e", "#3c78d8", "#3d85c6", "#674ea7", "#a64d79"],
    ["#85200c", "#990000", "#b45f06", "#bf9000", "#38761d", "#134f5c", "#1155cc", "#0b5394", "#351c75", "#741b47"],
    ["#5b0f00", "#660000", "#783f04", "#7f6000", "#274e13", "#0c343d", "#1c4587", "#073763", "#20124d", "#4c1130"]
	],
});
function updateColor(color) {
    var hexColor = "transparent";
    if(color) {
        hexColor = color.toHexString();
    }
		$("input[name=title]").css("color", hexColor);
		hexColor = hexColor.replace('#','');
		$("#title_color").val(hexColor);
}
$("input[name=title_bold]").change(function(){
	if ($(this).is(":checked")) {
	  $("input[name=title]").css("font-weight", "bold");
	} else {
	  $("input[name=title]").css("font-weight", "normal");
	}
});
<?php if($__Context->mi->writeform_category_disable=='y' && !$__Context->grant->manager){ ?>
	$(".wfsh-category option").not(":selected").remove();
<?php } ?>
</script>
