<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageNews extends cbbcPageBase{

	public function __construct(){
		parent::__construct();
		$this->_currentPage = 'news';
	}

}
?>