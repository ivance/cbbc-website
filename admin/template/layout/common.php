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

		<div class="hero-unit">
          <h1>CBBC Website Control Panel</h1>
        </div>

		<?php if(isset($tpl_alert)){?>
		<div id="alert" class="alert-message success">
        	<p><?php echo $tpl_alert?></p>
		</div>
		<?php }?>

		<form class="form-stacked" action="<?php echo $tpl_post_url?>" method="POST">
			<fieldset>
				<div class="clearfix">
					<label for="common_tip">页脚第一行</label>
					<div class="input"><input type="text" name="common_tip" id="common_tip" class="xlarge" value="<?php echo $tpl_config['common_tip']?>"></div>
				</div>
				<div class="clearfix">
					<label for="common_copyright">页脚第二行</label>
					<div class="input"><input type="text" name="common_copyright" id="common_copyright" class="xlarge" value="<?php echo $tpl_config['common_copyright']?>"></div>
				</div>
				<div class="actions">
					<button class="btn primary" type="submit">保存</button>
		        </div>
			</fieldset>
		</form>

	</div>
	<!-- content-eof -->

</div>