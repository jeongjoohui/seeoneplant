<?php if(!defined("__XE__"))exit;?>﻿<!--#Meta:modules/referer/tpl/css/referer.css--><?php $__tmp=array('modules/referer/tpl/css/referer.css','','','',array());Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/referer/tpl/js/spin.min.js--><?php $__tmp=array('modules/referer/tpl/js/spin.min.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $lang->referer ?></h1>
</div>
<p><?php echo $lang->referer_info ?></p>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<ul class="x_nav x_nav-tabs">
    <li <?php if($__Context->act=='dispRefererAdminIndex'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminIndex','page','1','search_target','','search_keyword','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->referer ?> <?php echo $lang->cmd_list ?></a></li>
    <li <?php if($__Context->act=='dispRefererAdminRanking'||$__Context->act=='dispRefererAdminDeleteStat'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminRanking','page','1','search_target','','search_keyword','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->referer ?> <?php echo $lang->ranking ?></a></li>
    <li <?php if($__Context->act=='dispRefererAdminRemoteRanking'||$__Context->act=='dispRefererAdminDeleteRemoteStat'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminRemoteRanking','page','1','search_target','','search_keyword','','host','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->remote ?> <?php echo $lang->ranking ?></a></li>
    <li <?php if($__Context->act=='dispRefererAdminCountryRanking'||$__Context->act=='dispRefererAdminDeleteCountryStat'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminCountryRanking','page','1','search_target','','search_keyword','','host','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->country ?> <?php echo $lang->ranking ?></a></li>
    <li <?php if($__Context->act=='dispRefererAdminUserRanking'||$__Context->act=='dispRefererAdminDeleteUserStat'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminUserRanking','page','1','search_target','','search_keyword','','host','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->user ?> <?php echo $lang->ranking ?></a></li>
    <li <?php if($__Context->act=='dispRefererAdminPageRanking'||$__Context->act==dispRefererAdminDeletePageStat){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminPageRanking','page','1','search_target','','search_keyword','','host','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->visiting_page ?> <?php echo $lang->ranking ?></a></li>
    <li <?php if($__Context->act=='dispRefererAdminUAgentRanking'||$__Context->act=='dispRefererAdminDeleteUAgentStat'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminUAgentRanking','page','1','search_target','','search_keyword','','host','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->uagent ?> <?php echo $lang->ranking ?></a></li>
    <li <?php if($__Context->act=='dispRefererAdminUAgentStat'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminUAgentStat','page','1','search_target','','search_keyword','','host','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->statistics ?></a></li>
    <li <?php if($__Context->act=='dispRefererAdminConfig'){ ?>class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispRefererAdminConfig','page','','search_target','','search_keyword','','host','','remote','','country_code','','country','','user_id','','ref_mid','','ref_document_srl','','uagent','','called_from','') ?>"><?php echo $lang->cmd_setup ?></a></li>
</ul>