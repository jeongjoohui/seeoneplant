<?php
/**
 * @class  refererController
 * @author haneul (haneul0318@gmail.com) 
 * @enhanced by KnDol (kndol@kndol.net)
 * @brief  referer 모듈의 controller class
 **/

class refererController extends referer {
	/**
	 * @brief initialization
	 **/
    function init() {
	}

	function procRefererExecute() {
		$args = (object)array();
		$oRefererModel = &getModel('referer');
		$refererConfig = $oRefererModel->getRefererConfig();

		$direct_access = empty($_SERVER["HTTP_REFERER"]);
		if ($refererConfig->include_direct_access == "no" && $direct_access) return;

		// Log only from different hosts
	   	$referer = parse_url($_SERVER["HTTP_REFERER"]);
		if(!$direct_access && $referer['host'] == $_SERVER['HTTP_HOST']) return;

		$logged_info = Context::get('logged_info');
		if($logged_info->is_admin == "Y" && $refererConfig->include_admin != "yes") return;

	   	$args->remote = $_SERVER["REMOTE_ADDR"];
	   	$args->host = $referer['host'];
		$args->uagent = trim(removeHackTag($_SERVER["HTTP_USER_AGENT"]), " \t\n\r\0\x0B'");

		$isBot = $oRefererModel->isBot($args->uagent);
		if($refererConfig->include_bot == 'no' && $isBot) return;
		if($refererConfig->exclude_uagent && preg_match("/$refererConfig->exclude_uagent/i", $args->uagent)) return;
		if($refererConfig->exclude_host   && ((!empty($_SERVER["HTTP_REFERER"]) && preg_match("/$refererConfig->exclude_host/i", $args->host)) || preg_match("/$refererConfig->exclude_host/i", $_SERVER["REMOTE_ADDR"]))) return;

		if($isBot)						$args->member_srl = -1;
		else if ($logged_info == NULL)	$args->member_srl = 0;
		else							$args->member_srl = $logged_info->member_srl;

		$args->url = $direct_access ? "http://localhost" : removeHackTag($_SERVER["HTTP_REFERER"]);
		$args->request_uri = removeHackTag($_SERVER["REQUEST_URI"]);
		
		if (strpos($args->request_uri, "module=socialxe&amp;act=procSocialxeCallback") !== false
			|| strpos($args->request_uri, "module=socialxe&act=procSocialxeCallback") !== false
			|| strpos($args->request_uri, "act=dispSocialxeInputAddInfo") !== false) return;

		// 접근 페이지 정보 구하기
		$args->ref_mid = Context::get('mid');
		$args->ref_document_srl = Context::get('document_srl');
		if (!$args->ref_mid && $args->ref_document_srl) {
			$oModuleModel = getModel('module');
			$module = $oModuleModel->getModuleInfoByDocumentSrl($args->ref_document_srl);
			$args->ref_mid = $module->mid;
		}
		// mid를 구할 수 없으면 홈페이지에 접속한 것
		if (!$args->ref_mid) {
			$site_info = Context::get('site_module_info');
			$args->ref_mid = $site_info->mid;
			$args->ref_document_srl = -1;
		}
		if (!$args->ref_document_srl) $args->ref_document_srl = -1;

		// 접속한 국가 정보 구하기
		$args->country_code = $args->country = NULL;
		if ($refererConfig->logging_country == 'yes') {
			// geoipxe 지원
			$oGeoipxeModel = &getModel('geoipxe');
			if ($oGeoipxeModel && method_exists($oGeoipxeModel, 'getGeoipxeDataFromIP')) {
				$location = $oGeoipxeModel->getGeoipxeDataFromIP($args->remote);
				$args->country_code = $location->country_code;
				$args->country 	 = $location->country;
			}
			elseif (is_callable('curl_init'))
			{
				$geoip = array(
					'ipapi'=>'http://ip-api.com/php/', 'petabyet'=>'http://api.petabyet.com/geoip/', 'geojs'=>'https://get.geojs.io/v1/ip/country/',
					'ipsb'=>'https://api.ip.sb/geoip/', 'ipdata'=>'https://api.ipdata.co/', 'nekudo'=>'http://geoip.nekudo.com/api/', 
					'cdnservice'=>'http://geoip.cdnservice.eu/api/', 'geoipdb'=>'https://geoip-db.com/json/',
					/*'pingadvisor'=>'https://api.pingadvisor.com/json/?ip=', 'smartip'=>'http://smart-ip.net/geoip-json/'*/);
				$geoip_opt = array('ipapi'=>'?fields=65535', 'petabyet'=>'', 'geojs'=>'.json', 'nekudo'=>'/en',
					'cdnservice'=>'/en', 'geoipdb'=>'', 'ipdata'=>'', 'ipsb'=>'', 'pingadvisor'=>''/*, 'smartip'=>''*/);

				$curl = curl_init();
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl, CURLOPT_TIMEOUT, $refererConfig->timeout_log/1000);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($curl, CURLOPT_HEADER, false);
				if ($refererConfig->GeoIPSite_log == 'auto')
				{
					foreach ($geoip AS $key => $val) {
						curl_setopt($curl, CURLOPT_URL, $val . $args->remote . $geoip_opt[$key]);
						$response = curl_exec($curl);
						$location = $key == 'ipapi' ? unserialize($response) : json_decode($response);
						if ($location && ($key != 'ipapi' || ($key == 'ipapi' && $location['status'] == 'success'))) {
							$refererConfig->GeoIPSite_log = $key;
							break;
						}
					}
				}
				else
				{
					curl_setopt($curl, CURLOPT_URL, $geoip[$refererConfig->GeoIPSite_log] . $args->remote . $geoip_opt[$refererConfig->GeoIPSite_log]);
					$response = curl_exec($curl);
					$location = $refererConfig->GeoIPSite_log == 'ipapi' ? unserialize($response) : json_decode($response);
				}
				curl_close($curl);
				// 각 서비스마다 조금씩 다른 변수명을 일치시킴
				if ($refererConfig->GeoIPSite_log == 'ipapi' && $location && $location['status'] == 'success') {
					$args->country_code = $location->countryCode;
					$args->country 	 = $location->country;
				}
				else if ($refererConfig->GeoIPSite_log == 'nekudo' || $refererConfig->GeoIPSite_log == 'cdnservice') {
					$args->country_code = $location->country->code;
					$args->country 	 = $location->country->name;
				}
				else if ($refererConfig->GeoIPSite_log == 'ipdata') {
					$args->country_code = $location->country_code;
					$args->country 	 = $location->country_name;
				}
				else if ($refererConfig->GeoIPSite_log == 'pingadvisor') {
					$args->country_code = $location->ccode;
					$args->country 	 = $location->country;
				}
				else if ($refererConfig->GeoIPSite_log == 'smartip') {
					$args->country_code = $location->countryCode;
					$args->country 	 = $location->countryName;
				}
				else {
					$args->country_code = $location->country_code;
					$args->location->country 	 = $location->country;
				}
			}
		}
		$oDB = &DB::getInstance();
		$oDB->begin();
		$ret = $this->insertRefererLog($args);
		if(!$ret->error)
		{
			$this->deleteOlddatedRefererLogs($refererConfig->delete_olddata);
			$this->updateRefererStatistics($args);
			$oDB->commit();
		}
	}

	function updateRefererStatistics($args)
	{
		$oRefererModel = &getModel('referer');
		
	    if($oRefererModel->isInsertedRemote($args))
		{
			$output = executeQuery('referer.updateRemoteStatistics', $args);
		}
	    else
		{
			$output = executeQuery('referer.insertRemoteStatistics', $args);
		}
		if($args->host != "") {
		    if($oRefererModel->isInsertedHost($args))
			{
				$output = executeQuery('referer.updateRefererStatistics', $args);
			}
		    else
			{
				$output = executeQuery('referer.insertRefererStatistics', $args);
			}
		}
		if($args->uagent != "") {
		    if($oRefererModel->isInsertedUAgent($args))
			{
				$output = executeQuery('referer.updateUAgentStatistics', $args);
			}
		    else
			{
				$output = executeQuery('referer.insertUAgentStatistics', $args);
			}
		}

	    if($oRefererModel->isInsertedUser($args))
		{
			$output = executeQuery('referer.updateUserStatistics', $args);
		}
	    else
		{
			$output = executeQuery('referer.insertUserStatistics', $args);
		}

	    if($oRefererModel->isInsertedPage($args))
		{
			$output = executeQuery('referer.updatePageStatistics', $args);
		}
	    else
		{
			$output = executeQuery('referer.insertPageStatistics', $args);
		}

		if ($args->country_code != "")
		{
		    if($oRefererModel->isInsertedCountry($args))
			{
				$output = executeQuery('referer.updateCountryStatistics', $args);
			}
		    else
			{
				$output = executeQuery('referer.insertCountryStatistics', $args);
			}
		}

	    return $output;
	}

	function insertRefererLog($args)
	{
		$recent = &getModel('referer')->getRecentRefererList();
	    if($recent->remote == $args->remote && $recent->url == $args->url && $recent->uagent == $args->uagent && $recent->member_srl == $args->member_srl)
		{
			$args->regdate      = $recent->regdate;
			$args->regdate_last = date("YmdHis");
		    return executeQuery('referer.updateRefererLog', $args);
		}
		else
		{
			$args->regdate_last = $args->regdate = date("YmdHis");
		    return executeQuery('referer.insertRefererLog', $args);
		}
	}

	function deleteOlddatedRefererLogs($delete_olddata)
	{
		if($delete_olddata<1) return true;
		$args = (object)array();
		$day = "-" . (($delete_olddata == 1) ? $delete_olddata . " day" : $delete_olddata . " days");
		$args->regdate = date("YmdHis", strtotime($day));
	    return executeQuery('referer.deleteOlddatedLogs', $args);
	}
}
/* End of file referer.controller.php */
/* Location: ./modules/referer/referer.controller.php */
