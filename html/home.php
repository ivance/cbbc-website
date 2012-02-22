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
	<style>
	.navMenu{
		text-align: right;
	}
	.rightConcept{
		float:right;
	}
	.footerTip{
		font-size:10px;
		line-height: 14px;
		font-weight: lighter;
		color:#999999;
	}
	.footerLink{
		color:#0E65A3;
	}
	</style>
</head>
<body id="index">
	<div id="header" >
		<div id="header-inner" class="container-fluid">
			
		<a href="" id="logo"><img src="assets/logo.png" alt=""></a>
		</div>
	</div>
	<div id="main" class="container-fluid">
		<div id="main-inner">
		<div class="content">

			<?php include('common/sidebar.php') ?>

			<div id="r-col" class="span5" style="right:170px;">
				<p class="concept rightConcept"><a href="<?php echo $config->home_news_link?>">news</a> / <a href="<?php echo $config->home_blog_link?>">blog</a> / <a href="<?php echo $config->home_platform_link?>">platform</a></p>
			</div>
		</div>
		</div>
	</div>

	<?php include('common/footer.php') ?>

</body>
</html>