<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id127_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id127_argument'}->checkNotNull();
if(!${'user_id127_argument'}->isValid()) return ${'user_id127_argument'}->getErrorMessage();
if(${'user_id127_argument'} !== null) ${'user_id127_argument'}->setColumnType('varchar');

${'regdate128_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate128_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate128_argument'}->isValid()) return ${'regdate128_argument'}->getErrorMessage();
if(${'regdate128_argument'} !== null) ${'regdate128_argument'}->setColumnType('date');

${'description129_argument'} = new Argument('description', $args->{'description'});
${'description129_argument'}->ensureDefaultValue('');
if(!${'description129_argument'}->isValid()) return ${'description129_argument'}->getErrorMessage();
if(${'description129_argument'} !== null) ${'description129_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order130_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order130_argument'}->isValid()) return ${'list_order130_argument'}->getErrorMessage();
} else
${'list_order130_argument'} = NULL;if(${'list_order130_argument'} !== null) ${'list_order130_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id127_argument'})
,new InsertExpression('`regdate`', ${'regdate128_argument'})
,new InsertExpression('`description`', ${'description129_argument'})
,new InsertExpression('`list_order`', ${'list_order130_argument'})
));
$query->setTables(array(
new Table('`rx_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>