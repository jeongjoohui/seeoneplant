<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteSavedDoc");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl8_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl8_argument'}->createConditionValue();
if(!${'module_srl8_argument'}->isValid()) return ${'module_srl8_argument'}->getErrorMessage();
} else
${'module_srl8_argument'} = NULL;if(${'module_srl8_argument'} !== null) ${'module_srl8_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
} else
${'member_srl9_argument'} = NULL;if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress10_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress10_argument'}->createConditionValue();
if(!${'ipaddress10_argument'}->isValid()) return ${'ipaddress10_argument'}->getErrorMessage();
} else
${'ipaddress10_argument'} = NULL;if(${'ipaddress10_argument'} !== null) ${'ipaddress10_argument'}->setColumnType('varchar');
if(isset($args->certify_key)) {
${'certify_key11_argument'} = new ConditionArgument('certify_key', $args->certify_key, 'equal');
${'certify_key11_argument'}->createConditionValue();
if(!${'certify_key11_argument'}->isValid()) return ${'certify_key11_argument'}->getErrorMessage();
} else
${'certify_key11_argument'} = NULL;if(${'certify_key11_argument'} !== null) ${'certify_key11_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`rx_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl8_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress10_argument,"equal", 'and')
,new ConditionWithArgument('`certify_key`',$certify_key11_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>