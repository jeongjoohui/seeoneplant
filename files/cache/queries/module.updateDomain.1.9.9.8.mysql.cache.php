<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDomain");
$query->setAction("update");
$query->setPriority("");
if(isset($args->domain)) {
${'domain319_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain319_argument'}->isValid()) return ${'domain319_argument'}->getErrorMessage();
} else
${'domain319_argument'} = NULL;if(${'domain319_argument'} !== null) ${'domain319_argument'}->setColumnType('varchar');
if(isset($args->is_default_domain)) {
${'is_default_domain320_argument'} = new Argument('is_default_domain', $args->{'is_default_domain'});
if(!${'is_default_domain320_argument'}->isValid()) return ${'is_default_domain320_argument'}->getErrorMessage();
} else
${'is_default_domain320_argument'} = NULL;if(${'is_default_domain320_argument'} !== null) ${'is_default_domain320_argument'}->setColumnType('char');
if(isset($args->index_module_srl)) {
${'index_module_srl321_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
if(!${'index_module_srl321_argument'}->isValid()) return ${'index_module_srl321_argument'}->getErrorMessage();
} else
${'index_module_srl321_argument'} = NULL;if(${'index_module_srl321_argument'} !== null) ${'index_module_srl321_argument'}->setColumnType('number');
if(isset($args->index_document_srl)) {
${'index_document_srl322_argument'} = new Argument('index_document_srl', $args->{'index_document_srl'});
if(!${'index_document_srl322_argument'}->isValid()) return ${'index_document_srl322_argument'}->getErrorMessage();
} else
${'index_document_srl322_argument'} = NULL;if(${'index_document_srl322_argument'} !== null) ${'index_document_srl322_argument'}->setColumnType('number');
if(isset($args->default_layout_srl)) {
${'default_layout_srl323_argument'} = new Argument('default_layout_srl', $args->{'default_layout_srl'});
if(!${'default_layout_srl323_argument'}->isValid()) return ${'default_layout_srl323_argument'}->getErrorMessage();
} else
${'default_layout_srl323_argument'} = NULL;if(${'default_layout_srl323_argument'} !== null) ${'default_layout_srl323_argument'}->setColumnType('number');
if(isset($args->default_mlayout_srl)) {
${'default_mlayout_srl324_argument'} = new Argument('default_mlayout_srl', $args->{'default_mlayout_srl'});
if(!${'default_mlayout_srl324_argument'}->isValid()) return ${'default_mlayout_srl324_argument'}->getErrorMessage();
} else
${'default_mlayout_srl324_argument'} = NULL;if(${'default_mlayout_srl324_argument'} !== null) ${'default_mlayout_srl324_argument'}->setColumnType('number');
if(isset($args->default_menu_srl)) {
${'default_menu_srl325_argument'} = new Argument('default_menu_srl', $args->{'default_menu_srl'});
if(!${'default_menu_srl325_argument'}->isValid()) return ${'default_menu_srl325_argument'}->getErrorMessage();
} else
${'default_menu_srl325_argument'} = NULL;if(${'default_menu_srl325_argument'} !== null) ${'default_menu_srl325_argument'}->setColumnType('number');
if(isset($args->http_port)) {
${'http_port326_argument'} = new Argument('http_port', $args->{'http_port'});
if(!${'http_port326_argument'}->isValid()) return ${'http_port326_argument'}->getErrorMessage();
} else
${'http_port326_argument'} = NULL;if(${'http_port326_argument'} !== null) ${'http_port326_argument'}->setColumnType('number');
if(isset($args->https_port)) {
${'https_port327_argument'} = new Argument('https_port', $args->{'https_port'});
if(!${'https_port327_argument'}->isValid()) return ${'https_port327_argument'}->getErrorMessage();
} else
${'https_port327_argument'} = NULL;if(${'https_port327_argument'} !== null) ${'https_port327_argument'}->setColumnType('number');
if(isset($args->security)) {
${'security328_argument'} = new Argument('security', $args->{'security'});
if(!${'security328_argument'}->isValid()) return ${'security328_argument'}->getErrorMessage();
} else
${'security328_argument'} = NULL;if(${'security328_argument'} !== null) ${'security328_argument'}->setColumnType('varchar');
if(isset($args->description)) {
${'description329_argument'} = new Argument('description', $args->{'description'});
if(!${'description329_argument'}->isValid()) return ${'description329_argument'}->getErrorMessage();
} else
${'description329_argument'} = NULL;if(${'description329_argument'} !== null) ${'description329_argument'}->setColumnType('text');
if(isset($args->settings)) {
${'settings330_argument'} = new Argument('settings', $args->{'settings'});
if(!${'settings330_argument'}->isValid()) return ${'settings330_argument'}->getErrorMessage();
} else
${'settings330_argument'} = NULL;if(${'settings330_argument'} !== null) ${'settings330_argument'}->setColumnType('text');
if(isset($args->regdate)) {
${'regdate331_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate331_argument'}->isValid()) return ${'regdate331_argument'}->getErrorMessage();
} else
${'regdate331_argument'} = NULL;if(${'regdate331_argument'} !== null) ${'regdate331_argument'}->setColumnType('date');

${'domain_srl332_argument'} = new ConditionArgument('domain_srl', $args->domain_srl, 'equal');
${'domain_srl332_argument'}->checkFilter('number');
${'domain_srl332_argument'}->checkNotNull();
${'domain_srl332_argument'}->createConditionValue();
if(!${'domain_srl332_argument'}->isValid()) return ${'domain_srl332_argument'}->getErrorMessage();
if(${'domain_srl332_argument'} !== null) ${'domain_srl332_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`domain`', ${'domain319_argument'})
,new UpdateExpression('`is_default_domain`', ${'is_default_domain320_argument'})
,new UpdateExpression('`index_module_srl`', ${'index_module_srl321_argument'})
,new UpdateExpression('`index_document_srl`', ${'index_document_srl322_argument'})
,new UpdateExpression('`default_layout_srl`', ${'default_layout_srl323_argument'})
,new UpdateExpression('`default_mlayout_srl`', ${'default_mlayout_srl324_argument'})
,new UpdateExpression('`default_menu_srl`', ${'default_menu_srl325_argument'})
,new UpdateExpression('`http_port`', ${'http_port326_argument'})
,new UpdateExpression('`https_port`', ${'https_port327_argument'})
,new UpdateExpression('`security`', ${'security328_argument'})
,new UpdateExpression('`description`', ${'description329_argument'})
,new UpdateExpression('`settings`', ${'settings330_argument'})
,new UpdateExpression('`regdate`', ${'regdate331_argument'})
));
$query->setTables(array(
new Table('`rx_domains`', '`domains`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain_srl`',$domain_srl332_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>