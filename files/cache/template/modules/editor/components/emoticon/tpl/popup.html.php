<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/editor/components/emoticon/tpl/popup.js--><?php $__tmp=array('modules/editor/components/emoticon/tpl/popup.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/components/emoticon/tpl/popup.less--><?php $__tmp=array('modules/editor/components/emoticon/tpl/popup.less','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::addMetaTag('viewport', 'width=device-width', FALSE); ?>
<script>
	var lang_success_added = '<?php echo $lang->success_added ?>';
</script>
<div class="x_modal-header">
	<h1><?php echo $__Context->component_info->title ?></h1>
</div>
<div class="x_modal-body">
	<div class="rx_tab">
		<ul class="rx_tab">
			<?php if($__Context->emoticon_list)foreach($__Context->emoticon_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->key=='Twemoji'){ ?> class="rx_active"<?php } ?>><a href="#" onclick="getEmoticons('<?php echo $__Context->key ?>')"><span><?php echo $__Context->val ?></span></a></li><?php } ?>
		</ul>
	</div>
	<div id="emoticons" style="min-height:1px"></div>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<a class="x_btn" href="<?php echo getUrl('','module','editor','act','dispEditorComponentInfo','component_name',$__Context->component_info->component_name) ?>" target="_blank" onclick="window.open(this.href,'ComponentInfo','width=10,height=10');return false;"><?php echo lang('editor.about_component') ?></a>
		</div>
	</div>
</div>
