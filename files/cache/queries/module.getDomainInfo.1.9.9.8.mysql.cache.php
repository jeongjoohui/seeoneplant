<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDomainInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->domain_srl)) {
${'domain_srl1_argument'} = new ConditionArgument('domain_srl', $args->domain_srl, 'equal');
${'domain_srl1_argument'}->createConditionValue();
if(!${'domain_srl1_argument'}->isValid()) return ${'domain_srl1_argument'}->getErrorMessage();
} else
${'domain_srl1_argument'} = NULL;if(${'domain_srl1_argument'} !== null) ${'domain_srl1_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain2_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain2_argument'}->createConditionValue();
if(!${'domain2_argument'}->isValid()) return ${'domain2_argument'}->getErrorMessage();
} else
${'domain2_argument'} = NULL;if(${'domain2_argument'} !== null) ${'domain2_argument'}->setColumnType('varchar');
if(isset($args->is_default_domain)) {
${'is_default_domain3_argument'} = new ConditionArgument('is_default_domain', $args->is_default_domain, 'equal');
${'is_default_domain3_argument'}->createConditionValue();
if(!${'is_default_domain3_argument'}->isValid()) return ${'is_default_domain3_argument'}->getErrorMessage();
} else
${'is_default_domain3_argument'} = NULL;if(${'is_default_domain3_argument'} !== null) ${'is_default_domain3_argument'}->setColumnType('char');

$query->setColumns(array(
new SelectExpression('`domains`.*')
,new SelectExpression('`modules`.*')
));
$query->setTables(array(
new Table('`rx_domains`', '`domains`')
,new Table('`rx_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module_srl`','`domains`.`index_module_srl`',"equal", 'and')
,new ConditionWithArgument('`domain_srl`',$domain_srl1_argument,"equal", 'and')
,new ConditionWithArgument('`domain`',$domain2_argument,"equal", 'and')
,new ConditionWithArgument('`is_default_domain`',$is_default_domain3_argument,"equal", 'and')),'and')
));
$query->setGroups(array());
$query->setHaving(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>