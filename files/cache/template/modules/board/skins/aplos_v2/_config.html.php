<?php if(!defined("__XE__"))exit;
$__Context->mi = $__Context->module_info;
$__Context->skin_path = $__Context->tpl_path;
$__Context->kakao_key = $__Context->mi->share_article_kakao_key;
$__Context->skin_path2 = explode('modules/board', $__Context->skin_path);
$__Context->skin_path2 = '/modules/board' . $__Context->skin_path2[1];
if($_COOKIE['ab_editor_type']) $__Context->mi->comment_write_type = $_COOKIE['ab_editor_type'];
// Total Count
$__Context->oDB = &DB::getInstance();
$__Context->query = $__Context->oDB->_query('select count(*) as total from rx_documents where module_srl = '.$__Context->mi->module_srl);
$__Context->article_count = $__Context->oDB->_fetch($__Context->query);
if ($__Context->order_type == "desc"):
	$__Context->order_type = "asc";
	$__Context->order_icon = "down";
else:
	$__Context->order_type = "desc";
	$__Context->order_icon = "up";
endif;
// Color
if ($__Context->mi->color_point == ''):
	$__Context->color_point = 'dodgerblue';
elseif ($__Context->mi->color_point == 'custom'):
	$__Context->color_point = $__Context->mi->color_point_custom;
else:
	$__Context->color_point = $__Context->mi->color_point;
endif;
// Font Family
if ($__Context->mi->fontfamily_select == ''):
	switch ($__Context->lang_type):
		case 'ja':
			$__Context->FontFamilyList = "'Hiragino Kaku Gothic Pro', 'ヒラギノ角ゴ Pro W3', Osaka, Meiryo, 'メイリオ', 'MS PGothic', 'ＭＳ Ｐゴシック', sans-serif;";
		case 'zh-CN':
			$__Context->FontFamilyList = "Helvetica, Arial, 'Microsoft Yahei', '微软雅黑', STXihei, '华文细黑', sans-serif;";
		default:
			$__Context->FontFamilyList = "나눔고딕,'맑은 고딕','Malgun Gothic','Apple SD Gothic Neo',sans-serif";
		endswitch;
elseif ($__Context->mi->fontfamily_select == 'notosans'):
	$__Context->FontFamilyList = "'Noto Sans Korean', sans-serif";
	$__Context->FontFamilyImport = "@import url(".$__Context->skin_path2."assets/css/NotoSansKR-Hestia.css);";
elseif ($__Context->mi->fontfamily_select == 'notosans_u'):
	switch ($__Context->lang_type):
		case 'ja':
			$__Context->FontFamilyList = "'Noto Sans JP', sans-serif";
			$__Context->FontFamilyImport = "@import url(//fonts.googleapis.com/earlyaccess/notosansjp.css);";
			break;
		case 'zh-CN':
			$__Context->FontFamilyList = "'Noto Sans SC', sans-serif";
			$__Context->FontFamilyImport = "@import url(//fonts.googleapis.com/earlyaccess/notosanssc.css);";
			break;
		default:
			$__Context->FontFamilyList = "'Noto Sans KR', sans-serif";
			$__Context->FontFamilyImport = "@import url(//fonts.googleapis.com/earlyaccess/notosanskr.css);";
	endswitch;
elseif ($__Context->mi->fontfamily_select == 'spoqahansans'):
	$__Context->FontFamilyList = "'Spoqa Han Sans', sans-serif";
	$__Context->FontFamilyImport = "@import url(".$__Context->skin_path2."assets/css/spoqahansans.css);";
elseif ($__Context->mi->fontfamily_select == 'spoqahansans_u'):
	switch ($__Context->lang_type):
		case 'ja':
			$__Context->FontFamilyList = "'Spoqa Han Sans JP', sans-serif";
			$__Context->FontFamilyImport = "@import url(//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-jp.css);";
			break;
		default:
			$__Context->FontFamilyList = "'Spoqa Han Sans', sans-serif";
			$__Context->FontFamilyImport = "@import url(//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css);";
	endswitch;
elseif ($__Context->mi->fontfamily_select == 'nanumsquare'):
	$__Context->FontFamilyList = "'NanumSquare', sans-serif";
	$__Context->FontFamilyImport = "@import url(".$__Context->skin_path2."assets/css/nanumsquare.css);";
elseif ($__Context->mi->fontfamily_select == 'nanumgothic'):
	$__Context->FontFamilyList = "'Nanum Gothic', sans-serif";
	$__Context->FontFamilyImport = "@import url(".$__Context->skin_path2."assets/css/nanumgothic.css);";
elseif ($__Context->mi->fontfamily_select == 'nanummyeongjo'):
	$__Context->FontFamilyList = "'Nanum Myeongjo', serif";
	$__Context->FontFamilyImport = "@import url(".$__Context->skin_path2."assets/css/nanummyungjo.css);";
elseif ($__Context->mi->fontfamily_select == 'custom'):
	$__Context->FontFamilyList = $__Context->mi->fontfamily_list;
	$__Context->FontFamilyImport = $__Context->mi->fontfamily_import;
endif;
// Font Size
if ($__Context->mi->fs_content_sm) $__Context->fs_content_sm = $__Context->mi->fs_content_sm; else $__Context->fs_content_sm = "12";
if ($__Context->mi->fs_content_md) $__Context->fs_content_md = $__Context->mi->fs_content_md; else $__Context->fs_content_md = "14";
if ($__Context->mi->fs_content_lg) $__Context->fs_content_lg = $__Context->mi->fs_content_lg; else $__Context->fs_content_lg = "16";
if ($__Context->mi->fs_content_xl) $__Context->fs_content_xl = $__Context->mi->fs_content_xl; else $__Context->fs_content_xl = "16";
if ($__Context->mi->fs_ui_sm) $__Context->fs_ui_sm = $__Context->mi->fs_ui_sm; else $__Context->fs_ui_sm = "12";
if ($__Context->mi->fs_ui_md) $__Context->fs_ui_md = $__Context->mi->fs_ui_md; else $__Context->fs_ui_md = "14";
if ($__Context->mi->fs_ui_lg) $__Context->fs_ui_lg = $__Context->mi->fs_ui_lg; else $__Context->fs_ui_lg = "16";
if ($__Context->mi->fs_ui_xl) $__Context->fs_ui_xl = $__Context->mi->fs_ui_xl; else $__Context->fs_ui_xl = "16";
// padding
if ($__Context->mi->board_pd_ver) $__Context->board_pd_ver = $__Context->mi->board_pd_ver; else $__Context->board_pd_ver = "0.5em";
if ($__Context->mi->board_pd_sm)  $__Context->board_pd_sm  = $__Context->mi->board_pd_sm;  else $__Context->board_pd_sm  = "0.5em";
if ($__Context->mi->board_pd_md)  $__Context->board_pd_md  = $__Context->mi->board_pd_md;  else $__Context->board_pd_md  = "0.5em";
if ($__Context->mi->board_pd_lg)  $__Context->board_pd_lg  = $__Context->mi->board_pd_lg;  else $__Context->board_pd_lg  = "0.5em";
if ($__Context->mi->board_pd_xl)  $__Context->board_pd_xl  = $__Context->mi->board_pd_xl;  else $__Context->board_pd_xl  = "0.5em";
// Board Title
if ($__Context->mi->board_header_title == 'c') $__Context->Title = $__Context->mi->board_header_title_custom; else $__Context->Title = $__Context->mi->browser_title;
if ($__Context->mi->board_header == '') $__Context->showHeader = false; else $__Context->showHeader = true;
// List Style
if ($__Context->boardStyle != ''):
	$__Context->listStyle = $__Context->boardStyle;
elseif ($__Context->mi->board_style == ''):
	if (!Mobile::isMobileCheckByAgent())	$__Context->listStyle = "table";
	else									$__Context->listStyle = "webzine";
elseif ($__Context->mi->board_style == 'table'):
	$__Context->listStyle = "table";
elseif ($__Context->mi->board_style == 'webzine'):
	$__Context->listStyle = "webzine";
elseif ($__Context->mi->board_style == 'masonry'):
	$__Context->listStyle = "masonry";
elseif ($__Context->mi->board_style == 'download'):
	$__Context->listStyle = "download";
elseif ($__Context->mi->board_style == 'faq'):
	$__Context->listStyle = "faq";
endif;
// Category
if ($__Context->listStyle == 'table'):
	if ($__Context->mi->table_category == '' && $__Context->mi->use_category=='Y')
		$__Context->showCategory = true;
	else
		$__Context->showCategory = false;
elseif ($__Context->listStyle == 'download'):
	if ($__Context->mi->download_category == '' && $__Context->mi->use_category=='Y')
		$__Context->showCategory = true;
	else
		$__Context->showCategory = false;
endif;
$__Context->cate_list = array();
$__Context->current_key = null;
foreach ($__Context->category_list as $__Context->key=>$__Context->val) :
	if (!$__Context->val->depth):
		$__Context->cate_list[$__Context->key] = $__Context->val;
		$__Context->cate_list[$__Context->key]->children = array();
		$__Context->current_key = $__Context->key;
	elseif ($__Context->current_key):
		$__Context->cate_list[$__Context->current_key]->children[] = $__Context->val;
	endif;
endforeach;
// List Icon
if ($__Context->mi->list_icon == ''):
	$__Context->showIcon = $__Context->showIconNotice = true;
elseif ($__Context->mi->list_icon == 'notice'):
	$__Context->showIcon = true;
	$__Context->showIconNotice = false;
else:
	$__Context->showIcon = $__Context->showIconNotice = false;
endif;
// Webzine
if ($__Context->mi->webzine_meta == ''):
	$__Context->showArticleMeta = $__Context->showNoticeMeta = true;
elseif ($__Context->mi->webzine_meta == 'notice'):
	$__Context->showArticleMeta = true;
	$__Context->showNoticeMeta = false;
else:
	$__Context->showArticleMeta = $__Context->showNoticeMeta = false;
endif;
if ($__Context->mi->webzine_summary_cut)
	$__Context->summaryCut = $__Context->mi->webzine_summary_cut;
else
	$__Context->summaryCut = "100";
// Masonry Styling
if ($__Context->mi->masonry_style_margin)
	$__Context->masonryStyleMargin = $__Context->mi->masonry_style_margin;
else
	$__Context->masonryStyleMargin = "";
if ($__Context->mi->masonry_style_border)
	$__Context->masonryStyleBorder = $__Context->mi->masonry_style_border;
else
	$__Context->masonryStyleBorder = "none";
if ($__Context->mi->masonry_style_radius)
	$__Context->masonryStyleRadius = $__Context->mi->masonry_style_radius;
else
	$__Context->masonryStyleRadius = "0";
if ($__Context->mi->masonry_style_background)
	$__Context->masonryStyleBackground = $__Context->mi->masonry_style_background;
else
	$__Context->masonryStyleBackground = "none";
if ($__Context->mi->masonry_style_shadow)
	$__Context->masonryStyleShadow = $__Context->mi->masonry_style_shadow;
else
	$__Context->masonryStyleShadow = "none";
// Meta Date Type
if (Mobile::isMobileCheckByAgent())
	$__Context->dateType = "y.n.j";
else
	$__Context->dateType = "Y.m.d";
// Array for Category Function
$__Context->category_custom_temp = explode("\r\n",$__Context->mi->category_style_custom);
for ($__Context->i=0; $__Context->i < count($__Context->category_custom_temp); $__Context->i++):
	$__Context->temp = explode("|",$__Context->category_custom_temp[$__Context->i]);
	$__Context->category_custom_list[$__Context->i] = $__Context->temp[0];
	$__Context->category_custom_style[$__Context->i] = $__Context->temp[1];
endfor;
// Array for exVal Function
$__Context->exval_custom_temp = explode("\r\n",$__Context->mi->exval_style_custom);
for ($__Context->i=0; $__Context->i < count($__Context->exval_custom_temp); $__Context->i++):
	$__Context->temp = explode("|",$__Context->exval_custom_temp[$__Context->i]);
	$__Context->exval_custom_list[$__Context->i] = $__Context->temp[0];
	$__Context->exval_custom_style[$__Context->i] = $__Context->temp[1];
endfor;
$__Context->exval_image_temp = explode("\r\n",$__Context->mi->exval_image);
for ($__Context->i=0; $__Context->i < count($__Context->exval_image_temp); $__Context->i++):
	$__Context->temp = explode("|",$__Context->exval_image_temp[$__Context->i]);
	$__Context->exval_image_list[$__Context->i] = $__Context->temp[0];
	$__Context->exval_image_url[$__Context->i] = $__Context->temp[1];
	$__Context->exval_image_style[$__Context->i] = $__Context->temp[2];
endfor;
// Thumbnail Setting
if ($__Context->mi->thumbnail_width == '' && $__Context->mi->thumbnail_width == ''):
	$__Context->thumbWidth = $__Context->thumbHeight = 512;
elseif ( $__Context->mi->thumbnail_width == '' || $__Context->mi->thumbnail_height == '' ):
	if ($__Context->mi->thumbnail_width == ''):
		$__Context->thumbWidth = $__Context->thumbHeight = $__Context->mi->thumbnail_height;
	else:
		$__Context->thumbWidth = $__Context->thumbHeight = $__Context->mi->thumbnail_width;
	endif;	
else:
	$__Context->thumbWidth = $__Context->mi->thumbnail_width;
	$__Context->thumbHeight = $__Context->mi->thumbnail_height;
endif;
$__Context->thumbRatio = ($__Context->thumbHeight / $__Context->thumbWidth) * 100;
if ($__Context->listStyle == 'masonry'):
	if($__Context->mi->masonry_thumbnail_type)
		$__Context->thumbType = $__Context->mi->masonry_thumbnail_type;
	else
		$__Context->thumbType = "ratio";
	if ($__Context->mi->masonry_column_sm)
		$__Context->masonryColumnSmall = $__Context->mi->masonry_column_sm;
	else
		$__Context->masonryColumnSmall = "2";
	if ($__Context->mi->masonry_column_md)
		$__Context->masonryColumnMedium = $__Context->mi->masonry_column_md;
	else
		$__Context->masonryColumnMedium = "3";
	if ($__Context->mi->masonry_column_lg)
		$__Context->masonryColumnLarge = $__Context->mi->masonry_column_lg;
	else
		$__Context->masonryColumnLarge = "4";
	// Thumbnail Location
	$__Context->thumbWhere = "top";
	// Article Content
	if ($__Context->mi->masonry_content == ''):
		$__Context->showAricleContent = true;
	else:
		$__Context->showAricleContent = false;
	endif;
elseif ($__Context->listStyle == 'webzine'):
	$__Context->thumbType = "crop";
	$__Context->thumbWhere = $__Context->mi->webzine_thumbnail;
	if($__Context->mi->webzine_thumbnail_width_sm)
		$__Context->webzineThumbnailWidthSmall = $__Context->mi->webzine_thumbnail_width_sm;
	else
		$__Context->webzineThumbnailWidthSmall = "80";
	if($__Context->mi->webzine_thumbnail_width_md)
		$__Context->webzineThumbnailWidthMedium = $__Context->mi->webzine_thumbnail_width_md;
	else
		$__Context->webzineThumbnailWidthMedium = "120";
	if($__Context->mi->webzine_thumbnail_width_lg)
		$__Context->webzineThumbnailWidthLarge = $__Context->mi->webzine_thumbnail_width_lg;
	else
		$__Context->webzineThumbnailWidthLarge = "150";
	$__Context->showAricleContent = true;
endif;
if ($__Context->mi->thumbnail_no_image)
	$__Context->thumbNo = $__Context->mi->thumbnail_no_image;
else
	$__Context->thumbNo = "/modules/board/skins/aplos_v2/assets/images/image-no-thumbnail.svg";
if ($__Context->mi->profile_no_image)
	$__Context->profileNo = $__Context->mi->profile_no_image;
else
	$__Context->profileNo = "/modules/board/skins/aplos_v2/assets/images/image-no-profile.svg";
// Thumbnail Styling
if ($__Context->mi->thumbnail_border):
	$__Context->thumbStyle .= "border: ";
	$__Context->thumbStyle .= $__Context->mi->thumbnail_border;
	$__Context->thumbStyle .= ";";
endif;
if ($__Context->mi->thumbnail_radius):
	$__Context->thumbStyle .= "border-radius: ";
	$__Context->thumbStyle .= $__Context->mi->thumbnail_radius;
	$__Context->thumbStyle .= ";";
endif;
if ($__Context->mi->thumbnail_ex_style):
	$__Context->thumbStyle .= $__Context->mi->thumbnail_ex_style;
endif;
// Comment
if ($__Context->mi->comment_form_location == ''):
	$__Context->CommentWriteLoc = 'top';
elseif ($__Context->mi->comment_form_location == 'bottom'):
	$__Context->CommentWriteLoc = 'bottom';
else:
	$__Context->CommentWriteLoc = 'none';
endif;
 ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2','_lang.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2','_style.html') ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/board/skins/aplos_v2','_script.html') ?>