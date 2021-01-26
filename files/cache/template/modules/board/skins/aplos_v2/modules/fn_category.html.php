<?php if(!defined("__XE__"))exit;
$__Context->category_style_custom = "";
	if (in_array($__Context->category_list[$__Context->document->get('category_srl')]->category_srl,$__Context->category_custom_list)):
		$__Context->category_style_custom = $__Context->category_custom_style[array_search($__Context->category_list[$__Context->document->get('category_srl')]->category_srl,$__Context->category_custom_list)];
	endif;
	 ?>
	<?php if($__Context->timeline_info && !in_array($__Context->listStyle, array('table')) && $__Context->mi->category_timeline==''){ ?><span class="category<?php if(in_array($__Context->listStyle, array('webzine', 'masonry')) && $__Context->mi->webzine_category_style == 'block'){ ?> style-block<?php } ?>"><?php echo $__Context->modules_info[$__Context->document->get('module_srl')]->browser_title ?></span><?php };
if($__Context->category_list[$__Context->document->get('category_srl')]->title){ ?><span class="category<?php if(in_array($__Context->listStyle, array('webzine', 'masonry')) && $__Context->mi->webzine_category_style == 'block'){ ?> style-block<?php } ?>" style="<?php if($__Context->category_list[$__Context->document->get('category_srl')]->color){ ?>color:<?php echo $__Context->category_list[$__Context->document->get('category_srl')]->color ?>;<?php };
echo $__Context->mi->category_style_common ?>;<?php echo $__Context->category_style_custom ?>"><?php echo $__Context->category_list[$__Context->document->get('category_srl')]->title ?></span><?php } ?>