<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateAutologin");
$query->setAction("update");
$query->setPriority("");
if(isset($args->security_key)) {
${'security_key8_argument'} = new Argument('security_key', $args->{'security_key'});
if(!${'security_key8_argument'}->isValid()) return ${'security_key8_argument'}->getErrorMessage();
} else
${'security_key8_argument'} = NULL;if(${'security_key8_argument'} !== null) ${'security_key8_argument'}->setColumnType('varchar');

${'last_visit9_argument'} = new Argument('last_visit', $args->{'last_visit'});
${'last_visit9_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'last_visit9_argument'}->isValid()) return ${'last_visit9_argument'}->getErrorMessage();
if(${'last_visit9_argument'} !== null) ${'last_visit9_argument'}->setColumnType('date');

${'last_ipaddress10_argument'} = new Argument('last_ipaddress', $args->{'last_ipaddress'});
${'last_ipaddress10_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'last_ipaddress10_argument'}->isValid()) return ${'last_ipaddress10_argument'}->getErrorMessage();
if(${'last_ipaddress10_argument'} !== null) ${'last_ipaddress10_argument'}->setColumnType('varchar');
if(isset($args->user_agent)) {
${'user_agent11_argument'} = new Argument('user_agent', $args->{'user_agent'});
if(!${'user_agent11_argument'}->isValid()) return ${'user_agent11_argument'}->getErrorMessage();
} else
${'user_agent11_argument'} = NULL;if(${'user_agent11_argument'} !== null) ${'user_agent11_argument'}->setColumnType('varchar');
if(isset($args->autologin_key)) {
${'autologin_key12_argument'} = new ConditionArgument('autologin_key', $args->autologin_key, 'equal');
${'autologin_key12_argument'}->createConditionValue();
if(!${'autologin_key12_argument'}->isValid()) return ${'autologin_key12_argument'}->getErrorMessage();
} else
${'autologin_key12_argument'} = NULL;if(${'autologin_key12_argument'} !== null) ${'autologin_key12_argument'}->setColumnType('varchar');
if(isset($args->not_autologin_key)) {
${'not_autologin_key13_argument'} = new ConditionArgument('not_autologin_key', $args->not_autologin_key, 'notequal');
${'not_autologin_key13_argument'}->createConditionValue();
if(!${'not_autologin_key13_argument'}->isValid()) return ${'not_autologin_key13_argument'}->getErrorMessage();
} else
${'not_autologin_key13_argument'} = NULL;if(${'not_autologin_key13_argument'} !== null) ${'not_autologin_key13_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl14_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl14_argument'}->createConditionValue();
if(!${'member_srl14_argument'}->isValid()) return ${'member_srl14_argument'}->getErrorMessage();
} else
${'member_srl14_argument'} = NULL;if(${'member_srl14_argument'} !== null) ${'member_srl14_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`security_key`', ${'security_key8_argument'})
,new UpdateExpression('`last_visit`', ${'last_visit9_argument'})
,new UpdateExpression('`last_ipaddress`', ${'last_ipaddress10_argument'})
,new UpdateExpression('`user_agent`', ${'user_agent11_argument'})
));
$query->setTables(array(
new Table('`rx_member_autologin`', '`member_autologin`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`autologin_key`',$autologin_key12_argument,"equal", 'and')
,new ConditionWithArgument('`autologin_key`',$not_autologin_key13_argument,"notequal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl14_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>