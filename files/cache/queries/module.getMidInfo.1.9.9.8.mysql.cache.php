<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMidInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->mid)) {
${'mid179_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid179_argument'}->createConditionValue();
if(!${'mid179_argument'}->isValid()) return ${'mid179_argument'}->getErrorMessage();
} else
${'mid179_argument'} = NULL;if(${'mid179_argument'} !== null) ${'mid179_argument'}->setColumnType('varchar');
if(isset($args->module_srl)) {
${'module_srl180_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl180_argument'}->createConditionValue();
if(!${'module_srl180_argument'}->isValid()) return ${'module_srl180_argument'}->getErrorMessage();
} else
${'module_srl180_argument'} = NULL;if(${'module_srl180_argument'} !== null) ${'module_srl180_argument'}->setColumnType('number');
if(isset($args->site_srl)) {
${'site_srl181_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl181_argument'}->createConditionValue();
if(!${'site_srl181_argument'}->isValid()) return ${'site_srl181_argument'}->getErrorMessage();
} else
${'site_srl181_argument'} = NULL;if(${'site_srl181_argument'} !== null) ${'site_srl181_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mid`',$mid179_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl180_argument,"equal", 'and')
,new ConditionWithArgument('`site_srl`',$site_srl181_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>