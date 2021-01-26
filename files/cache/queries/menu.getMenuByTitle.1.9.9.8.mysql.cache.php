<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuByTitle");
$query->setAction("select");
$query->setPriority("");

${'title176_argument'} = new ConditionArgument('title', $args->title, 'in');
${'title176_argument'}->checkNotNull();
${'title176_argument'}->createConditionValue();
if(!${'title176_argument'}->isValid()) return ${'title176_argument'}->getErrorMessage();
if(${'title176_argument'} !== null) ${'title176_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl177_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl177_argument'}->checkFilter('number');
${'site_srl177_argument'}->createConditionValue();
if(!${'site_srl177_argument'}->isValid()) return ${'site_srl177_argument'}->getErrorMessage();
} else
${'site_srl177_argument'} = NULL;if(${'site_srl177_argument'} !== null) ${'site_srl177_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_menu`', '`menu`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`title`',$title176_argument,"in", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl177_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>