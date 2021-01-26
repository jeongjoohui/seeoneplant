<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2','_config.html') ?>
<div class="board-wrapper">
  <div class="absc ab-message rs">
    <h1><?php echo $lang->document_delete_confirm ?></h1>
		<form id="del_doc" action="./" method="get" onsubmit="return procFilter(this, delete_document)" class="context_message"><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
			<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
			<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
			<div class="ab-message-tool">
				<button type="submit" class="ab-btn<?php if($__Context->mi->write_btn_style == 'border'){ ?> ab-point-bacolor ab-border-1 ab-point-color<?php }elseif($__Context->mi->write_btn_style == 'fill'){ ?> ab-point-bgcolor ab-text-white<?php }else{ ?> ab-point-color<?php } ?>"><?php echo $lang->cmd_delete ?></button>
				<button type="button" class="ab-btn" onclick="history.back()"><?php echo $lang->cmd_cancel ?></button>
			</div>
		</form>
  </div>
	<?php if($__Context->oDocument->isExists()){ ?><div class="absc article">
		<!-- 게시글 헤더 -->
		<div class="article-header rs">
			<?php if($__Context->oDocument->get('category_srl')){ ?><p class="ah-category">
				<a href="<?php echo getUrl('category',$__Context->oDocument->get('category_srl'), 'document_srl', '') ?>"<?php if($__Context->category_list[$__Context->oDocument->get('category_srl')]->color!='transparent'){ ?> style="color:<?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->color ?>"<?php } ?>><?php echo $__Context->category_list[$__Context->oDocument->get('category_srl')]->title ?></a></span>
			</p><?php } ?>
			<h1 class="ah-title">
				<a href="<?php echo $__Context->oDocument->getPermanentUrl() ?>"><?php echo $__Context->oDocument->getTitle() ?></a>
			</h1>
			<p class="ah-meta">
				<span class="ahm-author"><?php if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() <= 0 && $__Context->oDocument->isExistsHomepage()){ ?><a href="<?php echo $__Context->oDocument->getHomepageUrl() ?>" onclick="window.open(this.href);return false;" class=""><?php echo $__Context->oDocument->getNickName() ?></a><?php };
if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() <= 0 && !$__Context->oDocument->isExistsHomepage()){;
echo $__Context->oDocument->getNickName();
};
if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() > 0){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->oDocument->get('member_srl') ?> author" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?></span><span><?php echo getTimeGap($__Context->oDocument->get('regdate'), "Y.m.d H:i") ?></span><span><?php echo $lang->readed_count ?> <span class="ab-point-color"><?php echo $__Context->oDocument->get('readed_count') ?></span></span><span style="display:inline-block;"><?php echo $lang->comment ?> <span class="ab-point-color"><?php echo $__Context->oDocument->getCommentcount() ?></span></span><?php if($__Context->mi->read_ip == 'a' || ($__Context->grant->manager && $__Context->mi->read_ip == 'y') || ($__Context->grant->manager && $__Context->mi->read_ip == 'h')){ ?> <?php echo $lang->ipaddress ?> <span class="ab-point-color"><?php echo $__Context->oDocument->get('ipaddress') ?></span><?php };
if($__Context->mi->read_ip == 'h' && !$__Context->grant->manager){ ?> <?php echo $lang->ipaddress ?> <span class="ab-point-color"><?php  $__Context->temp_ip=explode('.',$__Context->oDocument->get('ipaddress'));
echo $__Context->temp_ip[0] ?>.<?php if($__Context->oDocument->get('member_srl')!='0'){ ?>***<?php }else{;
echo $__Context->temp_ip[1];
} ?>.<?php echo $__Context->temp_ip[2] ?>.<?php echo $__Context->temp_ip[3] ?>.</span><?php };
if($__Context->mi->read_this_post=='y'){ ?><span><a class="hidden-mobile document_<?php echo $__Context->oDocument->document_srl ?> action" href="#popup_menu_area" onclick="return false"><?php echo $lang->cmd_document_do ?></a><a class="hidden-desktop document_<?php echo $__Context->oDocument->document_srl ?> action" href="#popup_menu_area" onclick="return false">…</a></span><?php } ?>
			</p>
		</div>
		<!-- /게시글 헤더 -->
		<!-- 게시글 본문 -->
		<div class="article-content">
			<?php if($__Context->oDocument->isSecret() && !$__Context->oDocument->isGranted()){ ?>
			<form action="./" method="get" onsubmit="return procFilter(this, input_password)" class=""><input type="hidden" name="error_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false); ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
				<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
				<input type="hidden" name="document_srl" value="<?php echo $__Context->oDocument->document_srl ?>" />
				<h1 class="align-center"><?php echo $lang->msg_is_secret ?></h1>
				<div class="align-center">
					<input class="align-center" style="line-height: 1.5em" type="password" name="password" id="cpw" class="iText" placeholder="<?php echo $lang->password ?>" />
				</div>
				</p>
			</form>
			<?php }else{ ?>
			<div class="article-extra-value rs">
				<table>
					<?php if($__Context->oDocument->getExtraVars())foreach($__Context->oDocument->getExtraVars() as $__Context->key=>$__Context->val){;
if($__Context->val->getValueHTML()){ ?><tr>
						<th scope="row"><?php echo $__Context->val->name ?></th>
						<td><?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_exval.html') ?></td>
					</tr><?php }} ?>
				</table>
			</div>
			<article><?php echo $__Context->oDocument->getContent(false) ?></article>
			<?php } ?>
		</div>
		<!-- /게시글 본문 -->
		<!-- 게시글 푸터 -->
		<?php  $__Context->tag_list = $__Context->oDocument->get('tag_list')  ?>
		<?php if($__Context->tag_list){ ?><div class="article-tags rs">
			<?php if($__Context->tag_list)foreach($__Context->tag_list as $__Context->tag){ ?>
				<a href="<?php echo getUrl('search_target','tag','search_keyword',$__Context->tag,'document_srl','') ?>" class="tag ab-point-bgcolor" rel="tag"><?php echo htmlspecialchars($__Context->tag) ?></a>
			<?php } ?>
		</div><?php } ?>
		<!-- 글쓴이 서명란 -->
		<div class="article-signature rs<?php if($__Context->mi->signature_center == 'y'){ ?> align-center<?php } ?>">
			<div class="profile">
				<div cond="" style="background-image: url('<?php if($__Context->oDocument->getProfileImage()){;
echo $__Context->oDocument->getProfileImage();
}else{;
echo $__Context->profileNo;
} ?>')" class="profile-image"></div><span class="profile-nickname"><?php if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() <= 0 && $__Context->oDocument->isExistsHomepage()){ ?><a href="<?php echo $__Context->oDocument->getHomepageUrl() ?>" onclick="window.open(this.href);return false;" class=""><?php echo $__Context->oDocument->getNickName() ?></a><?php };
if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() <= 0 && !$__Context->oDocument->isExistsHomepage()){;
echo $__Context->oDocument->getNickName() ?> (비회원)<?php };
if($__Context->module_info->display_author!='N' && $__Context->oDocument->getMemberSrl() > 0){ ?><a href="#popup_menu_area" class="member_<?php echo $__Context->oDocument->get('member_srl') ?> author" onclick="return false"><?php echo $__Context->oDocument->getNickName() ?></a><?php } ?>
			</div>
			<?php if($__Context->oDocument->getSignature()){ ?><div class="text"><?php echo $__Context->oDocument->getSignature() ?></div><?php } ?>
		</div>
		<!-- /글쓴이 서명란 -->
	</div><?php } ?>
</div>
