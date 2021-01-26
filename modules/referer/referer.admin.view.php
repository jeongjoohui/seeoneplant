<?php
/**
 * @class  RefererAdminView
 * @author haneul (haneul0318@gmail.com)
 * @enhanced by KnDol (kndol@kndol.net)
 * @brief  Referer 모듈의 Admin view class
 **/
define('_REFERER_RANKING_', 0);
define('_REFERER_RANKING_DETAIL_', 1);
define('_REMOTE_RANKING_', 2);
define('_USER_RANKING_', 3);
define('_PAGE_RANKING_', 4);
define('_COUNTRY_RANKING_', 5);
define('_UAGENT_RANKING_', 6);
define('_UAGENT_STATISTICS_', 7);
define('_MID_STATISTICS_', 8);

define('_MAX_STAT_DATA_', 14);

class RefererAdminView extends Referer {
	/**
	 * Referer module config.
	 *
	 * @var Object
	 */

	/**
	 * @brief 초기화
	 **/
	function init() {
		// 템플릿 경로 지정 
		$this->setTemplatePath($this->module_path.'tpl');
	}

	/**
	 * @brief 관리자 페이지 초기화면
	 **/
	function dispRefererAdminIndex() {
		$this->dispRefererAdminList();
	}

	function dispRefererAdminDeleteStat () {
		if(Context::get('host')=="") return $this->dispRefererAdminRanking();
		$this->setTemplateFile('delete_stat');
	}

	function dispRefererAdminDeleteRemoteStat () {
		if(Context::get('remote')=="") return $this->dispRefererAdminRemoteRanking();
		$this->setTemplateFile('delete_stat');
	}

	function dispRefererAdminDeleteUserStat () {
		if(Context::get('member_srl')=="") return $this->dispRefererAdminUserRanking();
		$this->setTemplateFile('delete_stat');
	}

	function dispRefererAdminDeletePageStat () {
		if(Context::get('called_from')=="" || Context::get('url')=="") return $this->dispRefererAdminPageRanking();
		$this->setTemplateFile('delete_stat');
	}

	function dispRefererAdminDeleteCountryStat () {
		if(Context::get('country_code')=="") return $this->dispRefererAdminCountryRanking();
		$this->setTemplateFile('delete_stat');
	}

	function dispRefererAdminDeleteUAgentStat () {
		if(Context::get('uagent')=="") return $this->dispRefererAdminUAgentRanking();
		$this->setTemplateFile('delete_stat');
	}

	function dispRefererAdminResetData () {
		$this->setTemplateFile('reset_data');
	}
	
	function dispRefererAdminList() {
		// 목록을 구하기 위한 옵션
		// 목록을 구하기 위한 옵션
		$args = Context::gets('host',	///< 선택한 호스트
			'remote',					///< 선택한 리모트IP
			'country',					///< 선택한 국가
			'country_code',				///< 선택한 국가 코드
			'member_srl',				///< 선택한 사용자
			'ref_mid',					///< 선택한 mid
			'ref_document_srl',			///< 선택한 document_srl
			'uagent',					///< 선택한 User Agent
			'page',						///< 페이지
			'search_mode',				///< 로긴한 사용자 데이터만 검색할지 여부
			'search_target',			///< 검색 대상
			'search_keyword',			///< 검색 키워드
			'search_action');			///< 검색 또는 저장
		$args->sort_index = 'regdate';	///< 소팅 값

		if ($args->member_srl != '') {
			$user_info = $this->getUserStringFromMemberSrl($args->member_srl);
			Context::set('user_info', $user_info);
		}
		else if ($args->search_target=='user_id' && $args->search_keyword) {
			$args->search_target  = 'member_srl';
			$args->search_keyword = $this->getMemberSrlFromUserID($args->search_keyword);
		}

		$oRefererModel = &getModel('referer');
		$output = $oRefererModel->getLogList($args);
		if ($output->page > $output->total_page) {
			$args->page = $output->total_page;
			$output = $oRefererModel->getLogList($args);
		}
		$refererConfig = $oRefererModel->getRefererConfig();

		Context::set('refererConfig', $refererConfig);
		Context::set('total_count', $output->total_count);
		Context::set('total_page', $output->total_page);
		Context::set('page', $output->page);
		Context::set('referer_list', $output->data);
		Context::set('page_navigation', $output->page_navigation);
		
		if ($args->search_action == 'save' && !$this->saveExcel($output)) exit;

		$this->getHostByName($output->data);
		// 템플릿 지정
		$this->setTemplatePath($this->module_path.'tpl');
		$this->setTemplateFile('referer_list');
	}
	
	function dispRefererAdminRankingPage($ranking_mode){
		$args = (object)array();
		if ($ranking_mode != _UAGENT_STATISTICS_) {
			$args->host = Context::get('host');
			if ($args->host != "") $ranking_mode = _REFERER_RANKING_DETAIL_;
			$args->page = Context::get('page'); ///< 페이지
			$args->sort_index = 'cnt'; ///< 소팅 값
			$args->list_count = 20; // 한 페이지에 표시할 항목 수
			$search_keyword = trim(Context::get('search_keyword'));
			if ($search_keyword) {
				$args->search_keyword  = $search_keyword;
			}
		}
		$oRefererModel = &getModel('referer');
		$output = $oRefererModel->getRefererRanking($ranking_mode, $args);

		if ($ranking_mode != _UAGENT_STATISTICS_) {
			if ($output->page > $output->total_page) {
				$args->page = $output->total_page;
				$output = $oRefererModel->getRefererRanking($ranking_mode, $args);
			}
			Context::set('total_count', $output->total_count);
			Context::set('total_page', $output->total_page);
			Context::set('page', $output->page);
			Context::set('page_navigation', $output->page_navigation);
			Context::set('referer_status', $output->data);
			Context::set('rank', $args->list_count*($output->page-1)+1);
		}
		$refererConfig = $oRefererModel->getRefererConfig();
		Context::set('refererConfig', $refererConfig);

		// 템플릿 지정
		$this->setTemplatePath($this->module_path.'tpl');
		switch ($ranking_mode) {
			case _REFERER_RANKING_:
				$this->getHostByName($output->data);
				$this->setTemplateFile('referer_ranking');
				break;
			case _REFERER_RANKING_DETAIL_:
				Context::set('hostip', gethostbyname($args->host));
				$this->setTemplateFile('referer_ranking_detail');
				break;
			case _REMOTE_RANKING_:
				$this->setTemplateFile('referer_remote_ranking');
				break;
			case _USER_RANKING_:
   				$this->setTemplateFile('referer_user_ranking');
				break;
			case _PAGE_RANKING_:
				$this->preparePageStatData($output->data);
				$this->setTemplateFile('referer_page_ranking');
				break;
			case _COUNTRY_RANKING_:
   				$this->setTemplateFile('referer_country_ranking');
				break;
			case _UAGENT_RANKING_:
   				$this->setTemplateFile('referer_uagent_ranking');
				break;
			case _UAGENT_STATISTICS_:
				$this->prepareUAStatData($output->data);

				if ($refererConfig->logging_country == 'yes') {
					$args->page = 1;
					$args->sort_index = 'cnt';
					$args->list_count = 300;
					$output = $oRefererModel->getRefererRanking(_COUNTRY_RANKING_, $args);
					$this->prepareCountryStatData($output->data);
				}
				$output = $oRefererModel->getRefererRanking(_MID_STATISTICS_, $args);
				$this->prepareMidStatData($output->data);
   				$this->setTemplateFile('referer_uagent_stat');
				break;
		}   
	}

	function dispRefererAdminRanking(){
		$this->dispRefererAdminRankingPage(_REFERER_RANKING_);
	}
	
	function dispRefererAdminRemoteRanking(){
		$this->dispRefererAdminRankingPage(_REMOTE_RANKING_);
	}

	function dispRefererAdminUserRanking(){
		$this->dispRefererAdminRankingPage(_USER_RANKING_);
	}

	function dispRefererAdminPageRanking(){
		$this->dispRefererAdminRankingPage(_PAGE_RANKING_);
	}

	function dispRefererAdminCountryRanking(){
		$this->dispRefererAdminRankingPage(_COUNTRY_RANKING_);
	}

	function dispRefererAdminUAgentRanking(){
		$this->dispRefererAdminRankingPage(_UAGENT_RANKING_);
	}

	function dispRefererAdminUAgentStat(){
		$this->dispRefererAdminRankingPage(_UAGENT_STATISTICS_);
	}

	function preparePageStatData(&$data) {
		$oContext = &Context::getInstance();
		foreach($data as $no => $val) {
			if($oContext->allow_rewrite) {
				if($val->ref_mid == '/') $val->url = "/";
				else if($val->ref_document_srl<0) $val->url = "/$val->ref_mid";
				else if(!$val->ref_mid) $val->url = "/$val->ref_document_srl";
				else $val->url = "/$val->ref_mid/$val->ref_document_srl";
			}
			else {
				if($val->ref_mid == '/') $val->url = "/";
				else if($val->ref_document_srl<0) $val->url = "/index.php?ref_mid=$val->ref_mid";
				else if(!$val->ref_mid) $val->url = "/index.php?ref_document_srl=$val->ref_document_srl";
				else $val->url = "/index.php?ref_mid=$val->ref_mid&ref_document_srl=$val->ref_document_srl";
			}
		}
	}

	function prepareCountryStatData(&$data) {
		$Countries = array();
		$i = 0;
		$others = 0;
		foreach($data as $no => $val) {
			if ($i++<_MAX_STAT_DATA_) {
				$Countries[$val->country] = $val->cnt;
			}
			else {
				$others += $val->cnt;
			}
		}
		if ($others) $Countries['Other Countries'] = $others;
		Context::set('Countries', $Countries);
	}

	function prepareMidStatData(&$data) {
		$Mids = array();
		$i = 0;
		$others = 0;
		foreach($data as $no => $val) {
			if ($i++<_MAX_STAT_DATA_) {
				$Mids[$val->ref_mid] += $val->cnt;
			}
			else {
				$Mids['Others'] += $val->cnt;
			}
		}
		Context::set('Mids', $Mids);
	}

	function prepareUAStatData(&$data) {
		$Types = array('desktop' => 0, 'mobile' => 0, 'online' => 0, 'unknown' => 0, 'bot' => 0, 'notbot' => 0);
		$Bots = array();
		$Browsers = array();
		$OSes = array();
		$IEs = array();
		$Windows = array();
		$Macs = array();
		$iOSes = array();
		$Androids = array();

		$oRefererModel = &getModel('referer');

		foreach($data as $no => $val) {
			$uagent = $val->uagent;
			$count = $val->cnt;
			$botprovider = $os = $browser = $mac = $ios = $android = $win = $ie = "";
			$mobile = false;
			
			if ( $oRefererModel->isBot($uagent, $botprovider) ) {
				if (array_key_exists($botprovider, $Bots)) $Bots[$botprovider] += $count;
				else $Bots[$botprovider] = $count;
				$Types['bot'] += $count;
			}
			else {
				if ( stripos($uagent, "iPhone") !== false || stripos($uagent, "iPod") !== false || stripos($uagent, "iPad") !== false ) 
				{
					$mobile = true;
					$os = "iOS";

					if ( preg_match('/OS ([0-9_]+) like/i',$uagent, $matches) ) {
						$vers = explode("_",$matches[1]);
						$ios = "iOS " . $vers[0] . "." . $vers[1];

						if (array_key_exists($ios, $iOSes)) $iOSes[$ios] += $count;
						else $iOSes[$ios] = $count;
					}
				}
				else if ( stripos($uagent, "Android") !== false ) {
					$mobile = true;
					$os  = 'Android';
					if ( preg_match('/Android (1\.0)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Apple pie"; }
					else if ( preg_match('/Android (1\.1)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Bananabread"; }
					else if ( preg_match('/Android (1\.5)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Cupcake"; }
					else if ( preg_match('/Android (1\.6)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Donut"; }
					else if ( preg_match('/Android (2\.[0-1])/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Eclair"; }
					else if ( preg_match('/Android (2\.2)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Froyo"; }
					else if ( preg_match('/Android (2\.3)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Gingerbread"; }
					else if ( preg_match('/Android (3\.[0-2])/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Honeycomb"; }
					else if ( preg_match('/Android (4\.0)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " ICS"; }
					else if ( preg_match('/Android (4\.[1-3])/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Jelly Bean"; }
					else if ( preg_match('/Android (4\.4)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " KitKat"; }
					else if ( preg_match('/Android (5[\.0-9]+)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Lollipop"; }
					else if ( preg_match('/Android (6[\.0-9]+)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Marshmallow"; }
					else if ( preg_match('/Android (7[\.0-9]+)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Nougat"; }
					else if ( preg_match('/Android (8[\.0-9]+)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Oreo"; }
					else if ( preg_match('/Android (9[\.0-9]+)/i',$uagent, $matches) ) { $vers = explode(".",$matches[1]); $android = $vers[0] . "." . $vers[1] . " Pie"; }
					else if ( preg_match('/Android ([0-9]+)(\.[0-9]+)*/i',$uagent, $matches) ) {
						$android = $matches[1];
						if (count($matches) > 2) $android .= $matches[2];
					}
					else { $android = "Others"; }

					if (array_key_exists($android, $Androids)) $Androids[$android] += $count;
					else $Androids[$android] = $count;
				}
				else if ( stripos($uagent, "Windows CE") !== false )
				{
					$mobile = true;
					$os = "Windows CE";
					if ( stripos($uagent, "IEMobile") !== false ) $browser = "Internet Explorer Mobile";
				}
				else if ( stripos($uagent, "Zune") !== false )
				{
					$mobile = true;
					$os = "MS Zune OS";
					$browser = "Internet Explorer Mobile";
				}
				else if ( stripos($uagent, "Windows Phone") !== false )
				{
					$mobile = true;
					$os = "MS Windows Phone";
					if ( stripos($uagent, "Windows Phone 6") !== false ) $os .= " 6";
					else if ( stripos($uagent, "Windows Phone OS 7") !== false ) $os .= " 7";
					else if ( stripos($uagent, "Windows Phone 8.0") !== false ) $os .= " 8.0";
					else if ( stripos($uagent, "Windows Phone 8.1") !== false ) $os .= " 8.1";
					$browser = "Internet Explorer Mobile";
				}
				else if ( stripos($uagent, "BlackBerry") !== false )
				{
					$mobile = true;
					$os = "BlackBerry";
					$browser = "BlackBerry Browser";
				}
				else if ( stripos($uagent, "Android") === false && (stripos($uagent, "Linux") !== false || stripos($uagent, "elementary OS") !== false) ) {
					$os = "Linux";
					if ( stripos($uagent, "x86_64") !== false ) $os .= " (64bits)";
				}
				else if ( stripos($uagent, "FreeBSD") !== false ) {
					$os = "FreeBSD";
					if ( stripos($uagent, "amd64") !== false) $os .= " (64bits)";
				}
				else if ( stripos($uagent, "OpenBSD") !== false ) {
					$os = "OpenBSD";
					if ( stripos($uagent, "amd64") !== false ) $os .= " (64bits)";
				}
				else if ( stripos($uagent, "macintosh") !== false || stripos($uagent, "mac os x") !== false || stripos($uagent, "darwin") !== false ) {
					$os = "macOS";
					$names = array("Cheetar",
						"Puma",         
						"Jaguar",       
						"Panther",      
						"Tiger",        
						"Leopard",      
						"Snow Leopard", 
						"Lion",         
						"Mountain Lion",
						"Mavericks",    
						"Yosemite",
						"El Capitan",
						"Sierra",
						"High Sierra",
						"Mojave",
						"Catalina");
					$mac = "10";
					if ( preg_match('/10_([0-9]+)_/i', $uagent, $matches) || preg_match('/10\.([0-9]+)_/i', $uagent, $matches) ) {
						$minVer = (int)$matches[1];
						$mac .= "." . $minVer . " ". ($minVer < count($names) ? $names[$minVer] : "Unknown");
					}
					if (array_key_exists($mac, $Macs)) $Macs[$mac] += $count;
					else $Macs[$mac] = $count;
				}
				else if ( stripos($uagent, "Windows") !== false || stripos($uagent, "Win") !== false ) {
					$os = "MS Windows";
					if ( stripos($uagent, "NT 10.0") !== false ) $win = "Win 10";
					else if ( stripos($uagent, "NT 6.3") !== false ) $win = "Win 8.1";
					else if ( stripos($uagent, "NT 6.2") !== false ) $win = "Win 8";
					else if ( stripos($uagent, "NT 6.1") !== false ) $win = "Win 7";
					else if ( stripos($uagent, "NT 6.0") !== false ) $win = "Win Vista";
					else if ( stripos($uagent, "NT 5.2") !== false ) $win = "Win 2003 Server";
					else if ( stripos($uagent, "NT 5.1") !== false ) $win = "Win XP";
					else if ( stripos($uagent, "NT 5.0") !== false ) $win = "Win 2000";
					else if ( stripos($uagent, "NT")  !== false) $win = "Win NT";
					else if ( stripos($uagent, "Windows 98") !== false ) $win = "Win 98";
					else if ( stripos($uagent, "Windows 95") !== false ) $win = "Win 95";
					else $win = "Others";
					if ( stripos($uagent, "WOW64") !== false || stripos($uagent, "Win64") !== false || stripos($uagent, "x64") !== false ) {
						$os .= " (64bits)";
						$win .= " (64bits)";
					}
					
					if (array_key_exists($win, $Windows)) $Windows[$win] += $count;
					else $Windows[$win] = $count;

					if ( stripos($uagent, "Chrome") !== false && preg_match('/Edg\/([0-9]+)/i', $uagent, $matches) ) $ie = "Edge (Chromium)";
					else if ( preg_match('/Edge\/([0-9]+)/i', $uagent, $matches) ) $ie = "Edge " . $matches[1];
					else if ( preg_match('/Trident\/([4-7])/i', $uagent, $matches) ) $ie = "Internet Explorer " . ((int)$matches[1] + 4);
					else if ( preg_match('/MSIE ([1-7])/i', $uagent, $matches) ) $ie = "Internet Explorer " . $matches[1];
					if ( stripos($uagent, "DigExt") !== false ) $ie .= " (Offline Browsing)";

					if ($ie != "") {
						$browser = stripos($ie, "Edge") !== false ? "MS Edge" : "MS Internet Explorer";
						if (stripos($ie, "Chromium") !== false) $browser .= " (Chromium)";
						if (array_key_exists($ie, $IEs)) $IEs[$ie] += $count;
						else $IEs[$ie] = $count;
					}
				}
				
				if ($browser == "") {
					if ( stripos($uagent, "NAVER") !== false && stripos($uagent, "inapp") !== false ) {
						$browser = "Naver App";
						$mobile = true;
					}
					else if ( stripos($uagent, "DaumApps") !== false ) {
						$browser = "Daum App";
						$mobile = true;
					}
					else if ( stripos($uagent, "Opera") !== false || stripos($uagent, "Opr") !== false ) $browser = "Opera";
					else if ( stripos($uagent, "Whale") !== false ) $browser = "Naver Whale";
					else if ( stripos($uagent, "Chrome") !== false ) $browser = "Google Chrome";
					else if ( stripos($uagent, "Firefox") !== false || stripos($uagent, "Minefield") !== false ) $browser = "Mozilla Firefox";
					else if ( stripos($uagent, "Netscape") !== false ) $browser = "Netscape Navigator";
					else if ( stripos($uagent, "Mozilla") !== false && stripos($uagent, "Nav") !== false ) $browser = "Netscape Navigator";
					else if ( stripos($uagent, "Epiphany") !== false ) $browser = "Epiphany";
					else if ( stripos($uagent, "Safari") !== false ) $browser = "Apple Safari";
					else if ( (stripos($uagent, "iPhone") !== false || stripos($uagent, "iPod") !== false || stripos($uagent, "iPad") !== false) && stripos($uagent, "AppleWebKit") !== false ) $browser = "Apple Safari";
					else if ( stripos($uagent, "Sleuth") !== false ) $browser = "Xenu\'s Link Sleuth";
					else if ( stripos($uagent, "Newsflow") !== false ) { $browser = "Newsflow RSS Reader"; }
					else if ( stripos($uagent, "feedfetcher") !== false ) { $browser = "Google FeedFetcher"; $os = "Online"; }
					else if ( stripos($uagent, "UniversalFeedParser") !== false ) { $browser = "UniversalFeedParser"; $os = "Online"; }
					else if ( stripos($uagent, "FeedDemon") !== false ) { $browser = "FeedDemon RSS reader"; $os = "Online"; }
					else if ( stripos($uagent, "NewsGatorOnline") !== false ) { $browser = "NewsGator Online RSS Reader"; $os = "Online"; }
					else if ( stripos($uagent, "SocialXE ClientBot") !== false ) { $browser = "SocialXE ClientBot"; $os = "Online"; }
					else if ( stripos($uagent, "kakaotalk") !== false ) { $browser = "KakaoTalk"; }
					else $browser = "Others";
				}
				if ($os == "") $os = "Others";
		
				if (array_key_exists($os, $OSes)) $OSes[$os] += $count;
				else $OSes[$os] = $count;
		
				if (array_key_exists($browser, $Browsers)) $Browsers[$browser] += $count;
				else $Browsers[$browser] = $count;

				if ( $mobile )	$Types['mobile'] += $count;
				else if ($os == "Online") $Types['online'] += $count;
				else if ($os == "Others") { $Types['unknown'] += $count; debugPrint($uagent); }
				else			$Types['desktop'] += $count;

				$Types['notbot'] += $count;
			}
		}
		arsort($Bots);
		arsort($Browsers);
		arsort($OSes);
		arsort($IEs);
		arsort($Windows);
		arsort($Macs);
		arsort($iOSes);
		arsort($Androids);
		Context::set('Types', $Types);
		Context::set('Bots', $Bots);
		Context::set('Browsers', $Browsers);
		Context::set('OSes', $OSes);
		Context::set('IEs', $IEs);
		Context::set('Windows', $Windows);
		Context::set('Macs', $Macs);
		Context::set('iOSes', $iOSes);
		Context::set('Androids', $Androids);
	}

	function dispRefererAdminConfirmReset(){
		$this->setTemplatePath($this->module_path.'tpl');
		$this->setTemplateFile('reset_data');
	}
	
	/**
	 * Set the config.
	 *
	 * @return void
	 */
	public function dispRefererAdminConfig()
	{
		$oRefererModel = &getModel('referer');
		$refererConfig = $oRefererModel->getRefererConfig();

		// geoipxe 지원
		$oGeoipxeModel = &getModel('geoipxe');
		$useGeoipxe = $oGeoipxeModel && method_exists($oGeoipxeModel, 'getGeoipxeDataFromIP');
		Context::set('useGeoipxe', $useGeoipxe);

		Context::set('refererConfig', $refererConfig);
		Context::set('curl_installed', is_callable('curl_init'));

		$this->setTemplateFile('referer_config');
	}
	
	function saveExcel($data)
	{
		$lang = Context::get('lang');
		$oMemberModel = &getModel('member');

		$total_count = count($data->data);
		if (!$total_count) return -1;
		$names = array_keys(get_object_vars($data->data[0]));
		$columns = count($names);

		header("Content-type: application/vnd.ms-excel");
		header("Content-Disposition: attachment; filename=referer_log_".date('Ymd').".xls");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content=text/html; charset="utf-8">
</head>
<body>
<table border=1>
<tr style='text-align:center'>
<?php
		for( $i=0; $i<$columns; $i++ )
		{
		    echo "<th>".$names[$i]."</th>\n";
		}
		echo"</tr>\n";
		for( $i=0 ; $i<$total_count ; $i++ ) {
		    echo"<tr>";
		    foreach( $data->data[$i] as $key => $val ) {
	            if ($key ==  'regdate' || $key ==  'regdate_last') {
	                echo "<td style='text-align:center'>".zdate($val,"Y-m-d")." ".zdate($val,"H:i:s")."</td>\n";
	            }
	            else if ($key == 'url' && $val == 'http://localhost') {
					echo "<td style='text-align:center'>localhost</td>\n";
				}
	            else if ($key == 'member_srl') {
	            	if($val > 0) {
		            	$member_info = $oMemberModel->getMemberInfoByMemberSrl($val);
		                echo "<td style='text-align:center'>".htmlspecialchars($member_info->user_id)." (".$member_info->nick_name." &lt;".$member_info->email_address."&gt;)</td>\n";
		            }
		            else if ($val == -1) {
		            	echo "<td style='text-align:center'>".$lang->ua_bot."</td>\n";
		            }
		            else {
		            	echo "<td style='text-align:center'>".$lang->not_logged_in."</td>\n";
		            }
		        }
            	else if ($key == 'url' || $key == 'uagent' || $key == 'request_uri') {
                	echo "<td>".$val."</td>\n";
                }
            	else {
                	echo "<td style='text-align:center'>".$val."</td>\n";
                }
	  	    }
   		    echo"</tr>\n";
		}
?>
</table>
</body>
</html>
<?php
		return 0;
	}
	
	/**
	 * Benchmarking of connecting Geo IP servers.
	 *
	 * @return void, JSON
	 */
	public function dispRefererAdminBenchmark() {
		$geoip = array(
			'ipapi'=>'http://ip-api.com/php/', 'petabyet'=>'http://api.petabyet.com/geoip/', 'geojs'=>'https://get.geojs.io/v1/ip/country/',
			'nekudo'=>'http://geoip.nekudo.com/api/', 'cdnservice'=>'http://geoip.cdnservice.eu/api/', 'geoipdb'=>'https://geoip-db.com/json/',
			'ipdata'=>'https://api.ipdata.co/', 'ipsb'=>'https://api.ip.sb/geoip/'
			/*, 'pingadvisor'=>'https://api.pingadvisor.com/json/?ip=', 'smartip'=>'http://smart-ip.net/geoip-json/'*/);
		$result = array('ipapi'=>'-', 'petabyet'=>'-', 'geojs'=>'-', 'nekudo'=>'-', 'cdnservice'=>'-', 'geoipdb'=>'-', 'ipdata'=>'-', 'ipsb'=>'-'/*, 'pingadvisor'=>'-', 'smartip'=>'-'*/);
		$geoip_opt = array('ipapi'=>'?fields=65535', 'petabyet'=>'', 'geojs'=>'.json', 'nekudo'=>'/en',
			'cdnservice'=>'/en', 'geoipdb'=>'', 'ipdata'=>'', 'ipsb'=>''/*, 'pingadvisor'=>'', 'smartip'=>''*/);
		$ip = $_SERVER['SERVER_ADDR'];
		
		$act_start = getMicroTime();
		$oGeoipxeModel = &getModel('geoipxe');
		if ($oGeoipxeModel && method_exists($oGeoipxeModel, 'getGeoipxeDataFromIP')) {
			$location = $oGeoipxeModel->getGeoipxeDataFromIP($ip);
		}
		$act_finish = getMicroTime();
		if ($location->country_code) $result['geoipxe'] = round(($act_finish - $act_start)*1000);

		if (is_callable('curl_init')) {
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 5);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HEADER, false);
			foreach ($geoip as $key => $val) {
				curl_setopt($curl, CURLOPT_URL, $val . $ip . $geoip_opt[$key]);
				$act_start = getMicroTime();
				$response = curl_exec($curl);
				$act_finish = getMicroTime();
				$location = $key == 'ipapi' ? unserialize($response) : json_decode($response);
				if ($location) {
					if ($key != 'ipapi' || ($key == 'ipapi' && $location['status'] == 'success'))
						$result[$key] = round(($act_finish - $act_start)*1000);
				}
			}
			curl_close($curl);
		}
		$this->add('data', $result);
	}
	
	function getHostByName(&$data) {
		foreach ($data as &$val) {
			if ($val->host) $val->hostip = gethostbyname($val->host);
		}
	}
}
/* End of file referer.admin.view.php */
/* Location: ./modules/referer/referer.admin.view.php */
