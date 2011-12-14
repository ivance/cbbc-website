<?php 
	/**
	 * load html <head>
	 */
	$tplCode = get_file_position(DIR_TEMPLATE,$tpl_currentPage.'/html_head.php');
	if($tplCode === false){
		include( get_file_position(DIR_TEMPLATE,'common/html_head.php') );
	}else{
		include( $tplCode );
	}
?>

<body>

	<?php 
		/**
		 * load <body> header
		 */
		$tplCode = get_file_position(DIR_TEMPLATE,$tpl_currentPage.'/page_header.php');
		if($tplCode === false){
			include( get_file_position(DIR_TEMPLATE,'common/page_header.php') );
		}else{
			include( $tplCode );
		}
	?>

	<div class="container-fluid">

		<?php 
			/**
			 * load <body> sidebar
			 */
			$tplCode = get_file_position(DIR_TEMPLATE,$tpl_currentPage.'/page_sidebar.php');
			if($tplCode === false){
				include( get_file_position(DIR_TEMPLATE,'common/page_sidebar.php') );
			}else{
				include( $tplCode );
			}
		?>

		<?php 
			/**
			 * load <body> content
			 */
			$tplCode = get_file_position(DIR_TEMPLATE,$tpl_currentPage.'/page_layout.php');
			if($tplCode === false){
				include( get_file_position(DIR_TEMPLATE,'common/page_layout.php') );
			}else{
				include( $tplCode );
			}
		?>

	</div>

  	<?php 
		/**
		 * load <body> footer
		 */
		$tplCode = get_file_position(DIR_TEMPLATE,$tpl_currentPage.'/page_footer.php');
		if($tplCode === false){
			include( get_file_position(DIR_TEMPLATE,'common/page_footer.php') );
		}else{
			include( $tplCode );
		}
	?>

</body>
</html>