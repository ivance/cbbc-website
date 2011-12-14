<?php 
include 'configure.php';

if (!defined('ENVIRONMENT')) die();

include 'application_top.php';


$pageUrl = array(
	'/admin\/index.php\/home(\/*)$/i' => 'home',
	'/admin\/index.php\/news(\/*)$/i' => 'news',
);

$result = router($pageUrl,$_SERVER['REQUEST_URI']);

switch ($result){
	case ROUTER_STATUS_NO_MATCH:
		page_redirect(href_link(DEFAULT_MAIN_PAGE));
		break;
	
	case ROUTER_STATUS_FILE_ERROR:
		die();
		break;
			
	case ROUTER_STATUS_SUCCESS:
		die();
		break;

	default:
		die();
}
?>