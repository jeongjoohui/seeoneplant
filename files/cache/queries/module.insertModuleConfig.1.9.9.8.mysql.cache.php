<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleConfig");
$query->setAction("insert");
$query->setPriority("");

${'module25_argument'} = new Argument('module', $args->{'module'});
${'module25_argument'}->checkNotNull();
if(!${'module25_argument'}->isValid()) return ${'module25_argument'}->getErrorMessage();
if(${'module25_argument'} !== null) ${'module25_argument'}->setColumnType('varchar');
if(isset($args->config)) {
${'config26_argument'} = new Argument('config', $args->{'config'});
if(!${'config26_argument'}->isValid()) return ${'config26_argument'}->getErrorMessage();
} else
${'config26_argument'} = NULL;if(${'config26_argument'} !== null) ${'config26_argument'}->setColumnType('bigtext');

${'site_srl27_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl27_argument'}->checkNotNull();
if(!${'site_srl27_argument'}->isValid()) return ${'site_srl27_argument'}->getErrorMessage();
if(${'site_srl27_argument'} !== null) ${'site_srl27_argument'}->setColumnType('number');

${'regdate28_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate28_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate28_argument'}->isValid()) return ${'regdate28_argument'}->getErrorMessage();
if(${'regdate28_argument'} !== null) ${'regdate28_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module`', ${'module25_argument'})
,new InsertExpression('`config`', ${'config26_argument'})
,new InsertExpression('`site_srl`', ${'site_srl27_argument'})
,new InsertExpression('`regdate`', ${'regdate28_argument'})
));
$query->setTables(array(
new Table('`rx_module_config`', '`module_config`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>