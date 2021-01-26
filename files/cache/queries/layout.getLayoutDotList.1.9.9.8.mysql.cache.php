<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayoutDotList");
$query->setAction("select");
$query->setPriority("");

${'site_srl172_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl172_argument'}->checkFilter('number');
${'site_srl172_argument'}->ensureDefaultValue('0');
${'site_srl172_argument'}->checkNotNull();
${'site_srl172_argument'}->createConditionValue();
if(!${'site_srl172_argument'}->isValid()) return ${'site_srl172_argument'}->getErrorMessage();
if(${'site_srl172_argument'} !== null) ${'site_srl172_argument'}->setColumnType('number');

${'layout_type173_argument'} = new ConditionArgument('layout_type', $args->layout_type, 'equal');
${'layout_type173_argument'}->ensureDefaultValue('P');
${'layout_type173_argument'}->createConditionValue();
if(!${'layout_type173_argument'}->isValid()) return ${'layout_type173_argument'}->getErrorMessage();
if(${'layout_type173_argument'} !== null) ${'layout_type173_argument'}->setColumnType('char');

${'layout174_argument'} = new ConditionArgument('layout', $args->layout, 'like');
${'layout174_argument'}->ensureDefaultValue('.');
${'layout174_argument'}->createConditionValue();
if(!${'layout174_argument'}->isValid()) return ${'layout174_argument'}->getErrorMessage();
if(${'layout174_argument'} !== null) ${'layout174_argument'}->setColumnType('varchar');

${'sort_index175_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index175_argument'}->ensureDefaultValue('layout_srl');
if(!${'sort_index175_argument'}->isValid()) return ${'sort_index175_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl172_argument,"equal", 'and')
,new ConditionWithArgument('`layout_type`',$layout_type173_argument,"equal", 'and')
,new ConditionWithArgument('`layout`',$layout174_argument,"like", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index175_argument'}, "desc")
));
$query->setLimit();
return $query; ?>