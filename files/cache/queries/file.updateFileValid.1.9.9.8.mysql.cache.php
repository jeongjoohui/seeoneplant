<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");
if(isset($args->upload_target_type)) {
${'upload_target_type271_argument'} = new Argument('upload_target_type', $args->{'upload_target_type'});
if(!${'upload_target_type271_argument'}->isValid()) return ${'upload_target_type271_argument'}->getErrorMessage();
} else
${'upload_target_type271_argument'} = NULL;if(${'upload_target_type271_argument'} !== null) ${'upload_target_type271_argument'}->setColumnType('char');

${'isvalid272_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid272_argument'}->ensureDefaultValue('Y');
${'isvalid272_argument'}->checkNotNull();
if(!${'isvalid272_argument'}->isValid()) return ${'isvalid272_argument'}->getErrorMessage();
if(${'isvalid272_argument'} !== null) ${'isvalid272_argument'}->setColumnType('char');

${'upload_target_srl273_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl273_argument'}->checkFilter('number');
${'upload_target_srl273_argument'}->checkNotNull();
${'upload_target_srl273_argument'}->createConditionValue();
if(!${'upload_target_srl273_argument'}->isValid()) return ${'upload_target_srl273_argument'}->getErrorMessage();
if(${'upload_target_srl273_argument'} !== null) ${'upload_target_srl273_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`upload_target_type`', ${'upload_target_type271_argument'})
,new UpdateExpression('`isvalid`', ${'isvalid272_argument'})
));
$query->setTables(array(
new Table('`rx_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl273_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>