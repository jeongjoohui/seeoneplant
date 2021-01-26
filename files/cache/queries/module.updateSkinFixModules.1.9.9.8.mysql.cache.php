<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSkinFixModules");
$query->setAction("update");
$query->setPriority("");

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`is_skin_fix`', "'Y'")
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`skin`','``',"notnull", 'and')
,new ConditionWithoutArgument('`skin`',"' '","notequal", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>