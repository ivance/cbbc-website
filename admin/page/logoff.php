<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageLogoff extends cbbcPageBase{

	public function __construct(){
		parent::__construct();
		$this->_currentPage = 'logoff';
	}

	public function executeGet(){
		$this->_tplData['post_url'] = href_link($this->_currentPage);
		session_destroy();
		page_redirect(href_link( 'login' ));
	}
	
}
?>