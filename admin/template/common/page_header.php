<!-- topbar-bof -->
<div class="topbar">

  <div class="topbar-inner">
    <div class="container-fluid">
      <a class="brand" href="<?php echo $tpl_homeUrl?>">CBBC Website Control Panel - <?php echo ucwords($tpl_currentPage)?></a>
      <?php if(isset($_SESSION['user_name']) && $_SESSION['user_name'] != ''){?>
      <p class="pull-right topbar-text">Logged in as <?php echo $_SESSION['user_name']?>&nbsp;(&nbsp;<a href="<?php echo href_link( 'logoff' )?>">logout</a>&nbsp;)&nbsp;<a href="<?php echo href_link( 'change' )?>">change password</a></p>
      <?php }?>
    </div>
  </div>

</div>
<!-- topbar-eof -->