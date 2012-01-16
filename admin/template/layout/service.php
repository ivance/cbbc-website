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
					<label for="service_concept">Service Concept</label>
					<div class="input"><textarea rows="7" name="service_concept" id="service_concept" class="xxlarge"><?php echo $tpl_config['service_concept']?></textarea></div>
				</div>
				<div class="clearfix">
					<label for="service_clients">Clints</label>
					<div class="input"><textarea rows="7" name="service_clients" id="service_clients" class="xxlarge"><?php echo $tpl_config['service_clients']?></textarea></div>
				</div>
				<div class="actions">
					<button class="btn primary" type="submit">保存</button>
		        </div>
			</fieldset>
		</form>

	</div>
	<!-- content-eof -->

</div>