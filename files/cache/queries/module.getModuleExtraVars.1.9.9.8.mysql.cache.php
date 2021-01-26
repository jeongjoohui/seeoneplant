<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleExtraVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl229_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl229_argument'}->checkNotNull();
${'module_srl229_argument'}->createConditionValue();
if(!${'module_srl229_argument'}->isValid()) return ${'module_srl229_argument'}->getErrorMessage();
if(${'module_srl229_argument'} !== null) ${'module_srl229_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl229_argument,"in", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>