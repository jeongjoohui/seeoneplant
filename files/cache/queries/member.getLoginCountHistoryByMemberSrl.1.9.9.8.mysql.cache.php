<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountHistoryByMemberSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl125_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl125_argument'}->createConditionValue();
if(!${'member_srl125_argument'}->isValid()) return ${'member_srl125_argument'}->getErrorMessage();
} else
${'member_srl125_argument'} = NULL;if(${'member_srl125_argument'} !== null) ${'member_srl125_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_member_count_history`', '`member_count_history`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl125_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>