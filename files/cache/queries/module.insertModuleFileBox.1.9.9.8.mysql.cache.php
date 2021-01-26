<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModuleFileBox");
$query->setAction("insert");
$query->setPriority("");

${'module_filebox_srl1_argument'} = new Argument('module_filebox_srl', $args->{'module_filebox_srl'});
${'module_filebox_srl1_argument'}->checkNotNull();
if(!${'module_filebox_srl1_argument'}->isValid()) return ${'module_filebox_srl1_argument'}->getErrorMessage();
if(${'module_filebox_srl1_argument'} !== null) ${'module_filebox_srl1_argument'}->setColumnType('number');

${'member_srl2_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl2_argument'}->checkNotNull();
if(!${'member_srl2_argument'}->isValid()) return ${'member_srl2_argument'}->getErrorMessage();
if(${'member_srl2_argument'} !== null) ${'member_srl2_argument'}->setColumnType('number');
if(isset($args->filename)) {
${'filename3_argument'} = new Argument('filename', $args->{'filename'});
if(!${'filename3_argument'}->isValid()) return ${'filename3_argument'}->getErrorMessage();
} else
${'filename3_argument'} = NULL;if(${'filename3_argument'} !== null) ${'filename3_argument'}->setColumnType('varchar');
if(isset($args->fileextension)) {
${'fileextension4_argument'} = new Argument('fileextension', $args->{'fileextension'});
if(!${'fileextension4_argument'}->isValid()) return ${'fileextension4_argument'}->getErrorMessage();
} else
${'fileextension4_argument'} = NULL;if(${'fileextension4_argument'} !== null) ${'fileextension4_argument'}->setColumnType('varchar');
if(isset($args->filesize)) {
${'filesize5_argument'} = new Argument('filesize', $args->{'filesize'});
if(!${'filesize5_argument'}->isValid()) return ${'filesize5_argument'}->getErrorMessage();
} else
${'filesize5_argument'} = NULL;if(${'filesize5_argument'} !== null) ${'filesize5_argument'}->setColumnType('number');
if(isset($args->comment)) {
${'comment6_argument'} = new Argument('comment', $args->{'comment'});
if(!${'comment6_argument'}->isValid()) return ${'comment6_argument'}->getErrorMessage();
} else
${'comment6_argument'} = NULL;if(${'comment6_argument'} !== null) ${'comment6_argument'}->setColumnType('bigtext');

${'regdate7_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate7_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate7_argument'}->isValid()) return ${'regdate7_argument'}->getErrorMessage();
if(${'regdate7_argument'} !== null) ${'regdate7_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`module_filebox_srl`', ${'module_filebox_srl1_argument'})
,new InsertExpression('`member_srl`', ${'member_srl2_argument'})
,new InsertExpression('`filename`', ${'filename3_argument'})
,new InsertExpression('`fileextension`', ${'fileextension4_argument'})
,new InsertExpression('`filesize`', ${'filesize5_argument'})
,new InsertExpression('`comment`', ${'comment6_argument'})
,new InsertExpression('`regdate`', ${'regdate7_argument'})
));
$query->setTables(array(
new Table('`rx_module_filebox`', '`module_filebox`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>