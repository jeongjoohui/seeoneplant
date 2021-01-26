<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMemberAdmins");
$query->setAction("select");
$query->setPriority("");
if(isset($args->is_admin)) {
${'is_admin275_argument'} = new ConditionArgument('is_admin', $args->is_admin, 'equal');
${'is_admin275_argument'}->createConditionValue();
if(!${'is_admin275_argument'}->isValid()) return ${'is_admin275_argument'}->getErrorMessage();
} else
${'is_admin275_argument'} = NULL;if(${'is_admin275_argument'} !== null) ${'is_admin275_argument'}->setColumnType('char');

$query->setColumns(array(
new SelectExpression('`member_srl`')
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`is_admin`',$is_admin275_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>