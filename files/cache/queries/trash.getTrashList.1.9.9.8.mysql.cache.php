<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTrashList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trashSrl)) {
${'trashSrl1_argument'} = new ConditionArgument('trashSrl', $args->trashSrl, 'in');
${'trashSrl1_argument'}->checkFilter('number');
${'trashSrl1_argument'}->createConditionValue();
if(!${'trashSrl1_argument'}->isValid()) return ${'trashSrl1_argument'}->getErrorMessage();
} else
${'trashSrl1_argument'} = NULL;if(${'trashSrl1_argument'} !== null) ${'trashSrl1_argument'}->setColumnType('number');
if(isset($args->originModule)) {
${'originModule2_argument'} = new ConditionArgument('originModule', $args->originModule, 'in');
${'originModule2_argument'}->createConditionValue();
if(!${'originModule2_argument'}->isValid()) return ${'originModule2_argument'}->getErrorMessage();
} else
${'originModule2_argument'} = NULL;if(${'originModule2_argument'} !== null) ${'originModule2_argument'}->setColumnType('varchar');
if(isset($args->s_title)) {
${'s_title3_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title3_argument'}->createConditionValue();
if(!${'s_title3_argument'}->isValid()) return ${'s_title3_argument'}->getErrorMessage();
} else
${'s_title3_argument'} = NULL;if(${'s_title3_argument'} !== null) ${'s_title3_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id4_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id4_argument'}->createConditionValue();
if(!${'s_user_id4_argument'}->isValid()) return ${'s_user_id4_argument'}->getErrorMessage();
} else
${'s_user_id4_argument'} = NULL;if(${'s_user_id4_argument'} !== null) ${'s_user_id4_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name5_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name5_argument'}->createConditionValue();
if(!${'s_nick_name5_argument'}->isValid()) return ${'s_nick_name5_argument'}->getErrorMessage();
} else
${'s_nick_name5_argument'} = NULL;if(${'s_nick_name5_argument'} !== null) ${'s_nick_name5_argument'}->setColumnType('varchar');
if(isset($args->s_ipaddress)) {
${'s_ipaddress6_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress6_argument'}->createConditionValue();
if(!${'s_ipaddress6_argument'}->isValid()) return ${'s_ipaddress6_argument'}->getErrorMessage();
} else
${'s_ipaddress6_argument'} = NULL;if(${'s_ipaddress6_argument'} !== null) ${'s_ipaddress6_argument'}->setColumnType('varchar');

${'page8_argument'} = new Argument('page', $args->{'page'});
${'page8_argument'}->ensureDefaultValue('1');
if(!${'page8_argument'}->isValid()) return ${'page8_argument'}->getErrorMessage();

${'page_count9_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count9_argument'}->ensureDefaultValue('10');
if(!${'page_count9_argument'}->isValid()) return ${'page_count9_argument'}->getErrorMessage();

${'list_count10_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count10_argument'}->ensureDefaultValue('20');
if(!${'list_count10_argument'}->isValid()) return ${'list_count10_argument'}->getErrorMessage();

${'sort_index7_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index7_argument'}->ensureDefaultValue('trash_srl');
if(!${'sort_index7_argument'}->isValid()) return ${'sort_index7_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('T.*')
,new SelectExpression('M.`user_id`')
,new SelectExpression('M.`nick_name`')
));
$query->setTables(array(
new Table('`rx_trash`', '`T`')
,new JoinTable('`rx_member`', '`M`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('T.`remover_srl`','M.`member_srl`',"equal")),'and')
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trash_srl`',$trashSrl1_argument,"in", 'and')
,new ConditionWithArgument('`origin_module`',$originModule2_argument,"in", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('T.`title`',$s_title3_argument,"like", 'and')
,new ConditionWithArgument('M.`user_id`',$s_user_id4_argument,"like", 'or')
,new ConditionWithArgument('M.`nick_name`',$s_nick_name5_argument,"like", 'or')
,new ConditionWithArgument('T.`ipaddress`',$s_ipaddress6_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index7_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count10_argument'}, ${'page8_argument'}, ${'page_count9_argument'}));
return $query; ?>