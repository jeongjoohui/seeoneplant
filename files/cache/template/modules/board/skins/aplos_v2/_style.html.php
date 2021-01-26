<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/board/skins/aplos_v2/assets/css/remodal.css--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/css/remodal.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/aplos_v2/assets/css/remodal-macaron-theme.css--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/css/remodal-macaron-theme.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/aplos_v2/assets/css/aplosboard.css--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/css/aplosboard.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/aplos_v2/assets/css/fontawesome-all.css--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/css/fontawesome-all.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/board/skins/aplos_v2/assets/css/spectrum.css--><?php $__tmp=array('modules/board/skins/aplos_v2/assets/css/spectrum.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->mi->etc_custom_css_file == 'css'){ ?><!--#Meta:modules/board/skins/aplos_v2/custom.css--><?php $__tmp=array('modules/board/skins/aplos_v2/custom.css','','','',array());Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->mi->etc_custom_css_file == 'scss' && defined('RX_VERSION')){ ?>
	<!--#Meta:modules/board/skins/aplos_v2/custom.scss--><?php $__tmp=array('modules/board/skins/aplos_v2/custom.scss','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<?php } ?>
<style>
<?php echo $__Context->FontFamilyImport ?>
.board-wrapper {
	padding: <?php echo $__Context->board_pd_ver ?> <?php echo $__Context->board_pd_sm ?>;
	font-size: <?php echo $__Context->fs_ui_sm ?>px;
	font-family: <?php echo $__Context->FontFamilyList ?>;
}
.board-wrapper *:not(.fas, .far, .fab, .fa, .xi-icon, .xi-check-circle) {
	font-family: <?php echo $__Context->FontFamilyList ?>;
}
.board-wrapper table, .board-wrapper input, .board-wrapper textarea, .board-wrapper select, .board-wrapper button {
	font-size: <?php echo $__Context->fs_ui_sm ?>px;
	font-family: <?php echo $__Context->FontFamilyList ?>;
	letter-spacing: -0.5px;
}
.board-wrapper input[type=text]:focus, .board-wrapper input[type=password]:focus, .board-wrapper textarea:focus, .board-wrapper select:focus {
	border: 1px solid <?php echo $__Context->color_point ?>;
}
.remodal {
	font-family: <?php echo $__Context->FontFamilyList ?>;
}
.xe_content {
	font-size: <?php echo $__Context->fs_content_sm ?>px;
}
@media (min-width: 576px){
	.board-wrapper {
		font-size: <?php echo $__Context->fs_ui_md ?>px;
		padding: <?php echo $__Context->board_pd_ver ?> <?php echo $__Context->board_pd_md ?>;
	}
	.board-wrapper table, .board-wrapper input, .board-wrapper textarea, .board-wrapper select, .board-wrapper button {
		font-size: <?php echo $__Context->fs_ui_md ?>px;
	}
	.xe_content {
		font-size: <?php echo $__Context->fs_content_md ?>px;
	}
}
@media (min-width: 1024px){
	.board-wrapper {
		font-size: <?php echo $__Context->fs_ui_lg ?>px;
		padding: <?php echo $__Context->board_pd_ver ?> <?php echo $__Context->board_pd_lg ?>;
	}
	.board-wrapper table, .board-wrapper input, .board-wrapper textarea, .board-wrapper select, .board-wrapper button {
		font-size: <?php echo $__Context->fs_ui_lg ?>px;
	}
	.xe_content {
		font-size: <?php echo $__Context->fs_content_lg ?>px;
	}
}
@media (min-width: 1280px){
	.board-wrapper {
		font-size: <?php echo $__Context->fs_ui_xl ?>px;
		padding: <?php echo $__Context->board_pd_ver ?> <?php echo $__Context->board_pd_xl ?>;
	}
	.board-wrapper table, .board-wrapper input, .board-wrapper textarea, .board-wrapper select, .board-wrapper button {
		font-size: <?php echo $__Context->fs_ui_xl ?>px;
	}
	.xe_content {
		font-size: <?php echo $__Context->fs_content_xl ?>px;
	}
}
<?php if ($__Context->mi->category_show == 'y_n'){ ?>
	.category_style_custom {
		<?php echo $__Context->mi->category_custom ?>
	}
	.category_style_custom:hover {
		<?php echo $__Context->mi->category_custom_hover ?>
	}
	.category_style_custom.on {
		<?php echo $__Context->mi->category_custom_on ?>
	}
<?php } ?>
/* Color Setting */
.xe_content a {
	color: <?php echo $__Context->color_point ?>;
	text-decoration: none;
}
.ab-btn-point, .ab-point-color, i.read {
	color: <?php echo $__Context->color_point ?> !important;
}
.ab-point-bacolor, ul.lv-1 .ui-state-active {
	border-color: <?php echo $__Context->color_point ?> !important;
}
.ab-point-bacolor-hover:hover {
	border-color: <?php echo $__Context->color_point ?> !important;
}
.absc.list .notice, .ab-point-blcolor {
	border-left-color: <?php echo $__Context->color_point ?>;
}
.ab-point-bbcolor {
	border-bottom-color: <?php echo $__Context->color_point ?> !important;
}
.ab-point-bbcolor-hover:hover {
	border-bottom-color: <?php echo $__Context->color_point ?> !important;
}
.absc.pgnt strong.pagination-num, .ab-point-bgcolor, ul.lv-1 li:not(.on) ~ div .ui-slider-range, ul.lv-1 .ui-state-active {
	background-color: <?php echo $__Context->color_point ?> !important;
}
.ab-checkbox input:checked ~ label {
	color: <?php echo $__Context->color_point ?> !important;
}
.title-color-picker-modal .sp-choose, .title-color-picker-modal .sp-choose:hover {
	color: <?php echo $__Context->color_point ?> !important;
}
/* Article Title Bolder */
<?php if($__Context->mi->list_title_bolder == 'y'){ ?>
.absc.list .ab-table tbody tr .title a:first-child, .absc.list .ab-webzine .wz-item .wz-item-header .title {
	font-weight: bolder;
}
<?php }elseif($__Context->mi->list_title_bolder == 'table'){ ?>
.absc.list .ab-table tbody tr .title a:first-child {
	font-weight: bolder;
}
<?php }elseif($__Context->mi->list_title_bolder == 'webzine'){ ?>
.absc.list .ab-webzine .wz-item .wz-item-header .title {
	font-weight: bolder;
}
<?php } ?>
/* Thumbnail Setting */
.thumbwrap {
	padding-bottom: <?php echo $__Context->thumbRatio ?>%;
}
.absc.list .ab-webzine .wz-item .thumbnail-left .wz-item-thumbnail {
	width: <?php echo $__Context->webzineThumbnailWidthSmall ?>px;
}
.absc.list .ab-webzine .wz-item .thumbnail-left .wz-item-content {
	width: calc(100% - <?php echo $__Context->webzineThumbnailWidthSmall ?>px - 1em);
}
@media (min-width: 641px){
	.absc.list .ab-webzine .wz-item .thumbnail-left .wz-item-thumbnail {
		width: <?php echo $__Context->webzineThumbnailWidthMedium ?>px;
	}
	.absc.list .ab-webzine .wz-item .thumbnail-left .wz-item-content {
		width: calc(100% - <?php echo $__Context->webzineThumbnailWidthMedium ?>px - 1em);
	}
}
@media (min-width: 1025px){
	.absc.list .ab-webzine .wz-item .thumbnail-left .wz-item-thumbnail {
		width: <?php echo $__Context->webzineThumbnailWidthLarge ?>px;
	}
	.absc.list .ab-webzine .wz-item .thumbnail-left .wz-item-content {
		width: calc(100% - <?php echo $__Context->webzineThumbnailWidthLarge ?>px - 1em);
	}
}
<?php if(!$__Context->showAricleContent){ ?>
.absc.list .ab-webzine:not(.notice) .wz-item:hover {
	padding: 0.5em;
}
<?php } ?>
<?php if($__Context->mi->webzine_summary_line){ ?>
.absc.list .ab-webzine .wz-item .wz-item-summary {
	-webkit-line-clamp: <?php echo $__Context->mi->webzine_summary_line ?>;
}
<?php } ?>
.absc.list .ab-webzine .wz-item .wz-item-thumbnail {
	<?php echo $__Context->thumbStyle ?>;
}
<?php if($__Context->listStyle == 'masonry'){ ?>
.absc.list .masonry {
	margin-top: 1em;
	<?php if($__Context->masonryStyleMargin){ ?>
		margin-right: -<?php echo $__Context->masonryStyleMargin ?> ;
	<?php } ?>
}
.absc.list .masonry .ms-item {
	border-bottom: none;
	float: left;
}
.absc.list .masonry .ms-item .wz-item-content {
}
.ms-sizer, .absc.list .masonry .ms-item {
	width: calc( ( 100% / <?php echo $__Context->masonryColumnSmall ?> )<?php if($__Context->masonryStyleMargin){ ?> - <?php echo $__Context->masonryStyleMargin ?> <?php } ?>);
	margin-bottom: <?php echo $__Context->masonryStyleMargin ?>;
	margin-right: <?php echo $__Context->masonryStyleMargin ?>;
	display: inline-block;
}
.absc.list .masonry .ms-item {
	background-color: <?php echo $__Context->masonryStyleBackground ?>;
	border: <?php echo $__Context->masonryStyleBorder ?>;
	border-radius: <?php echo $__Context->masonryStyleRadius ?>;
	box-shadow: <?php echo $__Context->masonryStyleShadow ?>;
}
@media (min-width: 641px) {
	.ms-sizer, .absc.list .masonry .ms-item {
		width: calc( ( 100% / <?php echo $__Context->masonryColumnMedium ?> )<?php if($__Context->masonryStyleMargin){ ?> - <?php echo $__Context->masonryStyleMargin ?> <?php } ?>);
	}
}
@media (min-width: 1025px) {
	.ms-sizer, .absc.list .masonry .ms-item {
		width: calc( ( 100% / <?php echo $__Context->masonryColumnLarge ?> )<?php if($__Context->masonryStyleMargin){ ?> - <?php echo $__Context->masonryStyleMargin ?> <?php } ?>);
	}
}
	<?php if($__Context->mi->masonry_thumbnail_where == 'title_bottom'){ ?>
	.absc.list .ab-webzine .wz-item .wz-item-summary {
		margin-top: 0.5em;
	}
	<?php } ?>
	.board-wrapper .ab-btn.ab-btn-custom-1 {
		<?php echo $__Context->mi->button_custom1_custom ?>;
	}
	.board-wrapper .ab-btn.ab-btn-custom-1:hover {
		<?php echo $__Context->mi->button_custom1_custom_hover ?>;
	}
	.board-wrapper .ab-btn.ab-btn-custom-2 {
		<?php echo $__Context->mi->button_custom2_custom ?>;
	}
	.board-wrapper .ab-btn.ab-btn-custom-2:hover {
		<?php echo $__Context->mi->button_custom2_custom_hover ?>;
	}
<?php } ?>
/* XEFU */
.xefu-btn.fileinput-button > span {
	color: <?php echo $__Context->color_point ?> !important;
}
.xefu-act-link-selected {
	color: <?php echo $__Context->color_point ?> !important;
}
/* board list hover border-bottom */
<?php if($__Context->mi->hover_bottom_line != 'y'){ ?>
.absc.list .ab-table tbody tr .title a:first-child {
	border-bottom: none !important;
}
.absc.list .ab-webzine .wz-item:hover .title {
	border-bottom: none;
}
<?php } ?>
/* visited link style */
<?php if($__Context->mi->visited_link == 'y'){ ?>
tr:not(.notice) .title a:visited, tr:not(.notice) .title a:visited *, .wz-item:not(.notice) a:visited, .wz-item:not(.notice) a:visited * {
	color: #666 !important;
}
<?php } ?>
<?php echo $__Context->mi->etc_custom_css ?>
</style>