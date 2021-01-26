<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl157_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl157_argument'}->checkFilter('number');
${'menu_item_srl157_argument'}->checkNotNull();
if(!${'menu_item_srl157_argument'}->isValid()) return ${'menu_item_srl157_argument'}->getErrorMessage();
if(${'menu_item_srl157_argument'} !== null) ${'menu_item_srl157_argument'}->setColumnType('number');

${'parent_srl158_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl158_argument'}->checkFilter('number');
${'parent_srl158_argument'}->ensureDefaultValue('0');
if(!${'parent_srl158_argument'}->isValid()) return ${'parent_srl158_argument'}->getErrorMessage();
if(${'parent_srl158_argument'} !== null) ${'parent_srl158_argument'}->setColumnType('number');

${'menu_srl159_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl159_argument'}->checkFilter('number');
${'menu_srl159_argument'}->checkNotNull();
if(!${'menu_srl159_argument'}->isValid()) return ${'menu_srl159_argument'}->getErrorMessage();
if(${'menu_srl159_argument'} !== null) ${'menu_srl159_argument'}->setColumnType('number');

${'name160_argument'} = new Argument('name', $args->{'name'});
${'name160_argument'}->checkNotNull();
if(!${'name160_argument'}->isValid()) return ${'name160_argument'}->getErrorMessage();
if(${'name160_argument'} !== null) ${'name160_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc161_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc161_argument'}->isValid()) return ${'desc161_argument'}->getErrorMessage();
} else
${'desc161_argument'} = NULL;if(${'desc161_argument'} !== null) ${'desc161_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url162_argument'} = new Argument('url', $args->{'url'});
if(!${'url162_argument'}->isValid()) return ${'url162_argument'}->getErrorMessage();
} else
${'url162_argument'} = NULL;if(${'url162_argument'} !== null) ${'url162_argument'}->setColumnType('varchar');

${'is_shortcut163_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut163_argument'}->ensureDefaultValue('N');
${'is_shortcut163_argument'}->checkNotNull();
if(!${'is_shortcut163_argument'}->isValid()) return ${'is_shortcut163_argument'}->getErrorMessage();
if(${'is_shortcut163_argument'} !== null) ${'is_shortcut163_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window164_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window164_argument'}->isValid()) return ${'open_window164_argument'}->getErrorMessage();
} else
${'open_window164_argument'} = NULL;if(${'open_window164_argument'} !== null) ${'open_window164_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand165_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand165_argument'}->isValid()) return ${'expand165_argument'}->getErrorMessage();
} else
${'expand165_argument'} = NULL;if(${'expand165_argument'} !== null) ${'expand165_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn166_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn166_argument'}->isValid()) return ${'normal_btn166_argument'}->getErrorMessage();
} else
${'normal_btn166_argument'} = NULL;if(${'normal_btn166_argument'} !== null) ${'normal_btn166_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn167_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn167_argument'}->isValid()) return ${'hover_btn167_argument'}->getErrorMessage();
} else
${'hover_btn167_argument'} = NULL;if(${'hover_btn167_argument'} !== null) ${'hover_btn167_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn168_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn168_argument'}->isValid()) return ${'active_btn168_argument'}->getErrorMessage();
} else
${'active_btn168_argument'} = NULL;if(${'active_btn168_argument'} !== null) ${'active_btn168_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls169_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls169_argument'}->isValid()) return ${'group_srls169_argument'}->getErrorMessage();
} else
${'group_srls169_argument'} = NULL;if(${'group_srls169_argument'} !== null) ${'group_srls169_argument'}->setColumnType('text');

${'listorder170_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder170_argument'}->checkNotNull();
if(!${'listorder170_argument'}->isValid()) return ${'listorder170_argument'}->getErrorMessage();
if(${'listorder170_argument'} !== null) ${'listorder170_argument'}->setColumnType('number');

${'regdate171_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate171_argument'}->ensureDefaultValue(getInternalDateTime());
if(!${'regdate171_argument'}->isValid()) return ${'regdate171_argument'}->getErrorMessage();
if(${'regdate171_argument'} !== null) ${'regdate171_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl157_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl158_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl159_argument'})
,new InsertExpression('`name`', ${'name160_argument'})
,new InsertExpression('`desc`', ${'desc161_argument'})
,new InsertExpression('`url`', ${'url162_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut163_argument'})
,new InsertExpression('`open_window`', ${'open_window164_argument'})
,new InsertExpression('`expand`', ${'expand165_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn166_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn167_argument'})
,new InsertExpression('`active_btn`', ${'active_btn168_argument'})
,new InsertExpression('`group_srls`', ${'group_srls169_argument'})
,new InsertExpression('`listorder`', ${'listorder170_argument'})
,new InsertExpression('`regdate`', ${'regdate171_argument'})
));
$query->setTables(array(
new Table('`rx_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>