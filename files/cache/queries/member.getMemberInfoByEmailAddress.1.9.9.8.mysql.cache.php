<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberInfoByEmailAddress");
$query->setAction("select");
$query->setPriority("");

${'email_address117_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address117_argument'}->checkNotNull();
${'email_address117_argument'}->createConditionValue();
if(!${'email_address117_argument'}->isValid()) return ${'email_address117_argument'}->getErrorMessage();
if(${'email_address117_argument'} !== null) ${'email_address117_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`email_address`',$email_address117_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>