<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAutologin");
$query->setAction("insert");
$query->setPriority("");

${'autologin_key1_argument'} = new Argument('autologin_key', $args->{'autologin_key'});
${'autologin_key1_argument'}->checkNotNull();
if(!${'autologin_key1_argument'}->isValid()) return ${'autologin_key1_argument'}->getErrorMessage();
if(${'autologin_key1_argument'} !== null) ${'autologin_key1_argument'}->setColumnType('varchar');

${'security_key2_argument'} = new Argument('security_key', $args->{'security_key'});
${'security_key2_argument'}->checkNotNull();
if(!${'security_key2_argument'}->isValid()) return ${'security_key2_argument'}->getErrorMessage();
if(${'security_key2_argument'} !== null) ${'security_key2_argument'}->setColumnType('varchar');

${'member_srl3_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl3_argument'}->checkFilter('number');
${'member_srl3_argument'}->checkNotNull();
if(!${'member_srl3_argument'}->isValid()) return ${'member_srl3_argument'}->getErrorMessage();
if(${'member_srl3_argument'} !== null) ${'member_srl3_argument'}->setColumnType('number');

${'regdate4_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate4_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate4_argument'}->isValid()) return ${'regdate4_argument'}->getErrorMessage();
if(${'regdate4_argument'} !== null) ${'regdate4_argument'}->setColumnType('date');

${'ipaddress5_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress5_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'ipaddress5_argument'}->isValid()) return ${'ipaddress5_argument'}->getErrorMessage();
if(${'ipaddress5_argument'} !== null) ${'ipaddress5_argument'}->setColumnType('varchar');

${'last_visit6_argument'} = new Argument('last_visit', $args->{'last_visit'});
${'last_visit6_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'last_visit6_argument'}->isValid()) return ${'last_visit6_argument'}->getErrorMessage();
if(${'last_visit6_argument'} !== null) ${'last_visit6_argument'}->setColumnType('date');

${'last_ipaddress7_argument'} = new Argument('last_ipaddress', $args->{'last_ipaddress'});
${'last_ipaddress7_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'last_ipaddress7_argument'}->isValid()) return ${'last_ipaddress7_argument'}->getErrorMessage();
if(${'last_ipaddress7_argument'} !== null) ${'last_ipaddress7_argument'}->setColumnType('varchar');
if(isset($args->user_agent)) {
${'user_agent8_argument'} = new Argument('user_agent', $args->{'user_agent'});
if(!${'user_agent8_argument'}->isValid()) return ${'user_agent8_argument'}->getErrorMessage();
} else
${'user_agent8_argument'} = NULL;if(${'user_agent8_argument'} !== null) ${'user_agent8_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`autologin_key`', ${'autologin_key1_argument'})
,new InsertExpression('`security_key`', ${'security_key2_argument'})
,new InsertExpression('`member_srl`', ${'member_srl3_argument'})
,new InsertExpression('`regdate`', ${'regdate4_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress5_argument'})
,new InsertExpression('`last_visit`', ${'last_visit6_argument'})
,new InsertExpression('`last_ipaddress`', ${'last_ipaddress7_argument'})
,new InsertExpression('`user_agent`', ${'user_agent8_argument'})
));
$query->setTables(array(
new Table('`rx_member_autologin`', '`member_autologin`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>