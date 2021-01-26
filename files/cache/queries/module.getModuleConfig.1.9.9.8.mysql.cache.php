<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleConfig");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module)) {
${'module19_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module19_argument'}->createConditionValue();
if(!${'module19_argument'}->isValid()) return ${'module19_argument'}->getErrorMessage();
} else
${'module19_argument'} = NULL;if(${'module19_argument'} !== null) ${'module19_argument'}->setColumnType('varchar');
if(isset($args->site_srl)) {
${'site_srl20_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl20_argument'}->createConditionValue();
if(!${'site_srl20_argument'}->isValid()) return ${'site_srl20_argument'}->getErrorMessage();
} else
${'site_srl20_argument'} = NULL;if(${'site_srl20_argument'} !== null) ${'site_srl20_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`rx_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module19_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl20_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>