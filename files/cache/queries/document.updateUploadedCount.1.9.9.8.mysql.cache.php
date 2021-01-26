<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateUploadedCount");
$query->setAction("update");
$query->setPriority("");

${'uploaded_count12_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count12_argument'}->checkFilter('number');
${'uploaded_count12_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count12_argument'}->isValid()) return ${'uploaded_count12_argument'}->getErrorMessage();
if(${'uploaded_count12_argument'} !== null) ${'uploaded_count12_argument'}->setColumnType('number');

${'document_srl13_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl13_argument'}->checkFilter('number');
${'document_srl13_argument'}->checkNotNull();
${'document_srl13_argument'}->createConditionValue();
if(!${'document_srl13_argument'}->isValid()) return ${'document_srl13_argument'}->getErrorMessage();
if(${'document_srl13_argument'} !== null) ${'document_srl13_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`uploaded_count`', ${'uploaded_count12_argument'})
));
$query->setTables(array(
new Table('`rx_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl13_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>