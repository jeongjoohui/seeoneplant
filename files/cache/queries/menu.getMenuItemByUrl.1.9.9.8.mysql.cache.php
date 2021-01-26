<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItemByUrl");
$query->setAction("select");
$query->setPriority("");

${'url303_argument'} = new ConditionArgument('url', $args->url, 'equal');
${'url303_argument'}->checkNotNull();
${'url303_argument'}->createConditionValue();
if(!${'url303_argument'}->isValid()) return ${'url303_argument'}->getErrorMessage();
if(${'url303_argument'} !== null) ${'url303_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut304_argument'} = new ConditionArgument('is_shortcut', $args->is_shortcut, 'equal');
${'is_shortcut304_argument'}->createConditionValue();
if(!${'is_shortcut304_argument'}->isValid()) return ${'is_shortcut304_argument'}->getErrorMessage();
} else
${'is_shortcut304_argument'} = NULL;if(${'is_shortcut304_argument'} !== null) ${'is_shortcut304_argument'}->setColumnType('char');

${'site_srl305_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl305_argument'}->checkNotNull();
${'site_srl305_argument'}->createConditionValue();
if(!${'site_srl305_argument'}->isValid()) return ${'site_srl305_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_menu_item`', '`MI`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('MI.`url`',$url303_argument,"equal", 'and')
,new ConditionWithArgument('MI.`is_shortcut`',$is_shortcut304_argument,"equal", 'and')
,new ConditionSubquery('MI.`menu_srl`',new Subquery('`getSiteSrl`', array(
new SelectExpression('`menu_srl`')
), 
array(
new Table('`rx_menu`', '`M`')
),
array(
new ConditionGroup(array(
new ConditionWithArgument('M.`site_srl`',$site_srl305_argument,"equal", 'and')),'and')
),
array(),
array(),
null
),"in", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>