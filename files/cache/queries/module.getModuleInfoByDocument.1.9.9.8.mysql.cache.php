<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleInfoByDocument");
$query->setAction("select");
$query->setPriority("");

${'document_srl274_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl274_argument'}->checkNotNull();
${'document_srl274_argument'}->createConditionValue();
if(!${'document_srl274_argument'}->isValid()) return ${'document_srl274_argument'}->getErrorMessage();
if(${'document_srl274_argument'} !== null) ${'document_srl274_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.*')
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
,new Table('`rx_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`documents`.`document_srl`',$document_srl274_argument,"equal", 'and')
,new ConditionWithoutArgument('`modules`.`module_srl`','`documents`.`module_srl`',"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>