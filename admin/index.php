<?php 

include 'application_top.php';

$currentPage = $_GET['main_page'];

if(!in_array($currentPage,$mainPageArr)){
  page_redirect(href_link(DEFAULT_MAIN_PAGE));
}

$home_url = href_link(DEFAULT_MAIN_PAGE);

include 'html_page.php';
?>