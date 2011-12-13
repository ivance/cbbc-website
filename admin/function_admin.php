<?php 

function page_redirect( $url ){
	Header('Location:'.$url );
}

function href_link( $main_page ){
	$url = HTTP_URL_BASE.'/index.php?main_page='.$main_page;
	return $url;
}
?>