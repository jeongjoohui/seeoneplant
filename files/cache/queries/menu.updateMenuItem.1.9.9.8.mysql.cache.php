<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl306_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl306_argument'}->isValid()) return ${'menu_srl306_argument'}->getErrorMessage();
} else
${'menu_srl306_argument'} = NULL;if(${'menu_srl306_argument'} !== null) ${'menu_srl306_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl307_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl307_argument'}->isValid()) return ${'parent_srl307_argument'}->getErrorMessage();
} else
${'parent_srl307_argument'} = NULL;if(${'parent_srl307_argument'} !== null) ${'parent_srl307_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name308_argument'} = new Argument('name', $args->{'name'});
if(!${'name308_argument'}->isValid()) return ${'name308_argument'}->getErrorMessage();
} else
${'name308_argument'} = NULL;if(${'name308_argument'} !== null) ${'name308_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc309_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc309_argument'}->isValid()) return ${'desc309_argument'}->getErrorMessage();
} else
${'desc309_argument'} = NULL;if(${'desc309_argument'} !== null) ${'desc309_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url310_argument'} = new Argument('url', $args->{'url'});
if(!${'url310_argument'}->isValid()) return ${'url310_argument'}->getErrorMessage();
} else
${'url310_argument'} = NULL;if(${'url310_argument'} !== null) ${'url310_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut311_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut311_argument'}->isValid()) return ${'is_shortcut311_argument'}->getErrorMessage();
} else
${'is_shortcut311_argument'} = NULL;if(${'is_shortcut311_argument'} !== null) ${'is_shortcut311_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window312_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window312_argument'}->isValid()) return ${'open_window312_argument'}->getErrorMessage();
} else
${'open_window312_argument'} = NULL;if(${'open_window312_argument'} !== null) ${'open_window312_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand313_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand313_argument'}->isValid()) return ${'expand313_argument'}->getErrorMessage();
} else
${'expand313_argument'} = NULL;if(${'expand313_argument'} !== null) ${'expand313_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn314_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn314_argument'}->isValid()) return ${'normal_btn314_argument'}->getErrorMessage();
} else
${'normal_btn314_argument'} = NULL;if(${'normal_btn314_argument'} !== null) ${'normal_btn314_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn315_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn315_argument'}->isValid()) return ${'hover_btn315_argument'}->getErrorMessage();
} else
${'hover_btn315_argument'} = NULL;if(${'hover_btn315_argument'} !== null) ${'hover_btn315_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn316_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn316_argument'}->isValid()) return ${'active_btn316_argument'}->getErrorMessage();
} else
${'active_btn316_argument'} = NULL;if(${'active_btn316_argument'} !== null) ${'active_btn316_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls317_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls317_argument'}->isValid()) return ${'group_srls317_argument'}->getErrorMessage();
} else
${'group_srls317_argument'} = NULL;if(${'group_srls317_argument'} !== null) ${'group_srls317_argument'}->setColumnType('text');

${'menu_item_srl318_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl318_argument'}->checkFilter('number');
${'menu_item_srl318_argument'}->checkNotNull();
${'menu_item_srl318_argument'}->createConditionValue();
if(!${'menu_item_srl318_argument'}->isValid()) return ${'menu_item_srl318_argument'}->getErrorMessage();
if(${'menu_item_srl318_argument'} !== null) ${'menu_item_srl318_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl306_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl307_argument'})
,new UpdateExpression('`name`', ${'name308_argument'})
,new UpdateExpression('`desc`', ${'desc309_argument'})
,new UpdateExpression('`url`', ${'url310_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut311_argument'})
,new UpdateExpression('`open_window`', ${'open_window312_argument'})
,new UpdateExpression('`expand`', ${'expand313_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn314_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn315_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn316_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls317_argument'})
));
$query->setTables(array(
new Table('`rx_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl318_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>