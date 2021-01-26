<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isComponentInserted");
$query->setAction("select");
$query->setPriority("");

${'component_name140_argument'} = new ConditionArgument('component_name', $args->component_name, 'equal');
${'component_name140_argument'}->checkNotNull();
${'component_name140_argument'}->createConditionValue();
if(!${'component_name140_argument'}->isValid()) return ${'component_name140_argument'}->getErrorMessage();
if(${'component_name140_argument'} !== null) ${'component_name140_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_editor_components`', '`editor_components`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`component_name`',$component_name140_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>