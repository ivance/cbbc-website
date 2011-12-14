<?php 

if (!defined('ENVIRONMENT')) die('Illegal Access');

function page_redirect( $url ){
	Header('Location:'.$url );
}

function href_link( $main_page ){
	$url = HTTP_SERVER.'/index.php/'.$main_page;
	return $url;
}

function get_file_position( $dir , $file ){
	$pos = $dir.'/'.$file;
	if(file_exists($pos)){
		return $pos;
	}else{
		return false;
	}
}

function router($pageUrl,$url){
	$status = ROUTER_STATUS_NO_MATCH;
	foreach($pageUrl as $pattern => $currentPage){
		$match = preg_match( $pattern, $url, $matches);

		if($match == 1){
			$status = ROUTER_STATUS_SUCCESS;

			$filePos = get_file_position(DIR_PAGE,$currentPage.'.php');
			$className = PAGE_CLASS_NAME_PREFIX.ucwords($currentPage);

			if($filePos !== false){
				include($filePos);
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