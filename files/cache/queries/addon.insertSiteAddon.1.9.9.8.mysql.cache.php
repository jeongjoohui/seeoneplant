<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl132_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl132_argument'}->checkNotNull();
if(!${'site_srl132_argument'}->isValid()) return ${'site_srl132_argument'}->getErrorMessage();
if(${'site_srl132_argument'} !== null) ${'site_srl132_argument'}->setColumnType('number');

${'addon133_argument'} = new Argument('addon', $args->{'addon'});
${'addon133_argument'}->checkNotNull();
if(!${'addon133_argument'}->isValid()) return ${'addon133_argument'}->getErrorMessage();
if(${'addon133_argument'} !== null) ${'addon133_argument'}->setColumnType('varchar');

${'is_used134_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used134_argument'}->ensureDefaultValue('N');
${'is_used134_argument'}->checkNotNull();
if(!${'is_used134_argument'}->isValid()) return ${'is_used134_argument'}->getErrorMessage();
if(${'is_used134_argument'} !== null) ${'is_used134_argument'}->setColumnType('char');

${'is_used_m135_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m135_argument'}->ensureDefaultValue('N');
if(!${'is_used_m135_argument'}->isValid()) return ${'is_used_m135_argument'}->getErrorMessage();
if(${'is_used_m135_argument'} !== null) ${'is_used_m135_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars136_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars136_argument'}->isValid()) return ${'extra_vars136_argument'}->getErrorMessage();
} else
${'extra_vars136_argument'} = NULL;if(${'extra_vars136_argument'} !== null) ${'extra_vars136_argument'}->setColumnType('text');

${'regdate137_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate137_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate137_argument'}->isValid()) return ${'regdate137_argument'}->getErrorMessage();
if(${'regdate137_argument'} !== null) ${'regdate137_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl132_argument'})
,new InsertExpression('`addon`', ${'addon133_argument'})
,new InsertExpression('`is_used`', ${'is_used134_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m135_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars136_argument'})
,new InsertExpression('`regdate`', ${'regdate137_argument'})
));
$query->setTables(array(
new Table('`rx_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>