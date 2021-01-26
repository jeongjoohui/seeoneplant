<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDomain");
$query->setAction("insert");
$query->setPriority("");

${'domain_srl4_argument'} = new Argument('domain_srl', $args->{'domain_srl'});
${'domain_srl4_argument'}->checkFilter('number');
${'domain_srl4_argument'}->checkNotNull();
if(!${'domain_srl4_argument'}->isValid()) return ${'domain_srl4_argument'}->getErrorMessage();
if(${'domain_srl4_argument'} !== null) ${'domain_srl4_argument'}->setColumnType('number');

${'domain5_argument'} = new Argument('domain', $args->{'domain'});
${'domain5_argument'}->checkNotNull();
if(!${'domain5_argument'}->isValid()) return ${'domain5_argument'}->getErrorMessage();
if(${'domain5_argument'} !== null) ${'domain5_argument'}->setColumnType('varchar');

${'is_default_domain6_argument'} = new Argument('is_default_domain', $args->{'is_default_domain'});
${'is_default_domain6_argument'}->ensureDefaultValue('N');
${'is_default_domain6_argument'}->checkNotNull();
if(!${'is_default_domain6_argument'}->isValid()) return ${'is_default_domain6_argument'}->getErrorMessage();
if(${'is_default_domain6_argument'} !== null) ${'is_default_domain6_argument'}->setColumnType('char');

${'index_module_srl7_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
${'index_module_srl7_argument'}->checkNotNull();
if(!${'index_module_srl7_argument'}->isValid()) return ${'index_module_srl7_argument'}->getErrorMessage();
if(${'index_module_srl7_argument'} !== null) ${'index_module_srl7_argument'}->setColumnType('number');

${'index_document_srl8_argument'} = new Argument('index_document_srl', $args->{'index_document_srl'});
${'index_document_srl8_argument'}->checkNotNull();
if(!${'index_document_srl8_argument'}->isValid()) return ${'index_document_srl8_argument'}->getErrorMessage();
if(${'index_document_srl8_argument'} !== null) ${'index_document_srl8_argument'}->setColumnType('number');

${'default_layout_srl9_argument'} = new Argument('default_layout_srl', $args->{'default_layout_srl'});
${'default_layout_srl9_argument'}->ensureDefaultValue('0');
${'default_layout_srl9_argument'}->checkNotNull();
if(!${'default_layout_srl9_argument'}->isValid()) return ${'default_layout_srl9_argument'}->getErrorMessage();
if(${'default_layout_srl9_argument'} !== null) ${'default_layout_srl9_argument'}->setColumnType('number');

${'default_mlayout_srl10_argument'} = new Argument('default_mlayout_srl', $args->{'default_mlayout_srl'});
${'default_mlayout_srl10_argument'}->ensureDefaultValue('0');
${'default_mlayout_srl10_argument'}->checkNotNull();
if(!${'default_mlayout_srl10_argument'}->isValid()) return ${'default_mlayout_srl10_argument'}->getErrorMessage();
if(${'default_mlayout_srl10_argument'} !== null) ${'default_mlayout_srl10_argument'}->setColumnType('number');

${'default_menu_srl11_argument'} = new Argument('default_menu_srl', $args->{'default_menu_srl'});
${'default_menu_srl11_argument'}->ensureDefaultValue('0');
${'default_menu_srl11_argument'}->checkNotNull();
if(!${'default_menu_srl11_argument'}->isValid()) return ${'default_menu_srl11_argument'}->getErrorMessage();
if(${'default_menu_srl11_argument'} !== null) ${'default_menu_srl11_argument'}->setColumnType('number');
if(isset($args->http_port)) {
${'http_port12_argument'} = new Argument('http_port', $args->{'http_port'});
if(!${'http_port12_argument'}->isValid()) return ${'http_port12_argument'}->getErrorMessage();
} else
${'http_port12_argument'} = NULL;if(${'http_port12_argument'} !== null) ${'http_port12_argument'}->setColumnType('number');
if(isset($args->https_port)) {
${'https_port13_argument'} = new Argument('https_port', $args->{'https_port'});
if(!${'https_port13_argument'}->isValid()) return ${'https_port13_argument'}->getErrorMessage();
} else
${'https_port13_argument'} = NULL;if(${'https_port13_argument'} !== null) ${'https_port13_argument'}->setColumnType('number');

${'security14_argument'} = new Argument('security', $args->{'security'});
${'security14_argument'}->ensureDefaultValue('none');
${'security14_argument'}->checkNotNull();
if(!${'security14_argument'}->isValid()) return ${'security14_argument'}->getErrorMessage();
if(${'security14_argument'} !== null) ${'security14_argument'}->setColumnType('varchar');
if(isset($args->description)) {
${'description15_argument'} = new Argument('description', $args->{'description'});
if(!${'description15_argument'}->isValid()) return ${'description15_argument'}->getErrorMessage();
} else
${'description15_argument'} = NULL;if(${'description15_argument'} !== null) ${'description15_argument'}->setColumnType('text');
if(isset($args->settings)) {
${'settings16_argument'} = new Argument('settings', $args->{'settings'});
if(!${'settings16_argument'}->isValid()) return ${'settings16_argument'}->getErrorMessage();
} else
${'settings16_argument'} = NULL;if(${'settings16_argument'} !== null) ${'settings16_argument'}->setColumnType('text');

${'regdate17_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate17_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate17_argument'}->isValid()) return ${'regdate17_argument'}->getErrorMessage();
if(${'regdate17_argument'} !== null) ${'regdate17_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`domain_srl`', ${'domain_srl4_argument'})
,new InsertExpression('`domain`', ${'domain5_argument'})
,new InsertExpression('`is_default_domain`', ${'is_default_domain6_argument'})
,new InsertExpression('`index_module_srl`', ${'index_module_srl7_argument'})
,new InsertExpression('`index_document_srl`', ${'index_document_srl8_argument'})
,new InsertExpression('`default_layout_srl`', ${'default_layout_srl9_argument'})
,new InsertExpression('`default_mlayout_srl`', ${'default_mlayout_srl10_argument'})
,new InsertExpression('`default_menu_srl`', ${'default_menu_srl11_argument'})
,new InsertExpression('`http_port`', ${'http_port12_argument'})
,new InsertExpression('`https_port`', ${'https_port13_argument'})
,new InsertExpression('`security`', ${'security14_argument'})
,new InsertExpression('`description`', ${'description15_argument'})
,new InsertExpression('`settings`', ${'settings16_argument'})
,new InsertExpression('`regdate`', ${'regdate17_argument'})
));
$query->setTables(array(
new Table('`rx_domains`', '`domains`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>