<div id="l-col" class="span4">
	<ul id="nav" class="navMenu">

		<li><a href="index.php?main_page=home">HOME</a></li>

		<?php if($page=='about'){?>
			<li class="active navSubmenu">
				<a href="index.php?main_page=about">ABOUT CBBC</a>
				<a class="inactive" href="index.php?main_page=concept">CONCEPT</a>
			</li>
		<?php }elseif($page=='concept'){ ?>
			<li class="active navSubmenu">
				<a class="inactive" href="index.php?main_page=about">ABOUT CBBC</a>
				<a href="index.php?main_page=concept">CONCEPT</a>
			</li>
		<?php }else{?>
			<li><a href="index.php?main_page=about">COMPANY</a></li>
		<?php } ?>

		<?php if($page=='projectlist'){?>
			<li class="active navSubmenu"><a class="current" href="index.php?main_page=projectlist">PROJECT LIST</a></li>
		<?php }else{?>
			<li><a href="index.php?main_page=projectlist">PROJECT</a></li>
		<?php } ?>

		<?php if($page=='team'){?>
			<li class="active navSubmenu"><a href="index.php?main_page=team">TEAM</a> <a class="inactive" href="index.php?main_page=partners">PARTNERS</a></li>
		<?php }elseif($page=='partners'){ ?>
			<li class="active navSubmenu"><a class="inactive" href="index.php?main_page=team">TEAM</a> <a href="index.php?main_page=partners">PARTNERS</a></li>
		<?php }else{?>
			<li><a href="index.php?main_page=team">TEAM</a></li>
		<?php } ?>

		<?php if($page=='service-concept'){?>
			<li class="active navsubmenu"><a href="index.php?main_page=service-concept">SERVICE CONCEPT</a> <a class="inactive" href="index.php?main_page=clients">CLIENTS</a></li>
		<?php }elseif($page=='clients'){ ?>
			<li class="active navSubmenu"><a class="inactive" href="index.php?main_page=service-concept">SERVICE CONCEPT</a> <a href="index.php?main_page=clients">CLIENTS</a></li>
		<?php }else{?>
			<li><a href="index.php?main_page=service-concept">SERVICE</a></li>
		<?php } ?>

		<?php if($page=='contacts'){?>
			<li class="active navsubmenu"><a href="index.php?main_page=contacts">CONTACT</a> <a class="inactive" href="index.php?main_page=join">JOIN US</a></li>
		<?php }elseif($page=='join'){ ?>
			<li class="active navsubmenu"><a class="inactive" href="index.php?main_page=contacts">CONTACT</a> <a href="index.php?main_page=join">JOIN US</a></li>
		<?php }else{?>
			<li><a href="index.php?main_page=contacts">CONTACT</a></li>
		<?php } ?>
	</ul>
</div>