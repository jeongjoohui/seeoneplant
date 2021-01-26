<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTotalCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_module_srl)) {
${'s_module_srl1_argument'} = new ConditionArgument('s_module_srl', $args->s_module_srl, 'in');
${'s_module_srl1_argument'}->createConditionValue();
if(!${'s_module_srl1_argument'}->isValid()) return ${'s_module_srl1_argument'}->getErrorMessage();
} else
${'s_module_srl1_argument'} = NULL;if(${'s_module_srl1_argument'} !== null) ${'s_module_srl1_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl2_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl2_argument'}->createConditionValue();
if(!${'exclude_module_srl2_argument'}->isValid()) return ${'exclude_module_srl2_argument'}->getErrorMessage();
} else
${'exclude_module_srl2_argument'} = NULL;if(${'exclude_module_srl2_argument'} !== null) ${'exclude_module_srl2_argument'}->setColumnType('number');
if(isset($args->document_statusList)) {
${'document_statusList3_argument'} = new ConditionArgument('document_statusList', $args->document_statusList, 'in');
${'document_statusList3_argument'}->createConditionValue();
if(!${'document_statusList3_argument'}->isValid()) return ${'document_statusList3_argument'}->getErrorMessage();
} else
${'document_statusList3_argument'} = NULL;if(${'document_statusList3_argument'} !== null) ${'document_statusList3_argument'}->setColumnType('varchar');
if(isset($args->s_is_secret)) {
${'s_is_secret4_argument'} = new ConditionArgument('s_is_secret', $args->s_is_secret, 'equal');
${'s_is_secret4_argument'}->createConditionValue();
if(!${'s_is_secret4_argument'}->isValid()) return ${'s_is_secret4_argument'}->getErrorMessage();
} else
${'s_is_secret4_argument'} = NULL;if(${'s_is_secret4_argument'} !== null) ${'s_is_secret4_argument'}->setColumnType('char');
if(isset($args->s_is_published)) {
${'s_is_published5_argument'} = new ConditionArgument('s_is_published', $args->s_is_published, 'equal');
${'s_is_published5_argument'}->createConditionValue();
if(!${'s_is_published5_argument'}->isValid()) return ${'s_is_published5_argument'}->getErrorMessage();
} else
${'s_is_published5_argument'} = NULL;if(${'s_is_published5_argument'} !== null) ${'s_is_published5_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList6_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList6_argument'}->createConditionValue();
if(!${'statusList6_argument'}->isValid()) return ${'statusList6_argument'}->getErrorMessage();
} else
${'statusList6_argument'} = NULL;if(${'statusList6_argument'} !== null) ${'statusList6_argument'}->setColumnType('number');
if(isset($args->s_member_srl)) {
${'s_member_srl7_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'in');
${'s_member_srl7_argument'}->createConditionValue();
if(!${'s_member_srl7_argument'}->isValid()) return ${'s_member_srl7_argument'}->getErrorMessage();
} else
${'s_member_srl7_argument'} = NULL;if(${'s_member_srl7_argument'} !== null) ${'s_member_srl7_argument'}->setColumnType('number');
if(isset($args->s_content)) {
${'s_content8_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content8_argument'}->createConditionValue();
if(!${'s_content8_argument'}->isValid()) return ${'s_content8_argument'}->getErrorMessage();
} else
${'s_content8_argument'} = NULL;if(${'s_content8_argument'} !== null) ${'s_content8_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name9_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like_prefix');
${'s_user_name9_argument'}->createConditionValue();
if(!${'s_user_name9_argument'}->isValid()) return ${'s_user_name9_argument'}->getErrorMessage();
} else
${'s_user_name9_argument'} = NULL;if(${'s_user_name9_argument'} !== null) ${'s_user_name9_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name10_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like_prefix');
${'s_nick_name10_argument'}->createConditionValue();
if(!${'s_nick_name10_argument'}->isValid()) return ${'s_nick_name10_argument'}->getErrorMessage();
} else
${'s_nick_name10_argument'} = NULL;if(${'s_nick_name10_argument'} !== null) ${'s_nick_name10_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address11_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address11_argument'}->createConditionValue();
if(!${'s_email_address11_argument'}->isValid()) return ${'s_email_address11_argument'}->getErrorMessage();
} else
${'s_email_address11_argument'} = NULL;if(${'s_email_address11_argument'} !== null) ${'s_email_address11_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage12_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage12_argument'}->createConditionValue();
if(!${'s_homepage12_argument'}->isValid()) return ${'s_homepage12_argument'}->getErrorMessage();
} else
${'s_homepage12_argument'} = NULL;if(${'s_homepage12_argument'} !== null) ${'s_homepage12_argument'}->setColumnType('varchar');
if(isset($args->s_regdate)) {
${'s_regdate13_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate13_argument'}->createConditionValue();
if(!${'s_regdate13_argument'}->isValid()) return ${'s_regdate13_argument'}->getErrorMessage();
} else
${'s_regdate13_argument'} = NULL;if(${'s_regdate13_argument'} !== null) ${'s_regdate13_argument'}->setColumnType('date');
if(isset($args->s_last_upate)) {
${'s_last_upate14_argument'} = new ConditionArgument('s_last_upate', $args->s_last_upate, 'like_prefix');
${'s_last_upate14_argument'}->createConditionValue();
if(!${'s_last_upate14_argument'}->isValid()) return ${'s_last_upate14_argument'}->getErrorMessage();
} else
${'s_last_upate14_argument'} = NULL;if(${'s_last_upate14_argument'} !== null) ${'s_last_upate14_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress15_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress15_argument'}->createConditionValue();
if(!${'s_ipaddress15_argument'}->isValid()) return ${'s_ipaddress15_argument'}->getErrorMessage();
} else
${'s_ipaddress15_argument'} = NULL;if(${'s_ipaddress15_argument'} !== null) ${'s_ipaddress15_argument'}->setColumnType('varchar');

${'page17_argument'} = new Argument('page', $args->{'page'});
${'page17_argument'}->ensureDefaultValue('1');
if(!${'page17_argument'}->isValid()) return ${'page17_argument'}->getErrorMessage();

${'page_count18_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count18_argument'}->ensureDefaultValue('10');
if(!${'page_count18_argument'}->isValid()) return ${'page_count18_argument'}->getErrorMessage();

${'list_count19_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count19_argument'}->ensureDefaultValue('20');
if(!${'list_count19_argument'}->isValid()) return ${'list_count19_argument'}->getErrorMessage();

${'sort_index16_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index16_argument'}->ensureDefaultValue('comments.list_order');
if(!${'sort_index16_argument'}->isValid()) return ${'sort_index16_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_comments`', '`comments`')
,new Table('`rx_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`documents`.`document_srl`','`comments`.`document_srl`',"equal", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$s_module_srl1_argument,"in", 'and')
,new ConditionWithArgument('`documents`.`module_srl`',$exclude_module_srl2_argument,"notin", 'and')
,new ConditionWithArgument('`documents`.`status`',$document_statusList3_argument,"in", 'and')
,new ConditionWithArgument('`comments`.`is_secret`',$s_is_secret4_argument,"equal", 'and')
,new ConditionWithArgument('`comments`.`status`',$s_is_published5_argument,"equal", 'and')
,new ConditionWithArgument('`comments`.`status`',$statusList6_argument,"in", 'and')
,new ConditionWithArgument('`comments`.`member_srl`',$s_member_srl7_argument,"in", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`comments`.`content`',$s_content8_argument,"like", 'or')
,new ConditionWithArgument('`comments`.`user_name`',$s_user_name9_argument,"like_prefix", 'or')
,new ConditionWithArgument('`comments`.`nick_name`',$s_nick_name10_argument,"like_prefix", 'or')
,new ConditionWithArgument('`comments`.`email_address`',$s_email_address11_argument,"like", 'or')
,new ConditionWithArgument('`comments`.`homepage`',$s_homepage12_argument,"like", 'or')
,new ConditionWithArgument('`comments`.`regdate`',$s_regdate13_argument,"like_prefix", 'or')
,new ConditionWithArgument('`comments`.`last_update`',$s_last_upate14_argument,"like_prefix", 'or')
,new ConditionWithArgument('`comments`.`ipaddress`',$s_ipaddress15_argument,"like_prefix", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index16_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count19_argument'}, ${'page17_argument'}, ${'page_count18_argument'}));
return $query; ?>