<?php if(!defined("__XE__")) exit(); $menu = new stdClass();$lang_type = Context::getLangType(); $is_logged = Context::get('is_logged'); $logged_info = Context::get('logged_info'); $site_srl = 0;$site_admin = false;if($site_srl) { $oModuleModel = getModel('module');$site_module_info = $oModuleModel->getSiteInfo($site_srl); if($site_module_info) Context::set('site_module_info',$site_module_info);else $site_module_info = Context::get('site_module_info');$grant = $oModuleModel->getGrant($site_module_info, $logged_info); if($grant->manager ==1) $site_admin = true;}if($is_logged) {if($logged_info->is_admin=="Y") $is_admin = true; else $is_admin = false; $group_srls = array_keys($logged_info->group_list); } else { $is_admin = false; $group_srls = array(); }; $_menu_names[67] = array("ko"=>'Welcome Page',"en"=>'Welcome Page',"ja"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"de"=>'Welcome Page',"es"=>'Welcome Page',"fr"=>'Welcome Page',"mn"=>'Welcome Page',"ru"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"id"=>'Welcome Page',); $_menu_names[351] = array("ko"=>'Welcome Page',"en"=>'Welcome Page',"ja"=>'Welcome Page',"zh-CN"=>'Welcome Page',"zh-TW"=>'Welcome Page',"de"=>'Welcome Page',"es"=>'Welcome Page',"fr"=>'Welcome Page',"mn"=>'Welcome Page',"ru"=>'Welcome Page',"tr"=>'Welcome Page',"vi"=>'Welcome Page',"id"=>'Welcome Page',); $_menu_names[69] = array("ko"=>'Board',"en"=>'Board',"ja"=>'Board',"zh-CN"=>'Board',"zh-TW"=>'Board',"de"=>'Board',"es"=>'Board',"fr"=>'Board',"mn"=>'Board',"ru"=>'Board',"tr"=>'Board',"vi"=>'Board',"id"=>'Board',); $_menu_names[70] = array("ko"=>'SAMPLE 1',"en"=>'SAMPLE 1',"ja"=>'SAMPLE 1',"zh-CN"=>'SAMPLE 1',"zh-TW"=>'SAMPLE 1',"de"=>'SAMPLE 1',"es"=>'SAMPLE 1',"fr"=>'SAMPLE 1',"mn"=>'SAMPLE 1',"ru"=>'SAMPLE 1',"tr"=>'SAMPLE 1',"vi"=>'SAMPLE 1',"id"=>'SAMPLE 1',); $_menu_names[71] = array("ko"=>'SAMPLE 1-1',"en"=>'SAMPLE 1-1',"ja"=>'SAMPLE 1-1',"zh-CN"=>'SAMPLE 1-1',"zh-TW"=>'SAMPLE 1-1',"de"=>'SAMPLE 1-1',"es"=>'SAMPLE 1-1',"fr"=>'SAMPLE 1-1',"mn"=>'SAMPLE 1-1',"ru"=>'SAMPLE 1-1',"tr"=>'SAMPLE 1-1',"vi"=>'SAMPLE 1-1',"id"=>'SAMPLE 1-1',); $_menu_names[72] = array("ko"=>'SAMPLE 2',"en"=>'SAMPLE 2',"ja"=>'SAMPLE 2',"zh-CN"=>'SAMPLE 2',"zh-TW"=>'SAMPLE 2',"de"=>'SAMPLE 2',"es"=>'SAMPLE 2',"fr"=>'SAMPLE 2',"mn"=>'SAMPLE 2',"ru"=>'SAMPLE 2',"tr"=>'SAMPLE 2',"vi"=>'SAMPLE 2',"id"=>'SAMPLE 2',); $_menu_names[73] = array("ko"=>'SAMPLE 3',"en"=>'SAMPLE 3',"ja"=>'SAMPLE 3',"zh-CN"=>'SAMPLE 3',"zh-TW"=>'SAMPLE 3',"de"=>'SAMPLE 3',"es"=>'SAMPLE 3',"fr"=>'SAMPLE 3',"mn"=>'SAMPLE 3',"ru"=>'SAMPLE 3',"tr"=>'SAMPLE 3',"vi"=>'SAMPLE 3',"id"=>'SAMPLE 3',); $_menu_names[75] = array("ko"=>'XEIcon',"en"=>'XEIcon',"ja"=>'XEIcon',"zh-CN"=>'XEIcon',"zh-TW"=>'XEIcon',"de"=>'XEIcon',"es"=>'XEIcon',"fr"=>'XEIcon',"mn"=>'XEIcon',"ru"=>'XEIcon',"tr"=>'XEIcon',"vi"=>'XEIcon',"id"=>'XEIcon',); $_menu_names[139] = array("ko"=>'시원플란트치과',"en"=>'시원플란트치과',"ja"=>'시원플란트치과',"zh-CN"=>'시원플란트치과',"zh-TW"=>'시원플란트치과',"de"=>'시원플란트치과',"es"=>'시원플란트치과',"fr"=>'시원플란트치과',"mn"=>'시원플란트치과',"ru"=>'시원플란트치과',"tr"=>'시원플란트치과',"vi"=>'시원플란트치과',"id"=>'시원플란트치과',); ; $menu->list = array(67=>array("node_srl" => 67, "parent_srl" => 0, "menu_name_key" => 'Welcome Page', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[67][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','index') : ""), "url" => (true ? 'index' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("page_WdyR98","index") && in_array(Context::get("mid"), array("page_WdyR98","index")) ? 1 : 0), "expand" => 'N', "list" => array(351=>array("node_srl" => 351, "parent_srl" => 67, "menu_name_key" => 'Welcome Page', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[351][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','page_WdyR98') : ""), "url" => (true ? 'page_WdyR98' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("page_WdyR98") && in_array(Context::get("mid"), array("page_WdyR98")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("page_WdyR98") && in_array(Context::get("mid"), array("page_WdyR98")) ? $_menu_names[351][$lang_type] : $_menu_names[351][$lang_type]) : ""),),), "link" => (true ? (array("page_WdyR98","index") && in_array(Context::get("mid"), array("page_WdyR98","index")) ? $_menu_names[67][$lang_type] : $_menu_names[67][$lang_type]) : ""),),69=>array("node_srl" => 69, "parent_srl" => 0, "menu_name_key" => 'Board', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[69][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','board') : ""), "url" => (true ? 'board' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#","#","#","board") && in_array(Context::get("mid"), array("#","#","#","#","board")) ? 1 : 0), "expand" => 'N', "list" => array(70=>array("node_srl" => 70, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[70][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? 1 : 0), "expand" => 'N', "list" => array(71=>array("node_srl" => 71, "parent_srl" => 70, "menu_name_key" => 'SAMPLE 1-1', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[71][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[71][$lang_type] : $_menu_names[71][$lang_type]) : ""),),), "link" => (true ? (array("#","#") && in_array(Context::get("mid"), array("#","#")) ? $_menu_names[70][$lang_type] : $_menu_names[70][$lang_type]) : ""),),72=>array("node_srl" => 72, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 2', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[72][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[72][$lang_type] : $_menu_names[72][$lang_type]) : ""),),73=>array("node_srl" => 73, "parent_srl" => 69, "menu_name_key" => 'SAMPLE 3', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[73][$lang_type] : ""), "href" => (true ? '#' : ""), "url" => (true ? '#' : ""), "is_shortcut" => 'Y', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("#") && in_array(Context::get("mid"), array("#")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("#") && in_array(Context::get("mid"), array("#")) ? $_menu_names[73][$lang_type] : $_menu_names[73][$lang_type]) : ""),),), "link" => (true ? (array("#","#","#","#","board") && in_array(Context::get("mid"), array("#","#","#","#","board")) ? $_menu_names[69][$lang_type] : $_menu_names[69][$lang_type]) : ""),),75=>array("node_srl" => 75, "parent_srl" => 0, "menu_name_key" => 'XEIcon', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[75][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','xeicon') : ""), "url" => (true ? 'xeicon' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("xeicon") && in_array(Context::get("mid"), array("xeicon")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("xeicon") && in_array(Context::get("mid"), array("xeicon")) ? $_menu_names[75][$lang_type] : $_menu_names[75][$lang_type]) : ""),),139=>array("node_srl" => 139, "parent_srl" => 0, "menu_name_key" => '시원플란트치과', "isShow" => (true ? true : false), "text" => (true ? $_menu_names[139][$lang_type] : ""), "href" => (true ? getSiteUrl('', '','mid','seeone') : ""), "url" => (true ? 'seeone' : ""), "is_shortcut" => 'N', "desc" => '', "open_window" => 'N', "normal_btn" => '', "hover_btn" => '', "active_btn" => '', "selected" => (array("seeone") && in_array(Context::get("mid"), array("seeone")) ? 1 : 0), "expand" => 'N', "list" => array(), "link" => (true ? (array("seeone") && in_array(Context::get("mid"), array("seeone")) ? $_menu_names[139][$lang_type] : $_menu_names[139][$lang_type]) : ""),),); if(!$is_admin) { recurciveExposureCheck($menu->list); }Context::set("included_menu", $menu); ?>