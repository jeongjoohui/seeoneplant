<?php require_once('/seeoneplant/www/common/autoload.php'); Context::init(); header("Content-Type: text/xml; charset=UTF-8"); header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); header("Cache-Control: no-store, no-cache, must-revalidate"); header("Cache-Control: post-check=0, pre-check=0", false); header("Pragma: no-cache"); $lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); } 
$_titles[173]['ko'] = '임플란트'; $_descriptions[173]['ko'] = '';  $oContext->close();?><root><node mid="case" module_srl="0" node_srl="173" parent_srl="0" category_srl="173" text="<?php echo (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(1)))))?($_titles[173][$lang_type]):"")?>" url="/case/category/173" expand="N" color="" description="<?php echo (($is_admin==true||(is_array($group_srls)&&count(array_intersect($group_srls, array(1)))))?($_descriptions[173][$lang_type]):"")?>" document_count="31"  /></root>