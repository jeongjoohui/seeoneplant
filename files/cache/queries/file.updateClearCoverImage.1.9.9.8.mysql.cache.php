<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateClearCoverImage");
$query->setAction("update");
$query->setPriority("");

${'upload_target_srl2_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl2_argument'}->checkNotNull();
${'upload_target_srl2_argument'}->createConditionValue();
if(!${'upload_target_srl2_argument'}->isValid()) return ${'upload_target_srl2_argument'}->getErrorMessage();
if(${'upload_target_srl2_argument'} !== null) ${'upload_target_srl2_argument'}->setColumnType('number');
if(isset($args->cover_file_srl)) {
${'cover_file_srl3_argument'} = new ConditionArgument('cover_file_srl', $args->cover_file_srl, 'notequal');
${'cover_file_srl3_argument'}->createConditionValue();
if(!${'cover_file_srl3_argument'}->isValid()) return ${'cover_file_srl3_argument'}->getErrorMessage();
} else
${'cover_file_srl3_argument'} = NULL;if(${'cover_file_srl3_argument'} !== null) ${'cover_file_srl3_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`cover_image`', "'N'")
));
$query->setTables(array(
new Table('`rx_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl2_argument,"equal", 'and')
,new ConditionWithoutArgument('`cover_image`',"'Y'","equal", 'and')
,new ConditionWithArgument('`file_srl`',$cover_file_srl3_argument,"notequal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>