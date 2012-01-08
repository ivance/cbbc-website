<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

class cbbcPageBase{
	protected $_currentPage = '';
	protected $_homeUrl = '';
	protected $_tplData = '';
	protected $_config = array();
	protected $_alert = '';
	protected $_configCol = array(
		'news_link','blog_link','platform_link','sina_link',
		);

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
		$this->_config = $this->_readConfig();
	}

	public function executeGet(){
		$this->_tplData['homeUrl'] = $this->_homeUrl;
		$this->_tplData['currentPage'] = $this->_currentPage;
		$this->_tplData['config'] = $this->_config;
		if(isset($this->_alert) && $this->_alert != ''){
			$this->_tplData['alert'] = $this->_alert;
		}
		$this->_render();
	}

	public function executePost( $param ){
		$this->_modifyConfig($param);
		$this->_saveConfig();
		$this->executeGet();
	}

	protected function _readConfig(){
		if(file_exists('../'.DB_FILE)){
			$content = file_get_contents('../'.DB_FILE);
		}else{
			exit();
		}
		$content = json_decode($content,true);

		if($content){
			return $content;
		}else{
			return false;
		}
	}

	protected function _modifyConfig($param){
		foreach($this->_configCol as $col){
			if(isset($param[$col])){
				$this->_config[$col] = $param[$col];
			}
		}
	}

	protected function _saveConfig(){
		if(file_exists('../'.DB_FILE)){
			$content = json_encode($this->_config);
			$f = fopen('../'.DB_FILE, "w");
			fwrite($f, $content);
			fclose($f);
			$this->_alert = '配置保存成功.';
		}else{
			exit();
		}
	}
}
?>