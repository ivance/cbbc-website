<?php
$mainPageArr = array(
	DEFAULT_MAIN_PAGE,
	'company',
	'project',
	'team',
	'service',
	'contact',
);
?>

<!-- sidebar-bof -->
<?php if(isset($mainPageArr)){?>
<div class="sidebar">

  <div class="well">
<h5>Pages</h5>
<ul>
  <?php foreach ($mainPageArr as $page){?>
  <li><a href="<?php echo href_link($page)?>"><?php echo ucwords($page)?></a></li>
  <?php }?>
</ul>
  </div>

</div>
<?php }?>
<!-- sidebar-eof -->