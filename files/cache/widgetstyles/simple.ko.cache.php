<?php if(!defined("__XE__")) exit();
$widgetStyle_info = new stdClass();
$widgetStyle_info->widgetStyle = 'simple';
$widgetStyle_info->path = './widgetstyles/simple/';
$widgetStyle_info->title = '심플 스트롱';
$widgetStyle_info->description = '선 하나만으로 꾸며진 위젯스타일 입니다.';
$widgetStyle_info->version = '1.7';
$widgetStyle_info->date = '20131127';
$widgetStyle_info->homepage = NULL;
$widgetStyle_info->license = NULL;
$widgetStyle_info->license_link = NULL;
$widgetStyle_info->preview = './widgetstyles/simple/preview.gif';
$widgetStyle_info->author[0] = new stdClass();
$widgetStyle_info->author[0]->name = 'NAVER';
$widgetStyle_info->author[0]->email_address = 'developers@xpressengine.com';
$widgetStyle_info->author[0]->homepage = 'http://xpressengine.com/';
$widgetStyle_info->extra_var = new stdClass();
$widgetStyle_info->extra_var->ws_colorset = new stdClass();
$widgetStyle_info->extra_var->ws_colorset->group = NULL;
$widgetStyle_info->extra_var->ws_colorset->name = '컬러셋';
$widgetStyle_info->extra_var->ws_colorset->type = 'select';
$widgetStyle_info->extra_var->ws_colorset->value = $vars->ws_colorset;
$widgetStyle_info->extra_var->ws_colorset->description = '컬러셋을 지정해주세요';
$widgetStyle_info->extra_var->ws_colorset->options['white'] = '하얀색';
$widgetStyle_info->extra_var->ws_colorset->options['black'] = '검은색';
$widgetStyle_info->extra_var->ws_title = new stdClass();
$widgetStyle_info->extra_var->ws_title->group = NULL;
$widgetStyle_info->extra_var->ws_title->name = '제목';
$widgetStyle_info->extra_var->ws_title->type = 'text';
$widgetStyle_info->extra_var->ws_title->value = $vars->ws_title;
$widgetStyle_info->extra_var->ws_title->description = '제목 텍스트';
$widgetStyle_info->extra_var->ws_more_url = new stdClass();
$widgetStyle_info->extra_var->ws_more_url->group = NULL;
$widgetStyle_info->extra_var->ws_more_url->name = '더보기 URL';
$widgetStyle_info->extra_var->ws_more_url->type = 'text';
$widgetStyle_info->extra_var->ws_more_url->value = $vars->ws_more_url;
$widgetStyle_info->extra_var->ws_more_url->description = 'http:// 포함한 URL를 등록합니다.';
$widgetStyle_info->extra_var->ws_more_text = new stdClass();
$widgetStyle_info->extra_var->ws_more_text->group = NULL;
$widgetStyle_info->extra_var->ws_more_text->name = '더보기 텍스트';
$widgetStyle_info->extra_var->ws_more_text->type = 'text';
$widgetStyle_info->extra_var->ws_more_text->value = $vars->ws_more_text;
$widgetStyle_info->extra_var->ws_more_text->description = '더보기 텍스트';
$widgetStyle_info->extra_var_count = 4;