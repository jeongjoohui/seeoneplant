<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRefererRanking");
$query->setAction("select");
$query->setPriority("");
if(isset($args->search_keyword)) {
${'search_keyword1_argument'} = new ConditionArgument('search_keyword', $args->search_keyword, 'like');
${'search_keyword1_argument'}->createConditionValue();
if(!${'search_keyword1_argument'}->isValid()) return ${'search_keyword1_argument'}->getErrorMessage();
} else
${'search_keyword1_argument'} = NULL;if(${'search_keyword1_argument'} !== null) ${'search_keyword1_argument'}->setColumnType('varchar');

${'page3_argument'} = new Argument('page', $args->{'page'});
${'page3_argument'}->ensureDefaultValue('1');
if(!${'page3_argument'}->isValid()) return ${'page3_argument'}->getErrorMessage();

${'page_count4_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count4_argument'}->ensureDefaultValue('10');
if(!${'page_count4_argument'}->isValid()) return ${'page_count4_argument'}->getErrorMessage();

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('20');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('cnt');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`host`')
,new SelectExpression('`count`', '`cnt`')
));
$query->setTables(array(
new Table('`rx_referer_statistics`', '`referer_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`host`',$search_keyword1_argument,"like", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}, ${'page3_argument'}, ${'page_count4_argument'}));
return $query; ?>