<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteNotifyBySrl");
$query->setAction("delete");
$query->setPriority("");

${'srl14_argument'} = new ConditionArgument('srl', $args->srl, 'equal');
${'srl14_argument'}->checkFilter('number');
${'srl14_argument'}->checkNotNull();
${'srl14_argument'}->createConditionValue();
if(!${'srl14_argument'}->isValid()) return ${'srl14_argument'}->getErrorMessage();
if(${'srl14_argument'} !== null) ${'srl14_argument'}->setColumnType('number');

${'srl15_argument'} = new ConditionArgument('srl', $args->srl, 'equal');
${'srl15_argument'}->checkFilter('number');
${'srl15_argument'}->checkNotNull();
${'srl15_argument'}->createConditionValue();
if(!${'srl15_argument'}->isValid()) return ${'srl15_argument'}->getErrorMessage();
if(${'srl15_argument'} !== null) ${'srl15_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`rx_ncenterlite_notify`', '`ncenterlite_notify`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`srl`',$srl14_argument,"equal", 'and')
,new ConditionWithArgument('`target_srl`',$srl15_argument,"equal", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>