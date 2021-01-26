<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleConfig");
$query->setAction("delete");
$query->setPriority("");

${'module23_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module23_argument'}->checkNotNull();
${'module23_argument'}->createConditionValue();
if(!${'module23_argument'}->isValid()) return ${'module23_argument'}->getErrorMessage();
if(${'module23_argument'} !== null) ${'module23_argument'}->setColumnType('varchar');

${'site_srl24_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl24_argument'}->checkNotNull();
${'site_srl24_argument'}->createConditionValue();
if(!${'site_srl24_argument'}->isValid()) return ${'site_srl24_argument'}->getErrorMessage();
if(${'site_srl24_argument'} !== null) ${'site_srl24_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`rx_module_config`', '`module_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module23_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl24_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>