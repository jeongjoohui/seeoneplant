<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCategoryCount");
$query->setAction("update");
$query->setPriority("");
if(isset($args->document_count)) {
${'document_count5_argument'} = new Argument('document_count', $args->{'document_count'});
if(!${'document_count5_argument'}->isValid()) return ${'document_count5_argument'}->getErrorMessage();
} else
${'document_count5_argument'} = NULL;if(${'document_count5_argument'} !== null) ${'document_count5_argument'}->setColumnType('number');

${'last_update6_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update6_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'last_update6_argument'}->isValid()) return ${'last_update6_argument'}->getErrorMessage();
if(${'last_update6_argument'} !== null) ${'last_update6_argument'}->setColumnType('date');

${'category_srl7_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'equal');
${'category_srl7_argument'}->checkFilter('number');
${'category_srl7_argument'}->checkNotNull();
${'category_srl7_argument'}->createConditionValue();
if(!${'category_srl7_argument'}->isValid()) return ${'category_srl7_argument'}->getErrorMessage();
if(${'category_srl7_argument'} !== null) ${'category_srl7_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`document_count`', ${'document_count5_argument'})
,new UpdateExpression('`last_update`', ${'last_update6_argument'})
));
$query->setTables(array(
new Table('`rx_document_categories`', '`document_categories`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`category_srl`',$category_srl7_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>