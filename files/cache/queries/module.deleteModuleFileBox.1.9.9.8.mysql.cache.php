<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteModuleFileBox");
$query->setAction("delete");
$query->setPriority("");

${'module_filebox_srl2_argument'} = new ConditionArgument('module_filebox_srl', $args->module_filebox_srl, 'equal');
${'module_filebox_srl2_argument'}->checkFilter('number');
${'module_filebox_srl2_argument'}->checkNotNull();
${'module_filebox_srl2_argument'}->createConditionValue();
if(!${'module_filebox_srl2_argument'}->isValid()) return ${'module_filebox_srl2_argument'}->getErrorMessage();
if(${'module_filebox_srl2_argument'} !== null) ${'module_filebox_srl2_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`rx_module_filebox`', '`module_filebox`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_filebox_srl`',$module_filebox_srl2_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>