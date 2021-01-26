<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getLayout");
$query->setAction("select");
$query->setPriority("");

${'layout_srl226_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl226_argument'}->checkFilter('number');
${'layout_srl226_argument'}->checkNotNull();
${'layout_srl226_argument'}->createConditionValue();
if(!${'layout_srl226_argument'}->isValid()) return ${'layout_srl226_argument'}->getErrorMessage();
if(${'layout_srl226_argument'} !== null) ${'layout_srl226_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl226_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>