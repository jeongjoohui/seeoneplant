<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteTag");
$query->setAction("delete");
$query->setPriority("");

${'document_srl279_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl279_argument'}->checkFilter('number');
${'document_srl279_argument'}->checkNotNull();
${'document_srl279_argument'}->createConditionValue();
if(!${'document_srl279_argument'}->isValid()) return ${'document_srl279_argument'}->getErrorMessage();
if(${'document_srl279_argument'} !== null) ${'document_srl279_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`rx_tags`', '`tags`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl279_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>