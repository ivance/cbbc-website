<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>CBBC</title>
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/lib/prototype.js"></script>
	<script type="text/javascript" src="js/lib/slider.js"></script>
	<script type="text/javascript" src="js/livepipe.js"></script>
	<script type="text/javascript" src="js/scrollbar.js"></script>
	<script type="text/javascript">
			document.observe('dom:loaded',function(){				
				var scrollbar = new Control.ScrollBar('scrollbar_content','scrollbar_track');		
			});	 
	</script>
	<style>
	
	.navSubmenu{
		left: 57px;
		position: relative;
	}
	.clients-list li{
		line-height:29px;
		color:#ffffff;
	}
	
	</style>
</head>
<body>
	<div id="header">
		<div id="header-inner" class="container-fluid">
		<a href="index.html" id="logo"><img src="assets/logo.png" alt=""></a>
		</div>
	</div>
	<div id="main" class="container-fluid">
		<div id="main-inner">
		<div class="content">
			
			<?php include('common/sidebar.php') ?>
			
			<div id="r-col" class="span9">
				<div id="scrollbar_container-fluid">  
				    <div id="scrollbar_track"><div id="scrollbar_handle"></div></div>  
				    <div id="scrollbar_content">
						<?php echo $config->service_clients?>
				    </div>  
				</div> 
				
	       

					
			</div>
		</div>
		</div>
	</div>
<?php include('common/footer.php') ?>
</body>
</html>