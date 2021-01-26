<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCounterLogStatus");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

${'start_date2_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date2_argument'}->checkNotNull();
${'start_date2_argument'}->createConditionValue();
if(!${'start_date2_argument'}->isValid()) return ${'start_date2_argument'}->getErrorMessage();
if(${'start_date2_argument'} !== null) ${'start_date2_argument'}->setColumnType('date');

${'end_date3_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date3_argument'}->checkNotNull();
${'end_date3_argument'}->createConditionValue();
if(!${'end_date3_argument'}->isValid()) return ${'end_date3_argument'}->getErrorMessage();
if(${'end_date3_argument'} !== null) ${'end_date3_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_counter_log`', '`counter_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`regdate`',$start_date2_argument,"more", 'and')
,new ConditionWithArgument('`regdate`',$end_date3_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>