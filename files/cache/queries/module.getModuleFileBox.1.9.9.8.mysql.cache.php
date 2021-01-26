<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleFileBox");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_filebox_srl)) {
${'module_filebox_srl1_argument'} = new ConditionArgument('module_filebox_srl', $args->module_filebox_srl, 'equal');
${'module_filebox_srl1_argument'}->checkFilter('number');
${'module_filebox_srl1_argument'}->createConditionValue();
if(!${'module_filebox_srl1_argument'}->isValid()) return ${'module_filebox_srl1_argument'}->getErrorMessage();
} else
${'module_filebox_srl1_argument'} = NULL;if(${'module_filebox_srl1_argument'} !== null) ${'module_filebox_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_module_filebox`', '`module_filebox`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_filebox_srl`',$module_filebox_srl1_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>