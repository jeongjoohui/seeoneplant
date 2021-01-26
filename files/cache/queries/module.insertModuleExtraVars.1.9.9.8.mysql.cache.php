<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'module_srl205_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl205_argument'}->checkFilter('number');
${'module_srl205_argument'}->checkNotNull();
if(!${'module_srl205_argument'}->isValid()) return ${'module_srl205_argument'}->getErrorMessage();
if(${'module_srl205_argument'} !== null) ${'module_srl205_argument'}->setColumnType('number');

${'name206_argument'} = new Argument('name', $args->{'name'});
${'name206_argument'}->checkNotNull();
if(!${'name206_argument'}->isValid()) return ${'name206_argument'}->getErrorMessage();
if(${'name206_argument'} !== null) ${'name206_argument'}->setColumnType('varchar');

${'value207_argument'} = new Argument('value', $args->{'value'});
${'value207_argument'}->checkNotNull();
if(!${'value207_argument'}->isValid()) return ${'value207_argument'}->getErrorMessage();
if(${'value207_argument'} !== null) ${'value207_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`module_srl`', ${'module_srl205_argument'})
,new InsertExpression('`name`', ${'name206_argument'})
,new InsertExpression('`value`', ${'value207_argument'})
));
$query->setTables(array(
new Table('`rx_module_extra_vars`', '`module_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>