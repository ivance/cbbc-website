<?php 
include 'configure.php';

if (!defined('ENVIRONMENT')) die();

include 'application_top.php';


$pageUrl = array(
	'/admin\/index.php\/login(\/*)$/i' => 'login',
	'/admin\/index.php\/logoff(\/*)$/i' => 'logoff',
	'/admin\/index.php\/change(\/*)$/i' => 'change',
	'/admin\/index.php\/common(\/*)$/i' => 'common',
	'/admin\/index.php\/home(\/*)$/i' => 'home',
	'/admin\/index.php\/company(\/*)$/i' => 'company',
	'/admin\/index.php\/project(\/*)$/i' => 'project',
	'/admin\/index.php\/team(\/*)$/i' => 'team',
	'/admin\/index.php\/partner(\/*)$/i' => 'partner',
	'/admin\/index.php\/service(\/*)$/i' => 'service',
	'/admin\/index.php\/contact(\/*)$/i' => 'contact',
);

$result = router($pageUrl,$_SERVER['REQUEST_URI']);

switch ($result){
	case ROUTER_STATUS_NO_MATCH:
		page_redirect(href_link(DEFAULT_MAIN_PAGE));
		break;
	
	case ROUTER_STATUS_FILE_ERROR:
		die('file error');
		break;
			
	case ROUTER_STATUS_SUCCESS:
		die();
		break;

	default:
		die();
}
?>