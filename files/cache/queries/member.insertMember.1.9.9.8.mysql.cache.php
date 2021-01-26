<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl84_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl84_argument'}->checkFilter('number');
${'member_srl84_argument'}->checkNotNull();
if(!${'member_srl84_argument'}->isValid()) return ${'member_srl84_argument'}->getErrorMessage();
if(${'member_srl84_argument'} !== null) ${'member_srl84_argument'}->setColumnType('number');

${'user_id85_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id85_argument'}->checkFilter('userid');
${'user_id85_argument'}->checkNotNull();
if(!${'user_id85_argument'}->isValid()) return ${'user_id85_argument'}->getErrorMessage();
if(${'user_id85_argument'} !== null) ${'user_id85_argument'}->setColumnType('varchar');

${'password86_argument'} = new Argument('password', $args->{'password'});
${'password86_argument'}->checkNotNull();
if(!${'password86_argument'}->isValid()) return ${'password86_argument'}->getErrorMessage();
if(${'password86_argument'} !== null) ${'password86_argument'}->setColumnType('varchar');

${'email_address87_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address87_argument'}->checkFilter('email');
${'email_address87_argument'}->checkNotNull();
if(!${'email_address87_argument'}->isValid()) return ${'email_address87_argument'}->getErrorMessage();
if(${'email_address87_argument'} !== null) ${'email_address87_argument'}->setColumnType('varchar');

${'email_id88_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id88_argument'}->checkNotNull();
if(!${'email_id88_argument'}->isValid()) return ${'email_id88_argument'}->getErrorMessage();
if(${'email_id88_argument'} !== null) ${'email_id88_argument'}->setColumnType('varchar');

${'email_host89_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host89_argument'}->checkNotNull();
if(!${'email_host89_argument'}->isValid()) return ${'email_host89_argument'}->getErrorMessage();
if(${'email_host89_argument'} !== null) ${'email_host89_argument'}->setColumnType('varchar');
if(isset($args->phone_number)) {
${'phone_number90_argument'} = new Argument('phone_number', $args->{'phone_number'});
if(!${'phone_number90_argument'}->isValid()) return ${'phone_number90_argument'}->getErrorMessage();
} else
${'phone_number90_argument'} = NULL;if(${'phone_number90_argument'} !== null) ${'phone_number90_argument'}->setColumnType('varchar');
if(isset($args->phone_country)) {
${'phone_country91_argument'} = new Argument('phone_country', $args->{'phone_country'});
if(!${'phone_country91_argument'}->isValid()) return ${'phone_country91_argument'}->getErrorMessage();
} else
${'phone_country91_argument'} = NULL;if(${'phone_country91_argument'} !== null) ${'phone_country91_argument'}->setColumnType('varchar');
if(isset($args->phone_type)) {
${'phone_type92_argument'} = new Argument('phone_type', $args->{'phone_type'});
if(!${'phone_type92_argument'}->isValid()) return ${'phone_type92_argument'}->getErrorMessage();
} else
${'phone_type92_argument'} = NULL;if(${'phone_type92_argument'} !== null) ${'phone_type92_argument'}->setColumnType('varchar');

${'user_name93_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name93_argument'}->checkNotNull();
if(!${'user_name93_argument'}->isValid()) return ${'user_name93_argument'}->getErrorMessage();
if(${'user_name93_argument'} !== null) ${'user_name93_argument'}->setColumnType('varchar');

${'nick_name94_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name94_argument'}->checkNotNull();
if(!${'nick_name94_argument'}->isValid()) return ${'nick_name94_argument'}->getErrorMessage();
if(${'nick_name94_argument'} !== null) ${'nick_name94_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question95_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question95_argument'}->isValid()) return ${'find_account_question95_argument'}->getErrorMessage();
} else
${'find_account_question95_argument'} = NULL;if(${'find_account_question95_argument'} !== null) ${'find_account_question95_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer96_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer96_argument'}->isValid()) return ${'find_account_answer96_argument'}->getErrorMessage();
} else
${'find_account_answer96_argument'} = NULL;if(${'find_account_answer96_argument'} !== null) ${'find_account_answer96_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage97_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage97_argument'}->isValid()) return ${'homepage97_argument'}->getErrorMessage();
} else
${'homepage97_argument'} = NULL;if(${'homepage97_argument'} !== null) ${'homepage97_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog98_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog98_argument'}->isValid()) return ${'blog98_argument'}->getErrorMessage();
} else
${'blog98_argument'} = NULL;if(${'blog98_argument'} !== null) ${'blog98_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday99_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday99_argument'}->isValid()) return ${'birthday99_argument'}->getErrorMessage();
} else
${'birthday99_argument'} = NULL;if(${'birthday99_argument'} !== null) ${'birthday99_argument'}->setColumnType('char');

${'allow_mailing100_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing100_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing100_argument'}->isValid()) return ${'allow_mailing100_argument'}->getErrorMessage();
if(${'allow_mailing100_argument'} !== null) ${'allow_mailing100_argument'}->setColumnType('char');

${'allow_message101_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message101_argument'}->ensureDefaultValue('Y');
if(!${'allow_message101_argument'}->isValid()) return ${'allow_message101_argument'}->getErrorMessage();
if(${'allow_message101_argument'} !== null) ${'allow_message101_argument'}->setColumnType('char');

${'denied102_argument'} = new Argument('denied', $args->{'denied'});
${'denied102_argument'}->ensureDefaultValue('N');
if(!${'denied102_argument'}->isValid()) return ${'denied102_argument'}->getErrorMessage();
if(${'denied102_argument'} !== null) ${'denied102_argument'}->setColumnType('char');

${'regdate103_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate103_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate103_argument'}->isValid()) return ${'regdate103_argument'}->getErrorMessage();
if(${'regdate103_argument'} !== null) ${'regdate103_argument'}->setColumnType('date');

${'ipaddress104_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress104_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'ipaddress104_argument'}->isValid()) return ${'ipaddress104_argument'}->getErrorMessage();
if(${'ipaddress104_argument'} !== null) ${'ipaddress104_argument'}->setColumnType('varchar');

${'last_login105_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login105_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'last_login105_argument'}->isValid()) return ${'last_login105_argument'}->getErrorMessage();
if(${'last_login105_argument'} !== null) ${'last_login105_argument'}->setColumnType('date');

${'last_login_ipaddress106_argument'} = new Argument('last_login_ipaddress', $args->{'last_login_ipaddress'});
${'last_login_ipaddress106_argument'}->ensureDefaultValue(\RX_CLIENT_IP);
if(!${'last_login_ipaddress106_argument'}->isValid()) return ${'last_login_ipaddress106_argument'}->getErrorMessage();
if(${'last_login_ipaddress106_argument'} !== null) ${'last_login_ipaddress106_argument'}->setColumnType('varchar');

${'change_password_date107_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date107_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'change_password_date107_argument'}->isValid()) return ${'change_password_date107_argument'}->getErrorMessage();
if(${'change_password_date107_argument'} !== null) ${'change_password_date107_argument'}->setColumnType('date');
if(isset($args->limit_date)) {
${'limit_date108_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date108_argument'}->isValid()) return ${'limit_date108_argument'}->getErrorMessage();
} else
${'limit_date108_argument'} = NULL;if(${'limit_date108_argument'} !== null) ${'limit_date108_argument'}->setColumnType('date');

${'is_admin109_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin109_argument'}->ensureDefaultValue('N');
if(!${'is_admin109_argument'}->isValid()) return ${'is_admin109_argument'}->getErrorMessage();
if(${'is_admin109_argument'} !== null) ${'is_admin109_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description110_argument'} = new Argument('description', $args->{'description'});
if(!${'description110_argument'}->isValid()) return ${'description110_argument'}->getErrorMessage();
} else
${'description110_argument'} = NULL;if(${'description110_argument'} !== null) ${'description110_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars111_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars111_argument'}->isValid()) return ${'extra_vars111_argument'}->getErrorMessage();
} else
${'extra_vars111_argument'} = NULL;if(${'extra_vars111_argument'} !== null) ${'extra_vars111_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order112_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order112_argument'}->isValid()) return ${'list_order112_argument'}->getErrorMessage();
} else
${'list_order112_argument'} = NULL;if(${'list_order112_argument'} !== null) ${'list_order112_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl84_argument'})
,new InsertExpression('`user_id`', ${'user_id85_argument'})
,new InsertExpression('`password`', ${'password86_argument'})
,new InsertExpression('`email_address`', ${'email_address87_argument'})
,new InsertExpression('`email_id`', ${'email_id88_argument'})
,new InsertExpression('`email_host`', ${'email_host89_argument'})
,new InsertExpression('`phone_number`', ${'phone_number90_argument'})
,new InsertExpression('`phone_country`', ${'phone_country91_argument'})
,new InsertExpression('`phone_type`', ${'phone_type92_argument'})
,new InsertExpression('`user_name`', ${'user_name93_argument'})
,new InsertExpression('`nick_name`', ${'nick_name94_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question95_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer96_argument'})
,new InsertExpression('`homepage`', ${'homepage97_argument'})
,new InsertExpression('`blog`', ${'blog98_argument'})
,new InsertExpression('`birthday`', ${'birthday99_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing100_argument'})
,new InsertExpression('`allow_message`', ${'allow_message101_argument'})
,new InsertExpression('`denied`', ${'denied102_argument'})
,new InsertExpression('`regdate`', ${'regdate103_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress104_argument'})
,new InsertExpression('`last_login`', ${'last_login105_argument'})
,new InsertExpression('`last_login_ipaddress`', ${'last_login_ipaddress106_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date107_argument'})
,new InsertExpression('`limit_date`', ${'limit_date108_argument'})
,new InsertExpression('`is_admin`', ${'is_admin109_argument'})
,new InsertExpression('`description`', ${'description110_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars111_argument'})
,new InsertExpression('`list_order`', ${'list_order112_argument'})
));
$query->setTables(array(
new Table('`rx_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>