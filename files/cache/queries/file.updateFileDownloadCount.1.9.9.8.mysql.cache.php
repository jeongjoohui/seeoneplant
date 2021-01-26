<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDownloadCount");
$query->setAction("update");
$query->setPriority("");

${'download_count1_argument'} = new Argument('download_count', $args->{'download_count'});
${'download_count1_argument'}->setColumnOperation('+');
${'download_count1_argument'}->ensureDefaultValue(1);
if(!${'download_count1_argument'}->isValid()) return ${'download_count1_argument'}->getErrorMessage();
if(${'download_count1_argument'} !== null) ${'download_count1_argument'}->setColumnType('number');

${'file_srl2_argument'} = new ConditionArgument('file_srl', $args->file_srl, 'equal');
${'file_srl2_argument'}->checkFilter('number');
${'file_srl2_argument'}->checkNotNull();
${'file_srl2_argument'}->createConditionValue();
if(!${'file_srl2_argument'}->isValid()) return ${'file_srl2_argument'}->getErrorMessage();
if(${'file_srl2_argument'} !== null) ${'file_srl2_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`download_count`', ${'download_count1_argument'})
));
$query->setTables(array(
new Table('`rx_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`file_srl`',$file_srl2_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>