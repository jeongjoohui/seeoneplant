<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCountryRanking");
$query->setAction("select");
$query->setPriority("");
if(isset($args->search_keyword)) {
${'search_keyword1_argument'} = new ConditionArgument('search_keyword', $args->search_keyword, 'like');
${'search_keyword1_argument'}->createConditionValue();
if(!${'search_keyword1_argument'}->isValid()) return ${'search_keyword1_argument'}->getErrorMessage();
} else
${'search_keyword1_argument'} = NULL;if(${'search_keyword1_argument'} !== null) ${'search_keyword1_argument'}->setColumnType('char');
if(isset($args->search_keyword)) {
${'search_keyword2_argument'} = new ConditionArgument('search_keyword', $args->search_keyword, 'like');
${'search_keyword2_argument'}->createConditionValue();
if(!${'search_keyword2_argument'}->isValid()) return ${'search_keyword2_argument'}->getErrorMessage();
} else
${'search_keyword2_argument'} = NULL;if(${'search_keyword2_argument'} !== null) ${'search_keyword2_argument'}->setColumnType('varchar');

${'page4_argument'} = new Argument('page', $args->{'page'});
${'page4_argument'}->ensureDefaultValue('1');
if(!${'page4_argument'}->isValid()) return ${'page4_argument'}->getErrorMessage();

${'page_count5_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count5_argument'}->ensureDefaultValue('10');
if(!${'page_count5_argument'}->isValid()) return ${'page_count5_argument'}->getErrorMessage();

${'list_count6_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count6_argument'}->ensureDefaultValue('20');
if(!${'list_count6_argument'}->isValid()) return ${'list_count6_argument'}->getErrorMessage();

${'sort_index3_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index3_argument'}->ensureDefaultValue('cnt');
if(!${'sort_index3_argument'}->isValid()) return ${'sort_index3_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`country_code`')
,new SelectExpression('`country`')
,new SelectExpression('`count`', '`cnt`')
));
$query->setTables(array(
new Table('`rx_referer_country_statistics`', '`referer_country_statistics`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`country_code`',$search_keyword1_argument,"like", 'and')
,new ConditionWithArgument('`country`',$search_keyword2_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index3_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count6_argument'}, ${'page4_argument'}, ${'page_count5_argument'}));
return $query; ?>