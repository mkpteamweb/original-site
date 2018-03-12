<?php 
	$root = "../";
	$page = ($_REQUEST["visible"] == 1) ? "pages" : "invisibles";
	include $root."common/dal.php";
	include $root."common/session.php";
	$module = getRecord("Module",$_REQUEST["id_module"]);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $admin_title;?></title>
<link href="<?php echo $root;?>css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="<?php echo $root;?>scripts/scripts.js"></script>
<script type="text/javascript" src="<?php echo $root;?>scripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="<?php echo $root;?>scripts/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
<script type="text/javascript">
tinyMCE.init({
		width: "500",
		height: "200",
		theme : "advanced",
		mode : "textareas",
		plugins : "paste",

		theme_advanced_buttons1 : "bold,italic,underline,fontsizeselect",
		theme_advanced_buttons2 : "",
		theme_advanced_buttons3 : "",
		theme_advanced_buttons4 : "",
		theme_advanced_toolbar_align: "left",
		theme_advanced_toolbar_location: "top",
	});
</script>
</head>
<body>
<div id="main">
	<?php include $root."common/header.php";?>		
	<div id="content">
		<div id="center-col">
			<h2>Content</h2>
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont">

					<div class="box-widgets" id="elements">
						<div class="box-widgets-cont">
							<form id="frmAdd" name="frmAdd" method="post" action="<?php echo $root;?>common/process.php" enctype="multipart/form-data" />
							<input type="hidden" id="req" name="req" value="add" />
							<input type="hidden" id="table" name="table" value="Content" />
							<input type="hidden" id="folder" name="folder" value="content/?id_module=<?php echo $_REQUEST["id_module"];?>&visible=<?php echo $_REQUEST["visible"];?>" />
							<input type="hidden" id="id_module" name="id_module" value="<?php echo $_REQUEST["id_module"];?>" />
							<input type="hidden" id="position" name="position" value="<?php echo getLastPosition("Content");?>" />
							<table width="100%" border="0" cellspacing="0" cellpadding="6">
								<tr>
									<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Add Content</span><br />
									Please Complete the Form. Mandatory Fields Marked *</td>
								</tr>
								<tr>
									<td width="27%" bgcolor="#f5f5f5"><strong>Title*:</strong></td>
									<td width="73%" bgcolor="#f5f5f5"><input name="title" id="title" type="text" class="fields2" /></td>
								</tr>
								<tr>
									<td valign="top"><strong>Description*:</strong></td>
									<td><textarea name="description" cols="45" rows="8" class="fields1" id="description"></textarea></td>
								</tr>
								<?php if ($module["type"] != "1"){ ?>
								<input type="hidden" id="files" name="files" value="background" />
								<tr>
									<td bgcolor="#f5f5f5"><strong>Image:</strong></td>
									<td bgcolor="#f5f5f5">
										<input type="file" name="background" id="background" class="fields2" /><br /><br />
										<span id="note">Recommended size: no larger than 800 x 600 pixels</span></td>
								</tr>
								<tr>
									<td><strong>Video:</strong></td>
									<td><input name="video" id="video" type="text" class="fields2" /></td>
								</tr>
								<?php } ?>
								<tr>
									<td>&nbsp;</td>
									<td align="right">
										<input name="btnSave" type="submit" class="but1" id="btnSave" value="Save" />
										<input name="btnCancel" type="button" class="but1" id="btnCancel" value="Cancel" onclick="history.back();" /></td>
								</tr>
							</table>
							</form>
						</div>
					</div>					
					
				</div>
			</div>
    </div>
	</div>
</div>
<?php include $root."common/footer.php";?>
</body>
</html>
