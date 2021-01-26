<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl182_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl182_argument'}->ensureDefaultValue('0');
${'site_srl182_argument'}->checkNotNull();
if(!${'site_srl182_argument'}->isValid()) return ${'site_srl182_argument'}->getErrorMessage();
if(${'site_srl182_argument'} !== null) ${'site_srl182_argument'}->setColumnType('number');

${'module_srl183_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl183_argument'}->checkNotNull();
if(!${'module_srl183_argument'}->isValid()) return ${'module_srl183_argument'}->getErrorMessage();
if(${'module_srl183_argument'} !== null) ${'module_srl183_argument'}->setColumnType('number');

${'module_category_srl184_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl184_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl184_argument'}->isValid()) return ${'module_category_srl184_argument'}->getErrorMessage();
if(${'module_category_srl184_argument'} !== null) ${'module_category_srl184_argument'}->setColumnType('number');

${'mid185_argument'} = new Argument('mid', $args->{'mid'});
${'mid185_argument'}->checkNotNull();
if(!${'mid185_argument'}->isValid()) return ${'mid185_argument'}->getErrorMessage();
if(${'mid185_argument'} !== null) ${'mid185_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin186_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin186_argument'}->isValid()) return ${'skin186_argument'}->getErrorMessage();
} else
${'skin186_argument'} = NULL;if(${'skin186_argument'} !== null) ${'skin186_argument'}->setColumnType('varchar');

${'is_skin_fix187_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix187_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix187_argument'}->isValid()) return ${'is_skin_fix187_argument'}->getErrorMessage();
if(${'is_skin_fix187_argument'} !== null) ${'is_skin_fix187_argument'}->setColumnType('char');

${'is_mskin_fix188_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix188_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix188_argument'}->isValid()) return ${'is_mskin_fix188_argument'}->getErrorMessage();
if(${'is_mskin_fix188_argument'} !== null) ${'is_mskin_fix188_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin189_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin189_argument'}->isValid()) return ${'mskin189_argument'}->getErrorMessage();
} else
${'mskin189_argument'} = NULL;if(${'mskin189_argument'} !== null) ${'mskin189_argument'}->setColumnType('varchar');

${'browser_title190_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title190_argument'}->checkNotNull();
if(!${'browser_title190_argument'}->isValid()) return ${'browser_title190_argument'}->getErrorMessage();
if(${'browser_title190_argument'} !== null) ${'browser_title190_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl191_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl191_argument'}->isValid()) return ${'layout_srl191_argument'}->getErrorMessage();
} else
${'layout_srl191_argument'} = NULL;if(${'layout_srl191_argument'} !== null) ${'layout_srl191_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description192_argument'} = new Argument('description', $args->{'description'});
if(!${'description192_argument'}->isValid()) return ${'description192_argument'}->getErrorMessage();
} else
${'description192_argument'} = NULL;if(${'description192_argument'} !== null) ${'description192_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content193_argument'} = new Argument('content', $args->{'content'});
if(!${'content193_argument'}->isValid()) return ${'content193_argument'}->getErrorMessage();
} else
${'content193_argument'} = NULL;if(${'content193_argument'} !== null) ${'content193_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent194_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent194_argument'}->isValid()) return ${'mcontent194_argument'}->getErrorMessage();
} else
${'mcontent194_argument'} = NULL;if(${'mcontent194_argument'} !== null) ${'mcontent194_argument'}->setColumnType('bigtext');

${'module195_argument'} = new Argument('module', $args->{'module'});
${'module195_argument'}->checkNotNull();
if(!${'module195_argument'}->isValid()) return ${'module195_argument'}->getErrorMessage();
if(${'module195_argument'} !== null) ${'module195_argument'}->setColumnType('varchar');

${'is_default196_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default196_argument'}->ensureDefaultValue('N');
${'is_default196_argument'}->checkNotNull();
if(!${'is_default196_argument'}->isValid()) return ${'is_default196_argument'}->getErrorMessage();
if(${'is_default196_argument'} !== null) ${'is_default196_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl197_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl197_argument'}->checkFilter('number');
if(!${'menu_srl197_argument'}->isValid()) return ${'menu_srl197_argument'}->getErrorMessage();
} else
${'menu_srl197_argument'} = NULL;if(${'menu_srl197_argument'} !== null) ${'menu_srl197_argument'}->setColumnType('number');

${'open_rss198_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss198_argument'}->ensureDefaultValue('Y');
${'open_rss198_argument'}->checkNotNull();
if(!${'open_rss198_argument'}->isValid()) return ${'open_rss198_argument'}->getErrorMessage();
if(${'open_rss198_argument'} !== null) ${'open_rss198_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text199_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text199_argument'}->isValid()) return ${'header_text199_argument'}->getErrorMessage();
} else
${'header_text199_argument'} = NULL;if(${'header_text199_argument'} !== null) ${'header_text199_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text200_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text200_argument'}->isValid()) return ${'footer_text200_argument'}->getErrorMessage();
} else
${'footer_text200_argument'} = NULL;if(${'footer_text200_argument'} !== null) ${'footer_text200_argument'}->setColumnType('text');

${'regdate201_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate201_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate201_argument'}->isValid()) return ${'regdate201_argument'}->getErrorMessage();
if(${'regdate201_argument'} !== null) ${'regdate201_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl202_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl202_argument'}->isValid()) return ${'mlayout_srl202_argument'}->getErrorMessage();
} else
${'mlayout_srl202_argument'} = NULL;if(${'mlayout_srl202_argument'} !== null) ${'mlayout_srl202_argument'}->setColumnType('number');

${'use_mobile203_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile203_argument'}->ensureDefaultValue('N');
if(!${'use_mobile203_argument'}->isValid()) return ${'use_mobile203_argument'}->getErrorMessage();
if(${'use_mobile203_argument'} !== null) ${'use_mobile203_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl182_argument'})
,new InsertExpression('`module_srl`', ${'module_srl183_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl184_argument'})
,new InsertExpression('`mid`', ${'mid185_argument'})
,new InsertExpression('`skin`', ${'skin186_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix187_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix188_argument'})
,new InsertExpression('`mskin`', ${'mskin189_argument'})
,new InsertExpression('`browser_title`', ${'browser_title190_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl191_argument'})
,new InsertExpression('`description`', ${'description192_argument'})
,new InsertExpression('`content`', ${'content193_argument'})
,new InsertExpression('`mcontent`', ${'mcontent194_argument'})
,new InsertExpression('`module`', ${'module195_argument'})
,new InsertExpression('`is_default`', ${'is_default196_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl197_argument'})
,new InsertExpression('`open_rss`', ${'open_rss198_argument'})
,new InsertExpression('`header_text`', ${'header_text199_argument'})
,new InsertExpression('`footer_text`', ${'footer_text200_argument'})
,new InsertExpression('`regdate`', ${'regdate201_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl202_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile203_argument'})
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>