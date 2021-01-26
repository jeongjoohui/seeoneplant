<?php if(!defined("__XE__")) exit(); $layout_info = new stdClass;
$layout_info->site_srl = NULL;
$layout_info->layout = 'seeoneplant';
$layout_info->path = './layouts/seeoneplant/';
$layout_info->title = '시원플란트치과 레이아웃';
$layout_info->description = NULL;
$layout_info->version = '1.0';
$layout_info->date = '00000000';
$layout_info->layout_srl = $layout_srl;
$layout_info->layout_title = $layout_title;
$layout_info->author[0]->name = NULL;
$layout_info->author[0]->email_address = '';
$layout_info->author[0]->homepage = NULL;
$layout_info->extra_var_count = 4;
$layout_info->extra_var->type->group = NULL;
$layout_info->extra_var->type->title = '레이아웃 타입';
$layout_info->extra_var->type->type = 'select';
$layout_info->extra_var->type->value = $vars->type;
$layout_info->extra_var->type->description = NULL;
$layout_info->extra_var->type->options[NULL]->val = '메인 레이아웃';
$layout_info->extra_var->type->options[NULL]->val = '서브 레이아웃';
$layout_info->extra_var->case_count->group = NULL;
$layout_info->extra_var->case_count->title = '누적 식립 건수';
$layout_info->extra_var->case_count->type = 'text';
$layout_info->extra_var->case_count->value = $vars->case_count;
$layout_info->extra_var->case_count->description = '임플란트 수술 누적 식립 건수를 입력해주세요.';
$layout_info->extra_var->case_year->group = NULL;
$layout_info->extra_var->case_year->title = '누적 식립 기준 년도';
$layout_info->extra_var->case_year->type = 'text';
$layout_info->extra_var->case_year->value = $vars->case_year;
$layout_info->extra_var->case_year->description = '임플란트 수술 누적 식립 기준 년도를 입력해주세요.';
$layout_info->extra_var->case_month->group = NULL;
$layout_info->extra_var->case_month->title = '누적 식립 기준 월';
$layout_info->extra_var->case_month->type = 'text';
$layout_info->extra_var->case_month->value = $vars->case_month;
$layout_info->extra_var->case_month->description = '임플란트 수술 누적 식립 기준 월을 입력해주세요.';
$layout_info->menu_count = 1;
$layout_info->default_menu = 'gnb';
$layout_info->menu->gnb->name = 'gnb';
$layout_info->menu->gnb->title = '상단 메뉴';
$layout_info->menu->gnb->maxdepth = NULL;
$layout_info->menu->gnb->menu_srl = $vars->gnb;
$layout_info->menu->gnb->xml_file = "./files/cache/menu/".$vars->gnb.".xml.php";
$layout_info->menu->gnb->php_file = "./files/cache/menu/".$vars->gnb.".php";