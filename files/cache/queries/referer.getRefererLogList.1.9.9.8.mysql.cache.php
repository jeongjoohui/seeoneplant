<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getRefererLogList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->search_referer)) {
${'search_referer1_argument'} = new ConditionArgument('search_referer', $args->search_referer, 'like');
${'search_referer1_argument'}->createConditionValue();
if(!${'search_referer1_argument'}->isValid()) return ${'search_referer1_argument'}->getErrorMessage();
} else
${'search_referer1_argument'} = NULL;if(${'search_referer1_argument'} !== null) ${'search_referer1_argument'}->setColumnType('varchar');
if(isset($args->search_remote)) {
${'search_remote2_argument'} = new ConditionArgument('search_remote', $args->search_remote, 'like');
${'search_remote2_argument'}->createConditionValue();
if(!${'search_remote2_argument'}->isValid()) return ${'search_remote2_argument'}->getErrorMessage();
} else
${'search_remote2_argument'} = NULL;if(${'search_remote2_argument'} !== null) ${'search_remote2_argument'}->setColumnType('varchar');
if(isset($args->search_country_code)) {
${'search_country_code3_argument'} = new ConditionArgument('search_country_code', $args->search_country_code, 'equal');
${'search_country_code3_argument'}->createConditionValue();
if(!${'search_country_code3_argument'}->isValid()) return ${'search_country_code3_argument'}->getErrorMessage();
} else
${'search_country_code3_argument'} = NULL;if(${'search_country_code3_argument'} !== null) ${'search_country_code3_argument'}->setColumnType('char');
if(isset($args->search_member_srl)) {
${'search_member_srl4_argument'} = new ConditionArgument('search_member_srl', $args->search_member_srl, 'equal');
${'search_member_srl4_argument'}->createConditionValue();
if(!${'search_member_srl4_argument'}->isValid()) return ${'search_member_srl4_argument'}->getErrorMessage();
} else
${'search_member_srl4_argument'} = NULL;if(${'search_member_srl4_argument'} !== null) ${'search_member_srl4_argument'}->setColumnType('number');
if(isset($args->search_request_uri)) {
${'search_request_uri5_argument'} = new ConditionArgument('search_request_uri', $args->search_request_uri, 'like');
${'search_request_uri5_argument'}->createConditionValue();
if(!${'search_request_uri5_argument'}->isValid()) return ${'search_request_uri5_argument'}->getErrorMessage();
} else
${'search_request_uri5_argument'} = NULL;if(${'search_request_uri5_argument'} !== null) ${'search_request_uri5_argument'}->setColumnType('varchar');
if(isset($args->search_uagent)) {
${'search_uagent6_argument'} = new ConditionArgument('search_uagent', $args->search_uagent, 'like');
${'search_uagent6_argument'}->createConditionValue();
if(!${'search_uagent6_argument'}->isValid()) return ${'search_uagent6_argument'}->getErrorMessage();
} else
${'search_uagent6_argument'} = NULL;if(${'search_uagent6_argument'} !== null) ${'search_uagent6_argument'}->setColumnType('varchar');
if(isset($args->search_date)) {
${'search_date7_argument'} = new ConditionArgument('search_date', $args->search_date, 'like');
${'search_date7_argument'}->createConditionValue();
if(!${'search_date7_argument'}->isValid()) return ${'search_date7_argument'}->getErrorMessage();
} else
${'search_date7_argument'} = NULL;if(${'search_date7_argument'} !== null) ${'search_date7_argument'}->setColumnType('date');
if(isset($args->search_date)) {
${'search_date8_argument'} = new ConditionArgument('search_date', $args->search_date, 'like');
${'search_date8_argument'}->createConditionValue();
if(!${'search_date8_argument'}->isValid()) return ${'search_date8_argument'}->getErrorMessage();
} else
${'search_date8_argument'} = NULL;if(${'search_date8_argument'} !== null) ${'search_date8_argument'}->setColumnType('date');
if(isset($args->search_date_less)) {
${'search_date_less9_argument'} = new ConditionArgument('search_date_less', $args->search_date_less, 'less');
${'search_date_less9_argument'}->createConditionValue();
if(!${'search_date_less9_argument'}->isValid()) return ${'search_date_less9_argument'}->getErrorMessage();
} else
${'search_date_less9_argument'} = NULL;if(${'search_date_less9_argument'} !== null) ${'search_date_less9_argument'}->setColumnType('date');
if(isset($args->search_date_less)) {
${'search_date_less10_argument'} = new ConditionArgument('search_date_less', $args->search_date_less, 'less');
${'search_date_less10_argument'}->createConditionValue();
if(!${'search_date_less10_argument'}->isValid()) return ${'search_date_less10_argument'}->getErrorMessage();
} else
${'search_date_less10_argument'} = NULL;if(${'search_date_less10_argument'} !== null) ${'search_date_less10_argument'}->setColumnType('date');
if(isset($args->search_date_more)) {
${'search_date_more11_argument'} = new ConditionArgument('search_date_more', $args->search_date_more, 'more');
${'search_date_more11_argument'}->createConditionValue();
if(!${'search_date_more11_argument'}->isValid()) return ${'search_date_more11_argument'}->getErrorMessage();
} else
${'search_date_more11_argument'} = NULL;if(${'search_date_more11_argument'} !== null) ${'search_date_more11_argument'}->setColumnType('date');
if(isset($args->search_date_more)) {
${'search_date_more12_argument'} = new ConditionArgument('search_date_more', $args->search_date_more, 'more');
${'search_date_more12_argument'}->createConditionValue();
if(!${'search_date_more12_argument'}->isValid()) return ${'search_date_more12_argument'}->getErrorMessage();
} else
${'search_date_more12_argument'} = NULL;if(${'search_date_more12_argument'} !== null) ${'search_date_more12_argument'}->setColumnType('date');

${'page14_argument'} = new Argument('page', $args->{'page'});
${'page14_argument'}->ensureDefaultValue('1');
if(!${'page14_argument'}->isValid()) return ${'page14_argument'}->getErrorMessage();

${'page_count15_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count15_argument'}->ensureDefaultValue('10');
if(!${'page_count15_argument'}->isValid()) return ${'page_count15_argument'}->getErrorMessage();

${'list_count16_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count16_argument'}->ensureDefaultValue('20');
if(!${'list_count16_argument'}->isValid()) return ${'list_count16_argument'}->getErrorMessage();

${'sort_index13_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index13_argument'}->ensureDefaultValue('regdate');
if(!${'sort_index13_argument'}->isValid()) return ${'sort_index13_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_referer_log`', '`referer_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`url`',$search_referer1_argument,"like", 'and')
,new ConditionWithArgument('`remote`',$search_remote2_argument,"like", 'or')
,new ConditionWithArgument('`country_code`',$search_country_code3_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$search_member_srl4_argument,"equal", 'or')
,new ConditionWithArgument('`request_uri`',$search_request_uri5_argument,"like", 'or')
,new ConditionWithArgument('`uagent`',$search_uagent6_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$search_date7_argument,"like", 'or')
,new ConditionWithArgument('`regdate_last`',$search_date8_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$search_date_less9_argument,"less", 'or')
,new ConditionWithArgument('`regdate_last`',$search_date_less10_argument,"less", 'or')
,new ConditionWithArgument('`regdate`',$search_date_more11_argument,"more", 'or')
,new ConditionWithArgument('`regdate_last`',$search_date_more12_argument,"more", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index13_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count16_argument'}, ${'page14_argument'}, ${'page_count15_argument'}));
return $query; ?>