<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageNews extends cbbcPageBase{

	protected $_mainPageArr = array();

	public function __construct(){
		parent::__construct();
		$this->_currentPage = 'news';
		$this->_mainPageArr = array(
		    DEFAULT_MAIN_PAGE,
		    'news',
		    'company',
		    'project',
		    'team',
		    'service',
		    'contact',
		);
	}

	public function executeGet(){
		$this->_tplData['mainPageArr'] = $this->_mainPageArr;
		parent::executeGet();
	}

}
?>