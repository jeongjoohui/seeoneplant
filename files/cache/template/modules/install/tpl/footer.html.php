<?php if(!defined("__XE__"))exit;?>	<ul id="language" class="enfont">
		<?php if($__Context->lang_supported)foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?><li>
			<?php if($__Context->lang_type==$__Context->key){ ?><i class="x_icon-ok-sign x_icon-white" title="Selected Language"></i><?php } ?>
			<?php if($__Context->lang_type!=$__Context->key){ ?><a href="<?php echo getUrl('l', $__Context->key) ?>"><?php echo $__Context->val ?></a><?php } ?>
			<?php if($__Context->lang_type==$__Context->key){ ?><strong><?php echo $__Context->val ?></strong><?php } ?>
		</li><?php } ?>
	</ul>
	<div id="footer">
		Rhymix is a fork of the <a href="https://www.xpressengine.com" target="_blank">XpressEngine</a> CMS<br />
		with additional patches by members of the <a href="https://xetown.com" target="_blank">XETOWN</a> community.<br />
		Please see our <a href="https://github.com/rhymix/rhymix" target="_blank">GitHub repository</a> for a full timeline of patches and their authors.
	</div>
</div>
