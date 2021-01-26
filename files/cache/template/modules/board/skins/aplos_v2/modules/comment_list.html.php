<?php if(!defined("__XE__"))exit;
if($__Context->CommentWriteLoc != 'none'){ ?><div class="absc comments rs">
	<?php if($__Context->CommentWriteLoc == 'top'){ ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','comment_write.html') ?>
	<?php } ?>
	<?php if($__Context->oDocument->getCommentcount()){ ?><div class="comments-header" id="comment">
		<span><?php echo $lang->comment ?> <span><span class="ab-point-color"><?php echo $__Context->oDocument->getCommentcount() ?></span>
	</div><?php } ?>
	<?php if($__Context->oDocument->getCommentcount()){ ?><ul class="comments-list">
		<?php if($__Context->oDocument->getComments())foreach($__Context->oDocument->getComments() as $__Context->key=>$__Context->comment){ ?>
<?php 
	$__Context->oModuleModel = getModel('module');
	$__Context->cmt_config = $__Context->oModuleModel->getModulePartConfig('comment', $__Context->module_info->module_srl);
  if($__Context->comment->get('depth') == '0' || $__Context->comment->get('best_comment')=='Y')
    $__Context->comment_margin = '0em';
  else if($__Context->comment->get('depth') == '1')
    $__Context->comment_margin = '2em';
  else
    $__Context->comment_margin = '4em';
 ?>
		<li style="margin-left:<?php echo $__Context->comment_margin ?>" class="clear comment-item<?php if($__Context->comment->get('depth')){ ?> recomment<?php };
if($__Context->oDocument->get('member_srl') == $__Context->comment->get('member_srl')){ ?> my_comment<?php };
if($__Context->comment->get('best_comment')=='Y'){ ?> comment-best<?php } ?>" id="comment_<?php echo $__Context->comment->comment_srl;
if($__Context->comment->get('best_comment')=='Y'){ ?>_best<?php } ?>">
			<?php if($__Context->mi->comment_list_recomment_mark == '' && $__Context->comment->get('depth')){;
$__Context->oComment = &getModel('comment');$__Context->comment_parent = $__Context->oComment->getComment($__Context->comment->parent_srl);
if($__Context->comment->getNickName() != $__Context->comment_parent->getNickName()){ ?><div class="re-comment ab-point-bgcolor"><?php if($__Context->lang_type=='ko'){ ?><span><strong><?php echo $__Context->comment_parent->getNickName() ?></strong>님께</span><?php };
if($__Context->lang_type!='ko'){ ?><span>To. <?php echo $__Context->comment_parent->getNickName() ?></span><?php } ?></div><?php };
} ?>
			<div class="comment-header">
<?php 
	$__Context->cmt_deleted = false;
  $__Context->oMemberModel = &getModel('member');
	$__Context->member_info_doc = $__Context->oMemberModel->getMemberInfoByMemberSrl(abs($__Context->oDocument->get('member_srl')));
	if ($__Context->comment->status == '1'):
		$__Context->cmt_profile_image = $__Context->comment->getProfileImage();
		if ($__Context->comment->member_srl != 0):
			if ($__Context->comment->member_srl == $__Context->member_info_doc->member_srl):
				$__Context->mycmt = true;
			else:
				$__Context->mycmt = false;
			endif;
		else:
			if($__Context->comment->get('ipaddress') == $__Context->oDocument->get('ipaddress')):
				$__Context->mycmt = true;
			else:
				$__Context->mycmt = false;
			endif;
		endif;
		$__Context->cmt_member_srl = $__Context->comment->member_srl;
	elseif ($__Context->comment->status == '7' || $__Context->comment->status == '8'):
		$__Context->member_info_cmt = $__Context->oMemberModel->getMemberInfoByUserId($__Context->comment->getUserId());
		$__Context->cmt_profile_image = $__Context->member_info_cmt->profile_image->src;
		if ($__Context->member_info_cmt->member_srl != 0):
			if ($__Context->member_info_cmt->member_srl == $__Context->member_info_doc->member_srl):
				$__Context->mycmt = true;
			else:
				$__Context->mycmt = false;
			endif;
		else:
			if($__Context->comment->get('ipaddress') == $__Context->oDocument->get('ipaddress')):
				$__Context->mycmt = true;
			else:
				$__Context->mycmt = false;
			endif;
		endif;
		$__Context->cmt_member_srl = $__Context->member_info_cmt->member_srl;
		$__Context->cmt_deleted = true;
	endif;
 ?>
      			<div class="comment-author">
					<?php if($__Context->mi->comment_list_profile == ''){ ?><div class="comment-profile" style="background-image: url('<?php if($__Context->cmt_profile_image){;
echo $__Context->cmt_profile_image;
}else{;
echo $__Context->profileNo;
} ?>');"></div><?php } ?><a style="z-index: 2; position: relative;"<?php if($__Context->cmt_member_srl){ ?> href="#popup_menu_area"<?php } ?> class="<?php if($__Context->cmt_member_srl){ ?>member_<?php echo $__Context->cmt_member_srl ?> <?php } ?>comment-author"<?php if($__Context->comment->get('member_srl')){ ?> onclick="return false"<?php } ?>><?php echo $__Context->comment->getNickName();
if(!$__Context->cmt_member_srl){ ?> (<?php echo $lang->non_member ?>)<?php } ?></a><?php if($__Context->mi->read_postauthor_mark == '' && $__Context->mycmt){ ?><span class="my-comment ab-point-bacolor ab-point-color"><?php echo $lang->post_author ?></span><?php };
if($__Context->comment->get('best_comment')=='Y'){ ?><span class="comment-best-mark"><?php echo $lang->ab_comment_best ?></span><?php };
if($__Context->comment->isSecret()){ ?><span class="comment-secret"><i class="fas fa-lock"></i></span><?php } ?>
				</div>
				<span class="comment-date"><span><?php echo getTimeGap($__Context->comment->get('regdate'), "Y.n.j H:i") ?></span></span>
				<span class="comment-item-tools<?php if(!Mobile::isMobileCheckByAgent()){ ?> desktop-hover<?php } ?>"><?php if($__Context->comment->get('best_comment')!='Y'){;
if($__Context->oDocument->allowComment()){ ?><a class="comment-item-tool" href="<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>"<?php if($__Context->mi->recomment_write_type==''){ ?> onclick="reComment(<?php echo $__Context->comment->get('document_srl') ?>,<?php echo $__Context->comment->get('comment_srl') ?>,'<?php echo getUrl('act','dispBoardReplyComment','comment_srl',$__Context->comment->comment_srl) ?>','<?php echo $__Context->comment->getNickName() ?>','<?php echo $__Context->lang_type ?>');return false;"<?php } ?>><?php echo $lang->cmd_reply ?></a><?php };
if(!$__Context->cmt_deleted && ($__Context->comment->isGranted()||!$__Context->comment->get('member_srl'))){ ?><a class="comment-item-tool" href="<?php echo getUrl('act','dispBoardModifyComment','comment_srl',$__Context->comment->comment_srl) ?>"><?php echo $lang->cmd_modify ?></a><?php };
if(!$__Context->cmt_deleted && ($__Context->comment->isGranted() || !$__Context->comment->get('member_srl'))){ ?><a class="comment-item-tool" href="<?php echo getUrl('act','dispBoardDeleteComment','comment_srl',$__Context->comment->comment_srl) ?>"><?php echo $lang->cmd_delete ?></a><?php };
if($__Context->comment->hasUploadedFiles()){ ?><a onclick="jQuery('#comment_file_<?php echo $__Context->comment->comment_srl ?>').toggle();" class="comment-item-tool ab-visible"><?php echo $lang->uploaded_file ?> <span class="ab-point-color"><?php echo $__Context->comment->get('uploaded_count') ?></span></a><?php };
if(defined('RX_VERSION')){;
if($__Context->cmt_config->use_vote_up != 'N'){;
if($__Context->comment->getVote() > 0){ ?><a<?php if($__Context->logged_info->member_srl != $__Context->comment->get('member_srl')){ ?> href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('comment','procCommentVoteUpCancel','<?php echo $__Context->comment->comment_srl ?>');return false;"<?php };
} ?> class="comment-item-tool ab-visible"><?php echo $lang->cmd_vote ?> <span class="ab-point-color"><?php echo $__Context->comment->get('voted_count') ?></span></a><?php };
if($__Context->comment->getVote() === false || $__Context->comment->getVote() < 0){ ?><a<?php if($__Context->logged_info->member_srl != $__Context->comment->get('member_srl')){ ?> href="#"<?php if($__Context->is_logged){ ?> onclick="if (confirm('<?php echo $lang->confirm_cmt_vote ?>')) doCallModuleAction('comment','procCommentVoteUp','<?php echo $__Context->comment->comment_srl ?>');return false;"<?php };
} ?> class="comment-item-tool ab-visible"><?php echo $lang->cmd_vote ?> <span class="ab-point-color"><?php echo $__Context->comment->get('voted_count') ?></span></a><?php };
};
if($__Context->cmt_config->use_vote_down != 'N'){;
if($__Context->comment->getVote() === false || $__Context->comment->getVote() > 0){ ?><a<?php if($__Context->logged_info->member_srl != $__Context->comment->get('member_srl')){ ?> href="#"<?php if($__Context->is_logged){ ?> onclick="if (confirm('<?php echo $lang->confirm_cmt_blame ?>')) doCallModuleAction('comment','procCommentVoteDown','<?php echo $__Context->comment->comment_srl ?>');return false;"<?php };
} ?> class="comment-item-tool ab-visible"><?php echo $lang->cmd_vote_down ?> <span class="ab-point-color"><?php echo $__Context->comment->get('blamed_count') ?></span></a><?php };
if($__Context->comment->getVote() < 0){ ?><a<?php if($__Context->logged_info->member_srl != $__Context->comment->get('member_srl')){ ?> href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('comment','procCommentVoteDownCancel','<?php echo $__Context->comment->comment_srl ?>');return false;"<?php };
} ?> class="comment-item-tool ab-visible"><?php echo $lang->cmd_vote_down ?> <span class="ab-point-color"><?php echo $__Context->comment->get('blamed_count') ?></span></a><?php };
};
}else{;
if($__Context->cmt_config->use_vote_up != 'N'){ ?><a href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('comment','procCommentVoteUp','<?php echo $__Context->comment->comment_srl ?>');return false"<?php } ?> title="<?php echo $lang->cmd_vote ?>" class="comment-item-tool ab-visible"><?php echo $lang->cmd_vote ?> <span class="ab-point-color"><?php echo $__Context->comment->get('voted_count')?$__Context->comment->get('voted_count'):0 ?></span></a><?php };
if($__Context->cmt_config->use_vote_down != 'N'){ ?><a href="#"<?php if($__Context->is_logged){ ?> onclick="doCallModuleAction('comment','procCommentVoteDown','<?php echo $__Context->comment->comment_srl ?>');return false"<?php } ?> title="<?php echo $lang->cmd_vote_down ?>" class="comment-item-tool ab-visible"><?php echo $lang->cmd_vote_down ?> <span class="ab-point-color"><?php echo abs($__Context->comment->get('blamed_count')?$__Context->comment->get('blamed_count'):0) ?></span></a><?php };
};
} ?></span>
				<?php if($__Context->comment->get('best_comment')!='Y'){ ?><span class="comment-this"><?php if($__Context->is_logged){ ?><a class="comment-item-tool comment_<?php echo $__Context->comment->comment_srl ?> ab-visible" href="#popup_menu_area" onclick="return false"><i class="fas fa-ellipsis-h fa-fw"></i></a><?php } ?></span><?php } ?>
      </div>
			<div class="comment-body">
				<?php if($__Context->comment->hasUploadedFiles()){ ?><ul class="comment-file" id="comment_file_<?php echo $__Context->comment->comment_srl ?>" style="display: none;">
					<?php if($__Context->comment->getUploadedFiles())foreach($__Context->comment->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><li><a href="<?php echo getUrl('');
echo $__Context->file->download_url ?>"><?php echo $__Context->file->source_filename ?> [<?php echo FileHandler::filesize($__Context->file->file_size) ?>/<i class="fa fa-download" aria-hidden="true"></i> <?php echo number_format($__Context->file->download_count) ?>]</a></li><?php } ?>
				</ul><?php } ?>
	<?php if(!$__Context->cmt_deleted && !$__Context->comment->isAccessible()){ ?>
				<form action="./" method="get" onsubmit="return procFilter(this, input_password)"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
					<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
					<input type="hidden" name="document_srl" value="<?php echo $__Context->comment->get('document_srl') ?>" />
					<input type="hidden" name="comment_srl" value="<?php echo $__Context->comment->get('comment_srl') ?>" />
					<h3 class="align-center" style="padding: 1em 0;"><?php echo $lang->secret_comment ?></h3>
					<div class="align-center" style="padding:0;">
						<input style="width: 8em; height: calc(2em + 1px);" type="password" id="cpw_<?php echo $__Context->comment->comment_srl ?>" name="password" class="itx" placeholder="<?php echo $lang->password ?>" /><button style="width: 3em;" type="submit" class="ab-btn"><?php echo $lang->cmd_input ?></button>
					</div>
				</form>
	<?php }else{ ?>
				<?php if($__Context->mi->comment_list_recomment_mark == 'inline' && $__Context->comment->get('depth')){;
$__Context->oComment = getModel('comment');$__Context->comment_parent = $__Context->oComment->getComment($__Context->comment->parent_srl);
if($__Context->comment->getNickName() != $__Context->comment_parent->getNickName()){ ?><div class="re-comment ab-point-bgcolor" style="float: left; margin-bottom: 0; margin-right: 0.5em;"><span style="line-height: 160%;">@<?php echo $__Context->comment_parent->getNickName() ?></span></div><?php };
} ?>
				<?php if($__Context->cmt_deleted){;
if($__Context->comment->status == '7'){;
echo $lang->comment_deleted;
}elseif($__Context->comment->status == '8'){;
echo $lang->comment_deleted_by_admin;
};
} ?>
				<?php if(!$__Context->cmt_deleted){;
echo $__Context->comment->getContent(false);
} ?>
	<?php } ?>
			</div>
			<?php if($__Context->comment->get('best_comment')=='Y'){ ?><a class="ab-link" href="#comment_<?php echo $__Context->comment->comment_srl ?>"></a><?php } ?>
		</li>
		<?php } ?>
	</ul><?php } ?>
	<!-- Pagination -->
	<?php if($__Context->oDocument->comment_page_navigation){ ?><div id="cp_bottom" class="absc pgnt cpage">
		<a<?php if($__Context->cpage!=1){ ?> href="<?php echo getUrl('cpage',1) ?>#comment"<?php } ?> class="pagination-arrow<?php if($__Context->cpage==1){ ?> disabled<?php } ?>"><?php echo $lang->first_page ?></a>
		<?php while($__Context->page_no=$__Context->oDocument->comment_page_navigation->getNextPage()){ ?>
			<?php if($__Context->cpage==$__Context->page_no){ ?><strong class="pagination-num"><?php echo $__Context->page_no ?></strong><?php } ?>
			<?php if($__Context->cpage!=$__Context->page_no){ ?><a class="pagination-num" href="<?php echo getUrl('cpage',$__Context->page_no) ?>#comment"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<a<?php if($__Context->cpage!=$__Context->oDocument->comment_page_navigation->last_page){ ?> href="<?php echo getUrl('cpage',$__Context->oDocument->comment_page_navigation->last_page) ?>#comment"<?php } ?> class="pagination-arrow<?php if($__Context->cpage==$__Context->oDocument->comment_page_navigation->last_page){ ?> disabled<?php } ?>"><?php echo $lang->last_page ?></a>
	</div><?php } ?>
	<!-- /Pagination -->
	<?php if($__Context->CommentWriteLoc == 'bottom'){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','comment_write.html') ?>
	<?php } ?>
</div><?php } ?>
