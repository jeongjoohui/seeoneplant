<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getActionForward");
$query->setAction("select");
$query->setPriority("");
if(isset($args->act)) {
${'act126_argument'} = new ConditionArgument('act', $args->act, 'equal');
${'act126_argument'}->createConditionValue();
if(!${'act126_argument'}->isValid()) return ${'act126_argument'}->getErrorMessage();
} else
${'act126_argument'} = NULL;if(${'act126_argument'} !== null) ${'act126_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_action_forward`', '`action_forward`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`act`',$act126_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>