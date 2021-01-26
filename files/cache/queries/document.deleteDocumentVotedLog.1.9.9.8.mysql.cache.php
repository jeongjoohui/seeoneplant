<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentVotedLog");
$query->setAction("delete");
$query->setPriority("");

${'document_srl20_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl20_argument'}->checkFilter('number');
${'document_srl20_argument'}->checkNotNull();
${'document_srl20_argument'}->createConditionValue();
if(!${'document_srl20_argument'}->isValid()) return ${'document_srl20_argument'}->getErrorMessage();
if(${'document_srl20_argument'} !== null) ${'document_srl20_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl21_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl21_argument'}->checkFilter('number');
${'member_srl21_argument'}->createConditionValue();
if(!${'member_srl21_argument'}->isValid()) return ${'member_srl21_argument'}->getErrorMessage();
} else
${'member_srl21_argument'} = NULL;if(${'member_srl21_argument'} !== null) ${'member_srl21_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`rx_document_voted_log`', '`document_voted_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl20_argument,"in", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl21_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>