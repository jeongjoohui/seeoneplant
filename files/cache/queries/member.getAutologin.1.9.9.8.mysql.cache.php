<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getAutologin");
$query->setAction("select");
$query->setPriority("");
if(isset($args->autologin_id)) {
${'autologin_id1_argument'} = new ConditionArgument('autologin_id', $args->autologin_id, 'equal');
${'autologin_id1_argument'}->createConditionValue();
if(!${'autologin_id1_argument'}->isValid()) return ${'autologin_id1_argument'}->getErrorMessage();
} else
${'autologin_id1_argument'} = NULL;if(${'autologin_id1_argument'} !== null) ${'autologin_id1_argument'}->setColumnType('number');
if(isset($args->autologin_key)) {
${'autologin_key2_argument'} = new ConditionArgument('autologin_key', $args->autologin_key, 'equal');
${'autologin_key2_argument'}->createConditionValue();
if(!${'autologin_key2_argument'}->isValid()) return ${'autologin_key2_argument'}->getErrorMessage();
} else
${'autologin_key2_argument'} = NULL;if(${'autologin_key2_argument'} !== null) ${'autologin_key2_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl3_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl3_argument'}->createConditionValue();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
} else
${'member_srl3_argument'} = NULL;if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

${'page5_argument'} = new Argument('page', $args->{'page'});
${'page5_argument'}->ensureDefaultValue('1');
if(!${'page5_argument'}->isValid()) return ${'page5_argument'}->getErrorMessage();

${'page_count6_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count6_argument'}->ensureDefaultValue('10');
if(!${'page_count6_argument'}->isValid()) return ${'page_count6_argument'}->getErrorMessage();

${'list_count7_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count7_argument'}->ensureDefaultValue('20');
if(!${'list_count7_argument'}->isValid()) return ${'list_count7_argument'}->getErrorMessage();

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('member_autologin.id');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`member_autologin`.*')
,new SelectExpression('`member`.`email_address`', '`email_address`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`password`', '`password`')
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
,new Table('`rx_member_autologin`', '`member_autologin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`member_autologin`.`member_srl`',"equal", 'and')
,new ConditionWithArgument('`member_autologin`.`id`',$autologin_id1_argument,"equal", 'and')
,new ConditionWithArgument('`member_autologin`.`autologin_key`',$autologin_key2_argument,"equal", 'and')
,new ConditionWithArgument('`member_autologin`.`member_srl`',$member_srl3_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count7_argument'}, ${'page5_argument'}, ${'page_count6_argument'}));
return $query; ?>