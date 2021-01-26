<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updatePoint");
$query->setAction("update");
$query->setPriority("");
if(isset($args->point)) {
${'point280_argument'} = new Argument('point', $args->{'point'});
if(!${'point280_argument'}->isValid()) return ${'point280_argument'}->getErrorMessage();
} else
${'point280_argument'} = NULL;if(${'point280_argument'} !== null) ${'point280_argument'}->setColumnType('number');

${'member_srl281_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl281_argument'}->checkFilter('number');
${'member_srl281_argument'}->checkNotNull();
${'member_srl281_argument'}->createConditionValue();
if(!${'member_srl281_argument'}->isValid()) return ${'member_srl281_argument'}->getErrorMessage();
if(${'member_srl281_argument'} !== null) ${'member_srl281_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`point`', ${'point280_argument'})
));
$query->setTables(array(
new Table('`rx_point`', '`point`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_srl`',$member_srl281_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>