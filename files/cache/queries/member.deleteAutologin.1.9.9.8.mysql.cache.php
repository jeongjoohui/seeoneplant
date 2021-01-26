<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAutologin");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->autologin_key)) {
${'autologin_key1_argument'} = new ConditionArgument('autologin_key', $args->autologin_key, 'equal');
${'autologin_key1_argument'}->createConditionValue();
if(!${'autologin_key1_argument'}->isValid()) return ${'autologin_key1_argument'}->getErrorMessage();
} else
${'autologin_key1_argument'} = NULL;if(${'autologin_key1_argument'} !== null) ${'autologin_key1_argument'}->setColumnType('varchar');
if(isset($args->not_autologin_key)) {
${'not_autologin_key2_argument'} = new ConditionArgument('not_autologin_key', $args->not_autologin_key, 'notequal');
${'not_autologin_key2_argument'}->createConditionValue();
if(!${'not_autologin_key2_argument'}->isValid()) return ${'not_autologin_key2_argument'}->getErrorMessage();
} else
${'not_autologin_key2_argument'} = NULL;if(${'not_autologin_key2_argument'} !== null) ${'not_autologin_key2_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`rx_member_autologin`', '`member_autologin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`autologin_key`',$autologin_key1_argument,"equal", 'and')
,new ConditionWithArgument('`autologin_key`',$not_autologin_key2_argument,"notequal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl3_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>