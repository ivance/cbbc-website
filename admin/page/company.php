<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageCompany extends cbbcPageBase{

	public function __construct(){
		validatePermission();
		parent::__construct();
		$this->_currentPage = 'company';
	}

	public function executeGet(){
		$this->_tplData['post_url'] = href_link($this->_currentPage);
		parent::executeGet();
	}
	
}
?>