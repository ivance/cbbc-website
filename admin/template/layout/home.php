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
					<label for="xlInput3">news链接</label>
					<div class="input"><input type="text" name="news_link" id="xlInput3" class="xlarge" value="<?php echo $tpl_config['news_link']?>"></div>
				</div>
				<div class="clearfix">
					<label for="xlInput3">blog链接</label>
					<div class="input"><input type="text" name="blog_link" id="xlInput3" class="xlarge" value="<?php echo $tpl_config['blog_link']?>"></div>
				</div>
				<div class="clearfix">
					<label for="xlInput3">platform链接</label>
					<div class="input"><input type="text" name="platform_link" id="xlInput3" class="xlarge" value="<?php echo $tpl_config['platform_link']?>"></div>
				</div>
				<div class="clearfix">
					<label for="xlInput3">微博链接</label>
					<div class="input"><input type="text" name="sina_link" id="xlInput3" class="xlarge" value="<?php echo $tpl_config['sina_link']?>"></div>
				</div>
				<div class="actions">
					<button class="btn primary" type="submit">保存</button>
		        </div>
			</fieldset>
		</form>

	</div>
	<!-- content-eof -->

</div>