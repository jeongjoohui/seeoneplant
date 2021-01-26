<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name34_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name34_argument'}->createConditionValue();
if(!${'trigger_name34_argument'}->isValid()) return ${'trigger_name34_argument'}->getErrorMessage();
} else
${'trigger_name34_argument'} = NULL;if(${'trigger_name34_argument'} !== null) ${'trigger_name34_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position35_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position35_argument'}->createConditionValue();
if(!${'called_position35_argument'}->isValid()) return ${'called_position35_argument'}->getErrorMessage();
} else
${'called_position35_argument'} = NULL;if(${'called_position35_argument'} !== null) ${'called_position35_argument'}->setColumnType('varchar');

${'40_argument'} = new Argument('', $args->{''});
${'40_argument'}->ensureDefaultValue('called_method');
if(!${'40_argument'}->isValid()) return ${'40_argument'}->getErrorMessage();

${'39_argument'} = new Argument('', $args->{''});
${'39_argument'}->ensureDefaultValue('type');
if(!${'39_argument'}->isValid()) return ${'39_argument'}->getErrorMessage();

${'38_argument'} = new Argument('', $args->{''});
${'38_argument'}->ensureDefaultValue('module');
if(!${'38_argument'}->isValid()) return ${'38_argument'}->getErrorMessage();

${'37_argument'} = new Argument('', $args->{''});
${'37_argument'}->ensureDefaultValue('called_position');
if(!${'37_argument'}->isValid()) return ${'37_argument'}->getErrorMessage();

${'36_argument'} = new Argument('', $args->{''});
${'36_argument'}->ensureDefaultValue('trigger_name');
if(!${'36_argument'}->isValid()) return ${'36_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name34_argument,"equal", 'and')
,new ConditionWithArgument('`called_position`',$called_position35_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'36_argument'}, "asc")
,new OrderByColumn(${'37_argument'}, "asc")
,new OrderByColumn(${'38_argument'}, "asc")
,new OrderByColumn(${'39_argument'}, "asc")
,new OrderByColumn(${'40_argument'}, "asc")
));
$query->setLimit();
return $query; ?>