<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPoint");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl276_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl276_argument'}->createConditionValue();
if(!${'member_srl276_argument'}->isValid()) return ${'member_srl276_argument'}->getErrorMessage();
} else
${'member_srl276_argument'} = NULL;if(${'member_srl276_argument'} !== null) ${'member_srl276_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl276_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>