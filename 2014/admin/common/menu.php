<?php
/*
<div id="navigation">
	<a href="<?php echo $root;?>index.php" <?php echo (($page == "home") ? 'class="selected-item" style="color:#000;"' : '');?>>Dashboard</a>
	<a href="#" <?php echo (($page == "users") ? 'class="selected-item" style="color:#000;"' : '');?> onmouseover="showBox('sm1')" onmouseout="hideBox('sm1')">Users</a>
	<a href="<?php echo $root;?>pages" <?php echo (($page == "pages") ? 'class="selected-item" style="color:#000;"' : '');?>>Pages</a>
	<a href="<?php echo $root;?>team" <?php echo (($page == "team") ? 'class="selected-item" style="color:#000;"' : '');?>>Team</a>
	<a href="#" <?php echo (($page == "modules") ? 'class="selected-item" style="color:#000;"' : '');?> onmouseover="showBox('sm2')" onmouseout="hideBox('sm2')">Modules</a>
	<a href="#" <?php echo (($page == "settings") ? 'class="selected-item" style="color:#000;"' : '');?>>Settings</a>
</div>

<div id="subMenus">
	<div class="s-menu" id="sm1" onmouseover="showBox('sm1')" onmouseout="hideBox('sm1')" style="margin-left:114px;">
		<a href="#">Nunc eu lorem 1</a>
		<a href="#">Nunc eu lorem 2</a>
		<a href="#">Nunc eu lorem 3</a>
		<a href="#">Nunc eu lorem 4</a>
	</div>

	<div class="s-menu" id="sm2" onmouseover="showBox('sm2')" onmouseout="hideBox('sm2')" style="margin-left:335px;">
		<a href="#">Nunc eu lorem 1</a>
		<a href="#">Nunc eu lorem 2</a>
		<a href="#">Nunc eu lorem 3</a>
		<a href="#">Nunc eu lorem 4</a>
		<a href="#">Nunc eu lorem 5</a>
		<a href="#">Nunc eu lorem 6</a>
	</div>
</div>
*/
?>
<div id="navigation">
	<a href="<?php echo $root;?>pages/?visible=0" <?php echo (($page == "invisibles") ? 'class="selected-item" style="color:#000;"' : '');?>>Invisible Pages</a>
	<a href="<?php echo $root;?>pages/?visible=1" <?php echo (($page == "pages") ? 'class="selected-item" style="color:#000;"' : '');?>>Pages</a>
	<a href="<?php echo $root;?>audio" <?php echo (($page == "audio") ? 'class="selected-item" style="color:#000;"' : '');?>>Audio</a>
	<a href="<?php echo $root;?>team" <?php echo (($page == "team") ? 'class="selected-item" style="color:#000;"' : '');?>>Team</a>
</div>
