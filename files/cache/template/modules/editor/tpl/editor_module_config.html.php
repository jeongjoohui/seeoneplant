<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/editor/tpl/filter','insert_editor_module_config.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/editor/tpl/js/editor_module_config.js--><?php $__tmp=array('modules/editor/tpl/js/editor_module_config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="post" class="section"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="act" value="procEditorInsertModuleConfig" />
	<input type="hidden" name="module" value="editor" />
	<input type="hidden" name="target_module_srl" value="<?php echo $__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/editor/addition_setup/1" />
    <h1><?php echo $lang->editor ?></h1>
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<tr>
				<th scope="col" style="width:160px">&nbsp;</th>
				<th scope="col"><?php echo $lang->document ?></th>
				<th scope="col"><?php echo $lang->comment ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $lang->default_editor_settings ?></th>
				<td colspan="2">
					<label for="default_editor_settings" class="x_inline">
						<input type="checkbox" value="Y" id="default_editor_settings" name="default_editor_settings"<?php if($__Context->editor_config->default_editor_settings!=='N'){ ?> checked="checked"<?php } ?> />
						<?php echo $lang->about_default_editor_settings ?>
					</label>
				</td>
			</tr>
			<tr class="editor_skin">
				<th scope="row" style="text-align:right"><?php echo $lang->editor_skin ?></th>
				<td>
					<select name="editor_skin" onchange="getEditorSkinColorList(this.value, null, 'document')">
						<?php if($__Context->editor_skin_list)foreach($__Context->editor_skin_list as $__Context->editor){ ?><option value="<?php echo $__Context->editor ?>"<?php if($__Context->editor==$__Context->editor_config->editor_skin){ ?> selected="selected"<?php } ?>><?php echo $__Context->editor ?></option><?php } ?>
					</select>
					<br/>
					<select name="sel_editor_colorset" id="sel_editor_colorset"<?php if(!count($__Context->editor_colorset_list)){ ?> data-display="none"<?php } ?>>
						<?php if($__Context->editor_colorset_list)foreach($__Context->editor_colorset_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->name ?>"<?php if($__Context->editor_config->sel_editor_colorset == $__Context->val->name){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
					</select>
				</td>
				<td>
					<select name="comment_editor_skin" onchange="getEditorSkinColorList(this.value, null, 'comment')">
						<?php if($__Context->editor_skin_list)foreach($__Context->editor_skin_list as $__Context->editor){ ?><option value="<?php echo $__Context->editor ?>"<?php if($__Context->editor==$__Context->editor_config->comment_editor_skin){ ?> selected="selected"<?php } ?>><?php echo $__Context->editor ?></option><?php } ?>
					</select>
					<br/>
					<select name="sel_comment_editor_colorset" id="sel_comment_editor_colorset"<?php if(!count($__Context->editor_comment_colorset_list)){ ?> data-display="none"<?php } ?>>
						<?php if($__Context->editor_comment_colorset_list)foreach($__Context->editor_comment_colorset_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->name ?>"<?php if($__Context->editor_config->sel_comment_editor_colorset == $__Context->val->name){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
					</select>
				</td>
			</tr>
			<tr class="editor_skin">
				<th scope="row" style="text-align:right"><?php echo $lang->editor_height ?></th>
				<td>
					<input type="number" min="0" name="editor_height" value="<?php echo $__Context->editor_config->editor_height ?>" /> px
				</td>
				<td>
					<input type="number" min="0" name="comment_editor_height" value="<?php echo $__Context->editor_config->comment_editor_height ?>" /> px
				</td>
			</tr>
			<tr class="editor_skin">
				<th scope="row" style="text-align:right"><label for="content_font"><?php echo $lang->content_font ?></label></th>
				<td colspan="2">
					<input type="text" name="content_font" id="content_font" value="<?php echo str_replace(array('"','\''),'',$__Context->editor_config->content_font) ?>" placeholder="Ex) Tahoma, Geneva, sans-serif" />
					<?php echo $lang->about_content_font ?>
				</td>
			</tr>
			<tr class="editor_skin">
				<th scope="row" style="text-align:right"><label for="content_font_size"><?php echo $lang->content_font_size ?></label></th>
				<td colspan="2"><input type="text" name="content_font_size" id="content_font_size" value="<?php echo $__Context->editor_config->content_font_size ?>" style="width:50px" /> <?php echo $lang->about_content_font_size ?></td>
			</tr>
			<tr class="editor_skin">
				<th scope="row" style="text-align:right"><?php echo $lang->enable_autosave ?></th>
				<td colspan="2">
					<label class="x_inline"><input type="radio" name="enable_autosave" value="Y" checked="checked"|cond="$__Context->editor_config->enable_autosave != 'N'" /> <?php echo $lang->cmd_yes ?></label>
					<label class="x_inline"><input type="radio" name="enable_autosave" value="N"<?php if($__Context->editor_config->enable_autosave == 'N'){ ?> checked="checked"<?php } ?> /> <?php echo $lang->cmd_no ?></label>
					<p class="x_help-inline"><?php echo $lang->about_enable_autosave ?></p>
				</td>
			</tr>
			<tr class="editor_skin">
				<th scope="row" style="text-align:right"><?php echo $lang->allow_html ?></th>
				<td colspan="2">
					<label class="x_inline"><input type="radio" name="allow_html" value="Y"<?php if($__Context->editor_config->allow_html != 'N'){ ?> checked="checked"<?php } ?> /> <?php echo $lang->cmd_yes ?></label>
					<label class="x_inline"><input type="radio" name="allow_html" value="N"<?php if($__Context->editor_config->allow_html == 'N'){ ?> checked="checked"<?php } ?> /> <?php echo $lang->cmd_no ?></label>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $lang->enable_html_grant ?></th>
				<td>
					<?php if($__Context->group_list)foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="enable_html_<?php echo $__Context->k ?>" class="x_inline"><input type="checkbox" name="enable_html_grant[]" value="<?php echo $__Context->k ?>" id="enable_html_<?php echo $__Context->k ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_html_grant)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->v->title ?></label><?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list)foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="enable_comment_html_<?php echo $__Context->k ?>" class="x_inline"><input type="checkbox" name="enable_comment_html_grant[]" value="<?php echo $__Context->k ?>" id="enable_comment_html_<?php echo $__Context->k ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_html_grant)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->v->title ?></label><?php } ?>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $lang->upload_file_grant ?></th>
				<td>
					<?php if($__Context->group_list)foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="fileupload_<?php echo $__Context->k ?>" class="x_inline"><input type="checkbox" name="upload_file_grant[]" value="<?php echo $__Context->k ?>" id="fileupload_<?php echo $__Context->k ?>"<?php if(in_array($__Context->k, $__Context->editor_config->upload_file_grant)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->v->title ?></label><?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list)foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="comment_fileupload_<?php echo $__Context->k ?>" class="x_inline"><input type="checkbox" name="comment_upload_file_grant[]" value="<?php echo $__Context->k ?>" id="comment_fileupload_<?php echo $__Context->k ?>"<?php if(in_array($__Context->k, $__Context->editor_config->comment_upload_file_grant)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->v->title ?></label><?php } ?>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $lang->enable_default_component_grant ?></th>
				<td>
					<?php if($__Context->group_list)foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="default_componen_<?php echo $__Context->k ?>" class="x_inline"><input type="checkbox" name="enable_default_component_grant[]" value="<?php echo $__Context->k ?>" id="default_componen_<?php echo $__Context->k ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_default_component_grant)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->v->title ?></label><?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list)foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="comment_default_component_<?php echo $__Context->k ?>" class="x_inline"><input type="checkbox" name="enable_comment_default_component_grant[]" value="<?php echo $__Context->k ?>" id="comment_default_component_<?php echo $__Context->k ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_default_component_grant)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->v->title ?></label><?php } ?>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $lang->enable_extra_component_grant ?></th>
				<td>
					<?php if($__Context->group_list)foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="componen_<?php echo $__Context->k ?>" class="x_inline"><input type="checkbox" name="enable_component_grant[]" value="<?php echo $__Context->k ?>" id="componen_<?php echo $__Context->k ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_component_grant)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->v->title ?></label><?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list)foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="comment_component_<?php echo $__Context->k ?>" class="x_inline"><input type="checkbox" name="enable_comment_component_grant[]" value="<?php echo $__Context->k ?>" id="comment_component_<?php echo $__Context->k ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_component_grant)){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->v->title ?></label><?php } ?>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="x_clearfix">
		<button class="x_btn x_btn-primary x_pull-right" type="submit"><?php echo $lang->cmd_save ?></button>
	</div>
</form>
<script>
jQuery(function($){
	var editor_skiin_module_cfg = $('tr.editor_skin');
	if($('#default_editor_settings').prop( 'checked' ))
	{
		editor_skiin_module_cfg.hide();
	}
	$('#default_editor_settings').change(function(){
		if($(this).prop( 'checked' )){
			editor_skiin_module_cfg.slideUp(200);
		} else {
			editor_skiin_module_cfg.slideDown(200);
		}
	});
});
</script>