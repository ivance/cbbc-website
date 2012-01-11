<div class="container-fluid">

	<?php 
		/**
		 * load <body> sidebar
		 */
		if(file_exists( DIR_TEMPLATE_MODEL . 'md_sidebar.php' )){
			include( DIR_TEMPLATE_MODEL . 'md_sidebar.php' );
		}
	?>

	<!-- content-bof -->
	<div class="content">

		<?php if(isset($tpl_alert)){?>
		<div id="alert" class="alert-message success">
        	<p><?php echo $tpl_alert?></p>
		</div>
		<?php }?>

		<form class="form-stacked" action="<?php echo $tpl_post_url?>" method="POST">
			<fieldset>
				<div class="clearfix">
					<label for="home_news_link">news链接</label>
					<div class="input"><input type="text" name="home_news_link" id="home_news_link" class="xlarge" value="<?php echo $tpl_config['home_news_link']?>"></div>
				</div>
				<div class="clearfix">
					<label for="home_blog_link">blog链接</label>
					<div class="input"><input type="text" name="home_blog_link" id="home_blog_link" class="xlarge" value="<?php echo $tpl_config['home_blog_link']?>"></div>
				</div>
				<div class="clearfix">
					<label for="home_platform_link">platform链接</label>
					<div class="input"><input type="text" name="home_platform_link" id="home_platform_link" class="xlarge" value="<?php echo $tpl_config['home_platform_link']?>"></div>
				</div>
				<div class="clearfix">
					<label for="home_sina_link">微博链接</label>
					<div class="input"><input type="text" name="home_sina_link" id="home_sina_link" class="xlarge" value="<?php echo $tpl_config['home_sina_link']?>"></div>
				</div>
				<div class="actions">
					<button class="btn primary" type="submit">保存</button>
		        </div>
			</fieldset>
		</form>

	</div>
	<!-- content-eof -->

</div>