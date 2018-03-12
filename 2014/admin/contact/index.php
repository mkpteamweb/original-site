<?php 
	$root = "../";
	$page = ($_REQUEST["visible"] == 1) ? "pages" : "invisibles";
	include $root."common/dal.php";
	include $root."common/session.php";
	$module = getRecord("Module",$_REQUEST["id_module"]);
	$record = getRecord("Contact",1);
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
			<h2>Contact Information</h2>
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont">

					<div class="box-widgets" id="elements">
						<h3>Content &nbsp; &nbsp; <span class="txt-lblue"><?php echo $module["title_top"]." ".$module["title_bottom"];?></span></h3>
						<div align="right" style="margin-top:10px;"><a href="../pages/?visible=<?php echo $_REQUEST["visible"]?>" class="links-actions">Back</a></div>											
						<div class="box-widgets-cont">
							<form id="frmUpd" name="frmUpd" method="post" action="<?php echo $root;?>common/process.php" enctype="multipart/form-data" />
							<input type="hidden" id="id" name="id" value="1" />
							<input type="hidden" id="req" name="req" value="upd" />
							<input type="hidden" id="table" name="table" value="Contact" />
							<input type="hidden" id="folder" name="folder" value="contact/?id_module=<?php echo $_REQUEST["id_module"];?>" />
							<input type="hidden" name="files" value="background" />
							<input type="hidden" name="files_old" value="<?php echo $record["background"];?>" />
							<table width="100%" border="0" cellspacing="0" cellpadding="6">
								<tr>
									<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Update Contact Information</span><br />
									Please Complete the Form. Mandatory Fields Marked *</td>
								</tr>
								<tr>
									<td width="27%" bgcolor="#f5f5f5"><strong>Address*:</strong></td>
									<td width="73%" bgcolor="#f5f5f5">
									<input name="address1" id="address1" type="text" class="fields2" value="<?php echo $record["address1"];?>" />
									&nbsp;&nbsp;&nbsp;&nbsp;
									<input name="address2" id="address2" type="text" class="fields2" value="<?php echo $record["address2"];?>" /></td>
								</tr>
								<tr>
									<td><strong>Phone*:</strong></td>
									<td><input name="phone" id="phone" type="text" class="fields2" value="<?php echo $record["phone"];?>" /></td>
								</tr>
								<tr>
									<td bgcolor="#f5f5f5"><strong>Fax*:</strong></td>
									<td bgcolor="#f5f5f5">
									<input name="fax" id="fax" type="text" class="fields2" value="<?php echo $record["fax"];?>" /></td>
								</tr>
								<tr>
									<td><strong>Email*:</strong></td>
									<td><input name="email" id="email" type="text" class="fields2" value="<?php echo $record["email"];?>" /></td>
								</tr>
								<tr>
									<td><strong>Background Image:</strong></td>
									<td><input type="file" name="background" id="background" class="fields2" /><br /><br /><span id="note">Recommended size: no larger than 800 x 600 pixels</span></td>
								</tr>
								<?php if ($record["background"] != "") { ?>												
								<tr>
									<td></td>
									<td><img src="../../uploads/<?php echo $record["background"];?>" width="300" border="0" /><br /></td>
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
