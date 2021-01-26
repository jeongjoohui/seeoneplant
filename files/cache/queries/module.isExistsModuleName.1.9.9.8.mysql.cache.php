<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsModuleName");
$query->setAction("select");
$query->setPriority("");
if(isset($args->site_srl)) {
${'site_srl148_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl148_argument'}->createConditionValue();
if(!${'site_srl148_argument'}->isValid()) return ${'site_srl148_argument'}->getErrorMessage();
} else
${'site_srl148_argument'} = NULL;if(${'site_srl148_argument'} !== null) ${'site_srl148_argument'}->setColumnType('number');

${'mid149_argument'} = new ConditionArgument('mid', $args->mid, 'equal');
${'mid149_argument'}->checkNotNull();
${'mid149_argument'}->createConditionValue();
if(!${'mid149_argument'}->isValid()) return ${'mid149_argument'}->getErrorMessage();
if(${'mid149_argument'} !== null) ${'mid149_argument'}->setColumnType('varchar');

${'module_srl150_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'notequal');
${'module_srl150_argument'}->ensureDefaultValue('0');
${'module_srl150_argument'}->checkNotNull();
${'module_srl150_argument'}->createConditionValue();
if(!${'module_srl150_argument'}->isValid()) return ${'module_srl150_argument'}->getErrorMessage();
if(${'module_srl150_argument'} !== null) ${'module_srl150_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl148_argument,"equal", 'and')
,new ConditionWithArgument('`mid`',$mid149_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl150_argument,"notequal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>