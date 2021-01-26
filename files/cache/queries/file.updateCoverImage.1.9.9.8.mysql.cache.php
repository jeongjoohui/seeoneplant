<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCoverImage");
$query->setAction("update");
$query->setPriority("");

${'cover_image4_argument'} = new Argument('cover_image', $args->{'cover_image'});
${'cover_image4_argument'}->ensureDefaultValue('Y');
${'cover_image4_argument'}->checkNotNull();
if(!${'cover_image4_argument'}->isValid()) return ${'cover_image4_argument'}->getErrorMessage();
if(${'cover_image4_argument'} !== null) ${'cover_image4_argument'}->setColumnType('char');

${'file_srl5_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl5_argument'}->checkFilter('number');
${'file_srl5_argument'}->checkNotNull();
${'file_srl5_argument'}->createConditionValue();
if(!${'file_srl5_argument'}->isValid()) return ${'file_srl5_argument'}->getErrorMessage();
if(${'file_srl5_argument'} !== null) ${'file_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`cover_image`', ${'cover_image4_argument'})
));
$query->setTables(array(
new Table('`rx_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl5_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>