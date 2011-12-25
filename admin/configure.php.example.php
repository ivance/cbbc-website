<?php

define( 'ENVIRONMENT' , 'development' );

define( 'DEFAULT_MAIN_PAGE' , 'home' );
define( 'PAGE_CLASS_NAME_PREFIX' , 'cbbcPage' );

//define( 'HTTP_SERVER' , 'http://localhost/cbbc-website/admin' );
define( 'HTTP_SERVER' , 'http://localhost:8888/cbbc-website/admin/' );
//define( 'DIR_PROJ' , 'D:\xampp\htdocs\cbbc-website\admin\\' );
define( 'DIR_PROJ' , '/Users/ivance/htdocs/cbbc-website/admin/' );

define( 'HTTP_RESOURCE_PATH' , HTTP_SERVER.'resource/' );
define( 'DIR_PAGE' , DIR_PROJ.'page/' );
define( 'DIR_TEMPLATE' , DIR_PROJ.'template/' );
define( 'DIR_TEMPLATE_COMMON' , DIR_TEMPLATE.'common/' );
define( 'DIR_TEMPLATE_LAYOUT' , DIR_TEMPLATE.'layout/' );
define( 'DIR_TEMPLATE_MODEL' , DIR_TEMPLATE.'model/' );

?>
