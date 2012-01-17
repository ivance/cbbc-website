<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageLogin extends cbbcPageBase{

	public function __construct(){
		alreadylogin();
		parent::__construct();
		$this->_currentPage = 'login';
	}

	public function executeGet(){
		$this->_tplData['post_url'] = href_link($this->_currentPage);
		parent::executeGet();
	}

	public function executePost( $param ){
		$login = valideLogin($param,$this->_config['login']);
		if($login === true){
			$_SESSION['user_name'] = $param['user_name'];
			page_redirect(href_link( 'common' ));
		}else{
			$this->_tplData['alert'] = '用户名/密码错误';
			parent::executeGet();
		}
	}
	
}
?>