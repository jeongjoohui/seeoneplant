<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFileList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->s_module_srl)) {
${'s_module_srl1_argument'} = new ConditionArgument('s_module_srl', $args->s_module_srl, 'in');
${'s_module_srl1_argument'}->createConditionValue();
if(!${'s_module_srl1_argument'}->isValid()) return ${'s_module_srl1_argument'}->getErrorMessage();
} else
${'s_module_srl1_argument'} = NULL;if(${'s_module_srl1_argument'} !== null) ${'s_module_srl1_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl2_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl2_argument'}->createConditionValue();
if(!${'exclude_module_srl2_argument'}->isValid()) return ${'exclude_module_srl2_argument'}->getErrorMessage();
} else
${'exclude_module_srl2_argument'} = NULL;if(${'exclude_module_srl2_argument'} !== null) ${'exclude_module_srl2_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid3_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid3_argument'}->createConditionValue();
if(!${'isvalid3_argument'}->isValid()) return ${'isvalid3_argument'}->getErrorMessage();
} else
${'isvalid3_argument'} = NULL;if(${'isvalid3_argument'} !== null) ${'isvalid3_argument'}->setColumnType('char');
if(isset($args->upload_target_srl)) {
${'upload_target_srl4_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl4_argument'}->createConditionValue();
if(!${'upload_target_srl4_argument'}->isValid()) return ${'upload_target_srl4_argument'}->getErrorMessage();
} else
${'upload_target_srl4_argument'} = NULL;if(${'upload_target_srl4_argument'} !== null) ${'upload_target_srl4_argument'}->setColumnType('number');
if(isset($args->upload_target_type)) {
${'upload_target_type5_argument'} = new ConditionArgument('upload_target_type', $args->upload_target_type, 'equal');
${'upload_target_type5_argument'}->createConditionValue();
if(!${'upload_target_type5_argument'}->isValid()) return ${'upload_target_type5_argument'}->getErrorMessage();
} else
${'upload_target_type5_argument'} = NULL;if(${'upload_target_type5_argument'} !== null) ${'upload_target_type5_argument'}->setColumnType('char');
if(isset($args->direct_download)) {
${'direct_download6_argument'} = new ConditionArgument('direct_download', $args->direct_download, 'equal');
${'direct_download6_argument'}->createConditionValue();
if(!${'direct_download6_argument'}->isValid()) return ${'direct_download6_argument'}->getErrorMessage();
} else
${'direct_download6_argument'} = NULL;if(${'direct_download6_argument'} !== null) ${'direct_download6_argument'}->setColumnType('char');
if(isset($args->regdate_before)) {
${'regdate_before7_argument'} = new ConditionArgument('regdate_before', $args->regdate_before, 'below');
${'regdate_before7_argument'}->createConditionValue();
if(!${'regdate_before7_argument'}->isValid()) return ${'regdate_before7_argument'}->getErrorMessage();
} else
${'regdate_before7_argument'} = NULL;if(${'regdate_before7_argument'} !== null) ${'regdate_before7_argument'}->setColumnType('date');
if(isset($args->s_filename)) {
${'s_filename8_argument'} = new ConditionArgument('s_filename', $args->s_filename, 'like');
${'s_filename8_argument'}->createConditionValue();
if(!${'s_filename8_argument'}->isValid()) return ${'s_filename8_argument'}->getErrorMessage();
} else
${'s_filename8_argument'} = NULL;if(${'s_filename8_argument'} !== null) ${'s_filename8_argument'}->setColumnType('varchar');
if(isset($args->s_filesize_more)) {
${'s_filesize_more9_argument'} = new ConditionArgument('s_filesize_more', $args->s_filesize_more, 'more');
${'s_filesize_more9_argument'}->createConditionValue();
if(!${'s_filesize_more9_argument'}->isValid()) return ${'s_filesize_more9_argument'}->getErrorMessage();
} else
${'s_filesize_more9_argument'} = NULL;if(${'s_filesize_more9_argument'} !== null) ${'s_filesize_more9_argument'}->setColumnType('number');
if(isset($args->s_filesize_less)) {
${'s_filesize_less10_argument'} = new ConditionArgument('s_filesize_less', $args->s_filesize_less, 'less');
${'s_filesize_less10_argument'}->createConditionValue();
if(!${'s_filesize_less10_argument'}->isValid()) return ${'s_filesize_less10_argument'}->getErrorMessage();
} else
${'s_filesize_less10_argument'} = NULL;if(${'s_filesize_less10_argument'} !== null) ${'s_filesize_less10_argument'}->setColumnType('number');
if(isset($args->s_download_count)) {
${'s_download_count11_argument'} = new ConditionArgument('s_download_count', $args->s_download_count, 'more');
${'s_download_count11_argument'}->createConditionValue();
if(!${'s_download_count11_argument'}->isValid()) return ${'s_download_count11_argument'}->getErrorMessage();
} else
${'s_download_count11_argument'} = NULL;if(${'s_download_count11_argument'} !== null) ${'s_download_count11_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate12_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate12_argument'}->createConditionValue();
if(!${'s_regdate12_argument'}->isValid()) return ${'s_regdate12_argument'}->getErrorMessage();
} else
${'s_regdate12_argument'} = NULL;if(${'s_regdate12_argument'} !== null) ${'s_regdate12_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress13_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress13_argument'}->createConditionValue();
if(!${'s_ipaddress13_argument'}->isValid()) return ${'s_ipaddress13_argument'}->getErrorMessage();
} else
${'s_ipaddress13_argument'} = NULL;if(${'s_ipaddress13_argument'} !== null) ${'s_ipaddress13_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id14_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id14_argument'}->createConditionValue();
if(!${'s_user_id14_argument'}->isValid()) return ${'s_user_id14_argument'}->getErrorMessage();
} else
${'s_user_id14_argument'} = NULL;if(${'s_user_id14_argument'} !== null) ${'s_user_id14_argument'}->setColumnType('varchar');
if(isset($args->s_user_name)) {
${'s_user_name15_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name15_argument'}->createConditionValue();
if(!${'s_user_name15_argument'}->isValid()) return ${'s_user_name15_argument'}->getErrorMessage();
} else
${'s_user_name15_argument'} = NULL;if(${'s_user_name15_argument'} !== null) ${'s_user_name15_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name16_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name16_argument'}->createConditionValue();
if(!${'s_nick_name16_argument'}->isValid()) return ${'s_nick_name16_argument'}->getErrorMessage();
} else
${'s_nick_name16_argument'} = NULL;if(${'s_nick_name16_argument'} !== null) ${'s_nick_name16_argument'}->setColumnType('varchar');

${'page18_argument'} = new Argument('page', $args->{'page'});
${'page18_argument'}->ensureDefaultValue('1');
if(!${'page18_argument'}->isValid()) return ${'page18_argument'}->getErrorMessage();

${'page_count19_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count19_argument'}->ensureDefaultValue('10');
if(!${'page_count19_argument'}->isValid()) return ${'page_count19_argument'}->getErrorMessage();

${'list_count20_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count20_argument'}->ensureDefaultValue('20');
if(!${'list_count20_argument'}->isValid()) return ${'list_count20_argument'}->getErrorMessage();

${'sort_index17_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index17_argument'}->ensureDefaultValue('files.file_srl');
if(!${'sort_index17_argument'}->isValid()) return ${'sort_index17_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`files`.*')
));
$query->setTables(array(
new Table('`rx_files`', '`files`')
,new JoinTable('`rx_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`files`.`member_srl`','`member`.`member_srl`',"equal")),'and')
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`files`.`module_srl`',$s_module_srl1_argument,"in", 'and')
,new ConditionWithArgument('`files`.`module_srl`',$exclude_module_srl2_argument,"notin", 'and')
,new ConditionWithArgument('`files`.`isvalid`',$isvalid3_argument,"equal", 'and')
,new ConditionWithArgument('`upload_target_srl`',$upload_target_srl4_argument,"equal", 'and')
,new ConditionWithArgument('`upload_target_type`',$upload_target_type5_argument,"equal", 'and')
,new ConditionWithArgument('`files`.`direct_download`',$direct_download6_argument,"equal", 'and')
,new ConditionWithArgument('`files`.`regdate`',$regdate_before7_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`files`.`source_filename`',$s_filename8_argument,"like", 'or')
,new ConditionWithArgument('`files`.`file_size`',$s_filesize_more9_argument,"more", 'or')
,new ConditionWithArgument('`files`.`file_size`',$s_filesize_less10_argument,"less", 'or')
,new ConditionWithArgument('`files`.`download_count`',$s_download_count11_argument,"more", 'or')
,new ConditionWithArgument('`files`.`regdate`',$s_regdate12_argument,"like_prefix", 'or')
,new ConditionWithArgument('`files`.`ipaddress`',$s_ipaddress13_argument,"like_prefix", 'or')
,new ConditionWithArgument('`member`.`user_id`',$s_user_id14_argument,"like", 'or')
,new ConditionWithArgument('`member`.`user_name`',$s_user_name15_argument,"like", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$s_nick_name16_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index17_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count20_argument'}, ${'page18_argument'}, ${'page_count19_argument'}));
return $query; ?>