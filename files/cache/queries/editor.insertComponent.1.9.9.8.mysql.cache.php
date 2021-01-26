<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertComponent");
$query->setAction("insert");
$query->setPriority("");

${'component_name141_argument'} = new Argument('component_name', $args->{'component_name'});
${'component_name141_argument'}->checkNotNull();
if(!${'component_name141_argument'}->isValid()) return ${'component_name141_argument'}->getErrorMessage();
if(${'component_name141_argument'} !== null) ${'component_name141_argument'}->setColumnType('varchar');

${'enabled142_argument'} = new Argument('enabled', $args->{'enabled'});
${'enabled142_argument'}->ensureDefaultValue('N');
if(!${'enabled142_argument'}->isValid()) return ${'enabled142_argument'}->getErrorMessage();
if(${'enabled142_argument'} !== null) ${'enabled142_argument'}->setColumnType('char');

${'list_order143_argument'} = new Argument('list_order', $args->{'list_order'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'list_order143_argument'}->ensureDefaultValue($sequence);
if(!${'list_order143_argument'}->isValid()) return ${'list_order143_argument'}->getErrorMessage();
if(${'list_order143_argument'} !== null) ${'list_order143_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`component_name`', ${'component_name141_argument'})
,new InsertExpression('`enabled`', ${'enabled142_argument'})
,new InsertExpression('`list_order`', ${'list_order143_argument'})
));
$query->setTables(array(
new Table('`rx_editor_components`', '`editor_components`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>