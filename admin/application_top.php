<?php

if (!defined('ENVIRONMENT')) die('Illegal Access');

include 'function_admin.php';
include_once 'define.php';

if (defined('ENVIRONMENT')){
	switch (ENVIRONMENT){
		case 'development':
			error_reporting(E_ALL);
			break;
	
		case 'testing':
			error_reporting(0);
			break;
			
		case 'production':
			error_reporting(0);
			break;

		default:
			exit('The application environment is not set correctly.');
	}
}
?>