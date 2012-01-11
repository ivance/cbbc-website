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
			<table class="zebra-striped">
				<tr>
					<th>编号</th>
					<th>名称</th>
					<th>类型</th>
					<th>面积</th>
					<th>时间</th>
				</tr>
			</table>
			<fieldset>
				<div class="clearfix">
					<label for="company_about_title">about标题</label>
					<div class="input"><input type="text" name="company_about_title" id="company_about_title" class="xlarge" value="<?php echo $tpl_config['company_about_title']?>"></div>
				</div>
				<div class="clearfix">
					<label for="company_about_body">about正文</label>
					<div class="input"><textarea rows="3" name="company_about_body" id="company_about_body" class="xxlarge"><?php echo $tpl_config['company_about_body']?></textarea></div>
				</div>
				<div class="clearfix">
					<label for="company_concept_title">concept标题</label>
					<div class="input"><input type="text" name="company_concept_title" id="company_concept_title" class="xlarge" value="<?php echo $tpl_config['company_concept_title']?>"></div>
				</div>
				<div class="clearfix">
					<label for="company_concept_body">concept正文</label>
					<div class="input"><textarea rows="3" name="company_concept_body" id="company_concept_body" class="xxlarge"><?php echo $tpl_config['company_concept_body']?></textarea></div>
				</div>
				<div class="actions">
					<button class="btn primary" type="submit">保存</button>
		        </div>
			</fieldset>
		</form>

	</div>
	<!-- content-eof -->

</div>