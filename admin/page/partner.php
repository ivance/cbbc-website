<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPagePartner extends cbbcPageBase{

	public function __construct(){
		validatePermission();
		parent::__construct();
		$this->_currentPage = 'partner';
	}

	public function executeGet(){
		$this->_tplData['post_url'] = href_link($this->_currentPage);
		parent::executeGet();
	}

	public function executePost( $param ){

		if(is_array($this->_config['partner_list'])){
			$partner_list = $this->_config['partner_list'];
			krsort($partner_list,SORT_NUMERIC);
			$first = each($partner_list);
			$partnerMaxID = $first['key'];
		}else{
			$partnerMaxID = 0;
		}

		if(isset($param['partner_save']) && $param['partner_save'] == 'new'){
			$newProject = array(
				'pic' => $param['partner_pic'],
				'text' => $param['partner_text'],
			);
			$this->_config['partner_list'][$partnerMaxID+1] = $newProject;
		}elseif(isset($param['partner_save'])){
			$saveId = $param['partner_save'];
			$this->_config['partner_list'][$saveId]['pic'] = $param['partner_pic_'.$saveId];
			$this->_config['partner_list'][$saveId]['text'] = $param['partner_text_'.$saveId];
		}elseif(isset($param['partner_delete'])){
			$saveId = $param['partner_delete'];
			unset($this->_config['partner_list'][$saveId]);
		}

		foreach($param as $key => $value){
			if(strpos($key,'team') === false){
				unset($param[$key]);
			}
		}

		$param = array();
		parent::executePost( $param );
	}
	
}
?>