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

			<table id="partner_list" class="zebra-striped">
				<tr>
					<th>编号</th>
					<th>图片</th>
					<th>简介</th>
				</tr>
				<tr id="hiddenPartner" class="hide">
					<td></td>
					<td><input type="text" name="partner_pic" id="partner_pic" class="span3"></td>
					<td><textarea rows="7" name="partner_text" id="partner_text" class="xxlarge"></textarea></td>
					<td>
						<button class="btn primary" name="partner_save" value="new">保存</button>
					</td>
				</tr>
				<?php foreach($tpl_config['partner_list'] as $id => $partner_info){?>
				<tr>
					<td><?php echo $id?></td>
					<td><input type="text" name="partner_pic_<?php echo $id?>" id="partner_pic" class="span3" value="<?php echo $partner_info['pic']?>"></td>
					<td><textarea rows="7" name="partner_text_<?php echo $id?>" id="partner_text" class="xxlarge"><?php echo $partner_info['text']?></textarea></td>
					<td>
						<button class="btn primary" name="partner_save" value="<?php echo $id?>">保存</button>
						<button class="btn danger" name="partner_delete" value="<?php echo $id?>">删除</button>
					</td>
				</tr>
				<?php }?>

			</table>

		</form>

		<div class="actions">
			<button id="btnAddPartner" class="btn success" onclick="addNewPartner()">添加</button>
		</div>

	</div>
	<!-- content-eof -->

</div>
<script type="text/javascript">
function addNewPartner(){
	$("#hiddenPartner").clone().appendTo("#partner_list").removeClass("hide");
	$("#btnAddPartner").removeClass("success").attr("disabled","disabled");
}
</script>