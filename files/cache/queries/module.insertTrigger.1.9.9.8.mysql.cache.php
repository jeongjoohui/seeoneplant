<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertTrigger");
$query->setAction("insert");
$query->setPriority("");

${'trigger_name29_argument'} = new Argument('trigger_name', $args->{'trigger_name'});
${'trigger_name29_argument'}->checkNotNull();
if(!${'trigger_name29_argument'}->isValid()) return ${'trigger_name29_argument'}->getErrorMessage();
if(${'trigger_name29_argument'} !== null) ${'trigger_name29_argument'}->setColumnType('varchar');

${'module30_argument'} = new Argument('module', $args->{'module'});
${'module30_argument'}->checkNotNull();
if(!${'module30_argument'}->isValid()) return ${'module30_argument'}->getErrorMessage();
if(${'module30_argument'} !== null) ${'module30_argument'}->setColumnType('varchar');

${'type31_argument'} = new Argument('type', $args->{'type'});
${'type31_argument'}->checkNotNull();
if(!${'type31_argument'}->isValid()) return ${'type31_argument'}->getErrorMessage();
if(${'type31_argument'} !== null) ${'type31_argument'}->setColumnType('varchar');

${'called_method32_argument'} = new Argument('called_method', $args->{'called_method'});
${'called_method32_argument'}->checkNotNull();
if(!${'called_method32_argument'}->isValid()) return ${'called_method32_argument'}->getErrorMessage();
if(${'called_method32_argument'} !== null) ${'called_method32_argument'}->setColumnType('varchar');

${'called_position33_argument'} = new Argument('called_position', $args->{'called_position'});
${'called_position33_argument'}->checkNotNull();
if(!${'called_position33_argument'}->isValid()) return ${'called_position33_argument'}->getErrorMessage();
if(${'called_position33_argument'} !== null) ${'called_position33_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`trigger_name`', ${'trigger_name29_argument'})
,new InsertExpression('`module`', ${'module30_argument'})
,new InsertExpression('`type`', ${'type31_argument'})
,new InsertExpression('`called_method`', ${'called_method32_argument'})
,new InsertExpression('`called_position`', ${'called_position33_argument'})
));
$query->setTables(array(
new Table('`rx_module_trigger`', '`module_trigger`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>