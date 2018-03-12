<?php 
	$root = "../";
	$page = "team";
	include $root."common/dal.php";
	include $root."common/session.php";
	$record = getRecord("Team",$_REQUEST["id"]);
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
			<h2>Team</h2>
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont">

					<div class="box-widgets" id="elements">
						<div class="box-widgets-cont">
							<form id="frmUpd" name="frmUpd" method="post" action="<?php echo $root;?>common/process.php" enctype="multipart/form-data" />
							<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST["id"];?>" />
							<input type="hidden" id="req" name="req" value="upd" />
							<input type="hidden" id="table" name="table" value="Team" />
							<input type="hidden" id="folder" name="folder" value="team" />
							<input type="hidden" id="position" name="position" value="<?php echo $record["position"];?>" />
							<input type="hidden" name="id_module" value="<?php echo $record["id_module"];?>" />
							<input type="hidden" name="files" value="photo_out,photo_over" />
							<input type="hidden" name="files_old" value="<?php echo $record["photo_out"];?>,<?php echo $record["photo_over"];?>" />
							
							<table width="100%" border="0" cellspacing="0" cellpadding="6">
								<tr>
									<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Update Page</span><br />
									Please Complete the Form. Mandatory Fields Marked *</td>
								</tr>
								<tr>
									<td width="27%" bgcolor="#f5f5f5"><strong>Member*:</strong></td>
									<td width="73%" bgcolor="#f5f5f5"><input name="member" id="member" type="text" class="fields2" value="<?php echo $record["member"];?>" /></td>
								</tr>
								<tr>
									<td bgcolor="#f5f5f5"><strong>Image (out):</strong></td>
									<td bgcolor="#f5f5f5"><input type="file" name="photo_out" id="photo_out" class="fields2" /></td>
								</tr>
								<?php if ($record["photo_out"] != "") { ?>												
								<tr>
									<td></td>
									<td><img src="../../uploads/<?php echo $record["photo_out"];?>" width="200" border="0" /><br /></td>
								</tr>
								<?php } ?>
								<tr>
									<td bgcolor="#f5f5f5"><strong>Image (over):</strong></td>
									<td bgcolor="#f5f5f5"><input type="file" name="photo_over" id="photo_over" class="fields2" /></td>
								</tr>
								<?php if ($record["photo_over"] != "") { ?>												
								<tr>
									<td></td>
									<td><img src="../../uploads/<?php echo $record["photo_over"];?>" width="200" border="0" /><br /></td>
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
