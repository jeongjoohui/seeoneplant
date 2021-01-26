<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2','_config.html') ?>
<?php if($__Context->mi->header_text){ ?><div class="rs"><?php echo $__Context->mi->header_text ?></div><?php } ?>
<div class="board-wrapper">
	<?php if($__Context->oDocument->isExists()){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','article.html');
} ?>
<?php if($__Context->mi->show_list == '' || ( $__Context->mi->show_list == 'n' && !$__Context->oDocument->isExists() ) ){ ?>
	<?php if($__Context->showHeader){ ?><div class="absc title rs<?php if($__Context->mi->board_header){ ?> <?php echo $__Context->mi->board_header;
};
if($__Context->mi->board_header_align != ''){ ?> align-<?php echo $__Context->mi->board_header_align;
} ?>">
		<a href="<?php echo getUrl('','mid',$__Context->mid) ?>"><span><?php echo $__Context->Title ?></span><?php if($__Context->mi->board_header_title_total != ''){ ?><span class="total <?php echo $__Context->mi->board_header_title_total ?>"><?php echo $__Context->article_count->total ?></span><?php } ?></a>
		<?php if($__Context->mi->board_header_desc){ ?><p><?php echo $__Context->mi->board_header_desc ?></p><?php } ?>
	</div><?php } ?>
	<div class="absc tool rs clear">
		<?php $__Context->toolLoc = 'top'; ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','tool.html') ?>
	</div>
	<div class="absc category rs">
		<?php if($__Context->mi->category_show != ''){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','category.html');
} ?>
	</div>
	<?php if($__Context->listStyle == "webzine" || $__Context->listStyle == "masonry"){ ?>
		<?php if($__Context->grant->manager){ ?><div class="ab-webzine-cart">
			<input class="cart" id="cart_all" type="checkbox" onclick="XE.checkboxToggleAll({ doClick:true });" title="Check All" /><label for="cart_all" class="cart ab-btn"><i class="far fa-check-circle"></i><i class="fas fa-check-circle"></i> <?php echo $lang->cmd_select_all ?></label>
		</div><?php } ?>
	<?php } ?>
	<div class="absc list rs"<?php if($__Context->listStyle == 'table'){ ?> style="overflow-x: auto;"<?php } ?>>
		<?php if($__Context->listStyle == "table"){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','list-table.html') ?>
		<?php }elseif($__Context->listStyle == "webzine" || $__Context->listStyle == "masonry"){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','list-webzine.html') ?>
		<?php }elseif($__Context->listStyle == "download"){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','list-download.html') ?>
		<?php }elseif($__Context->listStyle == "faq"){ ?>
			<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','list-faq.html') ?>
		<?php } ?>
	</div>
	<div class="absc tool rs clear">
		<?php $__Context->toolLoc = 'bottom'; ?>
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','tool.html') ?>
	</div>
	<div class="absc pgnt rs align-center">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','pagination.html') ?>
	</div>
<?php } ?>
	<div class="absc copyright rs align-right">
		<a target="_blank" href="https://macaron.ml"><p>APLOS BOARD 2 FREE LICENSE<br>DESIGN BY MACARON</p></a>
		<!-- 카피라이트 문구를 수정, 변형 및 제거하는 것은 무료 라이선스 위반입니다. -->
		<!-- 카피라이트 문구를 제거하시려면 프리미엄 라이선스를 구매해 주시기 바랍니다. -->
		<!-- 마카롱 테마 웹사이트 : macaron.ml -->
		<!-- 마카롱 이메일 주소 : master@macaron.ml -->
		<!-- 구매 문의 : macaron.ml/buyqna -->
	</div>
	<div class="ab-popover-bg"></div>
	<?php if($__Context->mi->footer_text){ ?><div class="rs"><?php echo $__Context->mi->footer_text ?></div><?php } ?>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2/modules','modal.html') ?>