<!-- sidebar-bof -->
<?php if(isset($tpl_mainPageArr)){?>
<div class="sidebar">

  <div class="well">
<h5>Pages</h5>
<ul>
  <?php foreach ($tpl_mainPageArr as $page){?>
  <li><a href="<?php echo href_link($page)?>"><?php echo ucwords($page)?></a></li>
  <?php }?>
</ul>
  </div>

</div>
<?php }?>
<!-- sidebar-eof -->