<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getComponent");
$query->setAction("select");
$query->setPriority("");

${'component_name41_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name41_argument'}->checkNotNull();
${'component_name41_argument'}->createConditionValue();
if(!${'component_name41_argument'}->isValid()) return ${'component_name41_argument'}->getErrorMessage();
if(${'component_name41_argument'} !== null) ${'component_name41_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`component_name`',$component_name41_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>