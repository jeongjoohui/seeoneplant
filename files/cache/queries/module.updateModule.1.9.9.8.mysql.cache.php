<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module282_argument'} = new Argument('module', $args->{'module'});
${'module282_argument'}->checkNotNull();
if(!${'module282_argument'}->isValid()) return ${'module282_argument'}->getErrorMessage();
if(${'module282_argument'} !== null) ${'module282_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl283_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl283_argument'}->isValid()) return ${'module_category_srl283_argument'}->getErrorMessage();
} else
${'module_category_srl283_argument'} = NULL;if(${'module_category_srl283_argument'} !== null) ${'module_category_srl283_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl284_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl284_argument'}->isValid()) return ${'layout_srl284_argument'}->getErrorMessage();
} else
${'layout_srl284_argument'} = NULL;if(${'layout_srl284_argument'} !== null) ${'layout_srl284_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin285_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin285_argument'}->isValid()) return ${'skin285_argument'}->getErrorMessage();
} else
${'skin285_argument'} = NULL;if(${'skin285_argument'} !== null) ${'skin285_argument'}->setColumnType('varchar');

${'is_skin_fix286_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix286_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix286_argument'}->isValid()) return ${'is_skin_fix286_argument'}->getErrorMessage();
if(${'is_skin_fix286_argument'} !== null) ${'is_skin_fix286_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin287_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin287_argument'}->isValid()) return ${'mskin287_argument'}->getErrorMessage();
} else
${'mskin287_argument'} = NULL;if(${'mskin287_argument'} !== null) ${'mskin287_argument'}->setColumnType('varchar');

${'is_mskin_fix288_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix288_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix288_argument'}->isValid()) return ${'is_mskin_fix288_argument'}->getErrorMessage();
if(${'is_mskin_fix288_argument'} !== null) ${'is_mskin_fix288_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl289_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl289_argument'}->checkFilter('number');
if(!${'menu_srl289_argument'}->isValid()) return ${'menu_srl289_argument'}->getErrorMessage();
} else
${'menu_srl289_argument'} = NULL;if(${'menu_srl289_argument'} !== null) ${'menu_srl289_argument'}->setColumnType('number');

${'mid290_argument'} = new Argument('mid', $args->{'mid'});
${'mid290_argument'}->checkNotNull();
if(!${'mid290_argument'}->isValid()) return ${'mid290_argument'}->getErrorMessage();
if(${'mid290_argument'} !== null) ${'mid290_argument'}->setColumnType('varchar');

${'browser_title291_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title291_argument'}->checkNotNull();
if(!${'browser_title291_argument'}->isValid()) return ${'browser_title291_argument'}->getErrorMessage();
if(${'browser_title291_argument'} !== null) ${'browser_title291_argument'}->setColumnType('varchar');

${'description292_argument'} = new Argument('description', $args->{'description'});
${'description292_argument'}->ensureDefaultValue('');
if(!${'description292_argument'}->isValid()) return ${'description292_argument'}->getErrorMessage();
if(${'description292_argument'} !== null) ${'description292_argument'}->setColumnType('text');

${'is_default293_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default293_argument'}->ensureDefaultValue('N');
${'is_default293_argument'}->checkNotNull();
if(!${'is_default293_argument'}->isValid()) return ${'is_default293_argument'}->getErrorMessage();
if(${'is_default293_argument'} !== null) ${'is_default293_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content294_argument'} = new Argument('content', $args->{'content'});
if(!${'content294_argument'}->isValid()) return ${'content294_argument'}->getErrorMessage();
} else
${'content294_argument'} = NULL;if(${'content294_argument'} !== null) ${'content294_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent295_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent295_argument'}->isValid()) return ${'mcontent295_argument'}->getErrorMessage();
} else
${'mcontent295_argument'} = NULL;if(${'mcontent295_argument'} !== null) ${'mcontent295_argument'}->setColumnType('bigtext');

${'open_rss296_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss296_argument'}->ensureDefaultValue('Y');
${'open_rss296_argument'}->checkNotNull();
if(!${'open_rss296_argument'}->isValid()) return ${'open_rss296_argument'}->getErrorMessage();
if(${'open_rss296_argument'} !== null) ${'open_rss296_argument'}->setColumnType('char');

${'header_text297_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text297_argument'}->ensureDefaultValue('');
if(!${'header_text297_argument'}->isValid()) return ${'header_text297_argument'}->getErrorMessage();
if(${'header_text297_argument'} !== null) ${'header_text297_argument'}->setColumnType('text');

${'footer_text298_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text298_argument'}->ensureDefaultValue('');
if(!${'footer_text298_argument'}->isValid()) return ${'footer_text298_argument'}->getErrorMessage();
if(${'footer_text298_argument'} !== null) ${'footer_text298_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl299_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl299_argument'}->isValid()) return ${'mlayout_srl299_argument'}->getErrorMessage();
} else
${'mlayout_srl299_argument'} = NULL;if(${'mlayout_srl299_argument'} !== null) ${'mlayout_srl299_argument'}->setColumnType('number');

${'use_mobile300_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile300_argument'}->ensureDefaultValue('N');
if(!${'use_mobile300_argument'}->isValid()) return ${'use_mobile300_argument'}->getErrorMessage();
if(${'use_mobile300_argument'} !== null) ${'use_mobile300_argument'}->setColumnType('char');

${'site_srl301_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl301_argument'}->checkFilter('number');
${'site_srl301_argument'}->ensureDefaultValue('0');
${'site_srl301_argument'}->checkNotNull();
${'site_srl301_argument'}->createConditionValue();
if(!${'site_srl301_argument'}->isValid()) return ${'site_srl301_argument'}->getErrorMessage();
if(${'site_srl301_argument'} !== null) ${'site_srl301_argument'}->setColumnType('number');

${'module_srl302_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl302_argument'}->checkFilter('number');
${'module_srl302_argument'}->checkNotNull();
${'module_srl302_argument'}->createConditionValue();
if(!${'module_srl302_argument'}->isValid()) return ${'module_srl302_argument'}->getErrorMessage();
if(${'module_srl302_argument'} !== null) ${'module_srl302_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module282_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl283_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl284_argument'})
,new UpdateExpression('`skin`', ${'skin285_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix286_argument'})
,new UpdateExpression('`mskin`', ${'mskin287_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix288_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl289_argument'})
,new UpdateExpression('`mid`', ${'mid290_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title291_argument'})
,new UpdateExpression('`description`', ${'description292_argument'})
,new UpdateExpression('`is_default`', ${'is_default293_argument'})
,new UpdateExpression('`content`', ${'content294_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent295_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss296_argument'})
,new UpdateExpression('`header_text`', ${'header_text297_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text298_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl299_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile300_argument'})
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl301_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl302_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>