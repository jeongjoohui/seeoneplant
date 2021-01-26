<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateLayout");
$query->setAction("update");
$query->setPriority("");
if(isset($args->title)) {
${'title220_argument'} = new Argument('title', $args->{'title'});
if(!${'title220_argument'}->isValid()) return ${'title220_argument'}->getErrorMessage();
} else
${'title220_argument'} = NULL;if(${'title220_argument'} !== null) ${'title220_argument'}->setColumnType('varchar');
if(isset($args->extra_vars)) {
${'extra_vars221_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars221_argument'}->isValid()) return ${'extra_vars221_argument'}->getErrorMessage();
} else
${'extra_vars221_argument'} = NULL;if(${'extra_vars221_argument'} !== null) ${'extra_vars221_argument'}->setColumnType('text');
if(isset($args->layout)) {
${'layout222_argument'} = new Argument('layout', $args->{'layout'});
if(!${'layout222_argument'}->isValid()) return ${'layout222_argument'}->getErrorMessage();
} else
${'layout222_argument'} = NULL;if(${'layout222_argument'} !== null) ${'layout222_argument'}->setColumnType('varchar');
if(isset($args->layout_path)) {
${'layout_path223_argument'} = new Argument('layout_path', $args->{'layout_path'});
if(!${'layout_path223_argument'}->isValid()) return ${'layout_path223_argument'}->getErrorMessage();
} else
${'layout_path223_argument'} = NULL;if(${'layout_path223_argument'} !== null) ${'layout_path223_argument'}->setColumnType('varchar');

${'layout_srl224_argument'} = new ConditionArgument('layout_srl', $args->layout_srl, 'equal');
${'layout_srl224_argument'}->checkFilter('number');
${'layout_srl224_argument'}->checkNotNull();
${'layout_srl224_argument'}->createConditionValue();
if(!${'layout_srl224_argument'}->isValid()) return ${'layout_srl224_argument'}->getErrorMessage();
if(${'layout_srl224_argument'} !== null) ${'layout_srl224_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`title`', ${'title220_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars221_argument'})
,new UpdateExpression('`layout`', ${'layout222_argument'})
,new UpdateExpression('`layout_path`', ${'layout_path223_argument'})
));
$query->setTables(array(
new Table('`rx_layouts`', '`layouts`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`layout_srl`',$layout_srl224_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>