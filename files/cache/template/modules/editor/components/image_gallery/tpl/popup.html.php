<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/image_gallery/tpl/popup.js--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/components/image_gallery/tpl/popup.css--><?php $__tmp=array('modules/editor/components/image_gallery/tpl/popup.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang('modules/editor/components/image_gallery/lang'); ?>
<?php Context::addMetaTag('viewport', 'width=device-width', FALSE); ?>
<div class="x_modal-header">
	<h1><?php echo $__Context->component_info->title ?></h1>
</div>
<div class="x_modal-body">
	<form action="./" method="get" onSubmit="return false" id="fo" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="editor_sequence" value="<?php echo $__Context->editor_sequence ?>" />
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $lang->width ?></label>
			<div class="x_controls">
				<input type="number" size="3" id="width" value="400" />px
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $lang->gallery_style ?></label>
			<div class="x_controls">
				<select id="gallery_style">
					<option value="slide"><?php echo $lang->gallery_slide_style ?></option>
					<option value="list"><?php echo $lang->gallery_list_style ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $lang->gallery_slide_align ?></label>
			<div class="x_controls">
			<select id="gallery_align">
				<option value="center"><?php echo $lang->gallery_slide_center ?></option>
				<option value="left"><?php echo $lang->gallery_slide_left ?></option>
				<option value="right"><?php echo $lang->gallery_slide_right ?></option>
			</select>
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $lang->gallery_border_thickness ?></label>
			<div class="x_controls">
				<input type="number" size="1" id="border_thickness" value="0" />px
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $lang->gallery_border_color ?></label>
			<div class="x_controls">
				<input type="text" id="border_color_input" class="rx-spectrum" size="7" value="#000000" />
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $lang->gallery_bg_color ?></label>
			<div class="x_controls">
				<input type="text" id="bg_color_input" class="rx-spectrum"  size="7" value="#FFFFFF" />
			</div>
		</div>
		<div class="x_control-group">
			<label for="" class="x_control-label"><?php echo $lang->image_list ?></label>
			<div class="x_controls">
				<select id="image_list" size="6" multiple="true" class="image_list">
				</select>
				<p><?php echo $lang->about_image_list ?></p>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="button" class="x_btn x_btn-primary" onclick="insertSlideShow()"><?php echo $lang->cmd_insert ?></button>
				<a class="x_btn" href="<?php echo getUrl('','module','editor','act','dispEditorComponentInfo','component_name',$__Context->component_info->component_name) ?>" target="_blank" onclick="window.open(this.href,'ComponentInfo','width=10,height=10');return false;"><?php echo $lang->about_component ?></a>
			</div>
		</div>
	</form>
</div>
<!--#JSPLUGIN:spectrum--><?php Context::loadJavascriptPlugin('spectrum'); ?>
