<?php 

if (!defined('ENVIRONMENT')) die('Illegal Access');

function page_redirect( $url ){
	Header('Location:'.$url );
}

function href_link( $main_page ){
	$url = HTTP_SERVER.'/index.php?main_page='.$main_page;
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
?>