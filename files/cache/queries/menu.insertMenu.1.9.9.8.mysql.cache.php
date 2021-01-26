<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenu");
$query->setAction("insert");
$query->setPriority("");

${'menu_srl152_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl152_argument'}->checkFilter('number');
${'menu_srl152_argument'}->checkNotNull();
if(!${'menu_srl152_argument'}->isValid()) return ${'menu_srl152_argument'}->getErrorMessage();
if(${'menu_srl152_argument'} !== null) ${'menu_srl152_argument'}->setColumnType('number');

${'site_srl153_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl153_argument'}->checkFilter('number');
${'site_srl153_argument'}->ensureDefaultValue('0');
${'site_srl153_argument'}->checkNotNull();
if(!${'site_srl153_argument'}->isValid()) return ${'site_srl153_argument'}->getErrorMessage();
if(${'site_srl153_argument'} !== null) ${'site_srl153_argument'}->setColumnType('number');

${'title154_argument'} = new Argument('title', $args->{'title'});
${'title154_argument'}->checkNotNull();
if(!${'title154_argument'}->isValid()) return ${'title154_argument'}->getErrorMessage();
if(${'title154_argument'} !== null) ${'title154_argument'}->setColumnType('varchar');

${'listorder155_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder155_argument'}->checkNotNull();
if(!${'listorder155_argument'}->isValid()) return ${'listorder155_argument'}->getErrorMessage();
if(${'listorder155_argument'} !== null) ${'listorder155_argument'}->setColumnType('number');

${'regdate156_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate156_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate156_argument'}->isValid()) return ${'regdate156_argument'}->getErrorMessage();
if(${'regdate156_argument'} !== null) ${'regdate156_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_srl`', ${'menu_srl152_argument'})
,new InsertExpression('`site_srl`', ${'site_srl153_argument'})
,new InsertExpression('`title`', ${'title154_argument'})
,new InsertExpression('`listorder`', ${'listorder155_argument'})
,new InsertExpression('`regdate`', ${'regdate156_argument'})
));
$query->setTables(array(
new Table('`rx_menu`', '`menu`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>