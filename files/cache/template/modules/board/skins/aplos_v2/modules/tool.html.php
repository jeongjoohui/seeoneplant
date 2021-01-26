<?php if(!defined("__XE__"))exit;?><div class="fl">
	<a class="ab-btn" data-remodal-target="search"><?php echo $lang->cmd_search ?></a>
	<span class="ab-order-form">
		<a class="ab-btn showPopover"><?php echo $lang->order ?></a>
		<!-- Order Popup -->
			<div id="ab_order_form_<?php echo $__Context->toolLoc ?>" class="ab-popover order <?php echo $__Context->toolLoc ?>">
				<ul>
					<li><a href="<?php echo getUrl('sort_index','regdate','order_type',$__Context->order_type) ?>" class="ab-btn"><?php echo $lang->order_date ?></a></li>
					<li><a href="<?php echo getUrl('sort_index','readed_count','order_type',$__Context->order_type) ?>" class="ab-btn"><?php echo $lang->order_readed ?></a></li>
					<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1){ ?><li><a href="<?php echo getUrl('sort_index','voted_count','order_type',$__Context->order_type) ?>" class="ab-btn"><?php echo $lang->order_voted ?></a></li><?php } ?>
					<li><a href="<?php echo getUrl('sort_index','comment_count','order_type',$__Context->order_type) ?>" class="ab-btn"><?php echo $lang->order_comment ?></a></li>
				</ul>
			</div>
		<!--/Order Popup -->
	</span>
</div>
<?php if($__Context->listStyle != 'faq' || ($__Context->listStyle == 'faq' && $__Context->grant->manager )){ ?><div class="fr">
	<?php if($__Context->toolLoc == 'bottom' && $__Context->grant->manager){ ?><a href="<?php echo getUrl('','module','document','act','dispDocumentManageDocument') ?>" class="ab-btn" onclick="popopen(this.href,'manageDocument'); return false;"><?php echo $lang->cmd_manage_document ?></a><?php } ?>
	<?php if($__Context->toolLoc == 'top' && $__Context->grant->manager){ ?><a href="<?php echo getUrl('act','dispBoardAdminBoardInfo') ?>" class="ab-btn"><?php echo $lang->cmd_setup ?></a><?php } ?>
	<?php if($__Context->mi->write_btn_show == 'a' || ($__Context->mi->write_btn_show == '' && $__Context->grant->write_document)){ ?><a <?php if($__Context->mi->writeform_category_disable==''){ ?>href="<?php echo getUrl('act','dispBoardWrite','document_srl','') ?>"<?php }else{ ?>href="<?php echo getUrl('act','dispBoardWrite','category','','document_srl','') ?>"<?php } ?> class="ab-btn-write ab-btn<?php if($__Context->mi->write_btn_style == 'border'){ ?> ab-point-bacolor ab-border-1 ab-point-color<?php }elseif($__Context->mi->write_btn_style == 'fill'){ ?> ab-point-bgcolor ab-text-white<?php }else{ ?> ab-point-color<?php };
if(!$__Context->grant->write_document){ ?> ab-disabled<?php } ?>"<?php if(!$__Context->grant->write_document){ ?> onclick="alert('<?php echo $lang->msg_not_permitted ?>'); return false;"<?php } ?>><?php echo $lang->cmd_write ?></a><?php } ?>
</div><?php } ?>
