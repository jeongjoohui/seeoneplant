<?php
	if(!defined("__XE__")) exit();

	/**
	 * @file referer.addon.php 
	 * @author haneul (haneul0318@gmail.com)
	 * @editer Wincomi (wincomi@wincomi.com)
	 * @enhanced by KnDol (kndol@kndol.net)
	 **/

	// called_position가 before_module_init 이고 module이 admin이 아닐 경우
	if($called_position == 'before_module_init' && Context::get('module') != 'admin' && !$GLOBALS['__referer_addon_called__']
		/*&& Context::getResponseMethod() == 'HTML'*/ && Context::isInstalled() && !preg_match("/\.(jpg|gif|png|js|css)$/", $_SERVER['REQUEST_URI']))
	{
		$GLOBALS['__referer_addon_called__'] = true;

		// 리퍼러 모듈이 정상적으로 설치되어 있는지 검사
		// 리퍼러 모듈 3.8.0 이전 버전에서는 isBot 함수가 없으므로 사이트가 정상적으로 나오게 그냥 리턴
		$oRefererModel = &getModel('referer');
		if(!$oRefererModel || !method_exists($oRefererModel, 'isBot')) return;
		$oController = &getController('referer');
		if(!$oController || !method_exists($oController, 'procRefererExecute')) return;

		$oController->procRefererExecute();
	}
/* End of file referer.addon.php */
/* Location: ./addons/referer/referer.addon.php */
