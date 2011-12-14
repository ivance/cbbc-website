<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageCompany extends cbbcPageBase{

	protected $_mainPageArr = array();

	public function __construct(){
		parent::__construct();
		$this->_currentPage = 'company';
	}

}
?>