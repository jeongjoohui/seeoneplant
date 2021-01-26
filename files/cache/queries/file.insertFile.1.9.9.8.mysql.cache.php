<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertFile");
$query->setAction("insert");
$query->setPriority("");

${'file_srl1_argument'} = new Argument('file_srl', $args->{'file_srl'});
${'file_srl1_argument'}->checkNotNull();
if(!${'file_srl1_argument'}->isValid()) return ${'file_srl1_argument'}->getErrorMessage();
if(${'file_srl1_argument'} !== null) ${'file_srl1_argument'}->setColumnType('number');

${'upload_target_srl2_argument'} = new Argument('upload_target_srl', $args->{'upload_target_srl'});
${'upload_target_srl2_argument'}->checkFilter('number');
${'upload_target_srl2_argument'}->ensureDefaultValue('0');
${'upload_target_srl2_argument'}->checkNotNull();
if(!${'upload_target_srl2_argument'}->isValid()) return ${'upload_target_srl2_argument'}->getErrorMessage();
if(${'upload_target_srl2_argument'} !== null) ${'upload_target_srl2_argument'}->setColumnType('number');
if(isset($args->sid)) {
${'sid3_argument'} = new Argument('sid', $args->{'sid'});
if(!${'sid3_argument'}->isValid()) return ${'sid3_argument'}->getErrorMessage();
} else
${'sid3_argument'} = NULL;if(${'sid3_argument'} !== null) ${'sid3_argument'}->setColumnType('varchar');

${'module_srl4_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->ensureDefaultValue('0');
${'module_srl4_argument'}->checkNotNull();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'member_srl5_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl5_argument'}->ensureDefaultValue('0');
if(!${'member_srl5_argument'}->isValid()) return ${'member_srl5_argument'}->getErrorMessage();
if(${'member_srl5_argument'} !== null) ${'member_srl5_argument'}->setColumnType('number');

${'download_count6_argument'} = new Argument('download_count', $args->{'download_count'});
${'download_count6_argument'}->ensureDefaultValue('0');
if(!${'download_count6_argument'}->isValid()) return ${'download_count6_argument'}->getErrorMessage();
if(${'download_count6_argument'} !== null) ${'download_count6_argument'}->setColumnType('number');

${'direct_download7_argument'} = new Argument('direct_download', $args->{'direct_download'});
${'direct_download7_argument'}->ensureDefaultValue('N');
${'direct_download7_argument'}->checkNotNull();
if(!${'direct_download7_argument'}->isValid()) return ${'direct_download7_argument'}->getErrorMessage();
if(${'direct_download7_argument'} !== null) ${'direct_download7_argument'}->setColumnType('char');

${'source_filename8_argument'} = new Argument('source_filename', $args->{'source_filename'});
${'source_filename8_argument'}->checkNotNull();
if(!${'source_filename8_argument'}->isValid()) return ${'source_filename8_argument'}->getErrorMessage();
if(${'source_filename8_argument'} !== null) ${'source_filename8_argument'}->setColumnType('varchar');

${'uploaded_filename9_argument'} = new Argument('uploaded_filename', $args->{'uploaded_filename'});
${'uploaded_filename9_argument'}->checkNotNull();
if(!${'uploaded_filename9_argument'}->isValid()) return ${'uploaded_filename9_argument'}->getErrorMessage();
if(${'uploaded_filename9_argument'} !== null) ${'uploaded_filename9_argument'}->setColumnType('varchar');
if(isset($args->thumbnail_filename)) {
${'thumbnail_filename10_argument'} = new Argument('thumbnail_filename', $args->{'thumbnail_filename'});
if(!${'thumbnail_filename10_argument'}->isValid()) return ${'thumbnail_filename10_argument'}->getErrorMessage();
} else
${'thumbnail_filename10_argument'} = NULL;if(${'thumbnail_filename10_argument'} !== null) ${'thumbnail_filename10_argument'}->setColumnType('varchar');

${'file_size11_argument'} = new Argument('file_size', $args->{'file_size'});
${'file_size11_argument'}->ensureDefaultValue('0');
${'file_size11_argument'}->checkNotNull();
if(!${'file_size11_argument'}->isValid()) return ${'file_size11_argument'}->getErrorMessage();
if(${'file_size11_argument'} !== null) ${'file_size11_argument'}->setColumnType('number');

${'mime_type12_argument'} = new Argument('mime_type', $args->{'mime_type'});
${'mime_type12_argument'}->checkNotNull();
if(!${'mime_type12_argument'}->isValid()) return ${'mime_type12_argument'}->getErrorMessage();
if(${'mime_type12_argument'} !== null) ${'mime_type12_argument'}->setColumnType('varchar');
if(isset($args->original_type)) {
${'original_type13_argument'} = new Argument('original_type', $args->{'original_type'});
if(!${'original_type13_argument'}->isValid()) return ${'original_type13_argument'}->getErrorMessage();
} else
${'original_type13_argument'} = NULL;if(${'original_type13_argument'} !== null) ${'original_type13_argument'}->setColumnType('varchar');
if(isset($args->width)) {
${'width14_argument'} = new Argument('width', $args->{'width'});
if(!${'width14_argument'}->isValid()) return ${'width14_argument'}->getErrorMessage();
} else
${'width14_argument'} = NULL;if(${'width14_argument'} !== null) ${'width14_argument'}->setColumnType('number');
if(isset($args->height)) {
${'height15_argument'} = new Argument('height', $args->{'height'});
if(!${'height15_argument'}->isValid()) return ${'height15_argument'}->getErrorMessage();
} else
${'height15_argument'} = NULL;if(${'height15_argument'} !== null) ${'height15_argument'}->setColumnType('number');
if(isset($args->duration)) {
${'duration16_argument'} = new Argument('duration', $args->{'duration'});
if(!${'duration16_argument'}->isValid()) return ${'duration16_argument'}->getErrorMessage();
} else
${'duration16_argument'} = NULL;if(${'duration16_argument'} !== null) ${'duration16_argument'}->setColumnType('number');
if(isset($args->comment)) {
${'comment17_argument'} = new Argument('comment', $args->{'comment'});
if(!${'comment17_argument'}->isValid()) return ${'comment17_argument'}->getErrorMessage();
} else
${'comment17_argument'} = NULL;if(${'comment17_argument'} !== null) ${'comment17_argument'}->setColumnType('varchar');

${'isvalid18_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid18_argument'}->ensureDefaultValue('N');
if(!${'isvalid18_argument'}->isValid()) return ${'isvalid18_argument'}->getErrorMessage();
if(${'isvalid18_argument'} !== null) ${'isvalid18_argument'}->setColumnType('char');

${'is_cover19_argument'} = new Argument('is_cover', $args->{'is_cover'});
${'is_cover19_argument'}->ensureDefaultValue('N');
if(!${'is_cover19_argument'}->isValid()) return ${'is_cover19_argument'}->getErrorMessage();
if(${'is_cover19_argument'} !== null) ${'is_cover19_argument'}->setColumnType('char');

${'regdate20_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate20_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate20_argument'}->isValid()) return ${'regdate20_argument'}->getErrorMessage();
if(${'regdate20_argument'} !== null) ${'regdate20_argument'}->setColumnType('date');

${'ipaddress21_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress21_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'ipaddress21_argument'}->isValid()) return ${'ipaddress21_argument'}->getErrorMessage();
if(${'ipaddress21_argument'} !== null) ${'ipaddress21_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`file_srl`', ${'file_srl1_argument'})
,new InsertExpression('`upload_target_srl`', ${'upload_target_srl2_argument'})
,new InsertExpression('`sid`', ${'sid3_argument'})
,new InsertExpression('`module_srl`', ${'module_srl4_argument'})
,new InsertExpression('`member_srl`', ${'member_srl5_argument'})
,new InsertExpression('`download_count`', ${'download_count6_argument'})
,new InsertExpression('`direct_download`', ${'direct_download7_argument'})
,new InsertExpression('`source_filename`', ${'source_filename8_argument'})
,new InsertExpression('`uploaded_filename`', ${'uploaded_filename9_argument'})
,new InsertExpression('`thumbnail_filename`', ${'thumbnail_filename10_argument'})
,new InsertExpression('`file_size`', ${'file_size11_argument'})
,new InsertExpression('`mime_type`', ${'mime_type12_argument'})
,new InsertExpression('`original_type`', ${'original_type13_argument'})
,new InsertExpression('`width`', ${'width14_argument'})
,new InsertExpression('`height`', ${'height15_argument'})
,new InsertExpression('`duration`', ${'duration16_argument'})
,new InsertExpression('`comment`', ${'comment17_argument'})
,new InsertExpression('`isvalid`', ${'isvalid18_argument'})
,new InsertExpression('`cover_image`', ${'is_cover19_argument'})
,new InsertExpression('`regdate`', ${'regdate20_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress21_argument'})
));
$query->setTables(array(
new Table('`rx_files`', '`files`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>