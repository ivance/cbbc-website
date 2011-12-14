<?php 
include 'configure.php';

if (!defined('ENVIRONMENT')) die();

include 'application_top.php';

$currentPage = $_GET['main_page'];
$filePos = get_file_position(DIR_PAGE,$currentPage.'.php');
$className = PAGE_CLASS_NAME_PREFIX.ucwords($currentPage);

if($filePos === false){
  if($currentPage == DEFAULT_MAIN_PAGE){
  	die();
  }else{
  	page_redirect(href_link(DEFAULT_MAIN_PAGE));
  }
}

include($filePos);

if (class_exists($className)) {
	$page = new $className();

	if(!empty($_POST)){
		$page->executePost();
	}else{
		$page->executeGet();
	}
}
?>