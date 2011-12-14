<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

class cbbcPageBase{
	protected $_currentPage = '';
	protected $_homeUrl = '';
	protected $_tplData = '';

	protected function _render(){
		$tplFile = get_file_position(DIR_TEMPLATE,'common/html_page.php');
		if($tplFile !== false){
			extract($this->_tplData,EXTR_PREFIX_ALL,'tpl');
			require $tplFile;
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