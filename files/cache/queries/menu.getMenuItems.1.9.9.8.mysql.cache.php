<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMenuItems");
$query->setAction("select");
$query->setPriority("");

${'menu_srl208_argument'} = new ConditionArgument('menu_srl', $args->menu_srl, 'equal');
${'menu_srl208_argument'}->checkFilter('number');
${'menu_srl208_argument'}->checkNotNull();
${'menu_srl208_argument'}->createConditionValue();
if(!${'menu_srl208_argument'}->isValid()) return ${'menu_srl208_argument'}->getErrorMessage();
if(${'menu_srl208_argument'} !== null) ${'menu_srl208_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl209_argument'} = new ConditionArgument('parent_srl', $args->parent_srl, 'equal');
${'parent_srl209_argument'}->checkFilter('number');
${'parent_srl209_argument'}->createConditionValue();
if(!${'parent_srl209_argument'}->isValid()) return ${'parent_srl209_argument'}->getErrorMessage();
} else
${'parent_srl209_argument'} = NULL;if(${'parent_srl209_argument'} !== null) ${'parent_srl209_argument'}->setColumnType('number');

${'sort_index210_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index210_argument'}->ensureDefaultValue('listorder');
if(!${'sort_index210_argument'}->isValid()) return ${'sort_index210_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_srl`',$menu_srl208_argument,"equal", 'and')
,new ConditionWithArgument('`parent_srl`',$parent_srl209_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index210_argument'}, "desc")
));
$query->setLimit();
return $query; ?>