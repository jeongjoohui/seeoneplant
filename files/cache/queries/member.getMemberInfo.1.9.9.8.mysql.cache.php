<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfo");
$query->setAction("select");
$query->setPriority("");

${'user_id7_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id7_argument'}->checkNotNull();
${'user_id7_argument'}->createConditionValue();
if(!${'user_id7_argument'}->isValid()) return ${'user_id7_argument'}->getErrorMessage();
if(${'user_id7_argument'} !== null) ${'user_id7_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id7_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>