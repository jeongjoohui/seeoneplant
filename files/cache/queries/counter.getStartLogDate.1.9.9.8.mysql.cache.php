<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getStartLogDate");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('min(`regdate`)', '`regdate`')
));
$query->setTables(array(
new Table('`rx_counter_status`', '`counter_status`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`regdate`','1',"excess", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>