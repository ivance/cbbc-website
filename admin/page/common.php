<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageCommon extends cbbcPageBase{

	public function __construct(){
		parent::__construct();
		$this->_currentPage = 'Common';
	}

	public function executeGet(){
		$this->_tplData['post_url'] = href_link($this->_currentPage);
		parent::executeGet();
	}
	
}
?>