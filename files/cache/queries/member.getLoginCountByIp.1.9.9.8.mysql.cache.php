<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLoginCountByIp");
$query->setAction("select");
$query->setPriority("");
if(isset($args->ipaddress)) {
${'ipaddress121_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress121_argument'}->createConditionValue();
if(!${'ipaddress121_argument'}->isValid()) return ${'ipaddress121_argument'}->getErrorMessage();
} else
${'ipaddress121_argument'} = NULL;if(${'ipaddress121_argument'} !== null) ${'ipaddress121_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_member_login_count`', '`member_login_count`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`ipaddress`',$ipaddress121_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>