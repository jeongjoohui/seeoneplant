<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSavedDocument");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl267_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl267_argument'}->createConditionValue();
if(!${'module_srl267_argument'}->isValid()) return ${'module_srl267_argument'}->getErrorMessage();
} else
${'module_srl267_argument'} = NULL;if(${'module_srl267_argument'} !== null) ${'module_srl267_argument'}->setColumnType('number');
if(isset($args->member_srl)) {
${'member_srl268_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl268_argument'}->createConditionValue();
if(!${'member_srl268_argument'}->isValid()) return ${'member_srl268_argument'}->getErrorMessage();
} else
${'member_srl268_argument'} = NULL;if(${'member_srl268_argument'} !== null) ${'member_srl268_argument'}->setColumnType('number');
if(isset($args->ipaddress)) {
${'ipaddress269_argument'} = new ConditionArgument('ipaddress', $args->ipaddress, 'equal');
${'ipaddress269_argument'}->createConditionValue();
if(!${'ipaddress269_argument'}->isValid()) return ${'ipaddress269_argument'}->getErrorMessage();
} else
${'ipaddress269_argument'} = NULL;if(${'ipaddress269_argument'} !== null) ${'ipaddress269_argument'}->setColumnType('varchar');
if(isset($args->certify_key)) {
${'certify_key270_argument'} = new ConditionArgument('certify_key', $args->certify_key, 'equal');
${'certify_key270_argument'}->createConditionValue();
if(!${'certify_key270_argument'}->isValid()) return ${'certify_key270_argument'}->getErrorMessage();
} else
${'certify_key270_argument'} = NULL;if(${'certify_key270_argument'} !== null) ${'certify_key270_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_editor_autosave`', '`editor_autosave`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl267_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl268_argument,"equal", 'and')
,new ConditionWithArgument('`ipaddress`',$ipaddress269_argument,"equal", 'and')
,new ConditionWithArgument('`certify_key`',$certify_key270_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>