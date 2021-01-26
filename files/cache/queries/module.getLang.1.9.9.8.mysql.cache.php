<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLang");
$query->setAction("select");
$query->setPriority("");

${'site_srl6_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl6_argument'}->checkFilter('number');
${'site_srl6_argument'}->checkNotNull();
${'site_srl6_argument'}->createConditionValue();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name7_argument'} = new ConditionArgument('name', $args->name, 'equal');
${'name7_argument'}->createConditionValue();
if(!${'name7_argument'}->isValid()) return ${'name7_argument'}->getErrorMessage();
} else
${'name7_argument'} = NULL;if(${'name7_argument'} !== null) ${'name7_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_lang`', '`lang`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl6_argument,"equal", 'and')
,new ConditionWithArgument('`name`',$name7_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>