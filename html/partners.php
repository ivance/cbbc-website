<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>CBBC</title>
	<link rel="stylesheet" href="../css/style.css">
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
		left: 70px;
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

			<div id="r-col" class="span12">
				<div id="scrollbar_container">  
				    <div id="scrollbar_track"><div id="scrollbar_handle"></div></div>  
				    <div id="scrollbar_content" style="margin-right:150px">
						<ul class="media-list partners-list">
						<?php foreach($config->partner_list as $partner){?>
						<li class="partner">
							<div class="image"><img src="../image/<?php echo $partner->pic?>" width="227" alt=""></div>
							<?php echo $partner->text?>
						</li>
						<?php }?>
						</ul>
					</div>
				</div>	
			</div>
		</div>
		</div>
	</div>
<?php include('common/footer.php') ?>
</body>
</html>