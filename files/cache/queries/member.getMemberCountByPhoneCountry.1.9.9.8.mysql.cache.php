<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberCountByPhoneCountry");
$query->setAction("select");
$query->setPriority("");

${'phone_country131_argument'} = new ConditionArgument('phone_country', $args->phone_country, 'equal');
${'phone_country131_argument'}->checkNotNull();
${'phone_country131_argument'}->createConditionValue();
if(!${'phone_country131_argument'}->isValid()) return ${'phone_country131_argument'}->getErrorMessage();
if(${'phone_country131_argument'} !== null) ${'phone_country131_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`phone_country`',$phone_country131_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>