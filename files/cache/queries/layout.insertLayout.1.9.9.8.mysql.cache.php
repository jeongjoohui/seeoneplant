<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLayout");
$query->setAction("insert");
$query->setPriority("");

${'layout_srl211_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
${'layout_srl211_argument'}->checkFilter('number');
${'layout_srl211_argument'}->checkNotNull();
if(!${'layout_srl211_argument'}->isValid()) return ${'layout_srl211_argument'}->getErrorMessage();
if(${'layout_srl211_argument'} !== null) ${'layout_srl211_argument'}->setColumnType('number');

${'site_srl212_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl212_argument'}->checkFilter('number');
${'site_srl212_argument'}->ensureDefaultValue('0');
${'site_srl212_argument'}->checkNotNull();
if(!${'site_srl212_argument'}->isValid()) return ${'site_srl212_argument'}->getErrorMessage();
if(${'site_srl212_argument'} !== null) ${'site_srl212_argument'}->setColumnType('number');

${'layout213_argument'} = new Argument('layout', $args->{'layout'});
${'layout213_argument'}->checkNotNull();
if(!${'layout213_argument'}->isValid()) return ${'layout213_argument'}->getErrorMessage();
if(${'layout213_argument'} !== null) ${'layout213_argument'}->setColumnType('varchar');

${'title214_argument'} = new Argument('title', $args->{'title'});
${'title214_argument'}->checkNotNull();
if(!${'title214_argument'}->isValid()) return ${'title214_argument'}->getErrorMessage();
if(${'title214_argument'} !== null) ${'title214_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl215_argument'} = new Argument('module_srl', $args->{'module_srl'});
if(!${'module_srl215_argument'}->isValid()) return ${'module_srl215_argument'}->getErrorMessage();
} else
${'module_srl215_argument'} = NULL;if(${'module_srl215_argument'} !== null) ${'module_srl215_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars216_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars216_argument'}->isValid()) return ${'extra_vars216_argument'}->getErrorMessage();
} else
${'extra_vars216_argument'} = NULL;if(${'extra_vars216_argument'} !== null) ${'extra_vars216_argument'}->setColumnType('text');
if(isset($args->layout_path)) {
${'layout_path217_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path217_argument'}->isValid()) return ${'layout_path217_argument'}->getErrorMessage();
} else
${'layout_path217_argument'} = NULL;if(${'layout_path217_argument'} !== null) ${'layout_path217_argument'}->setColumnType('varchar');

${'regdate218_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate218_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate218_argument'}->isValid()) return ${'regdate218_argument'}->getErrorMessage();
if(${'regdate218_argument'} !== null) ${'regdate218_argument'}->setColumnType('date');

${'layout_type219_argument'} = new Argument('layout_type', $args->{'layout_type'});
${'layout_type219_argument'}->ensureDefaultValue('P');
if(!${'layout_type219_argument'}->isValid()) return ${'layout_type219_argument'}->getErrorMessage();
if(${'layout_type219_argument'} !== null) ${'layout_type219_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`layout_srl`', ${'layout_srl211_argument'})
,new InsertExpression('`site_srl`', ${'site_srl212_argument'})
,new InsertExpression('`layout`', ${'layout213_argument'})
,new InsertExpression('`title`', ${'title214_argument'})
,new InsertExpression('`module_srl`', ${'module_srl215_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars216_argument'})
,new InsertExpression('`layout_path`', ${'layout_path217_argument'})
,new InsertExpression('`regdate`', ${'regdate218_argument'})
,new InsertExpression('`layout_type`', ${'layout_type219_argument'})
));
$query->setTables(array(
new Table('`rx_layouts`', '`layouts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>