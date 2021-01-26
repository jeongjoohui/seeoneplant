<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAddonIsActivated");
$query->setAction("select");
$query->setPriority("");

${'site_srl68_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl68_argument'}->checkNotNull();
${'site_srl68_argument'}->createConditionValue();
if(!${'site_srl68_argument'}->isValid()) return ${'site_srl68_argument'}->getErrorMessage();
if(${'site_srl68_argument'} !== null) ${'site_srl68_argument'}->setColumnType('number');

${'addon69_argument'} = new ConditionArgument('addon', $args->addon, 'equal');
${'addon69_argument'}->checkNotNull();
${'addon69_argument'}->createConditionValue();
if(!${'addon69_argument'}->isValid()) return ${'addon69_argument'}->getErrorMessage();
if(${'addon69_argument'} !== null) ${'addon69_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_addons_site`', '`addons_site`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl68_argument,"equal", 'and')
,new ConditionWithArgument('`addon`',$addon69_argument,"equal", 'and')
,new ConditionWithoutArgument('`is_used`',"'Y'","equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>