<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberSrl");
$query->setAction("select");
$query->setPriority("");
if(isset($args->user_id)) {
${'user_id79_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id79_argument'}->createConditionValue();
if(!${'user_id79_argument'}->isValid()) return ${'user_id79_argument'}->getErrorMessage();
} else
${'user_id79_argument'} = NULL;if(${'user_id79_argument'} !== null) ${'user_id79_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address80_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address80_argument'}->createConditionValue();
if(!${'email_address80_argument'}->isValid()) return ${'email_address80_argument'}->getErrorMessage();
} else
${'email_address80_argument'} = NULL;if(${'email_address80_argument'} !== null) ${'email_address80_argument'}->setColumnType('varchar');
if(isset($args->phone_number)) {
${'phone_number81_argument'} = new ConditionArgument('phone_number', $args->phone_number, 'equal');
${'phone_number81_argument'}->createConditionValue();
if(!${'phone_number81_argument'}->isValid()) return ${'phone_number81_argument'}->getErrorMessage();
} else
${'phone_number81_argument'} = NULL;if(${'phone_number81_argument'} !== null) ${'phone_number81_argument'}->setColumnType('varchar');
if(isset($args->phone_country)) {
${'phone_country82_argument'} = new ConditionArgument('phone_country', $args->phone_country, 'equal');
${'phone_country82_argument'}->createConditionValue();
if(!${'phone_country82_argument'}->isValid()) return ${'phone_country82_argument'}->getErrorMessage();
} else
${'phone_country82_argument'} = NULL;if(${'phone_country82_argument'} !== null) ${'phone_country82_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name83_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name83_argument'}->createConditionValue();
if(!${'nick_name83_argument'}->isValid()) return ${'nick_name83_argument'}->getErrorMessage();
} else
${'nick_name83_argument'} = NULL;if(${'nick_name83_argument'} !== null) ${'nick_name83_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`user_id`',$user_id79_argument,"equal", 'and')
,new ConditionWithArgument('`email_address`',$email_address80_argument,"equal", 'and')
,new ConditionWithArgument('`phone_number`',$phone_number81_argument,"equal", 'and')
,new ConditionWithArgument('`phone_country`',$phone_country82_argument,"equal", 'and')
,new ConditionWithArgument('`nick_name`',$nick_name83_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>