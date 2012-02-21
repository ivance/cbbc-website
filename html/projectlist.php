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
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript">
			var $j = jQuery.noConflict();
     
		    // Use jQuery via $j(...)
		    $j(document).ready(function(){
		      $j('.project_item').each(function(){
		      	$j(this).hover(function(){
		      		$j(this).addClass('hover');
		      	},function(){
		      		$j(this).removeClass('hover');
		      	});

		      	$j(this).click(function(){
		      		$j('#project_detail').empty();
		      		var detailToShow = $j(this).find('.project_detail');
		      		detailToShow.clone().appendTo('#project_detail');
		      		$j('#project_detail .close span').bind('click', function(){
		      			$j('#project_detail').empty();
		      		});
		      	})

		      });

		     
		      
		    });

			document.observe('dom:loaded',function(){				
				var scrollbar = new Control.ScrollBar('scrollbar_content','scrollbar_track');		
			});	 
	</script>
	<style>
	
	.navSubmenu{
		left: 30px;
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
				<div class="span4 pull-left">
				<div id="project_detail">
					
				</div>
				</div>
				<div class="span8 pull-right">
				<div id="scrollbar_container-fluid">  
				    <div id="scrollbar_track"><div id="scrollbar_handle"></div></div>  
				    <div id="scrollbar_content">
					<ul class="project_items">
						<?php foreach($config->project_list as $project){?>
						<li class="project_item">
							<div class="image"><img src="../image/<?php echo $project->pic?>" width="40" alt=""></div>
							<h2 class="name"><?php echo $project->title?></h2>
							<p class="info"><?php echo $project->type?> / <?php echo $project->area?> / <?php echo $project->time?></p>
							<div class="project_detail">
								<div class="d_image">
									<img src="../image/<?php echo $project->pic?>" width="180" alt="">
								</div>
								<h4 class="d_name">
									<?php echo $project->title?>
								</h4>
								<ul class="d_info">
									<li><strong>Project/</strong> <?php echo $project->title?></li>
									<li><strong>Type/</strong> <?php echo $project->type?></li>
									<li><strong>Work/</strong> <?php echo $project->area?></li>
									<li><strong>Signing Time/</strong> <?php echo $project->time?></li>
								</ul>

								<div class="close">
									<span>X</span>
								</div>
							</div>
						</li>
						<?php }?>
						
					</ul>
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