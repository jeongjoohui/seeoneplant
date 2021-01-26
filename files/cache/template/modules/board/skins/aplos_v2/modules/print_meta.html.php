<?php if(!defined("__XE__"))exit;
if($__Context->list_config)foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
	<?php if($__Context->val->type=='nick_name' && $__Context->val->idx==-1){ ?><span><?php if($__Context->mi->webzine_meta_profile == ''){ ?><div class="wz-item-profile" style="background-image: url('<?php if($__Context->document->getProfileImage()){;
echo $__Context->document->getProfileImage();
}else{;
echo $__Context->profileNo;
} ?>');"></div><?php } ?> <a style="z-index: 2; position: relative;" href="#popup_menu_area" class="member_<?php echo $__Context->document->get('member_srl') ?> author" onclick="return false"><?php echo $__Context->document->getNickName() ?></a></span><?php } ?>
	<?php if($__Context->val->type=='user_id' && $__Context->val->idx==-1){ ?><span class="author"><?php if($__Context->mi->webzine_meta_profile == ''){ ?><div class="wz-item-profile" style="background-image: url('<?php echo $__Context->document->getProfileImage() ?>');"></div><?php } ?> <?php echo $__Context->document->getUserID() ?></span><?php } ?>
	<?php if($__Context->val->type=='user_name' && $__Context->val->idx==-1){ ?><span class="author"><?php echo $__Context->document->getUserName() ?></span><?php } ?>
	<?php if($__Context->val->type=='regdate' && $__Context->val->idx==-1){ ?><span><span class="date"><?php if($__Context->mi->list_datetype == ''){;
echo getTimeGap($__Context->document->get('regdate'), $__Context->dateType);
}else{;
if((int)($__Context->document->getRegdate('YmdHis')>date('YmdHis', time()-24*60*60))){;
echo $__Context->document->getRegdate("H:i");
}else{;
echo $__Context->document->getRegdate($__Context->dateType);
};
} ?></span></span><?php } ?>
	<?php if($__Context->val->type=='last_update' && $__Context->val->idx==-1){ ?><span><span class="date"><?php echo zdate($__Context->document->get('last_update'),$__Context->dateType) ?></span></span><?php } ?>
	<?php if($__Context->val->type=='readed_count' && $__Context->val->idx==-1){ ?><span class="view"><span><?php echo $lang->view ?> </span><span><?php echo $__Context->document->get('readed_count') ?></span></span><?php } ?>
	<?php if($__Context->val->type=='voted_count' && $__Context->val->idx==-1 && $__Context->document->get('voted_count') > 0){ ?><span class="votes"><span><?php echo $lang->voted_count ?> </span><span><?php echo $__Context->document->get('voted_count') ?></span></span><?php } ?>
	<?php if($__Context->val->type=='blamed_count' && $__Context->val->idx==-1 && $__Context->document->get('blamed_count') > 0){ ?><span class="blames"><span><?php echo $lang->blamed_count ?> </span><span><?php echo $__Context->document->get('blamed_count') ?></span></span><?php } ?>
<?php } ?>
<?php if($__Context->mi->webzine_exval_oloi == 'y'){ ?>
<div class="exval align-left">
<?php } ?>
<?php if($__Context->list_config)foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?>
	<?php if($__Context->val->idx!=-1 && $__Context->document->getExtraValueHTML($__Context->val->idx)){ ?>
		<span class="exval"><span><?php echo $__Context->val->name ?> </span><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_exval.html') ?></span>
	<?php } ?>
<?php } ?>
<?php if($__Context->mi->webzine_exval_oloi == 'y'){ ?>
</div>
<?php } ?>