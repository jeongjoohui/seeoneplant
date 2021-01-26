<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("countSMSLogByType");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status6_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status6_argument'}->createConditionValue();
if(!${'status6_argument'}->isValid()) return ${'status6_argument'}->getErrorMessage();
} else
${'status6_argument'} = NULL;if(${'status6_argument'} !== null) ${'status6_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_advanced_mailer_sms_log`', '`advanced_mailer_sms_log`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status6_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>