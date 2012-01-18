<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>CBBC</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.jscrollpane.css">
	<script type="text/javascript" src="../js/lib/prototype.js"></script>
	<script type="text/javascript" src="../js/lib/slider.js"></script>
	<script type="text/javascript" src="../js/livepipe.js"></script>
	<script type="text/javascript" src="../js/scrollbar.js"></script>
	<script type="text/javascript">
			document.observe('dom:loaded',function(){				
				var scrollbar = new Control.ScrollBar('scrollbar_content','scrollbar_track');		
			});	 
	</script>
	<style>
	
	.navsubmenu{
		left: 57px;
		position: relative;
	}
	
	</style>
</head>
<body>
	<div id="header">
		<div id="header-inner" class="container-fluid">
		<a href="../index.html" id="logo"><img src="../assets/logo.png" alt=""></a>
		</div>
	</div>
	<div id="main" class="container-fluid">
		<div id="main-inner">
		<div class="content">
			
			<?php include('common/sidebar.php') ?>

			<div id="service-concept" class="span6">
				<img src="../css/images/service.png" alt="">
			</div>
			<div id="r-col" class="span6">
				<div id="scrollbar_container-fluid">  
				    <div id="scrollbar_track"><div id="scrollbar_handle"></div></div>  
				    <div id="scrollbar_content">
						<p><?php echo $config->service_concept?></p>
					</div>
				</div>
			
			</div>
			
	
		</div>
		</div>
	</div>
<?php include('common/footer.php') ?>
</body>
</html>