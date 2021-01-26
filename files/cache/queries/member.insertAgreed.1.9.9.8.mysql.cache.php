<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAgreed");
$query->setAction("insert");
$query->setPriority("");

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkFilter('number');
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');

${'agreement_sequence3_argument'} = new Argument('agreement_sequence', $args->{'agreement_sequence'});
${'agreement_sequence3_argument'}->checkFilter('number');
${'agreement_sequence3_argument'}->checkNotNull();
if(!${'agreement_sequence3_argument'}->isValid()) return ${'agreement_sequence3_argument'}->getErrorMessage();
if(${'agreement_sequence3_argument'} !== null) ${'agreement_sequence3_argument'}->setColumnType('number');

${'agreed4_argument'} = new Argument('agreed', $args->{'agreed'});
${'agreed4_argument'}->checkNotNull();
if(!${'agreed4_argument'}->isValid()) return ${'agreed4_argument'}->getErrorMessage();
if(${'agreed4_argument'} !== null) ${'agreed4_argument'}->setColumnType('char');

${'ipaddress5_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress5_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'ipaddress5_argument'}->isValid()) return ${'ipaddress5_argument'}->getErrorMessage();
if(${'ipaddress5_argument'} !== null) ${'ipaddress5_argument'}->setColumnType('varchar');

${'regdate6_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate6_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate6_argument'}->isValid()) return ${'regdate6_argument'}->getErrorMessage();
if(${'regdate6_argument'} !== null) ${'regdate6_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`agreement_sequence`', ${'agreement_sequence3_argument'})
,new InsertExpression('`agreed`', ${'agreed4_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress5_argument'})
,new InsertExpression('`regdate`', ${'regdate6_argument'})
));
$query->setTables(array(
new Table('`rx_member_agreed`', '`member_agreed`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>