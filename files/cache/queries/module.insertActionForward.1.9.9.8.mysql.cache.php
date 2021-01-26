<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertActionForward");
$query->setAction("insert");
$query->setPriority("");

${'act144_argument'} = new Argument('act', $args->{'act'});
${'act144_argument'}->checkNotNull();
if(!${'act144_argument'}->isValid()) return ${'act144_argument'}->getErrorMessage();
if(${'act144_argument'} !== null) ${'act144_argument'}->setColumnType('varchar');

${'module145_argument'} = new Argument('module', $args->{'module'});
${'module145_argument'}->checkNotNull();
if(!${'module145_argument'}->isValid()) return ${'module145_argument'}->getErrorMessage();
if(${'module145_argument'} !== null) ${'module145_argument'}->setColumnType('varchar');

${'type146_argument'} = new Argument('type', $args->{'type'});
${'type146_argument'}->checkNotNull();
if(!${'type146_argument'}->isValid()) return ${'type146_argument'}->getErrorMessage();
if(${'type146_argument'} !== null) ${'type146_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`act`', ${'act144_argument'})
,new InsertExpression('`module`', ${'module145_argument'})
,new InsertExpression('`type`', ${'type146_argument'})
));
$query->setTables(array(
new Table('`rx_action_forward`', '`action_forward`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>