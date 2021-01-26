<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentExtraKeys");
$query->setAction("select");
$query->setPriority("");

${'module_srl264_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl264_argument'}->checkFilter('number');
${'module_srl264_argument'}->checkNotNull();
${'module_srl264_argument'}->createConditionValue();
if(!${'module_srl264_argument'}->isValid()) return ${'module_srl264_argument'}->getErrorMessage();
if(${'module_srl264_argument'} !== null) ${'module_srl264_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx265_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx265_argument'}->checkFilter('number');
${'var_idx265_argument'}->createConditionValue();
if(!${'var_idx265_argument'}->isValid()) return ${'var_idx265_argument'}->getErrorMessage();
} else
${'var_idx265_argument'} = NULL;if(${'var_idx265_argument'} !== null) ${'var_idx265_argument'}->setColumnType('number');

${'sort_index266_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index266_argument'}->ensureDefaultValue('var_idx');
if(!${'sort_index266_argument'}->isValid()) return ${'sort_index266_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module_srl`', '`module_srl`')
,new SelectExpression('`var_idx`', '`idx`')
,new SelectExpression('`var_name`', '`name`')
,new SelectExpression('`var_type`', '`type`')
,new SelectExpression('`var_is_required`', '`is_required`')
,new SelectExpression('`var_search`', '`search`')
,new SelectExpression('`var_default`', '`default`')
,new SelectExpression('`var_desc`', '`desc`')
,new SelectExpression('`eid`', '`eid`')
));
$query->setTables(array(
new Table('`rx_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl264_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx265_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index266_argument'}, "asc")
));
$query->setLimit();
return $query; ?>