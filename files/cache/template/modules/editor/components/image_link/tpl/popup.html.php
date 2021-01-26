<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/image_link/tpl/popup.js--><?php $__tmp=array('modules/editor/components/image_link/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/components/image_link/tpl/popup.css--><?php $__tmp=array('modules/editor/components/image_link/tpl/popup.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang('modules/editor/components/image_link/lang'); ?>
<?php Context::addMetaTag('viewport', 'width=device-width', FALSE); ?>
<div class="x_modal-header">
	<h1><?php echo $__Context->component_info->title ?></h1>
</div>
<div class="x_modal-body">
	<form action="./" method="get" onSubmit="return false" id="fo" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<div class="x_control-group">
			<label for="image_url" class="x_control-label"><?php echo $lang->image_url ?></label>
			<div class="x_controls">
				<input type="text" id="image_url" value="<?php echo url_decode($__Context->manual_url) ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->image_scale ?></label>
			<div class="x_controls">
				<input type="number" id="width" value="0" size="4" style="width:50px" /> px
				<input type="number" id="height" value="0" size="4" style="width:50px" /> px
				<button type="button" id="get_scale" class="x_btn"><?php echo $lang->cmd_get_scale ?></button>
			</div>
		</div>
		<div class="x_control-group">
			<label for="link_url" class="x_control-label">URL</label>
			<div class="x_controls">
				<input type="url" id="link_url" value=""/>
			</div>
		</div>
		<div class="x_control-group">
			<label for="open_window" class="x_control-label"><?php echo $lang->urllink_open_window ?></label>
			<div class="x_controls">
				<input type="checkbox" id="open_window" value="Y" /> <?php echo $lang->about_url_link_open_window ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="image_alt" class="x_control-label"><?php echo $lang->image_alt ?></label>
			<div class="x_controls">
				<input type="text" id="image_alt" value=""/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $lang->image_align ?></label>
			<div class="x_controls">
				<label for="align_normal">
					<input type="radio" name="align" value="" id="align_normal" checked="checked"/>
					<img src="/modules/editor/components/image_link/tpl/images/align_normal.gif" alt="<?php echo $lang->image_align_normal ?>" />
					<?php echo $lang->image_align_normal ?>
				</label>
				<label for="align_left">
					<input type="radio" name="align" value="left" id="align_left" />
					<img src="/modules/editor/components/image_link/tpl/images/align_left.gif" alt="<?php echo $lang->image_align_left ?>" />
					<?php echo $lang->image_align_left ?>
				</label>
				<label for="align_middle">
					<input type="radio" name="align" value="middle" id="align_middle" />
					<img src="/modules/editor/components/image_link/tpl/images/align_middle.gif" alt="<?php echo $lang->image_align_middle ?>" />
					<?php echo $lang->image_align_middle ?>
				</label>
				<label for="align_right">
					<input type="radio" name="align" value="right" id="align_right" />
					<img src="/modules/editor/components/image_link/tpl/images/align_right.gif" alt="<?php echo $lang->image_align_right ?>" />
					<?php echo $lang->image_align_right ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label for="image_border" class="x_control-label"><?php echo $lang->image_border ?></label>
			<div class="x_controls">
				<input type="number" id="image_border" value="0" size="2" />px
			</div>
		</div>
		<div class="x_control-group">
			<label for="image_margin" class="x_control-label"><?php echo $lang->image_margin ?></label>
			<div class="x_controls">
				<input type="number" id="image_margin" value="0" size="2" />px
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="button" id="btn_insert" class="x_btn x_btn-primary"><?php echo $lang->cmd_insert ?></button>
				<a class="x_btn" href="<?php echo getUrl('','module','editor','act','dispEditorComponentInfo','component_name',$__Context->component_info->component_name) ?>" target="_blank" onclick="window.open(this.href,'ComponentInfo','width=10,height=10');return false;"><?php echo $lang->about_component ?></a>
			</div>
		</div>
	</form>
</div>
