<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getNotifyList");
$query->setAction("select");
$query->setPriority("");

${'member_srl9_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl9_argument'}->checkFilter('number');
${'member_srl9_argument'}->checkNotNull();
${'member_srl9_argument'}->createConditionValue();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');
if(isset($args->readed)) {
${'readed10_argument'} = new ConditionArgument('readed', $args->readed, 'equal');
${'readed10_argument'}->createConditionValue();
if(!${'readed10_argument'}->isValid()) return ${'readed10_argument'}->getErrorMessage();
} else
${'readed10_argument'} = NULL;if(${'readed10_argument'} !== null) ${'readed10_argument'}->setColumnType('char');

${'page12_argument'} = new Argument('page', $args->{'page'});
${'page12_argument'}->ensureDefaultValue('1');
if(!${'page12_argument'}->isValid()) return ${'page12_argument'}->getErrorMessage();

${'page_count13_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count13_argument'}->ensureDefaultValue('2');
if(!${'page_count13_argument'}->isValid()) return ${'page_count13_argument'}->getErrorMessage();

${'list_count14_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count14_argument'}->ensureDefaultValue('5');
if(!${'list_count14_argument'}->isValid()) return ${'list_count14_argument'}->getErrorMessage();

${'list_order11_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order11_argument'}->ensureDefaultValue('regdate');
if(!${'list_order11_argument'}->isValid()) return ${'list_order11_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new MysqlTableWithHint('`rx_ncenterlite_notify`', '`ncenterlite_notify`', array(new IndexHint('`idx_member_srl_and_readed`', 'USE') ))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl9_argument,"equal", 'and')
,new ConditionWithArgument('`readed`',$readed10_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array(
new OrderByColumn(${'list_order11_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count14_argument'}, ${'page12_argument'}, ${'page_count13_argument'}));
return $query; ?>