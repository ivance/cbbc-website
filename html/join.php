<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>CBBC</title>
	<link rel="stylesheet" href="../css/style.css">
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
			
			<div id="r-col" class="span6 offset5">
					
				<?php echo $config->contact_join_us?>

					
			</div>
		</div>
		</div>
	</div>
<?php include('common/footer.php') ?>
</body>
</html>