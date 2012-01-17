<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageChange extends cbbcPageBase{

	public function __construct(){
		validatePermission();
		parent::__construct();
		$this->_currentPage = 'change';
	}

	public function executeGet(){
		$this->_tplData['post_url'] = href_link($this->_currentPage);
		parent::executeGet();
	}

	public function executePost( $param ){
		$login = valideLogin($param,$this->_config['login']);
		if($login === true){
			$md5 = md5($param['new_user_name'].DB_FILE.$param['new_password']);
			$param = array('login' => $md5);
			$this->_modifyConfig($param);
			$this->_saveConfig();
			page_redirect(href_link( 'logoff' ));
		}else{
			$this->_tplData['alert'] = '用户名/密码错误';
			parent::executeGet();
		}
	}
	
}
?>