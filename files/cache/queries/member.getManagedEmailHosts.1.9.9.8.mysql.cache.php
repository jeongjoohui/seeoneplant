<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getManagedEmailHosts");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`email_host`')
));
$query->setTables(array(
new Table('`rx_member_managed_email_hosts`', '`member_managed_email_hosts`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>