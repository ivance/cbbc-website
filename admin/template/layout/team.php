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
					<label for="team_pic">图片 - 使用分号(;)分隔</label>
					<div class="input"><textarea rows="7" name="team_pic" id="team_pic" class="xxlarge"><?php echo $tpl_config['team_pic']?></textarea></div>
				</div>
				<div class="clearfix">
					<label for="team_text">Team简介</label>
					<div class="input"><textarea rows="7" name="team_text" id="team_text" class="xxlarge"><?php echo $tpl_config['team_text']?></textarea></div>
				</div>

				<div class="actions">
					<button class="btn primary" type="submit">保存</button>
		        </div>
			</fieldset>

		</form>

	</div>
	<!-- content-eof -->

</div>