<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

class cbbcPageBase{
	protected $_currentPage = '';
	protected $_homeUrl = '';
	protected $_tplData = '';

	protected function _render(){
		extract($this->_tplData,EXTR_PREFIX_ALL,'tpl');

		if(file_exists( DIR_TEMPLATE_COMMON.'html_page.php' )){
			include( DIR_TEMPLATE_COMMON.'html_page.php' );
		}
	}

	public function __construct(){
		$this->_tplData = array();
		$this->_homeUrl = href_link(DEFAULT_MAIN_PAGE);
		$this->_currentPage = DEFAULT_MAIN_PAGE;
	}

	public function executeGet(){
		$this->_tplData['homeUrl'] = $this->_homeUrl;
		$this->_tplData['currentPage'] = $this->_currentPage;
		$this->_render();
	}

	public function executePost( $param ){
		$this->executeGet();
	}
}
?>