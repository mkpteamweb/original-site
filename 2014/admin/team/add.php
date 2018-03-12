<?php 
	$root = "../";
	$page = "team";
	include $root."common/dal.php";
	include $root."common/session.php";
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
							<form id="frmAdd" name="frmAdd" method="post" action="<?php echo $root;?>common/process.php" enctype="multipart/form-data" />
							<input type="hidden" id="req" name="req" value="add" />
							<input type="hidden" id="table" name="table" value="Team" />
							<input type="hidden" id="folder" name="folder" value="team" />
							<input type="hidden" id="position" name="position" value="<?php echo getLastPosition("Team");?>" />
							<input type="hidden" id="files" name="files" value="photo_out,photo_over" />
							<table width="100%" border="0" cellspacing="0" cellpadding="6">
								<tr>
									<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Add Team Member</span><br />
									Please Complete the Form. Mandatory Fields Marked *</td>
								</tr>
								<tr>
									<td width="27%" bgcolor="#f5f5f5"><strong>Name (top)*:</strong></td>
									<td width="73%" bgcolor="#f5f5f5"><input name="member" id="member" type="text" class="fields2" /></td>
								</tr>
								<tr>
									<td><strong>Image (out):</strong></td>
									<td><input type="file" name="photo_out" id="photo_out" class="fields2" /></td>
								</tr>
								<tr>
									<td><strong>Image (over):</strong></td>
									<td><input type="file" name="photo_over" id="photo_over" class="fields2" /></td>
								</tr>
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
