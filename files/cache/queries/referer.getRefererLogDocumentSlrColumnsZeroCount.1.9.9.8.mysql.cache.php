<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRefererLogDocumentSlrColumnsZeroCount");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_referer_log`', '`referer_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`ref_document_srl`','0',"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>