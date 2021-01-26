<?php if(!defined("__XE__"))exit;
$__Context->oModuleModel = getModel('module');
	$__Context->oMemberModel = getModel('member');
	if ($__Context->mi->p_nonmember_blind == 'article' || $__Context->mi->p_nonmember_blind == 'both'):
		if($__Context->mi->p_nonmember_blind_time_article == '')
			$__Context->bt = '15';
		else
			$__Context->bt = $__Context->mi->p_nonmember_blind_time_article;
		if($__Context->mi->p_nonmember_blind_time_unit_article == ''):
			$__Context->unit = '60';
			$__Context->unit_p = 'M';
		elseif($__Context->mi->p_nonmember_blind_time_unit_article == 'h'):
			$__Context->unit = '3600';
			$__Context->unit_p = 'H';
		elseif($__Context->mi->p_nonmember_blind_time_unit_article == 'd'):
			$__Context->unit = '86400';
			$__Context->unit_p = 'D';
		endif;
		$__Context->dateNow = new DateTime(date('YmdHi'));
		$__Context->dateArticleCan = new DateTime($__Context->oDocument->getRegdate('YmdHi'));
		if ($__Context->mi->p_nonmember_blind_time_unit_article != 'd')
			$__Context->dateTemp = "PT" . $__Context->bt . $__Context->unit_p;
		else
			$__Context->dateTemp = "P" . $__Context->bt . $__Context->unit_p;
		$__Context->interval = new DateInterval($__Context->dateTemp);
		$__Context->dateArticleCan->add($__Context->interval);
		$__Context->dateArticleRem = $__Context->dateArticleCan->diff($__Context->dateNow);
		if ($__Context->dateArticleRem->invert == 0)
			$__Context->nonmemberArticleShow = true;
		else
			$__Context->nonmemberArticleShow = false;
	endif;
 ?>
<div class="absc article">
	<!-- 게시글 헤더 -->
	<div class="article-header rs <?php echo $__Context->mi->header_align ?>">
		<?php if($__Context->mi->article_category == ''){ ?>
			<?php if($__Context->oDocument->get('category_srl')){;
if($__Context->mi->quickchange_category == '' || ( $__Context->mi->quickchange_category == 'y' && !$__Context->grant->manager )){ ?><p class="ah-category">
				<a href="<?php echo getUrl('category',$__Context->oDocument->get('category_srl'), 'document_srl', '') ?>"<?php if($__Context->category_list[$__Context->oDocument->get('category_srl')]->color!='transparent'){ ?> style="color:<?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->color ?>"<?php } ?>><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></a></span>
			</p><?php }} ?>
			<?php if($__Context->mi->quickchange_category == 'y' && $__Context->grant->manager){ ?><form action="./" method="post" id="quickChangeCategory" class="ah-category"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="act" value="procBoardInsertDocument" />
				<input type="hidden" name="subAct" value="updateCategory" />
				<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>">
				<select name="category_srl" class="category" onChange="document.getElementById('quickChangeCategory').submit()">
					<?php if($__Context->category_list)foreach($__Context->category_list as $__Context->val){ ?><option<?php if(!$__Context->val->grant){ ?> disabled="disabled"<?php } ?> value="<?php echo $__Context->val->category_srl ?>"<?php if($__Context->val->grant&&$__Context->val->selected||$__Context->val->category_srl==$__Context->oDocument->get('category_srl')){ ?> selected="selected"<?php } ?>>
						<?php echo str_repeat("&nbsp;&nbsp;",$__Context->val->depth) ?> <?php echo $__Context->val->title ?>
					</option><?php } ?>
				</select>
			</form><?php } ?>
		<?php } ?>
		<h1 class="ah-title">
			<a href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getTitle() ?></a>
		</h1>
		<?php if($__Context->mi->show_meta == ''){ ?><p class="ah-meta">
			<span class="ahm-author"><?php if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() <= 0 && $__Context->oDocument->isExistsHomepage()){ ?><a href="<?php echo $__Context->oDocument->getHomepageUrl() ?>" onclick="window.open(this.href);return false;" class=""><?php echo $__Context->oDocument->getNickName() ?></a><?php };
if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() <= 0 && !$__Context->oDocument->isExistsHomepage()){;
echo $__Context->oDocument->getNickName();
};
if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() > 0){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->oDocument->get('member_srl') ?> author" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?></span><span><?php echo getTimeGap($__Context->oDocument->get('regdate'), "Y.m.d H:i") ?></span><span><?php echo $lang->readed_count ?> <span class="ab-point-color"><?php echo $__Context->oDocument->get('readed_count') ?></span></span><?php if($__Context->oDocument->get('voted_count') > 0){ ?><span><?php echo $lang->voted_count ?> <span class="ab-point-color"><?php echo $__Context->oDocument->get('voted_count') ?></span></span><?php } ?><span style="display:inline-block;"><a<?php if($__Context->oDocument->getCommentcount() > 0){ ?> href="#comment"<?php } ?>><?php echo $lang->comment ?> <span class="ab-point-color"><?php echo $__Context->oDocument->getCommentcount() ?></span></a></span><?php if($__Context->mi->show_ipaddr == 'all' || ($__Context->grant->manager && $__Context->mi->show_ipaddr == 'admin')){ ?><span> <?php echo $lang->ab_ipaddress ?> <span class="ab-point-color"><?php  $__Context->temp_ip=explode('.',$__Context->oDocument->get('ipaddress'));
echo $__Context->temp_ip[0] ?>.<?php if(!$__Context->grant->manager){ ?>***<?php }else{;
echo $__Context->temp_ip[1];
} ?>.<?php echo $__Context->temp_ip[2] ?>.<?php echo $__Context->temp_ip[3] ?></span></span><?php };
if($__Context->mi->read_this_post=='y'){ ?><span><a class="hidden-mobile document_<?php echo $__Context->oDocument->document_srl ?> action" href="#popup_menu_area" onclick="return false"><?php echo $lang->cmd_document_do ?></a><a class="hidden-desktop document_<?php echo $__Context->oDocument->document_srl ?> action" href="#popup_menu_area" onclick="return false">…</a></span><?php } ?>
		</p><?php } ?>
	</div>
	<!-- /게시글 헤더 -->
	<div class="article-tool rs header">
		<ul class="etc">
		<?php if($__Context->nonmemberArticleShow || ($__Context->is_logged && $__Context->mi->p_nonmember_blind == 'article') || ($__Context->is_logged && $__Context->mi->p_nonmember_blind == 'both') || $__Context->mi->p_nonmember_blind == ''){ ?>
			<?php if($__Context->oDocument->hasUploadedFiles() && $__Context->mi->show_attachment == ''){ ?><li class="attachment">
				<a class="ab-btn" data-remodal-target="attachment"><i class="fas fa-paperclip fa-fw"></i> <?php echo $__Context->oDocument->get('uploaded_count') ?></a>
			</li><?php } ?>
		<?php } ?>
			<?php if($__Context->mi->show_help == ''){ ?><li class="do">
				<a class="ab-btn showPopover"><i class="fas fa-ellipsis-v fa-fw"></i></a>
				<!-- Do Popup -->
				<div class="ab-popover helper header">
					<ul>
						<li><span><?php echo $lang->font_size ?></span></li>
						<li class="font-size clear"><a id="fs_down" onclick="ab_fontSizeCtr('m');"><i class="fas fa-minus fa-xs fa-fw"></i></a><a id="fs_up" onclick="ab_fontSizeCtr('p');"><i class="fas fa-plus fa-xs fa-fw"></i></a></li>
						<?php if($__Context->is_logged){ ?><li><a href="javascript:doCallModuleAction('member','procMemberScrapDocument',<?php echo $__Context->document_srl ?>)" class="ab-btn"><?php echo $lang->cmd_scrap ?></a></li><?php } ?>
						<?php if($__Context->update_view && $__Context->mi->update_log == 'y'){ ?><li><a href="<?php echo getUrl('act','dispBoardUpdateLog','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $lang->update_log ?></a></li><?php } ?>
						<?php if($__Context->grant->manager){ ?><li><a class="ab-btn delete" href="<?php echo getUrl('act','dispBoardDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $lang->cmd_delete ?></a></li><?php } ?>
						<?php if($__Context->grant->manager){ ?><li><a class="ab-btn" href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $lang->cmd_modify ?></a></li><?php } ?>
					</ul>
				</div>
				<!--/Do Popup -->
			</li><?php } ?>
		</ul>
	</div>
<?php if( !$__Context->nonmemberArticleShow && ( (!$__Context->is_logged && $__Context->mi->p_nonmember_blind == 'article') || (!$__Context->is_logged && $__Context->mi->p_nonmember_blind == 'both') ) ){ ?>
<?php if($__Context->mi->p_nonmember_blind_article_summary){;
echo $__Context->oDocument->getSummary($__Context->mi->p_nonmember_blind_article_summary);
} ?>
<div class="alert-box blind-message-article" style="">
	<p><?php echo $__Context->dateArticleRem->format($lang->time_remain) ?></p>
</div>
<?php }else{ ?>
	<?php if($__Context->mi->button_custom1_article == 'both' || $__Context->mi->button_custom1_article == 'top'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','button_custom_1.html');
} ?>
	<!-- 게시글 본문 -->
	<div class="article-content">
		<?php if($__Context->oDocument->isSecret() && !$__Context->oDocument->isGranted()){ ?>
		<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class=""><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
			<h1 class="align-center"><?php echo $lang->msg_is_secret ?></h1>
			<div class="align-center">
				<input class="align-center" type="password" name="password" id="cpw" class="iText" placeholder="<?php echo $lang->password ?>" /><button type="submit" class="ab-btn"><?php echo $lang->cmd_input ?></button>
			</div>
			</p>
		</form>
		<?php }else{ ?>
		<?php if($__Context->mi->p_download_area != ''){ ?><div class="article-download-area clear">
			<?php if($__Context->oDocument->getUploadedFiles())foreach($__Context->oDocument->getUploadedFiles() as $__Context->key=>$__Context->file){ ?>
<?php 
	$__Context->ext = substr($__Context->file->source_filename, -4);
	$__Context->ext = strtolower($__Context->ext);
	if ($__Context->mi->p_download_jpg == '' && in_array($__Context->ext,array('.jpg','jpeg','.gif','.png')))
		$__Context->except = true;
	else
		$__Context->except = false;
 ?>
				<?php if(!$__Context->except){ ?><div class="download-item clear">
					<div class="download-icon"><i class="fas fa-download ab-point-color"></i></div>
					<div class="download-content ab-truncate"><?php echo $__Context->file->source_filename ?><br><span class="ab-text-muted ab-text-sm"><?php echo FileHandler::filesize($__Context->file->file_size) ?> / Download <?php echo number_format($__Context->file->download_count) ?></span></div>
					<a class="ab-link" href="<?php echo getUrl('');
echo $__Context->file->download_url ?>" title="<?php echo $__Context->file->source_filename ?>"></a>
				</div><?php } ?>
			<?php } ?>
		</div><?php } ?>
		<?php if($__Context->oDocument->isExtraVarsExists()){ ?><div class="article-extra-value rs">
			<?php  $__Context->evalCount = 0;  ?>
			<table>
				<?php if($__Context->oDocument->getExtraVars())foreach($__Context->oDocument->getExtraVars() as $__Context->key=>$__Context->val){;
if($__Context->val->getValueHTML()){ ?>
					<?php if($__Context->val->eid == $__Context->mi->button_custom1_link){ ?>
					<?php }elseif($__Context->val->eid == $__Context->mi->button_custom2_link){ ?>
					<?php }else{ ?>
						<tr>
							<?php  $__Context->evalCount++;  ?>
							<th scope="row"><?php echo $__Context->val->name ?></th>
							<td><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_exval.html') ?></td>
						</tr>
					<?php } ?>
				<?php }} ?>
			</table>
		</div><?php } ?>
		<article>
			<?php $__Context->content_ = $__Context->oDocument->getContent(false) ?>
			<?php if($__Context->module_info->autoreplace_use == 'y'){ ?>
				<?php 
				$__Context->pregs = explode("\n", $__Context->module_info->autoreplace_text);
				$__Context->items = array();
				foreach($__Context->pregs as $__Context->key=>$__Context->val)
				preg_match_all("/\"(.+)\"(?:\s*?),(?:\s*?)\"(.+)\"(?:\s+?|)/", $__Context->val, $__Context->items[$__Context->key]);
				foreach($__Context->items as $__Context->key=>$__Context->val)
				$__Context->content_ = preg_replace($__Context->val[1], $__Context->val[2], $__Context->content_);
				 ?>
				<?php echo $__Context->content_ ?>
			<?php }else{ ?>
				<?php echo $__Context->content_ ?>
			<?php } ?>
		</article>
		<?php } ?>
	</div>
	<!-- /게시글 본문 -->
	<?php if($__Context->mi->button_custom1_article == 'both' || $__Context->mi->button_custom1_article == 'bottom'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','button_custom_1.html');
} ?>
	<?php if($__Context->mi->voteblame != 'n' && $__Context->is_logged){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','voteblame.html');
} ?>
	<!-- 글쓴이 서명란 -->
	<?php if($__Context->mi->signature == ''){ ?><div class="article-signature rs<?php if($__Context->mi->signature_center == 'y'){ ?> align-center<?php } ?>">
		<div class="profile">
			<?php if($__Context->mi->signature_profile == ''){ ?><div style="background-image: url('<?php if($__Context->oDocument->getProfileImage()){;
echo $__Context->oDocument->getProfileImage();
}else{;
echo $__Context->profileNo;
} ?>')" class="profile-image"></div><?php } ?><span class="profile-nickname"><?php if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() <= 0 && $__Context->oDocument->isExistsHomepage()){ ?><a href="<?php echo $__Context->oDocument->getHomepageUrl() ?>" onclick="window.open(this.href);return false;" class=""><?php echo $__Context->oDocument->getNickName() ?></a><?php };
if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() <= 0 && !$__Context->oDocument->isExistsHomepage()){;
echo $__Context->oDocument->getNickName() ?> (비회원)<?php };
if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() > 0){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->oDocument->get('member_srl') ?> author" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?>
		</div>
		<?php if($__Context->oDocument->getSignature()){ ?><div class="text"><?php echo $__Context->oDocument->getSignature() ?></div><?php } ?>
	</div><?php } ?>
	<!-- /글쓴이 서명란 -->
<?php } ?>
	<?php if($__Context->mi->share_article_custom){ ?><div class="share-custom rs">
		<?php echo $__Context->mi->share_article_custom ?>
	</div><?php } ?>
	<!-- 게시글 푸터 -->
	<?php if($__Context->mi->show_tag == ''){ ?>
	<?php  $__Context->tag_list = $__Context->oDocument->get('tag_list')  ?>
	<?php if($__Context->tag_list){ ?><div class="article-tags rs">
		<?php if($__Context->tag_list)foreach($__Context->tag_list as $__Context->tag){ ?>
			<a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag,'document_srl','') ?>" class="tag ab-point-bgcolor" rel="tag"><?php echo htmlspecialchars($__Context->tag) ?></a>
		<?php } ?>
	</div><?php } ?>
	<?php } ?>
	<div class="article-tool clear rs" style="height: 2em;">
		<?php if($__Context->doc_config->use_vote_up != 'N' || $__Context->doc_config->use_vote_down != 'N' || $__Context->mi->share_article != 'n'){ ?><ul class="vs">
	<?php 
	if ($__Context->doc_config->use_vote_up == 'S'):
		$__Context->args = new stdClass();
		$__Context->args->more_point = 1;
		$__Context->args->document_srl = $__Context->document_srl;
		$__Context->output_voted = executeQueryArray('document.getVotedMemberList',$__Context->args);
	endif;
	if ($__Context->doc_config->use_vote_down == 'S'):
		$__Context->args = new stdClass();
		$__Context->args->below_point = 1;
		$__Context->args->document_srl = $__Context->document_srl;
		$__Context->output_blamed = executeQueryArray('document.getVotedMemberList',$__Context->args);
	endif;
	 ?>
			<?php if($__Context->doc_config->use_vote_up != 'N'){ ?><li class="vb-list">
	<?php if($__Context->doc_config->use_vote_up == 'S'){ ?>
				<a class="ab-btn" data-remodal-target="voted_user"><i class="fas fa-heart fa-fw"></i> <span class=""><?php echo $__Context->oDocument->get('voted_count') ?></a>
	<?php }elseif($__Context->doc_config->use_vote_up == 'Y' || $__Context->doc_config->use_vote_up == ''){ ?>
				<a class="ab-btn" style="cursor: default;"><i class="fas fa-heart fa-fw"></i> <span class=""><?php echo $__Context->oDocument->get('voted_count') ?></span></a>
	<?php } ?>
			</li><?php } ?>
			<?php if($__Context->doc_config->use_vote_down != 'N'){ ?><li class="vb-list">
	<?php if($__Context->doc_config->use_vote_down == 'S'){ ?>
				<a class="ab-btn" data-remodal-target="blamed_user"><i class="far fa-heart fa-fw"></i> <span class=""><?php echo $__Context->oDocument->get('blamed_count') ?></span></a>
	<?php }elseif($__Context->doc_config->use_vote_down == 'Y' || $__Context->doc_config->use_vote_down == ''){ ?>
				<a class="ab-btn" style="cursor: default;"><i class="far fa-heart fa-fw"></i> <span class=""><?php echo $__Context->oDocument->get('blamed_count') ?></span></a>
	<?php } ?>
			</li><?php } ?>
			<?php if($__Context->mi->share_article == ''){ ?><li class="share">
				<a class="ab-btn" data-remodal-target="share"><i class="fas fa-share-alt fa-fw"></i></a>
			</li><?php } ?>
		</ul><?php } ?>
		<ul class="etc">
			<?php if($__Context->nonmemberArticleShow || ($__Context->is_logged && $__Context->mi->p_nonmember_blind == 'article') || ($__Context->is_logged && $__Context->mi->p_nonmember_blind == 'both') || $__Context->mi->p_nonmember_blind == '' ){ ?>
			<?php if($__Context->oDocument->hasUploadedFiles() && $__Context->mi->show_attachment == ''){ ?><li class="attachment">
				<a class="ab-btn" data-remodal-target="attachment"><i class="fas fa-paperclip fa-fw"></i> <?php echo $__Context->oDocument->get('uploaded_count') ?></a>
			</li><?php } ?>
			<?php } ?>
			<?php if($__Context->mi->show_help == ''){ ?><li class="do">
				<a class="ab-btn showPopover"><i class="fas fa-ellipsis-v fa-fw"></i></a>
				<!-- Do Popup -->
				<div class="ab-popover helper tool-group">
					<ul>
						<li><span><?php echo $lang->font_size ?></span></li>
						<li class="font-size clear"><a id="fs_down" onclick="ab_fontSizeCtr('m');"><i class="fas fa-minus fa-xs fa-fw"></i></a><a id="fs_up" onclick="ab_fontSizeCtr('p');"><i class="fas fa-plus fa-xs fa-fw"></i></a></li>
						<?php if($__Context->is_logged){ ?><li><a href="javascript:doCallModuleAction('member','procMemberScrapDocument',<?php echo $__Context->document_srl ?>)" class="ab-btn"><?php echo $lang->cmd_scrap ?></a></li><?php } ?>
						<?php if($__Context->update_view && $__Context->mi->update_log == 'y'){ ?><li><a href="<?php echo getUrl('act','dispBoardUpdateLog','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $lang->update_log ?></a></li><?php } ?>
					</ul>
				</div>
				<!--/Do Popup -->
			</li><?php } ?>
		</ul>
	</div>
	<?php if($__Context->mi->article_navi=='' && !$__Context->oDocument->isNotice()){ ?><div class="article-navi rs clear">
		<?php if($__Context->document_list)foreach($__Context->document_list as $__Context->no=>$__Context->document){;
if($__Context->document_srl==$__Context->document->document_srl){ ?>
			
			<?php if(!$__Context->search_keyword){ ?>
				<?php if((!$__Context->document_list[$__Context->no+1]->document_srl && $__Context->page!=1) || (!$__Context->document_list[$__Context->no-1]->document_srl && $__Context->page!=$__Context->total_page)){ ?>
				<?php 
					$__Context->oModuleModel = &getModel('module');
					$__Context->module_srl_temp = $__Context->oModuleModel->getModuleSrlByMid($__Context->mid);
					if(is_array($__Context->module_srl_temp)) $__Context->module_srl = $__Context->module_srl_temp[0];
					else $__Context->module_srl = $__Context->module_srl_temp;
					$__Context->args = new stdClass();
					$__Context->args->module_srl = $__Context->module_srl;
					$__Context->args->category_srl = $__Context->category;
					$__Context->args->list_count = $__Context->module_info->list_count;
					$__Context->args->sort_index = $__Context->module_info->order_target;
					if($__Context->sort_index) $__Context->args->sort_index = $__Context->sort_index;
					$__Context->args->order_type = $__Context->module_info->order_type;
					if($__Context->sort_index) $__Context->args->order_type = $__Context->order_type;
					if($__Context->module_info->except_notice=='Y') $__Context->prevnext_except_notice=1;
				 ?>
				<?php if(!$__Context->document_list[$__Context->no+1]->document_srl && $__Context->page!=1){ ?>
					<?php 
						$__Context->is_prevnext='P';
						$__Context->args->page = $__Context->page-1;
						$__Context->prevnext_list = executeQueryArray('document.getDocumentList',$__Context->args);
						$__Context->prevnext_data = array_reverse($__Context->prevnext_list->data);
					 ?>
				<?php }else if(!$__Context->document_list[$__Context->no-1]->document_srl && $__Context->page!=$__Context->total_page){ ?>
					<?php 
						$__Context->is_prevnext='N';
						$__Context->args->page = $__Context->page+1;
						$__Context->prevnext_list = executeQueryArray('document.getDocumentList',$__Context->args);
						$__Context->prevnext_data = $__Context->prevnext_list->data;
					 ?>
				<?php } ?>
				<?php if($__Context->prevnext_data)foreach($__Context->prevnext_data as $__Context->no2 => $__Context->document2){ ?>
					<?php if(!$__Context->prevnext_except_notice || ($__Context->prevnext_except_notice && $__Context->document2->is_notice!='Y')){ ?>
						<?php 
							$__Context->prevnext_doc = $__Context->document2->document_srl;
							$__Context->prevnext_title = $__Context->document2->title;
							$__Context->prevnext_date = $__Context->document2->regdate;
							$__Context->prevnext_nick = $__Context->document2->nick_name;
							break;
						 ?>
					<?php } ?>
				<?php } ?>
				<?php } ?>
			<?php } ?>
			<?php if($__Context->document_list[$__Context->no+1]->document_srl){ ?><a class="" href="<?php echo getUrl('document_srl',$__Context->document_list[$__Context->no+1]->document_srl) ?>">
				<i class="fas fa-caret-up fa-fw"></i> <?php echo $__Context->document_list[$__Context->no+1]->getTitle($__Context->mi->prev_next_cut_size);
if($__Context->document_list[$__Context->no+1]->getNickName()){ ?><small style="font-weight: inherit;"> (by <?php echo $__Context->document_list[$__Context->no+1]->getNickName() ?>)</small><?php } ?>
			</a><?php } ?>
			
			<?php if($__Context->is_prevnext){ ?>
			<?php if($__Context->is_prevnext=='P'){ ?>
				<a class="" href="<?php echo getUrl('document_srl',$__Context->prevnext_doc,'page','','cpage','') ?>">
					<i class="fa fa-caret-up fa-fw"></i> <?php echo $__Context->prevnext_title;
if($__Context->prevnext_nick){ ?><small style="font-weight: inherit;"> (by <?php echo $__Context->prevnext_nick ?>)</small><?php } ?>
			<?php }else{ ?>
				<a class="" href="<?php echo getUrl('document_srl',$__Context->prevnext_doc,'page','','cpage','') ?>">
					<i class="fa fa-caret-down fa-fw"></i> <?php echo $__Context->prevnext_title;
if($__Context->prevnext_nick){ ?><small style="font-weight: inherit;"> (by <?php echo $__Context->prevnext_nick ?>)</small><?php } ?>
			<?php } ?>
				</a>
			<?php } ?>
			<?php if($__Context->document_list[$__Context->no-1]->document_srl){ ?><a class="" href="<?php echo getUrl('document_srl',$__Context->document_list[$__Context->no-1]->document_srl) ?>">
				<i class="fa fa-caret-down fa-fw"></i> <?php echo $__Context->document_list[$__Context->no-1]->getTitle($__Context->mi->prev_next_cut_size);
if($__Context->document_list[$__Context->no-1]->getNickName()){ ?><small style="font-weight: inherit;"> (by <?php echo $__Context->document_list[$__Context->no-1]->getNickName() ?>)</small><?php } ?>
			</a><?php } ?>
			<?php  break; ?>
		<?php }} ?>
	</div><?php } ?>
	<?php if($__Context->mi->article_navi!='' || $__Context->oDocument->isNotice()){ ?><div class="article-navi rs clear"></div><?php } ?>
	<!-- 게시글 툴버튼 -->
	<div class="article-tool-ex clear rs">
		<div class="fl">
			<a href="<?php echo getUrl('document_srl','') ?>" class="ab-btn"><?php echo $lang->cmd_list ?></a>
		</div>
		<?php if($__Context->oDocument->isEditable()){ ?><div class="fr">
			<a class="ab-btn ab-point-color" href="<?php echo getUrl('act','dispBoardWrite','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $lang->cmd_modify ?></a>
			<a class="ab-btn" href="<?php echo getUrl('act','dispBoardDelete','document_srl',$__Context->oDocument->document_srl,'comment_srl','') ?>"><?php echo $lang->cmd_delete ?></a>
		</div><?php } ?>
	</div>
	<!-- /게시글 툴버튼 -->
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','comment_list.html') ?>
<script>
	$(document).ready(function() {
		$('.ah-title span[style*="font-weight:bold"]').css('font-weight', '').wrap( '<strong></strong>');
		$('.article-navi span[style*="font-weight:bold"]').css('font-weight', '').wrap( '<strong></strong>');
		$('.ap_parser_title a').css('font-weight', 'inherit').wrap( '<strong></strong>');
        <?php if($__Context->evalCount == 0){ ?>
            if ($('.article-extra-value').length) {
                $('.article-extra-value').remove();
            }
        <?php } ?>
	});
	function ChangeCategory() {
		alert('@@');
	}
	$('#ChangeCategory').change(function() {
		var params = {
			document_srl : '<?php echo $__Context->oDocument->document_srl ?>',
			category_srl : $("#ChangeCategory option:selected").val()
		};
		exec_json('document.procDocumentCategoryUp', params, function() {
			location.reload();
		});
	});
</script>