<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageTeam extends cbbcPageBase{

	public function __construct(){
		validatePermission();
		parent::__construct();
		$this->_currentPage = 'team';
	}

	public function executeGet(){
		$this->_tplData['post_url'] = href_link($this->_currentPage);
		parent::executeGet();
	}
	
}
?>