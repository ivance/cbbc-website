<div class="container-fluid">

	<!-- content-bof -->
	<div class="content">

		<div class="row">

		<div class="span8 offset4">

		<?php if(isset($tpl_alert)){?>
		<div id="alert" class="alert-message error">
        	<p><?php echo $tpl_alert?></p>
		</div>
		<?php }?>

		<form action="<?php echo $tpl_post_url?>" method="POST">
		<fieldset>

			<div class="clearfix">
            	<label for="user_name">用户名:</label>
            	<div class="input"><input type="text" size="30" name="user_name" id="user_name" class="xlarge"></div>
			</div>

			<div class="clearfix">
            	<label for="password">密码:</label>
            	<div class="input"><input type="password" size="30" name="password" id="password" class="xlarge"></div>
			</div>

			<div class="input"><input type="submit" value="登录" class="btn primary"></div>

		</fieldset>
		</form>
		</div>
		</div>

	</div>
	<!-- content-eof -->

</div>