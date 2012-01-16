<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include_once 'base.php';

class cbbcPageProject extends cbbcPageBase{

	public function __construct(){
		parent::__construct();
		$this->_currentPage = 'project';
	}

	public function executeGet(){
		$this->_tplData['post_url'] = href_link($this->_currentPage);
		parent::executeGet();
	}

	public function executePost( $param ){

		if(is_array($this->_config['project_list'])){
			$project_list = $this->_config['project_list'];
			krsort($project_list,SORT_NUMERIC);
			$first = each($project_list);
			$projectMaxID = $first['key'];
		}else{
			$projectMaxID = 0;
		}

		if(isset($param['project_save']) && $param['project_save'] == 'new'){
			$newProject = array(
				'title' => $param['project_title'],
				'pic' => $param['project_pic'],
				'type' => $param['project_type'],
				'area' => $param['project_area'],
				'time' => $param['project_time'],
			);
			$this->_config['project_list'][$projectMaxID+1] = $newProject;
		}elseif(isset($param['project_save'])){
			$saveId = $param['project_save'];
			$this->_config['project_list'][$saveId]['title'] = $param['project_title_'.$saveId];
			$this->_config['project_list'][$saveId]['pic'] = $param['project_pic_'.$saveId];
			$this->_config['project_list'][$saveId]['type'] = $param['project_type_'.$saveId];
			$this->_config['project_list'][$saveId]['area'] = $param['project_area_'.$saveId];
			$this->_config['project_list'][$saveId]['time'] = $param['project_time_'.$saveId];
		}elseif(isset($param['project_delete'])){
			$saveId = $param['project_delete'];
			unset($this->_config['project_list'][$saveId]);
		}

		$param = array();
		parent::executePost( $param );
	}
	
}
?>