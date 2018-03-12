<div id="header">
	<div id="login-box">
	Hello<span class="login-box-txt1"> <?php echo $_SESSION["name"];?></span> | <a href="<?php echo $root;?>logout.php">Logout</a><br />
	<span class="login-box-txt2">Last Login: <?php echo $_SESSION["last_login"];?></span>
	</div>
		<div align="left" style="height:100px;"><img src="<?php echo $root;?>images/logo-mkp.gif" border="0" alt="<?php echo $site_name;?>" /></div>
	<?php include "menu.php";?>
	</div>
</div>