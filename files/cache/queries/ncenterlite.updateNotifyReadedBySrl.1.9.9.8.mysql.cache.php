<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateNotifyReadedBySrl");
$query->setAction("update");
$query->setPriority("");

${'member_srl35_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl35_argument'}->checkFilter('number');
${'member_srl35_argument'}->checkNotNull();
${'member_srl35_argument'}->createConditionValue();
if(!${'member_srl35_argument'}->isValid()) return ${'member_srl35_argument'}->getErrorMessage();
if(${'member_srl35_argument'} !== null) ${'member_srl35_argument'}->setColumnType('number');

${'srl36_argument'} = new ConditionArgument('srl', $args->srl, 'equal');
${'srl36_argument'}->checkFilter('number');
${'srl36_argument'}->checkNotNull();
${'srl36_argument'}->createConditionValue();
if(!${'srl36_argument'}->isValid()) return ${'srl36_argument'}->getErrorMessage();
if(${'srl36_argument'} !== null) ${'srl36_argument'}->setColumnType('number');
if(isset($args->type)) {
${'type37_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type37_argument'}->createConditionValue();
if(!${'type37_argument'}->isValid()) return ${'type37_argument'}->getErrorMessage();
} else
${'type37_argument'} = NULL;if(${'type37_argument'} !== null) ${'type37_argument'}->setColumnType('char');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`readed`', "'Y'")
));
$query->setTables(array(
new Table('`rx_ncenterlite_notify`', '`ncenterlite_notify`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl35_argument,"equal", 'and')
,new ConditionWithArgument('`srl`',$srl36_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type37_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>