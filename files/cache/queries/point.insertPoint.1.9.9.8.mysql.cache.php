<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertPoint");
$query->setAction("insert");
$query->setPriority("");

${'member_srl277_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl277_argument'}->checkFilter('number');
${'member_srl277_argument'}->checkNotNull();
if(!${'member_srl277_argument'}->isValid()) return ${'member_srl277_argument'}->getErrorMessage();
if(${'member_srl277_argument'} !== null) ${'member_srl277_argument'}->setColumnType('number');

${'point278_argument'} = new Argument('point', $args->{'point'});
${'point278_argument'}->checkFilter('number');
${'point278_argument'}->ensureDefaultValue('0');
${'point278_argument'}->checkNotNull();
if(!${'point278_argument'}->isValid()) return ${'point278_argument'}->getErrorMessage();
if(${'point278_argument'} !== null) ${'point278_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl277_argument'})
,new InsertExpression('`point`', ${'point278_argument'})
));
$query->setTables(array(
new Table('`rx_point`', '`point`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>