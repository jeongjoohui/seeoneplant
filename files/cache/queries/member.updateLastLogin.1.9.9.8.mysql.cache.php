<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLastLogin");
$query->setAction("update");
$query->setPriority("");

${'last_login122_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login122_argument'}->ensureDefaultValue(getInternalDateTime());
${'last_login122_argument'}->checkNotNull();
if(!${'last_login122_argument'}->isValid()) return ${'last_login122_argument'}->getErrorMessage();
if(${'last_login122_argument'} !== null) ${'last_login122_argument'}->setColumnType('date');

${'last_login_ipaddress123_argument'} = new Argument('last_login_ipaddress', $args->{'last_login_ipaddress'});
${'last_login_ipaddress123_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
${'last_login_ipaddress123_argument'}->checkNotNull();
if(!${'last_login_ipaddress123_argument'}->isValid()) return ${'last_login_ipaddress123_argument'}->getErrorMessage();
if(${'last_login_ipaddress123_argument'} !== null) ${'last_login_ipaddress123_argument'}->setColumnType('varchar');

${'member_srl124_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl124_argument'}->checkFilter('number');
${'member_srl124_argument'}->checkNotNull();
${'member_srl124_argument'}->createConditionValue();
if(!${'member_srl124_argument'}->isValid()) return ${'member_srl124_argument'}->getErrorMessage();
if(${'member_srl124_argument'} !== null) ${'member_srl124_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`last_login`', ${'last_login122_argument'})
,new UpdateExpression('`last_login_ipaddress`', ${'last_login_ipaddress123_argument'})
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl124_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>