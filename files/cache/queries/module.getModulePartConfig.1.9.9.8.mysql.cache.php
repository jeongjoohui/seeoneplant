<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module227_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module227_argument'}->checkNotNull();
${'module227_argument'}->createConditionValue();
if(!${'module227_argument'}->isValid()) return ${'module227_argument'}->getErrorMessage();
if(${'module227_argument'} !== null) ${'module227_argument'}->setColumnType('varchar');

${'module_srl228_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl228_argument'}->checkNotNull();
${'module_srl228_argument'}->createConditionValue();
if(!${'module_srl228_argument'}->isValid()) return ${'module_srl228_argument'}->getErrorMessage();
if(${'module_srl228_argument'} !== null) ${'module_srl228_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`rx_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module227_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl228_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>