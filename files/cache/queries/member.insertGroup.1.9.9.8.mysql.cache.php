<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'site_srl45_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl45_argument'}->ensureDefaultValue('0');
${'site_srl45_argument'}->checkNotNull();
if(!${'site_srl45_argument'}->isValid()) return ${'site_srl45_argument'}->getErrorMessage();
if(${'site_srl45_argument'} !== null) ${'site_srl45_argument'}->setColumnType('number');

${'group_srl46_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl46_argument'}->checkNotNull();
if(!${'group_srl46_argument'}->isValid()) return ${'group_srl46_argument'}->getErrorMessage();
if(${'group_srl46_argument'} !== null) ${'group_srl46_argument'}->setColumnType('number');

${'list_order47_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order47_argument'}->checkNotNull();
if(!${'list_order47_argument'}->isValid()) return ${'list_order47_argument'}->getErrorMessage();
if(${'list_order47_argument'} !== null) ${'list_order47_argument'}->setColumnType('number');

${'title48_argument'} = new Argument('title', $args->{'title'});
${'title48_argument'}->checkNotNull();
if(!${'title48_argument'}->isValid()) return ${'title48_argument'}->getErrorMessage();
if(${'title48_argument'} !== null) ${'title48_argument'}->setColumnType('varchar');

${'is_default49_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default49_argument'}->ensureDefaultValue('N');
${'is_default49_argument'}->checkNotNull();
if(!${'is_default49_argument'}->isValid()) return ${'is_default49_argument'}->getErrorMessage();
if(${'is_default49_argument'} !== null) ${'is_default49_argument'}->setColumnType('char');

${'is_admin50_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin50_argument'}->ensureDefaultValue('N');
${'is_admin50_argument'}->checkNotNull();
if(!${'is_admin50_argument'}->isValid()) return ${'is_admin50_argument'}->getErrorMessage();
if(${'is_admin50_argument'} !== null) ${'is_admin50_argument'}->setColumnType('char');

${'regdate51_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate51_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate51_argument'}->isValid()) return ${'regdate51_argument'}->getErrorMessage();
if(${'regdate51_argument'} !== null) ${'regdate51_argument'}->setColumnType('date');

${'description52_argument'} = new Argument('description', $args->{'description'});
${'description52_argument'}->ensureDefaultValue('');
if(!${'description52_argument'}->isValid()) return ${'description52_argument'}->getErrorMessage();
if(${'description52_argument'} !== null) ${'description52_argument'}->setColumnType('text');

${'image_mark53_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark53_argument'}->ensureDefaultValue('');
if(!${'image_mark53_argument'}->isValid()) return ${'image_mark53_argument'}->getErrorMessage();
if(${'image_mark53_argument'} !== null) ${'image_mark53_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl45_argument'})
,new InsertExpression('`group_srl`', ${'group_srl46_argument'})
,new InsertExpression('`list_order`', ${'list_order47_argument'})
,new InsertExpression('`title`', ${'title48_argument'})
,new InsertExpression('`is_default`', ${'is_default49_argument'})
,new InsertExpression('`is_admin`', ${'is_admin50_argument'})
,new InsertExpression('`regdate`', ${'regdate51_argument'})
,new InsertExpression('`description`', ${'description52_argument'})
,new InsertExpression('`image_mark`', ${'image_mark53_argument'})
));
$query->setTables(array(
new Table('`rx_member_group`', '`member_group`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>