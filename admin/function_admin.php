<?php 

if (!defined('ENVIRONMENT')) die('Illegal Access');

function page_redirect( $url ){
	Header('Location:'.$url );
}

function href_link( $main_page ){
	$url = HTTP_SERVER.'index.php/'.$main_page;
	return $url;
}

function router($pageUrl,$url){
	$status = ROUTER_STATUS_NO_MATCH;
	foreach($pageUrl as $pattern => $currentPage){
		$match = preg_match( $pattern, $url, $matches);

		if($match == 1){
			$status = ROUTER_STATUS_SUCCESS;
			$className = PAGE_CLASS_NAME_PREFIX.ucwords($currentPage);
			
			if(file_exists( DIR_PAGE.$currentPage.'.php' )){
				include( DIR_PAGE.$currentPage.'.php' );
			}

			if (class_exists($className)) {
				$page = new $className();

				if(!empty($_POST)){
					$page->executePost();
				}else{
					$page->executeGet();
				}
				
			}else{
				$status = ROUTER_STATUS_FILE_ERROR;
			}

			break;
		}
	}

	return $status;
}
?>