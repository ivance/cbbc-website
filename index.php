<?php
define( 'DB_FILE' , 'b9aa273080c55d3a83936427d2a97fe6' );

if(!isset($_GET['main_page']) || $_GET['main_page'] == ''){
	$page = 'home';
}else{
	$page = $_GET['main_page'];
}

$file = 'html/'.$page.'.php';

if(file_exists('./'.DB_FILE)){
	$content = file_get_contents('./'.DB_FILE);
}else{
	exit();
}

$config = json_decode($content);

if(file_exists($file)){
	include($file);
}else{
	include('html/home.php');
}
?>