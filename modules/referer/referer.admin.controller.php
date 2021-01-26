<?php
/**
 * @class  refererAdminController 
 * @author haneul (haneul0318@gmail.com) 
 * @enhanced by KnDol (kndol@kndol.net)
 * @brief  Referer 모듈의 admin controller class
 **/
class refererAdminController extends referer {
    /**
     * @brief 초기화
     **/
    function init() {
    }

    function procRefererAdminDeleteStat() {
    	$args = Context::gets('host', 'remote', 'uagent', 'country_code', 'member_srl', 'ref_mid', 'ref_document_srl', 'called_from');

		if ($args->user_id) {
			$oMemberModel = &getModel('member');
			$member_info = $oMemberModel->getMemberInfoByUserID($args->user_id);
			$args->member_srl = $member_info->member_srl;
		}
		
		$oDB = &DB::getInstance();
		$oDB->begin();

	    if ($args->host != "") {
	    	$output = executeQuery('referer.deleteRefererStat', $args);
	    	$called_from = 'referer';
	    }
	    else if ($args->remote != "") {
	    	$output = executeQuery('referer.deleteRemoteStat', $args);
	    	$called_from = 'remote';
	    }
	    else if ($args->member_srl != "") {
	    	$output = executeQuery('referer.deleteUserStat', $args);
	    	$called_from = 'user';
	    }
	    else if ($args->country_code != "") {
	    	$output = executeQuery('referer.deleteCountryStat', $args);
	    	$called_from = 'country';
	    }
	    else if ($called_from == "visiting_page") {
	    	$output = executeQuery('referer.deletePageStat', $args);
	    }
	    else {
	    	$output = executeQuery('referer.deleteUAgentStat', $args);
	    	$called_from = 'uagent';
	    }
        if(!$output->toBool()) {
        	$oDB->rollback();
			return $output;
		}
		
		$oDB->commit();

		$this->add('called_from', $called_from);
		$this->add('page',Context::get('page'));
        $this->setMessage('success_deleted');
	}
	
	function procRefererAdminResetData() {
	    $oDB = &DB::getInstance();
	    $oDB->begin();

		$output = $oDB->DropTable("referer_log");
        if($output->error) return $output;
		$output = $oDB->createTableByXmlFile($this->module_path.'schemas/referer_log.xml');
        if($output->error) return $output;

		$output = $oDB->DropTable("referer_statistics");
        if($output->error) return $output;
		$output = $oDB->createTableByXmlFile($this->module_path.'schemas/referer_statistics.xml');
        if($output->error) return $output;

		$output = $oDB->DropTable("referer_remote_statistics");
        if($output->error) return $output;
		$output = $oDB->createTableByXmlFile($this->module_path.'schemas/referer_remote_statistics.xml');
        if($output->error) return $output;

		$output = $oDB->DropTable("referer_uagent_statistics");
        if($output->error) return $output;
		$output = $oDB->createTableByXmlFile($this->module_path.'schemas/referer_uagent_statistics.xml');
        if($output->error) return $output;

		$output = $oDB->DropTable("referer_user_statistics");
        if($output->error) return $output;
		$output = $oDB->createTableByXmlFile($this->module_path.'schemas/referer_user_statistics.xml');
        if($output->error) return $output;

		$output = $oDB->DropTable("referer_page_statistics");
        if($output->error) return $output;
		$output = $oDB->createTableByXmlFile($this->module_path.'schemas/referer_page_statistics.xml');
        if($output->error) return $output;

		$output = $oDB->DropTable("referer_country_statistics");
        if($output->error) return $output;
		$output = $oDB->createTableByXmlFile($this->module_path.'schemas/referer_country_statistics.xml');
        if($output->error) return $output;

		$oDB->commit();

		$this->add('called_from', '');

        $this->setMessage('success_reset');
	}

	public function procRefererAdminInsertConfig()
	{
		$args = Context::gets(
			'include_admin', 'include_direct_access', 'include_bot', 'treat_msie6_bot', 'treat_msie7_bot', 'treat_moz5_bot', 'exclude_uagent', 'exclude_host', 'delete_olddata',
			'logging_country', 'GeoIPSite_log', 'timeout_log', 'use_geoip_admin', 'GeoIPSite', 'timeout'
		);

		if ($args->GeoIPSite == '') $args->GeoIPSite = 'auto';
		if ($args->GeoIPSite_log == '') $args->GeoIPSite_log = 'auto';
		$args->timeout = (int)$args->timeout;
		if ($args->timeout<1) $args->timeout = 500;
		$args->timeout_log = (int)$args->timeout_log;
		if ($args->timeout_log<1) $args->timeout_log = 500;
		$args->delete_olddata = (int)$args->delete_olddata;
		if ($args->delete_olddata<0) $args->timeout = 0;
		$args->exclude_uagent = trim($args->exclude_uagent);
		$args->exclude_host = trim($args->exclude_host);

		$oModuleController = getController('module');
		$output = $oModuleController->updateModuleConfig('referer', $args);
        if(!$output->toBool()) return $output;

		// default setting end
		$this->setMessage('success_updated');

		$returnUrl = Context::get('success_return_url') ? Context::get('success_return_url') : getNotEncodedUrl('', 'referer', 'admin', 'act', 'dispRefererAdminConfig');
		$this->setRedirectUrl($returnUrl);
	}
}
/* End of file referer.admin.controller.php */
/* Location: ./modules/referer/referer.admin.controller.php */
