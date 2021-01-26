<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin55_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin55_argument'}->createConditionValue();
if(!${'is_admin55_argument'}->isValid()) return ${'is_admin55_argument'}->getErrorMessage();
} else
${'is_admin55_argument'} = NULL;if(${'is_admin55_argument'} !== null) ${'is_admin55_argument'}->setColumnType('char');
if(isset($args->is_denied)) {
${'is_denied56_argument'} = new ConditionArgument('is_denied', $args->is_denied, 'equal');
${'is_denied56_argument'}->createConditionValue();
if(!${'is_denied56_argument'}->isValid()) return ${'is_denied56_argument'}->getErrorMessage();
} else
${'is_denied56_argument'} = NULL;if(${'is_denied56_argument'} !== null) ${'is_denied56_argument'}->setColumnType('char');
if(isset($args->member_srls)) {
${'member_srls57_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls57_argument'}->createConditionValue();
if(!${'member_srls57_argument'}->isValid()) return ${'member_srls57_argument'}->getErrorMessage();
} else
${'member_srls57_argument'} = NULL;if(${'member_srls57_argument'} !== null) ${'member_srls57_argument'}->setColumnType('number');
if(isset($args->s_user_id)) {
${'s_user_id58_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id58_argument'}->createConditionValue();
if(!${'s_user_id58_argument'}->isValid()) return ${'s_user_id58_argument'}->getErrorMessage();
} else
${'s_user_id58_argument'} = NULL;if(${'s_user_id58_argument'} !== null) ${'s_user_id58_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name59_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name59_argument'}->createConditionValue();
if(!${'s_user_name59_argument'}->isValid()) return ${'s_user_name59_argument'}->getErrorMessage();
} else
${'s_user_name59_argument'} = NULL;if(${'s_user_name59_argument'} !== null) ${'s_user_name59_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name60_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name60_argument'}->createConditionValue();
if(!${'s_nick_name60_argument'}->isValid()) return ${'s_nick_name60_argument'}->getErrorMessage();
} else
${'s_nick_name60_argument'} = NULL;if(${'s_nick_name60_argument'} !== null) ${'s_nick_name60_argument'}->setColumnType('varchar');
if(isset($args->html_nick_name)) {
${'html_nick_name61_argument'} = new ConditionArgument('html_nick_name', $args->html_nick_name, 'like');
${'html_nick_name61_argument'}->createConditionValue();
if(!${'html_nick_name61_argument'}->isValid()) return ${'html_nick_name61_argument'}->getErrorMessage();
} else
${'html_nick_name61_argument'} = NULL;if(${'html_nick_name61_argument'} !== null) ${'html_nick_name61_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address62_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address62_argument'}->createConditionValue();
if(!${'s_email_address62_argument'}->isValid()) return ${'s_email_address62_argument'}->getErrorMessage();
} else
${'s_email_address62_argument'} = NULL;if(${'s_email_address62_argument'} !== null) ${'s_email_address62_argument'}->setColumnType('varchar');
if(isset($args->s_phone_number)) {
${'s_phone_number63_argument'} = new ConditionArgument('s_phone_number', $args->s_phone_number, 'like');
${'s_phone_number63_argument'}->createConditionValue();
if(!${'s_phone_number63_argument'}->isValid()) return ${'s_phone_number63_argument'}->getErrorMessage();
} else
${'s_phone_number63_argument'} = NULL;if(${'s_phone_number63_argument'} !== null) ${'s_phone_number63_argument'}->setColumnType('varchar');
if(isset($args->s_birthday)) {
${'s_birthday64_argument'} = new ConditionArgument('s_birthday', $args->s_birthday, 'like');
${'s_birthday64_argument'}->createConditionValue();
if(!${'s_birthday64_argument'}->isValid()) return ${'s_birthday64_argument'}->getErrorMessage();
} else
${'s_birthday64_argument'} = NULL;if(${'s_birthday64_argument'} !== null) ${'s_birthday64_argument'}->setColumnType('char');
if(isset($args->s_extra_vars)) {
${'s_extra_vars65_argument'} = new ConditionArgument('s_extra_vars', $args->s_extra_vars, 'like');
${'s_extra_vars65_argument'}->createConditionValue();
if(!${'s_extra_vars65_argument'}->isValid()) return ${'s_extra_vars65_argument'}->getErrorMessage();
} else
${'s_extra_vars65_argument'} = NULL;if(${'s_extra_vars65_argument'} !== null) ${'s_extra_vars65_argument'}->setColumnType('text');
if(isset($args->s_regdate)) {
${'s_regdate66_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate66_argument'}->createConditionValue();
if(!${'s_regdate66_argument'}->isValid()) return ${'s_regdate66_argument'}->getErrorMessage();
} else
${'s_regdate66_argument'} = NULL;if(${'s_regdate66_argument'} !== null) ${'s_regdate66_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress67_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress67_argument'}->createConditionValue();
if(!${'s_ipaddress67_argument'}->isValid()) return ${'s_ipaddress67_argument'}->getErrorMessage();
} else
${'s_ipaddress67_argument'} = NULL;if(${'s_ipaddress67_argument'} !== null) ${'s_ipaddress67_argument'}->setColumnType('varchar');
if(isset($args->s_last_login)) {
${'s_last_login68_argument'} = new ConditionArgument('s_last_login', $args->s_last_login, 'like_prefix');
${'s_last_login68_argument'}->createConditionValue();
if(!${'s_last_login68_argument'}->isValid()) return ${'s_last_login68_argument'}->getErrorMessage();
} else
${'s_last_login68_argument'} = NULL;if(${'s_last_login68_argument'} !== null) ${'s_last_login68_argument'}->setColumnType('date');
if(isset($args->s_last_login_ipaddress)) {
${'s_last_login_ipaddress69_argument'} = new ConditionArgument('s_last_login_ipaddress', $args->s_last_login_ipaddress, 'like_prefix');
${'s_last_login_ipaddress69_argument'}->createConditionValue();
if(!${'s_last_login_ipaddress69_argument'}->isValid()) return ${'s_last_login_ipaddress69_argument'}->getErrorMessage();
} else
${'s_last_login_ipaddress69_argument'} = NULL;if(${'s_last_login_ipaddress69_argument'} !== null) ${'s_last_login_ipaddress69_argument'}->setColumnType('varchar');
if(isset($args->s_regdate_more)) {
${'s_regdate_more70_argument'} = new ConditionArgument('s_regdate_more', $args->s_regdate_more, 'more');
${'s_regdate_more70_argument'}->createConditionValue();
if(!${'s_regdate_more70_argument'}->isValid()) return ${'s_regdate_more70_argument'}->getErrorMessage();
} else
${'s_regdate_more70_argument'} = NULL;if(${'s_regdate_more70_argument'} !== null) ${'s_regdate_more70_argument'}->setColumnType('date');
if(isset($args->s_regdate_less)) {
${'s_regdate_less71_argument'} = new ConditionArgument('s_regdate_less', $args->s_regdate_less, 'less');
${'s_regdate_less71_argument'}->createConditionValue();
if(!${'s_regdate_less71_argument'}->isValid()) return ${'s_regdate_less71_argument'}->getErrorMessage();
} else
${'s_regdate_less71_argument'} = NULL;if(${'s_regdate_less71_argument'} !== null) ${'s_regdate_less71_argument'}->setColumnType('date');
if(isset($args->s_last_login_more)) {
${'s_last_login_more72_argument'} = new ConditionArgument('s_last_login_more', $args->s_last_login_more, 'more');
${'s_last_login_more72_argument'}->createConditionValue();
if(!${'s_last_login_more72_argument'}->isValid()) return ${'s_last_login_more72_argument'}->getErrorMessage();
} else
${'s_last_login_more72_argument'} = NULL;if(${'s_last_login_more72_argument'} !== null) ${'s_last_login_more72_argument'}->setColumnType('date');
if(isset($args->s_last_login_less)) {
${'s_last_login_less73_argument'} = new ConditionArgument('s_last_login_less', $args->s_last_login_less, 'less');
${'s_last_login_less73_argument'}->createConditionValue();
if(!${'s_last_login_less73_argument'}->isValid()) return ${'s_last_login_less73_argument'}->getErrorMessage();
} else
${'s_last_login_less73_argument'} = NULL;if(${'s_last_login_less73_argument'} !== null) ${'s_last_login_less73_argument'}->setColumnType('date');

${'page76_argument'} = new Argument('page', $args->{'page'});
${'page76_argument'}->ensureDefaultValue('1');
if(!${'page76_argument'}->isValid()) return ${'page76_argument'}->getErrorMessage();

${'page_count77_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count77_argument'}->ensureDefaultValue('10');
if(!${'page_count77_argument'}->isValid()) return ${'page_count77_argument'}->getErrorMessage();

${'list_count78_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count78_argument'}->ensureDefaultValue('20');
if(!${'list_count78_argument'}->isValid()) return ${'list_count78_argument'}->getErrorMessage();

${'sort_index74_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index74_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index74_argument'}->isValid()) return ${'sort_index74_argument'}->getErrorMessage();

${'sort_order75_argument'} = new SortArgument('sort_order75', $args->sort_order);
${'sort_order75_argument'}->ensureDefaultValue('asc');
if(!${'sort_order75_argument'}->isValid()) return ${'sort_order75_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin55_argument,"equal", 'and')
,new ConditionWithArgument('`denied`',$is_denied56_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls57_argument,"in", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$s_user_id58_argument,"like", 'and')
,new ConditionWithArgument('`user_name`',$s_user_name59_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name60_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$html_nick_name61_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address62_argument,"like", 'or')
,new ConditionWithArgument('`phone_number`',$s_phone_number63_argument,"like", 'or')
,new ConditionWithArgument('`birthday`',$s_birthday64_argument,"like", 'or')
,new ConditionWithArgument('`extra_vars`',$s_extra_vars65_argument,"like", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate66_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress67_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login`',$s_last_login68_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_login_ipaddress`',$s_last_login_ipaddress69_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_more70_argument,"more", 'or')
,new ConditionWithArgument('`member`.`regdate`',$s_regdate_less71_argument,"less", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_more72_argument,"more", 'or')
,new ConditionWithArgument('`member`.`last_login`',$s_last_login_less73_argument,"less", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index74_argument'}, $sort_order75_argument)
));
$query->setLimit(new Limit(${'list_count78_argument'}, ${'page76_argument'}, ${'page_count77_argument'}));
return $query; ?>