<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("addMemberToGroup");
$query->setAction("insert");
$query->setPriority("");

${'group_srl113_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl113_argument'}->checkNotNull();
if(!${'group_srl113_argument'}->isValid()) return ${'group_srl113_argument'}->getErrorMessage();
if(${'group_srl113_argument'} !== null) ${'group_srl113_argument'}->setColumnType('number');

${'member_srl114_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl114_argument'}->checkNotNull();
if(!${'member_srl114_argument'}->isValid()) return ${'member_srl114_argument'}->getErrorMessage();
if(${'member_srl114_argument'} !== null) ${'member_srl114_argument'}->setColumnType('number');

${'site_srl115_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl115_argument'}->ensureDefaultValue('0');
if(!${'site_srl115_argument'}->isValid()) return ${'site_srl115_argument'}->getErrorMessage();
if(${'site_srl115_argument'} !== null) ${'site_srl115_argument'}->setColumnType('number');

${'regdate116_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate116_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate116_argument'}->isValid()) return ${'regdate116_argument'}->getErrorMessage();
if(${'regdate116_argument'} !== null) ${'regdate116_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`group_srl`', ${'group_srl113_argument'})
,new InsertExpression('`member_srl`', ${'member_srl114_argument'})
,new InsertExpression('`site_srl`', ${'site_srl115_argument'})
,new InsertExpression('`regdate`', ${'regdate116_argument'})
));
$query->setTables(array(
new Table('`rx_member_group_member`', '`member_group_member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>