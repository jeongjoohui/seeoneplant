<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocument");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl230_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl230_argument'}->checkFilter('number');
${'document_srl230_argument'}->checkNotNull();
if(!${'document_srl230_argument'}->isValid()) return ${'document_srl230_argument'}->getErrorMessage();
if(${'document_srl230_argument'} !== null) ${'document_srl230_argument'}->setColumnType('number');

${'module_srl231_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl231_argument'}->checkFilter('number');
${'module_srl231_argument'}->ensureDefaultValue('0');
if(!${'module_srl231_argument'}->isValid()) return ${'module_srl231_argument'}->getErrorMessage();
if(${'module_srl231_argument'} !== null) ${'module_srl231_argument'}->setColumnType('number');

${'category_srl232_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl232_argument'}->checkFilter('number');
${'category_srl232_argument'}->ensureDefaultValue('0');
if(!${'category_srl232_argument'}->isValid()) return ${'category_srl232_argument'}->getErrorMessage();
if(${'category_srl232_argument'} !== null) ${'category_srl232_argument'}->setColumnType('number');

${'lang_code233_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code233_argument'}->ensureDefaultValue('');
if(!${'lang_code233_argument'}->isValid()) return ${'lang_code233_argument'}->getErrorMessage();
if(${'lang_code233_argument'} !== null) ${'lang_code233_argument'}->setColumnType('varchar');

${'is_notice234_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice234_argument'}->ensureDefaultValue('N');
${'is_notice234_argument'}->checkNotNull();
if(!${'is_notice234_argument'}->isValid()) return ${'is_notice234_argument'}->getErrorMessage();
if(${'is_notice234_argument'} !== null) ${'is_notice234_argument'}->setColumnType('char');

${'title235_argument'} = new Argument('title', $args->{'title'});
${'title235_argument'}->checkNotNull();
if(!${'title235_argument'}->isValid()) return ${'title235_argument'}->getErrorMessage();
if(${'title235_argument'} !== null) ${'title235_argument'}->setColumnType('varchar');

${'title_bold236_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold236_argument'}->ensureDefaultValue('N');
if(!${'title_bold236_argument'}->isValid()) return ${'title_bold236_argument'}->getErrorMessage();
if(${'title_bold236_argument'} !== null) ${'title_bold236_argument'}->setColumnType('char');

${'title_color237_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color237_argument'}->ensureDefaultValue('N');
if(!${'title_color237_argument'}->isValid()) return ${'title_color237_argument'}->getErrorMessage();
if(${'title_color237_argument'} !== null) ${'title_color237_argument'}->setColumnType('varchar');

${'content238_argument'} = new Argument('content', $args->{'content'});
${'content238_argument'}->checkNotNull();
if(!${'content238_argument'}->isValid()) return ${'content238_argument'}->getErrorMessage();
if(${'content238_argument'} !== null) ${'content238_argument'}->setColumnType('bigtext');

${'readed_count239_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count239_argument'}->ensureDefaultValue('0');
if(!${'readed_count239_argument'}->isValid()) return ${'readed_count239_argument'}->getErrorMessage();
if(${'readed_count239_argument'} !== null) ${'readed_count239_argument'}->setColumnType('number');

${'blamed_count240_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count240_argument'}->ensureDefaultValue('0');
if(!${'blamed_count240_argument'}->isValid()) return ${'blamed_count240_argument'}->getErrorMessage();
if(${'blamed_count240_argument'} !== null) ${'blamed_count240_argument'}->setColumnType('number');

${'voted_count241_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count241_argument'}->ensureDefaultValue('0');
if(!${'voted_count241_argument'}->isValid()) return ${'voted_count241_argument'}->getErrorMessage();
if(${'voted_count241_argument'} !== null) ${'voted_count241_argument'}->setColumnType('number');

${'comment_count242_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count242_argument'}->ensureDefaultValue('0');
if(!${'comment_count242_argument'}->isValid()) return ${'comment_count242_argument'}->getErrorMessage();
if(${'comment_count242_argument'} !== null) ${'comment_count242_argument'}->setColumnType('number');

${'trackback_count243_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count243_argument'}->ensureDefaultValue('0');
if(!${'trackback_count243_argument'}->isValid()) return ${'trackback_count243_argument'}->getErrorMessage();
if(${'trackback_count243_argument'} !== null) ${'trackback_count243_argument'}->setColumnType('number');

${'uploaded_count244_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count244_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count244_argument'}->isValid()) return ${'uploaded_count244_argument'}->getErrorMessage();
if(${'uploaded_count244_argument'} !== null) ${'uploaded_count244_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password245_argument'} = new Argument('password', $args->{'password'});
if(!${'password245_argument'}->isValid()) return ${'password245_argument'}->getErrorMessage();
} else
${'password245_argument'} = NULL;if(${'password245_argument'} !== null) ${'password245_argument'}->setColumnType('varchar');

${'nick_name246_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name246_argument'}->checkNotNull();
if(!${'nick_name246_argument'}->isValid()) return ${'nick_name246_argument'}->getErrorMessage();
if(${'nick_name246_argument'} !== null) ${'nick_name246_argument'}->setColumnType('varchar');

${'member_srl247_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl247_argument'}->checkFilter('number');
${'member_srl247_argument'}->ensureDefaultValue('0');
if(!${'member_srl247_argument'}->isValid()) return ${'member_srl247_argument'}->getErrorMessage();
if(${'member_srl247_argument'} !== null) ${'member_srl247_argument'}->setColumnType('number');

${'user_id248_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id248_argument'}->ensureDefaultValue('');
if(!${'user_id248_argument'}->isValid()) return ${'user_id248_argument'}->getErrorMessage();
if(${'user_id248_argument'} !== null) ${'user_id248_argument'}->setColumnType('varchar');

${'user_name249_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name249_argument'}->ensureDefaultValue('');
if(!${'user_name249_argument'}->isValid()) return ${'user_name249_argument'}->getErrorMessage();
if(${'user_name249_argument'} !== null) ${'user_name249_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address250_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address250_argument'}->checkFilter('email');
if(!${'email_address250_argument'}->isValid()) return ${'email_address250_argument'}->getErrorMessage();
} else
${'email_address250_argument'} = NULL;if(${'email_address250_argument'} !== null) ${'email_address250_argument'}->setColumnType('varchar');

${'homepage251_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage251_argument'}->checkFilter('homepage');
${'homepage251_argument'}->ensureDefaultValue('');
if(!${'homepage251_argument'}->isValid()) return ${'homepage251_argument'}->getErrorMessage();
if(${'homepage251_argument'} !== null) ${'homepage251_argument'}->setColumnType('varchar');
if(isset($args->tags)) {
${'tags252_argument'} = new Argument('tags', $args->{'tags'});
if(!${'tags252_argument'}->isValid()) return ${'tags252_argument'}->getErrorMessage();
} else
${'tags252_argument'} = NULL;if(${'tags252_argument'} !== null) ${'tags252_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars253_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars253_argument'}->isValid()) return ${'extra_vars253_argument'}->getErrorMessage();
} else
${'extra_vars253_argument'} = NULL;if(${'extra_vars253_argument'} !== null) ${'extra_vars253_argument'}->setColumnType('text');

${'regdate254_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate254_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate254_argument'}->isValid()) return ${'regdate254_argument'}->getErrorMessage();
if(${'regdate254_argument'} !== null) ${'regdate254_argument'}->setColumnType('date');

${'last_update255_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update255_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'last_update255_argument'}->isValid()) return ${'last_update255_argument'}->getErrorMessage();
if(${'last_update255_argument'} !== null) ${'last_update255_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater256_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater256_argument'}->isValid()) return ${'last_updater256_argument'}->getErrorMessage();
} else
${'last_updater256_argument'} = NULL;if(${'last_updater256_argument'} !== null) ${'last_updater256_argument'}->setColumnType('varchar');

${'ipaddress257_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress257_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'ipaddress257_argument'}->isValid()) return ${'ipaddress257_argument'}->getErrorMessage();
if(${'ipaddress257_argument'} !== null) ${'ipaddress257_argument'}->setColumnType('varchar');

${'list_order258_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order258_argument'}->ensureDefaultValue('0');
if(!${'list_order258_argument'}->isValid()) return ${'list_order258_argument'}->getErrorMessage();
if(${'list_order258_argument'} !== null) ${'list_order258_argument'}->setColumnType('number');

${'update_order259_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order259_argument'}->ensureDefaultValue('0');
if(!${'update_order259_argument'}->isValid()) return ${'update_order259_argument'}->getErrorMessage();
if(${'update_order259_argument'} !== null) ${'update_order259_argument'}->setColumnType('number');

${'allow_trackback260_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback260_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback260_argument'}->isValid()) return ${'allow_trackback260_argument'}->getErrorMessage();
if(${'allow_trackback260_argument'} !== null) ${'allow_trackback260_argument'}->setColumnType('char');

${'notify_message261_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message261_argument'}->ensureDefaultValue('N');
if(!${'notify_message261_argument'}->isValid()) return ${'notify_message261_argument'}->getErrorMessage();
if(${'notify_message261_argument'} !== null) ${'notify_message261_argument'}->setColumnType('char');

${'status262_argument'} = new Argument('status', $args->{'status'});
${'status262_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status262_argument'}->isValid()) return ${'status262_argument'}->getErrorMessage();
if(${'status262_argument'} !== null) ${'status262_argument'}->setColumnType('varchar');

${'commentStatus263_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus263_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus263_argument'}->isValid()) return ${'commentStatus263_argument'}->getErrorMessage();
if(${'commentStatus263_argument'} !== null) ${'commentStatus263_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl230_argument'})
,new InsertExpression('`module_srl`', ${'module_srl231_argument'})
,new InsertExpression('`category_srl`', ${'category_srl232_argument'})
,new InsertExpression('`lang_code`', ${'lang_code233_argument'})
,new InsertExpression('`is_notice`', ${'is_notice234_argument'})
,new InsertExpression('`title`', ${'title235_argument'})
,new InsertExpression('`title_bold`', ${'title_bold236_argument'})
,new InsertExpression('`title_color`', ${'title_color237_argument'})
,new InsertExpression('`content`', ${'content238_argument'})
,new InsertExpression('`readed_count`', ${'readed_count239_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count240_argument'})
,new InsertExpression('`voted_count`', ${'voted_count241_argument'})
,new InsertExpression('`comment_count`', ${'comment_count242_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count243_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count244_argument'})
,new InsertExpression('`password`', ${'password245_argument'})
,new InsertExpression('`nick_name`', ${'nick_name246_argument'})
,new InsertExpression('`member_srl`', ${'member_srl247_argument'})
,new InsertExpression('`user_id`', ${'user_id248_argument'})
,new InsertExpression('`user_name`', ${'user_name249_argument'})
,new InsertExpression('`email_address`', ${'email_address250_argument'})
,new InsertExpression('`homepage`', ${'homepage251_argument'})
,new InsertExpression('`tags`', ${'tags252_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars253_argument'})
,new InsertExpression('`regdate`', ${'regdate254_argument'})
,new InsertExpression('`last_update`', ${'last_update255_argument'})
,new InsertExpression('`last_updater`', ${'last_updater256_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress257_argument'})
,new InsertExpression('`list_order`', ${'list_order258_argument'})
,new InsertExpression('`update_order`', ${'update_order259_argument'})
,new InsertExpression('`allow_trackback`', ${'allow_trackback260_argument'})
,new InsertExpression('`notify_message`', ${'notify_message261_argument'})
,new InsertExpression('`status`', ${'status262_argument'})
,new InsertExpression('`comment_status`', ${'commentStatus263_argument'})
));
$query->setTables(array(
new Table('`rx_documents`', '`documents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>