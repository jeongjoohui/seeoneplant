<?php
/**
 * @class  referer
 * @author haneul (haneul0318@gmail.com)
 * @enhanced by KnDol (kndol@kndol.net)
 * @brief  referer module's class 
 **/
class referer extends ModuleObject {
	/**
	 * constructor
	 *
	 * @return void
	 */
	function referer()
	{
	}

	/**
	 * @brief Install referer module 
	 **/
	function moduleInstall() {
		return $this->createObject();
	}

	function getColumnLength(&$oDB, $table) {
		$len = 0;
		$table = $oDB->prefix . $table;
		switch($oDB->db_type)
		{
			case 'mysql':
			case 'mysql_innodb':
			case 'mysqli':
			case 'mysqli_innodb':
			case 'mssql':
				$query = "SELECT character_maximum_length FROM information_schema.columns WHERE table_name LIKE '%".$table."%' AND column_name LIKE '%remote%'";
				$output = $oDB->_query($query);
				$output = $oDB->_fetch($output);
				if (is_array($output)) {
					// MariaDB 대응
					$query = "SELECT character_maximum_length FROM information_schema.columns WHERE TABLE_SCHEMA = '".$oDB->master_db['db_database']."' AND table_name LIKE '%".$table."%' AND column_name LIKE '%remote%'";
					$output = $oDB->_query($query);
					$output = $oDB->_fetch($output);
				}
				$len = $output->character_maximum_length;
				break;
			case 'cubrid':
				$query = "SELECT prec FROM db_attribute WHERE class_name = \"".$table."\" AND attr_name = \"remote\"";
debugPrint($query);
				$output = $oDB->_query($query);
				$output = $oDB->_fetch($output);
debugPrint($output);
				$len = $output->prec;
				break;
		}
		return $len;
	}

	function changeColumnLength(&$oDB, $table) {
		$query = "";
		if($this->getColumnLength($oDB, $table) != 40) {
			$table = $oDB->prefix . $table;
			switch($oDB->db_type)
			{
				case 'mysql':
				case 'mysql_innodb':
				case 'mysqli':
				case 'mysqli_innodb':
					$query = "ALTER TABLE `".$table."` MODIFY COLUMN `remote` VARCHAR(40)";
					break;
				case 'mssql':
					$query = "ALTER TABLE ".$table." ALTER COLUMN remote varchar(40)";
					break;
				case 'cubrid':
					$query = "ALTER TABLE \"".$table."\" change \"remote\" \"remote\" VARCHAR(40)";
					break;
			}
			$output = $oDB->_query($query);
		}
	}

	/**
	 * @brief 컬럼 속성에 notnull 및 기본값 추가
	 **/
	function changeRefDocumentSrlColumnToMinus(&$oDB) {
		$args = (object)array();
		$args->ref_document_srl = -1;
		$oDB->executeQuery('referer.updateRefererLogDocumentSrlIfNull', $args);
		$oDB->executeQuery('referer.updateRefererLogDocumentSrlIfZero', $args);
		$oDB->executeQuery('referer.updateRefererPageStatisticsDocumentSrlIfNull', $args);
		$oDB->executeQuery('referer.updateRefererPageStatisticsDocumentSrlIfZero', $args);

		switch($oDB->db_type)
		{
			case 'mysql':
			case 'mysql_innodb':
			case 'mysqli':
			case 'mysqli_innodb':
				$query = "ALTER TABLE `".$oDB->prefix."referer_log` MODIFY COLUMN `ref_document_srl` BIGINT(11) NOT NULL DEFAULT -1;";
				$output = $oDB->_query($query);
				$oDB->_fetch($output);
				$query = "ALTER TABLE `".$oDB->prefix."referer_page_statistics` MODIFY COLUMN `ref_document_srl` BIGINT(11) NOT NULL DEFAULT -1;";
				$output = $oDB->_query($query);
				$oDB->_fetch($output);
				break;
			case 'mssql':
				$query = "ALTER TABLE ".$oDB->prefix."referer_log ALTER COLUMN ref_document_srl INT(11) NOT NULL DEFAULT -1;";
				$output = $oDB->_query($query);
				$oDB->_fetch($output);
				$query = "ALTER TABLE ".$oDB->prefix."referer_page_statistics ALTER COLUMN ref_document_srl INT(11) NOT NULL DEFAULT -1;";
				$output = $oDB->_query($query);
				$oDB->_fetch($output);
				break;
			case 'cubrid':
				$query = "ALTER TABLE \"".$oDB->prefix."referer_log\" CHANGE \"ref_document_srl\" INTEGER(11) NOT NULL DEFAULT -1;";
				$output = $oDB->_query($query);
				$oDB->_fetch($output);
				$query = "ALTER TABLE \"".$oDB->prefix."referer_page_statistics\" CHANGE \"ref_document_srl\" INTEGER(11) NOT NULL DEFAULT -1;";
				$output = $oDB->_query($query);
				$oDB->_fetch($output);
				break;
		}
	}

	/**
	 * @brief 인덱스 삭제
	 **/
	function dropIndex($table, $index, $is_unique = false) {
 		$oDB = &DB::getInstance();
		if ($oDB->isIndexExists($table, $index)) $oDB->dropIndex($table, $index, $is_unique);
	}

	/**
	 * @brief 기본키 추가
	 **/
	function addPrimaryKey($table_name, $target_columns) {
 		$oDB = &DB::getInstance();
 		if(!is_array($target_columns)) $target_columns = array($target_columns);
		switch($oDB->db_type)
		{
			case 'mysql':
			case 'mysql_innodb':
			case 'mysqli':
			case 'mysqli_innodb':
				$query = "ALTER TABLE `".$oDB->prefix.$table_name."` ADD PRIMARY KEY (`".implode('`,`', $target_columns)."`);";
				break;
			case 'mssql':
				$query = "ALTER TABLE ".$oDB->prefix.$table_name." ADD CONSTRAINT PRIMARY PRIMARY KEY (".implode(',', $target_columns).")";
				break;
			case 'cubrid':
				$query = "ALTER TABLE \"".$oDB->prefix.$table_name."\" ADD CONSTRAINT \"PRIMARY\" PRIMARY KEY (\"".implode('\",\"', $target_columns)."\")";
				break;
		}
		$output = $oDB->_query($query);
	}

	/**
	 * @brief 설치가 이상이 없는지 체크하는 method
	 **/
	function checkUpdate() {
 		$oDB = &DB::getInstance();
		
		if(!$oDB->isTableExists("referer_log")) return true;
		if(!$oDB->isTableExists("referer_statistics")) return true;
		if(!$oDB->isTableExists("referer_remote_statistics")) return true;
		if(!$oDB->isTableExists("referer_user_statistics")) return true;
		if(!$oDB->isTableExists("referer_page_statistics")) return true;
		if(!$oDB->isTableExists("referer_country_statistics")) return true;
		if(!$oDB->isTableExists("referer_uagent_statistics")) return true;

		if(!$oDB->isColumnExists("referer_log", "idx")) return true;
		if(!$oDB->isColumnExists("referer_log", "remote")) return true;
		if(!$oDB->isColumnExists("referer_log", "member_srl")) return true;
		if(!$oDB->isColumnExists("referer_log", "request_uri")) return true;
		if(!$oDB->isColumnExists("referer_log", "ref_mid")) return true;
		if(!$oDB->isColumnExists("referer_log", "ref_document_srl")) return true;
		if(!$oDB->isColumnExists("referer_log", "country_code")) return true;

		if($oDB->isColumnExists("referer_statistics", "idx")) return true;
		if($oDB->isColumnExists("referer_remote_statistics", "idx")) return true;
		if($oDB->isColumnExists("referer_country_statistics", "idx")) return true;
		if($oDB->isColumnExists("referer_user_statistics", "idx")) return true;
		if($oDB->isColumnExists("referer_page_statistics", "idx")) return true;
		if($oDB->isColumnExists("referer_uagent_statistics", "idx")) return true;

		if($oDB->isColumnExists("referer_remote_statistics", "country_code")) return true;

		if($oDB->isIndexExists("referer_log", "unique_referer_log")) return true;
		if($oDB->isIndexExists("referer_log", "idx_regdate")) return true;
		if($oDB->isIndexExists("referer_statistics", "unique_host")) return true;
		if($oDB->isIndexExists("referer_statistics", "idx_host_count")) return true;
		if($oDB->isIndexExists("referer_remote_statistics", "unique_remote")) return true;
		if($oDB->isIndexExists("referer_remote_statistics", "idx_remote_count")) return true;
		if($oDB->isIndexExists("referer_country_statistics", "unique_country_srl")) return true;
		if($oDB->isIndexExists("referer_country_statistics", "idx_country_count")) return true;
		if($oDB->isIndexExists("referer_user_statistics", "unique_country_srl")) return true;
		if($oDB->isIndexExists("referer_user_statistics", "idx_country_count")) return true;
		if($oDB->isIndexExists("referer_page_statistics", "unique_page")) return true;
		if($oDB->isIndexExists("referer_page_statistics", "idx_page_count")) return true;
		if($oDB->isIndexExists("referer_uagent_statistics", "unique_uagent")) return true;
		if($oDB->isIndexExists("referer_uagent_statistics", "idx_uagent_count")) return true;

		if (!$oDB->isIndexExists("referer_statistics", "PRIMARY")) return true;
		if (!$oDB->isIndexExists("referer_remote_statistics", "PRIMARY")) return true;
		if (!$oDB->isIndexExists("referer_country_statistics", "PRIMARY")) return true;
		if (!$oDB->isIndexExists("referer_user_statistics", "PRIMARY")) return true;
		if (!$oDB->isIndexExists("referer_page_statistics", "PRIMARY")) return true;
		if (!$oDB->isIndexExists("referer_uagent_statistics", "PRIMARY")) return true;

		if($this->getColumnLength($oDB, "referer_log") != 40) return true;
		if($this->getColumnLength($oDB, "referer_remote_statistics") != 40) return true;
		if($oDB->executeQuery("referer.getRefererLogDocumentSlrColumnsNullCount")->data->count > 0) return true;
		if($oDB->executeQuery("referer.getRefererLogDocumentSlrColumnsZeroCount")->data->count > 0) return true;
		if($oDB->executeQuery("referer.getPageStatisticsDocumentSlrColumnsNullCount")->data->count > 0) return true;
		if($oDB->executeQuery("referer.getPageStatisticsDocumentSlrColumnsZeroCount")->data->count > 0) return true;

		return false;
	}

	/**
	 * @brief 업데이트 실행
	 **/
	function moduleUpdate() {
		$oDB = &DB::getInstance();

		// referer_log에 인덱스가 없는 경우 테이블 새로 생성해야 함
		if(!$oDB->isColumnExists("referer_log", "idx")) $oDB->DropTable("referer_log");

		if(!$oDB->isTableExists("referer_log"))					$oDB->createTableByXmlFile($this->module_path.'schemas/referer_log.xml');
		if(!$oDB->isTableExists("referer_statistics"))			$oDB->createTableByXmlFile($this->module_path.'schemas/referer_statistics.xml');
		if(!$oDB->isTableExists("referer_remote_statistics"))	$oDB->createTableByXmlFile($this->module_path.'schemas/referer_remote_statistics.xml');
		if(!$oDB->isTableExists("referer_country_statistics"))	$oDB->createTableByXmlFile($this->module_path.'schemas/referer_country_statistics.xml');
		if(!$oDB->isTableExists("referer_user_statistics"))		$oDB->createTableByXmlFile($this->module_path.'schemas/referer_user_statistics.xml');
		if(!$oDB->isTableExists("referer_page_statistics"))		$oDB->createTableByXmlFile($this->module_path.'schemas/referer_page_statistics.xml');
		if(!$oDB->isTableExists("referer_uagent_statistics"))	$oDB->createTableByXmlFile($this->module_path.'schemas/referer_uagent_statistics.xml');

		if ($oDB->isColumnExists("referer_statistics", "idx")) 			$oDB->dropColumn("referer_statistics", "idx");
		if ($oDB->isColumnExists("referer_remote_statistics", "idx"))	$oDB->dropColumn("referer_remote_statistics", "idx");
		if ($oDB->isColumnExists("referer_country_statistics", "idx"))	$oDB->dropColumn("referer_country_statistics", "idx");
		if ($oDB->isColumnExists("referer_user_statistics", "idx"))		$oDB->dropColumn("referer_user_statistics", "idx");
		if ($oDB->isColumnExists("referer_page_statistics", "idx"))		$oDB->dropColumn("referer_user_statistics", "idx");
		if ($oDB->isColumnExists("referer_uagent_statistics", "idx"))	$oDB->dropColumn("referer_uagent_statistics", "idx");

		if ($oDB->isColumnExists("referer_remote_statistics", "country_code"))	$oDB->dropColumn("referer_remote_statistics", "country_code");

		$this->dropIndex("referer_log", "unique_referer_log", true);
		$this->dropIndex("referer_log", "idx_regdate");
		$this->dropIndex("referer_statistics", "unique_host", true);
		$this->dropIndex("referer_statistics", "idx_host_count");
		$this->dropIndex("referer_remote_statistics", "unique_remote", true);
		$this->dropIndex("referer_remote_statistics", "idx_remote_count");
		$this->dropIndex("referer_country_statistics", "unique_country_srl", true);
		$this->dropIndex("referer_country_statistics", "idx_country_count");
		$this->dropIndex("referer_user_statistics", "unique_country_srl", true);
		$this->dropIndex("referer_user_statistics", "idx_country_count");
		$this->dropIndex("referer_page_statistics", "unique_page", true);
		$this->dropIndex("referer_page_statistics", "idx_page_count");
		$this->dropIndex("referer_uagent_statistics", "unique_uagent", true);
		$this->dropIndex("referer_uagent_statistics", "idx_uagent_count");

		if (!$oDB->isIndexExists("referer_statistics", "PRIMARY"))			$this->addPrimaryKey("referer_statistics", "host");
		if (!$oDB->isIndexExists("referer_remote_statistics", "PRIMARY"))	$this->addPrimaryKey("referer_statistics", "remote");
		if (!$oDB->isIndexExists("referer_country_statistics", "PRIMARY"))	$this->addPrimaryKey("referer_country_statistics", "country_code");
		if (!$oDB->isIndexExists("referer_user_statistics", "PRIMARY"))		$this->addPrimaryKey("referer_user_statistics", "member_srl");
		if (!$oDB->isIndexExists("referer_page_statistics", "PRIMARY"))		$this->addPrimaryKey("referer_page_statistics", array("ref_mid", "ref_document_srl"));
		if (!$oDB->isIndexExists("referer_uagent_statistics", "PRIMARY"))	$this->addPrimaryKey("referer_uagent_statistics", "uagent");

		if(!$oDB->isColumnExists("referer_log", "member_srl"))					$oDB->addColumn("referer_log", "member_srl", 'number', 11);
		if(!$oDB->isColumnExists("referer_log", "request_uri"))					$oDB->addColumn("referer_log", "request_uri", 'varchar', 250);
		if(!$oDB->isColumnExists("referer_log", "ref_mid"))						$oDB->addColumn("referer_log", "ref_mid", 'varchar', 40);
		if(!$oDB->isColumnExists("referer_log", "ref_document_srl"))			$oDB->addColumn("referer_log", "ref_document_srl", 'number', 11, -1, true);
		if(!$oDB->isColumnExists("referer_log", "country_code"))				$oDB->addColumn("referer_log", "country_code", 'char', 2);

		if($oDB->isColumnExists("referer_remote_statistics", "country_code"))	$oDB->dropColumn("referer_remote_statistics", "country_code");

		if($oDB->isIndexExists("referer_log","primary_key"))						$oDB->dropIndex("referer_log","primary_key");
		if($oDB->isIndexExists("referer_statistics","primary_key"))					$oDB->dropIndex("referer_statistics","primary_key");
		if($oDB->isIndexExists("referer_statistics","idx_host_count"))				$oDB->dropIndex("referer_statistics","idx_host_count");
		if($oDB->isIndexExists("referer_remote_statistics","primary_key"))			$oDB->dropIndex("referer_remote_statistics","primary_key");
		if($oDB->isIndexExists("referer_remote_statistics","idx_remote_count"))		$oDB->dropIndex("referer_remote_statistics","idx_remote_count");
		if($oDB->isIndexExists("referer_country_statistics","primary_key"))			$oDB->dropIndex("referer_country_statistics","primary_key");
		if($oDB->isIndexExists("referer_country_statistics","idx_country_count"))	$oDB->dropIndex("referer_country_statistics","idx_country_count");
		if($oDB->isIndexExists("referer_user_statistics","primary_key"))			$oDB->dropIndex("referer_user_statistics","primary_key");
		if($oDB->isIndexExists("referer_user_statistics","idx_user_count"))			$oDB->dropIndex("referer_user_statistics","idx_user_count");
		if($oDB->isIndexExists("referer_page_statistics","primary_key"))			$oDB->dropIndex("referer_page_statistics","primary_key");
		if($oDB->isIndexExists("referer_page_statistics","idx_page_count"))			$oDB->dropIndex("referer_page_statistics","idx_page_count");
		if($oDB->isIndexExists("referer_uagent_statistics","primary_key"))			$oDB->dropIndex("referer_uagent_statistics","primary_key");
		if($oDB->isIndexExists("referer_uagent_statistics","idx_uagent_count"))		$oDB->dropIndex("referer_uagent_statistics","idx_uagent_count");
		

		$this->changeColumnLength($oDB, "referer_log");
		$this->changeColumnLength($oDB, "referer_remote_statistics");
		if($oDB->executeQuery("referer.getRefererLogDocumentSlrColumnsNullCount")->data->count
			|| $oDB->executeQuery("referer.getRefererLogDocumentSlrColumnsZeroCount")->data->count
			|| $oDB->executeQuery("referer.getPageStatisticsDocumentSlrColumnsNullCount")->data->count
			|| $oDB->executeQuery("referer.getPageStatisticsDocumentSlrColumnsZeroCount")->data->count
		) $this->changeRefDocumentSrlColumnToMinus($oDB);

		return $this->createObject(0, 'success_updated');
	}

	/**
	 * @brief 삭제시 동작
	 */
	function moduleUninstall() {
		$oDB = &DB::getInstance();

		$oDB->DropTable("referer_log");
		$oDB->DropTable("referer_statistics");
		$oDB->DropTable("referer_remote_statistics");
		$oDB->DropTable("referer_uagent_statistics");
		$oDB->DropTable("referer_user_statistics");
		$oDB->DropTable("referer_page_statistics");
		$oDB->DropTable("referer_country_statistics");
	}

	/**
	 * @brief 캐시 파일 재생성
	 **/
	function recompileCache() {
	}

	/**
	 * 유틸리티 함수들
	 **/	
	function getMemberSrlFromUserID($user_id) {
		if ($user_id == '_Bots_') {
			$member_srl = -1;
		}
		else if ($user_id == '_Not_Logined_') {
			$member_srl = 0;
		}
		else {
			$oMemberModel = &getModel('member');
			$member_info = $oMemberModel->getMemberInfoByUserID($user_id);
			$member_srl = $member_info->member_srl;
		}
		return $member_srl;
	}

	function getUserIDFromMemberSrl($member_srl) {
		if ($member_srl == -1) {
			$user_id = '_Bots_';
		}
		else if ($member_srl == 0) {
			$user_id = '_Not_Logined_';
		}
		else {
			$oMemberModel = &getModel('member');
			$member_info = $oMemberModel->getMemberInfoByMemberSrl($member_srl);
			$user_id = $member_info->user_id;
		}
		return $user_id;
	}

	function getUserStringFromMemberSrl($member_srl, $href="", $title="") {
		$lang = Context::get('lang');

		if ($href) $user = '<a href="' . $href . '" title="'.$title.'">'.$user.'</a>';

		if ($member_srl == -1) {
			$user = $lang->ua_bot;
			if ($href) $user = '<a href="' . $href . '" title="'.$title.'">'.$user.'</a>';
		}
		else if ($member_srl == 0) {
			$user = $lang->not_logged_in;
			if ($href) $user = '<a href="' . $href . '" title="'.$title.'">'.$user.'</a>';
		}
		else {
			$oMemberModel = &getModel('member');
			$member_info = $oMemberModel->getMemberInfoByMemberSrl($member_srl);
			$user = $member_info->user_id;
			if ($href) $user = '<a href="' . $href . '" title="'.$title.'">'.$user.'</a>';
			if ($member_info->nick_name!=''||$member_info->email_address!='') {
				$user .= " (";
				if ($member_info->nick_name!='')
					$user .= $member_info->nick_name;
				if($member_info->email_address!='')
					$user .= ' &lt;<a href="mailto:' . $member_info->email_address . '">' . $member_info->email_address . '</a>&gt';
				$user .= ")";
			}
		}
		return $user;
	}

	/**
	 * XE 버전에 따라 Object, BaseObject 클래스 호환성을 보장하기 위한 메소드.
	 */
	public function createObject($error = 0, $message = 'success')
	{
		return class_exists('BaseObject') ? new BaseObject($error, $message) : new Object($error, $message);
	}
}
/* End of file referer.class.php */
/* Location: ./modules/referer/referer.class.php */
