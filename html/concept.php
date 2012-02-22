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
	
	.navSubmenu{
		left: 107px;
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

			<div id="r-col" class="span9">
				<div class="span3" style="position: absolute;">
				<img src="../css/images/concept.png" width="146" alt="">
			</div>
			<div class="span6 company-concept">
				<div id="scrollbar_container">  
				    <div id="scrollbar_track" style="left:500px"><div id="scrollbar_handle"></div></div>  
				    <div id="scrollbar_content" style="padding-left: 183px;">
						<p class="header" style="font-size:20px;font-style:Italic"><?php echo $config->company_concept_title?></p>
						<br />
						<?php echo $config->company_concept_body?>

					</div>
				</div>
			</div>	
			</div>
			
		</div>
		</div>
	</div>
<?php include('common/footer.php') ?>
</body>
</html>