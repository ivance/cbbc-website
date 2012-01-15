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

			<table id="project_list" class="zebra-striped">
				<tr>
					<th>编号</th>
					<th>名称</th>
					<th>图片</th>
					<th>类型</th>
					<th>面积</th>
					<th>时间</th>
					<th>操作</th>
				</tr>
				<tr id="hiddenProject" class="hide">
					<td></td>
					<td><input type="text" name="project_title" id="project_title" class="span3"></td>
					<td><input type="text" name="project_pic" id="project_pic" class="span3"></td>
					<td><input type="text" name="project_type" id="project_type" class="span3"></td>
					<td><input type="text" name="project_area" id="project_area" class="span3"></td>
					<td><input type="text" name="project_time" id="project_time" class="span3"></td>
					<td>
						<button class="btn primary" name="project_save" value="new">保存</button>
					</td>
				</tr>
				<?php foreach($tpl_config['project_list'] as $id => $project_info){?>
				<tr>
					<td><?php echo $id?></td>
					<td><input type="text" name="project_title_<?php echo $id?>" id="project_title" class="span3" value="<?php echo $project_info['title']?>"></td>
					<td><input type="text" name="project_pic_<?php echo $id?>" id="project_pic" class="span3" value="<?php echo $project_info['pic']?>"></td>
					<td><input type="text" name="project_type_<?php echo $id?>" id="project_type" class="span3" value="<?php echo $project_info['type']?>"></td>
					<td><input type="text" name="project_area_<?php echo $id?>" id="project_area" class="span3" value="<?php echo $project_info['area']?>"></td>
					<td><input type="text" name="project_time_<?php echo $id?>" id="project_time" class="span3" value="<?php echo $project_info['time']?>"></td>
					<td>
						<button class="btn primary" name="project_save" value="<?php echo $id?>">保存</button>
						<button class="btn danger" name="project_delete" value="<?php echo $id?>">删除</button>
					</td>
				</tr>
				<?php }?>

			</table>

		</form>

		<div class="actions">
			<button id="btnAddProject" class="btn success" onclick="addNewProject()">添加</button>
		</div>

	</div>
	<!-- content-eof -->

</div>
<script type="text/javascript">
function addNewProject(){
	$("#hiddenProject").clone().appendTo("#project_list").removeClass("hide");
	$("#btnAddProject").removeClass("success").attr("disabled","disabled");
}
</script>