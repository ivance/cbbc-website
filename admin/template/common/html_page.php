<?php 
	/**
	 * load html <head>
	 */
	if(file_exists( DIR_TEMPLATE_COMMON . 'html_head.php' )){
		include( DIR_TEMPLATE_COMMON . 'html_head.php' );
	}
?>

<body>

	<?php 
		/**
		 * load <body> header
		 */
		if(file_exists( DIR_TEMPLATE_COMMON . 'page_header.php' )){
			include( DIR_TEMPLATE_COMMON . 'page_header.php' );
		}
	?>

	<?php 
		/**
		 * load <body> content
		 */
		if(file_exists( DIR_TEMPLATE_LAYOUT . $tpl_currentPage.'.php' )){
			include( DIR_TEMPLATE_LAYOUT . $tpl_currentPage.'.php' );
		}
	?>

  	<?php 
		/**
		 * load <body> footer
		 */
		if(file_exists( DIR_TEMPLATE_COMMON . 'page_footer.php' )){
			include( DIR_TEMPLATE_COMMON . 'page_footer.php' );
		}
	?>

</body>
</html>