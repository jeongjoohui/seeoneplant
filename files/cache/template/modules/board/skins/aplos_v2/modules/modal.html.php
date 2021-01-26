<?php if(!defined("__XE__"))exit;
if($__Context->listStyle == 'download'){ ?><div class="remodal remodal-download" data-remodal-id="download">
	<header><?php echo $lang->file_list ?> (<span class="count"></span>)</header>
	<a data-remodal-action="close" class="remodal-close"></a>
	<p class="desc">reload modal window</p>
	<div class='download-area clear'>
	</div>
</div><?php } ?>
<div class="remodal remodal-search" data-remodal-id="search">
	<header><?php echo $lang->cmd_search ?></header>
	<a data-remodal-action="close" class="remodal-close"></a>
	<form action="<?php echo getUrl() ?>" method="get" onsubmit="return procFilter(this, search)" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
			<input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
			<div class="search-form">
				<select name="search_target">
					<?php if($__Context->search_option)foreach($__Context->search_option as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
				</select>
				<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" placeholder="<?php echo $lang->input_keyword ?>" />
			</div>
		</form>
</div>
<?php if($__Context->oDocument->isExists() && $__Context->mi->share_article == ''){ ?><div class="remodal remodal-share" data-remodal-id="share">
	<header><?php echo $lang->ab_share_article ?></header>
	<a data-remodal-action="close" class="remodal-close"></a>
	<ul class="clear">
		<li>
			<img src="/modules/board/skins/aplos_v2/assets/images/share-facebook.png" />
			<p><?php echo $lang->ab_facebook ?></p>
			<a class="ab-link" onclick="sendSns('facebook','<?php echo $__Context->oDocument->getPermanentUrl() ?>');"></a>
		</li>
		<li>
			<img src="/modules/board/skins/aplos_v2/assets/images/share-twitter.png" />
			<p><?php echo $lang->ab_twitter ?></p>
			<a class="ab-link" onclick="sendSns('twitter','<?php echo $__Context->oDocument->getPermanentUrl() ?>');"></a>
		</li>
		<li>
			<img src="/modules/board/skins/aplos_v2/assets/images/share-googleplus.png" />
			<p><?php echo $lang->ab_googleplus ?></p>
			<a class="ab-link" onclick="sendSns('googleplus','<?php echo $__Context->oDocument->getPermanentUrl() ?>');"></a>
		</li>
		<li>
			<img src="/modules/board/skins/aplos_v2/assets/images/share-naver.png" />
			<p><?php echo $lang->ab_naver ?></p>
			<a class="ab-link" onclick="sendSns('naver','<?php echo $__Context->oDocument->getPermanentUrl() ?>');"></a>
		</li>
	</ul>
	<ul class="clear">
		<li>
			<img src="/modules/board/skins/aplos_v2/assets/images/share-naverband.png" />
			<p><?php echo $lang->ab_naverband ?></p>
			<a class="ab-link" onclick="sendSns('band','<?php echo $__Context->oDocument->getPermanentUrl() ?>');"></a>
		</li>
		<?php if($__Context->mi->share_article !='n' && $__Context->kakao_key != ''){ ?><li>
			<img src="/modules/board/skins/aplos_v2/assets/images/share-kakaostory.png" />
			<p><?php echo $lang->ab_kakaostory ?></p>
			<a class="ab-link" href="javascript:shareStory()"></a>
		</li><?php } ?>
		<?php if($__Context->mi->share_article !='n' && $__Context->kakao_key != ''){ ?><li>
			<img src="/modules/board/skins/aplos_v2/assets/images/share-kakaotalk.png" />
			<p><?php echo $lang->ab_kakaotalk ?></p>
			<a class="ab-link" href="javascript:sendLink()"></a>
		</li><?php } ?>
	</ul>
	<footer><input class="url-readonly rs" value="<?php echo $__Context->oDocument->getPermanentUrl() ?>" readonly><button class="ab-btn ab-btn-copy ab-copy-url" data-clipboard-text="<?php echo $__Context->oDocument->getPermanentUrl() ?>" onclick="return false;"><i class="far fa-copy"></i></button></footer>
</div><?php } ?>
<?php if($__Context->oDocument->isExists() && $__Context->mi->show_attachment == ''){ ?><div class="remodal remodal-download" data-remodal-id="attachment">
	<header><?php echo $lang->uploaded_file ?> (<?php echo $__Context->oDocument->get('uploaded_count') ?>)</header>
	<a data-remodal-action="close" class="remodal-close"></a>
	<div class="download-area">
		<?php if($__Context->oDocument->getUploadedFiles())foreach($__Context->oDocument->getUploadedFiles() as $__Context->key=>$__Context->file){ ?><div class="download-item clear">
			<div class="download-icon"><i class="fas fa-download ab-point-color"></i></div>
			<div class="download-content ab-truncate"><?php echo $__Context->file->source_filename ?><br><span class="ab-text-muted ab-text-sm"><?php echo FileHandler::filesize($__Context->file->file_size) ?> / Download <?php echo number_format($__Context->file->download_count) ?></span></div>
			<a class="ab-link" href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" title="<?php echo $__Context->file->source_filename ?>"></a>
		</div><?php } ?>
	</div>
</div><?php } ?>
<?php if($__Context->oDocument->isExists() && $__Context->doc_config->use_vote_up == 'S'){ ?><div class="remodal remodal-vblist" data-remodal-id="voted_user">
	<header><?php echo $lang->cmd_document_vote_user ?> (<?php echo $__Context->oDocument->get('voted_count') ?>)</header>
	<a data-remodal-action="close" class="remodal-close"></a>
	<div class="content-area rs">
		<?php if($__Context->output_voted->data)foreach($__Context->output_voted->data as $__Context->key=>$__Context->val){ ?><div class="vb-member">
<?php 
$__Context->profile_info = $__Context->oMemberModel->getProfileImage($__Context->val->member_srl);
 ?>
			<div style="background-image: url('<?php if($__Context->profile_info->src){;
echo $__Context->profile_info->src;
}else{ ?>../assets/images/image-no-profile.svg<?php } ?>');" class="profile"></div>
			<a href="#popup_menu_area" class="nickname member_<?php echo $__Context->val->member_srl ?>" onclick="return false"><?php echo $__Context->val->nick_name ?></a>
		</div><?php } ?>
	</div>
</div><?php } ?>
<?php if($__Context->oDocument->isExists() && $__Context->doc_config->use_vote_down == 'S'){ ?><div class="remodal remodal-vblist" data-remodal-id="blamed_user">
	<header><?php echo $lang->cmd_document_blame_user ?> (<?php echo $__Context->oDocument->get('blamed_count') ?>)</header>
	<a data-remodal-action="close" class="remodal-close"></a>
	<div class="content-area rs">
		<?php if($__Context->output_blamed->data)foreach($__Context->output_blamed->data as $__Context->key=>$__Context->val){ ?><div class="vb-member">
<?php 
$__Context->profile_info = $__Context->oMemberModel->getProfileImage($__Context->val->member_srl);
 ?>
			<div style="background-image: url('<?php if($__Context->profile_info->src){;
echo $__Context->profile_info->src;
}else{ ?>../assets/images/image-no-profile.svg<?php } ?>');" class="profile"></div>
			<a href="#popup_menu_area" class="nickname member_<?php echo $__Context->val->member_srl ?>" onclick="return false"><?php echo $__Context->val->nick_name ?></a>
		</div><?php } ?>
	</div>
</div><?php } ?>