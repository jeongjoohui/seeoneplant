<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNewestCommentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status62_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status62_argument'}->createConditionValue();
if(!${'status62_argument'}->isValid()) return ${'status62_argument'}->getErrorMessage();
} else
${'status62_argument'} = NULL;if(${'status62_argument'} !== null) ${'status62_argument'}->setColumnType('number');
if(isset($args->is_secret)) {
${'is_secret63_argument'} = new ConditionArgument('is_secret', $args->is_secret, 'equal');
${'is_secret63_argument'}->createConditionValue();
if(!${'is_secret63_argument'}->isValid()) return ${'is_secret63_argument'}->getErrorMessage();
} else
${'is_secret63_argument'} = NULL;if(${'is_secret63_argument'} !== null) ${'is_secret63_argument'}->setColumnType('char');
if(isset($args->module_srl)) {
${'module_srl64_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl64_argument'}->checkFilter('number');
${'module_srl64_argument'}->createConditionValue();
if(!${'module_srl64_argument'}->isValid()) return ${'module_srl64_argument'}->getErrorMessage();
} else
${'module_srl64_argument'} = NULL;if(${'module_srl64_argument'} !== null) ${'module_srl64_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl65_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl65_argument'}->checkFilter('number');
${'document_srl65_argument'}->createConditionValue();
if(!${'document_srl65_argument'}->isValid()) return ${'document_srl65_argument'}->getErrorMessage();
} else
${'document_srl65_argument'} = NULL;if(${'document_srl65_argument'} !== null) ${'document_srl65_argument'}->setColumnType('number');

${'list_count67_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count67_argument'}->ensureDefaultValue('20');
if(!${'list_count67_argument'}->isValid()) return ${'list_count67_argument'}->getErrorMessage();

${'sort_index66_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index66_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index66_argument'}->isValid()) return ${'sort_index66_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`rx_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status62_argument,"equal", 'and')
,new ConditionWithArgument('`is_secret`',$is_secret63_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl64_argument,"in", 'and')
,new ConditionWithArgument('`document_srl`',$document_srl65_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index66_argument'}, "asc")
));
$query->setLimit(new Limit(${'list_count67_argument'}));
return $query; ?>