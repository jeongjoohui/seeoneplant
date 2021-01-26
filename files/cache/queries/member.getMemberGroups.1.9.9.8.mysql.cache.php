<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberGroups");
$query->setAction("select");
$query->setPriority("");

${'member_srl118_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl118_argument'}->checkFilter('number');
${'member_srl118_argument'}->checkNotNull();
${'member_srl118_argument'}->createConditionValue();
if(!${'member_srl118_argument'}->isValid()) return ${'member_srl118_argument'}->getErrorMessage();
if(${'member_srl118_argument'} !== null) ${'member_srl118_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl119_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl119_argument'}->createConditionValue();
if(!${'site_srl119_argument'}->isValid()) return ${'site_srl119_argument'}->getErrorMessage();
} else
${'site_srl119_argument'} = NULL;if(${'site_srl119_argument'} !== null) ${'site_srl119_argument'}->setColumnType('number');

${'sort_index120_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index120_argument'}->ensureDefaultValue('a.list_order');
if(!${'sort_index120_argument'}->isValid()) return ${'sort_index120_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`a`.`title`', '`title`')
,new SelectExpression('`a`.`group_srl`', '`group_srl`')
));
$query->setTables(array(
new Table('`rx_member_group`', '`a`')
,new Table('`rx_member_group_member`', '`b`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`b`.`member_srl`',$member_srl118_argument,"equal", 'and')
,new ConditionWithoutArgument('`b`.`group_srl`','`a`.`group_srl`',"equal", 'and')
,new ConditionWithArgument('`a`.`site_srl`',$site_srl119_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index120_argument'}, "asc")
));
$query->setLimit();
return $query; ?>