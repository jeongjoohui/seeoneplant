<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateGroupDefaultClear");
$query->setAction("update");
$query->setPriority("");

${'site_srl54_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl54_argument'}->ensureDefaultValue('0');
${'site_srl54_argument'}->checkNotNull();
${'site_srl54_argument'}->createConditionValue();
if(!${'site_srl54_argument'}->isValid()) return ${'site_srl54_argument'}->getErrorMessage();
if(${'site_srl54_argument'} !== null) ${'site_srl54_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`is_default`', "'N'")
));
$query->setTables(array(
new Table('`rx_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl54_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>