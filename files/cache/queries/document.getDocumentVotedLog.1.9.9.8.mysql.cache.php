<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentVotedLog");
$query->setAction("select");
$query->setPriority("");

${'document_srl38_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl38_argument'}->checkFilter('number');
${'document_srl38_argument'}->checkNotNull();
${'document_srl38_argument'}->createConditionValue();
if(!${'document_srl38_argument'}->isValid()) return ${'document_srl38_argument'}->getErrorMessage();
if(${'document_srl38_argument'} !== null) ${'document_srl38_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl39_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl39_argument'}->checkFilter('number');
${'member_srl39_argument'}->createConditionValue();
if(!${'member_srl39_argument'}->isValid()) return ${'member_srl39_argument'}->getErrorMessage();
} else
${'member_srl39_argument'} = NULL;if(${'member_srl39_argument'} !== null) ${'member_srl39_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress40_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress40_argument'}->createConditionValue();
if(!${'ipaddress40_argument'}->isValid()) return ${'ipaddress40_argument'}->getErrorMessage();
} else
${'ipaddress40_argument'} = NULL;if(${'ipaddress40_argument'} !== null) ${'ipaddress40_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_document_voted_log`', '`document_voted_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl38_argument,"equal", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl39_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress40_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>