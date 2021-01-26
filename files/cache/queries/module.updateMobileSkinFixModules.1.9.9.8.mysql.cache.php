<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMobileSkinFixModules");
$query->setAction("update");
$query->setPriority("");

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`is_mskin_fix`', "'Y'")
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`mskin`','``',"notnull", 'and')
,new ConditionWithoutArgument('`mskin`',"' '","notequal", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>