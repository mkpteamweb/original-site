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
</head>
<body>
<div id="main">
	<?php include $root."common/header.php";?>		
	<div id="content">
		<div id="center-col">
			<h2>Gallery</h2>
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont">

					<div class="box-widgets" id="elements">
						<div class="box-widgets-cont">
							<form id="frmAdd" name="frmAdd" method="post" action="<?php echo $root;?>common/process.php" enctype="multipart/form-data" />
							<input type="hidden" id="req" name="req" value="add" />
							<input type="hidden" id="table" name="table" value="Gallery" />
							<input type="hidden" id="folder" name="folder" value="gallery/?id_module=<?php echo $_REQUEST["id_module"];?>&visible=<?php echo $_REQUEST["visible"];?>" />
							<input type="hidden" id="id_module" name="id_module" value="<?php echo $_REQUEST["id_module"];?>" />
							<input type="hidden" id="position" name="position" value="<?php echo getLastPosition("Gallery","id_module",$_REQUEST["id_module"]);?>" />
							<input type="hidden" id="files" name="files" value="photo_tmb,photo_dtl" />
							<table width="100%" border="0" cellspacing="0" cellpadding="6">
								<tr>
									<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Add Content</span><br />
									Please Complete the Form. Mandatory Fields Marked *</td>
								</tr>
								<?php if ($module["type"] != "6"){ ?>
								<tr>
									<td width="27%" bgcolor="#f5f5f5"><strong>Title*:</strong></td>
									<td width="73%" bgcolor="#f5f5f5"><input name="title" id="title" type="text" class="fields2" /></td>
								</tr>
								<tr>
									<td><strong>Description*:</strong></td>
									<td><textarea name="description" cols="45" rows="8" class="fields1" id="description"></textarea></td>
								</tr>
								<?php } ?>
								<tr>
									<td bgcolor="#f5f5f5"><strong>Photo (thumbnail)*:</strong></td>
									<td bgcolor="#f5f5f5">
										<input type="file" name="photo_tmb" id="photo_tmb" class="fields2" /><br /><br />
										<span id="note">Recommended size: no larger than 800 x 600 pixels</span></td>
								</tr>
								<tr>
									<td><strong>Photo (detail)*:</strong></td>
									<td>
										<input type="file" name="photo_dtl" id="photo_dtl" class="fields2" /><br /><br />
										<span id="note">Recommended size: no larger than 800 x 600 pixels</span></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td align="right">
										<input name="btnSave" type="submit" class="but1" id="btnSave" value="Save" />
										<input name="btnCancel" type="button" class="but1" id="btnCancel" value="Cancel" onclick="history.back();" /></td>
								</tr>
								<tr>
									<td colspan="2">
									<span id="note"><b>NOTE:</b> Recommended size: no larger than 800 x 600 pixels</span></td>
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