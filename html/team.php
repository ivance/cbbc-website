<?php 
$team_pic = explode(';',$config->team_pic);
?>
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
	<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
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
		<a href="index.html" id="logo"><img src="assets/logo.png" alt=""></a>
		</div>
	</div>
	<div id="main" class="container-fluid">
		<div id="main-inner">
		<div class="content">
			
			<?php include('common/sidebar.php') ?>
			
			<div id="r-col" class="span12">
			<div id="team_pic" class="span5 pull-left">
				<?php foreach($team_pic as $pic){?>
				<a><img src="image/<?php echo $pic?>" height="340" alt=""></a>
				<?php } ?>
			</div>
			<div class="span5" style="margin-left:290px">
			<p class="header contentHeader">Team</p>
					<p style="text-align:justify;"><?php echo $config->team_text?></p>
			</div>
			</div>
		</div>
		</div>
	</div>
<?php include('common/footer.php') ?>
<script type="text/javascript">
$.fn.slide = function(settings){
	return this.each(function(){
	    $.extend(this, {defertime:7000, btnopacity:0.9, showbutton: true,fadingtime: 800,slides:3}, settings);
	    var _c = this, index = 0, timer,slides = slides?slides:_c.slides;
		// 隐藏切图中的a
		$(_c).find('.clip-image').children('a').css({zIndex:slides, display:'none'});
	   
	    $(_c).hover(function(){
	        clearInterval(timer);
	    },function(){
	        timer = setInterval(function(){sliding(++index%slides)}, _c.defertime);
	    }).trigger("mouseleave");
	
	    function sliding(n){
	        $(_c).find("img").stop().animate({opacity:0},_c.fadingtime).css('z-index','').end().find("img").eq(n).stop().css('z-index',slides).animate({opacity:1},_c.fadingtime);
			$(_c).find('.clip-image').children('a').hide();
			$(_c).find("img").eq(n).parent('.clip-image').children('a').show();
	    };
	   
	    $(_c).find("img").css({'opacity':0,'position':'absolute','top':'0','left':'0'}).eq(0).css({'z-index':1,'opacity':1});
	})
};

$("#team_pic").slide({defertime: 2000,fadingtime: 1000,slides:<?php echo count($team_pic)?>});
</script>
</body>
</html>