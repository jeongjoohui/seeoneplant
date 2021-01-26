<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSites");
$query->setAction("select");
$query->setPriority("");

${'sort_index21_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index21_argument'}->ensureDefaultValue('site_srl');
if(!${'sort_index21_argument'}->isValid()) return ${'sort_index21_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_sites`', '`sites`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index21_argument'}, "asc")
));
$query->setLimit();
return $query; ?>