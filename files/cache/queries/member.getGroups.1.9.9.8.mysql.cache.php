<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroups");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl42_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl42_argument'}->createConditionValue();
if(!${'site_srl42_argument'}->isValid()) return ${'site_srl42_argument'}->getErrorMessage();
} else
${'site_srl42_argument'} = NULL;if(${'site_srl42_argument'} !== null) ${'site_srl42_argument'}->setColumnType('number');

${'sort_index43_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index43_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index43_argument'}->isValid()) return ${'sort_index43_argument'}->getErrorMessage();

${'order_type44_argument'} = new SortArgument('order_type44', $args->order_type);
${'order_type44_argument'}->ensureDefaultValue('asc');
if(!${'order_type44_argument'}->isValid()) return ${'order_type44_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_member_group`', '`member_group`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl42_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index43_argument'}, $order_type44_argument)
));
$query->setLimit();
return $query; ?>