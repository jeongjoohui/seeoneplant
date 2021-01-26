<?php if(!defined("__XE__"))exit;
if($__Context->notice_list){ ?><div class="ab-webzine">
	<?php if($__Context->notice_list)foreach($__Context->notice_list as $__Context->no=>$__Context->document){ ?><div class="wz-item notice<?php if($__Context->document_srl==$__Context->document->document_srl){ ?> active<?php } ?>">
	<?php 
		$__Context->oModuleModel = &getModel('module');
		$__Context->mi_temp = getModel('module')->getModuleInfoByDocumentSrl($__Context->document->document_srl);
		$__Context->grant_temp = $__Context->oModuleModel->getGrant($__Context->mi_temp, $__Context->logged_info);
	 ?>
		<a class="ab-link" href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"<?php if(!$__Context->grant_temp->view){ ?> onclick="alert('<?php echo $lang->msg_not_permitted ?>'); return false;"<?php } ?>></a>
		<?php if($__Context->grant->manager){ ?><input class="cart" id="cart_<?php echo $__Context->document->document_srl ?>" type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="cart_<?php echo $__Context->document->document_srl ?>" class="cart"><i class="far fa-check-circle"></i><i class="fas fa-check-circle"></i></label><?php } ?>
		<div class="wz-item-inner clear">
		<div class="wz-item-header">
			<?php if($__Context->document->get('hot_document')){ ?><span class="document-hot"><?php echo $lang->ab_document_hot ?></span><?php };
if($__Context->mi->webzine_category_style != 'n'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_category.html');
} ?><span class="title"><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->mi->list_title_cut) ?></a></span><?php if($__Context->document->getCommentCount() && $__Context->mi->webzine_title_comment == ''){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="commentNum ab-point-color" title="<?php echo $lang->comment ?>"><?php echo $__Context->document->getCommentCount() ?></a><?php };
if($__Context->showIcon){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','print_icon.html');
} ?></div>
			<?php if($__Context->showNoticeMeta){ ?><div class="wz-item-meta">
				<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','print_meta.html') ?>
			</div><?php } ?>
		</div>
	</div><?php } ?>
</div><?php } ?>
<?php if($__Context->document_list){ ?><div class="clear ab-webzine<?php if($__Context->listStyle == 'masonry'){ ?> masonry<?php } ?>">
	<?php if($__Context->listStyle == 'masonry' && $__Context->thumbType == 'ratio'){ ?><div class="ms-sizer"></div><?php } ?>
	<?php if($__Context->document_list)foreach($__Context->document_list as $__Context->no=>$__Context->document){ ?><div class="wz-item<?php if($__Context->document_srl==$__Context->document->document_srl){ ?> active<?php };
if($__Context->listStyle == 'masonry'){ ?> ms-item<?php } ?>">
	<?php 
		$__Context->oModuleModel = &getModel('module');
		$__Context->mi_temp = getModel('module')->getModuleInfoByDocumentSrl($__Context->document->document_srl);
		$__Context->grant_temp = $__Context->oModuleModel->getGrant($__Context->mi_temp, $__Context->logged_info);
	 ?>
		<a class="ab-link" href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"<?php if(!$__Context->grant_temp->view){ ?> onclick="alert('<?php echo $lang->msg_not_permitted ?>'); return false;"<?php } ?>></a>
		<?php if($__Context->grant->manager){ ?><input class="cart" id="cart_<?php echo $__Context->document->document_srl ?>" type="checkbox" name="cart" value="<?php echo $__Context->document->document_srl ?>" title="Check This Article" onclick="doAddDocumentCart(this)"<?php if($__Context->document->isCarted()){ ?> checked="checked"<?php } ?> /><label for="cart_<?php echo $__Context->document->document_srl ?>" class="cart"><i class="far fa-check-circle"></i><i class="fas fa-check-circle"></i></label><?php } ?>
		<div class="wz-item-inner clear<?php if($__Context->thumbWhere != ''){ ?> thumbnail-<?php echo $__Context->thumbWhere;
} ?>">
			<?php if($__Context->listStyle == 'masonry' && $__Context->mi->masonry_thumbnail_where == 'title_bottom'){ ?><div class="thumbnail-top-header">
				<div class="wz-item-header ab-truncate<?php if($__Context->mi->webzine_header_align == 'center'){ ?> align-center<?php } ?>">
					<?php if($__Context->mi->webzine_category_style != 'n'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_category.html');
} ?><span class="title"><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"><?php echo $__Context->document->getTitle($__Context->mi->list_title_cut) ?></a></span><?php if($__Context->showIcon){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','print_icon.html');
} ?></div>
			</div><?php } ?>
			<?php if($__Context->thumbWhere && $__Context->document->thumbnailExists()){ ?><div class="wz-item-thumbnail">
				<?php if($__Context->thumbType == 'crop'){ ?><div class="thumbwrap">
					<div class="" style="background-image: url('<?php if(!$__Context->document->thumbnailExists()){;
echo $__Context->thumbNo;
}else{;
echo $__Context->document->getThumbnail($__Context->thumbWidth,$__Context->thumbHeight);
} ?>');background-size: cover; background-position: center center;"></div>
				</div><?php } ?>
				<?php if($__Context->thumbType == 'ratio'){ ?><div>
					<?php if($__Context->document->thumbnailExists()){ ?><img src="<?php echo $__Context->document->getThumbnail($__Context->thumbWidth,$__Context->thumbHeight,ratio) ?>" style="width: 100%;" /><?php } ?>
					<?php if(!$__Context->document->thumbnailExists()){ ?><div class="thumbwrap">
						<div style="background-image: url('<?php echo $__Context->thumbNo ?>');background-size: cover; background-position: center center;"></div>
					</div><?php } ?>
				</div><?php } ?>
			</div><?php } ?>
			<?php if($__Context->showAricleContent){ ?><div class="wz-item-content">
				<?php if($__Context->listStyle == 'webzine' || ($__Context->listStyle == 'masonry' && $__Context->mi->masonry_thumbnail_where == '')){ ?><div class="wz-item-header<?php if($__Context->mi->webzine_content_line_one == 'y'){ ?> ab-truncate<?php };
if($__Context->mi->webzine_header_align == 'center'){ ?> align-center<?php } ?>">
					<?php if($__Context->mi->webzine_category_style != 'n'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','fn_category.html');
} ?><a href="<?php echo getUrl('document_srl',$__Context->document->document_srl,'cpage','') ?>"><span class="title"><?php echo $__Context->document->getTitle($__Context->mi->list_title_cut) ?></span></a><?php if($__Context->document->getCommentCount() && $__Context->mi->webzine_title_comment == ''){ ?><a href="<?php echo getUrl('document_srl', $__Context->document->document_srl) ?>#comment" class="commentNum ab-point-color" title="<?php echo $lang->comment ?>"><?php echo $__Context->document->getCommentCount() ?></a><?php };
if($__Context->showIcon){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','print_icon.html');
} ?></div><?php } ?>
				<?php if($__Context->mi->webzine_summary == 'y'){ ?><div class="wz-item-summary"><?php echo $__Context->document->getSummary($__Context->summaryCut) ?></div><?php } ?>
				<?php if($__Context->showArticleMeta){ ?><div class="wz-item-meta<?php if($__Context->mi->webzine_exval_oloi == 'y'){ ?> oloi <?php echo $__Context->mi->webzine_exval_oloi_style;
};
if($__Context->mi->webzine_meta_align == 'center'){ ?> align-center<?php } ?>">
					<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','print_meta.html') ?>
				</div><?php } ?>
			</div><?php } ?>
			<?php if($__Context->mi->button_custom1 == 'y' && $__Context->listStyle == 'masonry'){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','button_custom_1.html');
} ?>
			<?php if($__Context->mi->button_custom2_text && $__Context->listStyle == 'masonry'){ ?><div style="height: 30px; margin-top: 1rem;"></div><?php } ?>
		</div>
		<?php if($__Context->mi->button_custom2_text && $__Context->listStyle == 'masonry'){ ?><a class="ab-btn ab-btn-custom-2<?php if($__Context->mi->button_custom2_style == ''){ ?> ab-point-bacolor ab-point-bgcolor ab-text-white<?php }elseif($__Context->mi->button_custom2_style == 'border'){ ?> ab-point-bacolor ab-point-color<?php } ?>" href="<?php if($__Context->mi->button_custom2_link != ''){;
echo $__Context->document->getExtraEidValue($__Context->mi->button_custom2_link);
}else{;
echo getUrl('document_srl',$__Context->document->document_srl,'cpage','');
} ?>"<?php if($__Context->mi->button_custom2_link_type != ''){ ?> target="_blank"<?php } ?>><?php echo $__Context->mi->button_custom2_text ?></a><?php } ?>
	</div><?php } ?>
</div><?php } ?>
<?php if($__Context->listStyle == 'masonry'){ ?>
	<?php if($__Context->thumbType == 'ratio'){ ?>
		<!--#Meta:modules/board/skins/aplos_v2/assets/js/masonry.pkgd.js--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/js/masonry.pkgd.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<script type="text/javascript">
			$(window).load(function(){
				$('.ab-webzine.masonry').masonry({
					// options
					itemSelector: '.ms-item',
					columnWidth: '.ms-sizer',
					percentPosition: true
				});
			});
		</script>
	<?php }else{ ?>
		<!--#Meta:modules/board/skins/aplos_v2/assets/js/jquery.matchHeight.js--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/js/jquery.matchHeight.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
		<script type="text/javascript">
			$(window).load(function(){
				$('.ms-item').matchHeight();
			});
		</script>
	<?php } ?>
<?php } ?>
<script>
	$('span.title span[style*="font-weight:bold"]').css('font-weight', '').wrap( '<strong></strong>');
	$('.article-navi span[style*="font-weight:bold"]').css('font-weight', '').wrap( '<strong></strong>');
</script>
