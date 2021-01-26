<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("pageTypeNullCheck");
$query->setAction("select");
$query->setPriority("");

$query->setColumns(array(
new SelectExpression('`m`.`module_srl`')
,new SelectExpression('`m`.`mid`')
,new SelectExpression('`ev`.`value`')
));
$query->setTables(array(
new Table('`rx_modules`', '`m`')
,new JoinTable('`rx_module_extra_vars`', '`ev`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`ev`.`name`',"'page_type'","equal")
,new ConditionWithoutArgument('`m`.`module_srl`','`ev`.`module_srl`',"equal", 'and')),'and')
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`m`.`module`',"'page'","equal", 'and')
,new ConditionWithoutArgument('`ev`.`value`',"'NULL'","null", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>