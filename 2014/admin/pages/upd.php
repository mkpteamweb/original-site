<?php 
	$root = "../";
	$page = ($_REQUEST["visible"] == 1) ? "pages" : "invisibles";
	$title = ($_REQUEST["visible"] == 1) ? "Pages" : "Invisibles Pages";
	include $root."common/dal.php";
	include $root."common/session.php";
	$record = getRecord("Module",$_REQUEST["id"]);
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
			<h2><?php echo $title;?></h2>
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont">

					<div class="box-widgets" id="elements">
						<div class="box-widgets-cont">
							<?php if ($_REQUEST["visible"] == 1) { ?>
							<form id="frmUpd" name="frmUpd" method="post" action="<?php echo $root;?>common/process.php" enctype="multipart/form-data" />
							<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST["id"];?>" />
							<input type="hidden" id="req" name="req" value="upd" />
							<input type="hidden" id="table" name="table" value="Module" />
							<input type="hidden" id="folder" name="folder" value="pages/?visible=<?php echo $_REQUEST["visible"];?>" />
							<input type="hidden" id="position" name="position" value="<?php echo $record["position"];?>" />
							<input type="hidden" id="type" name="type" value="<?php echo $record["type"];?>" />
							<input type="hidden" id="show_home" name="show_home" value="<?php echo $record["show_home"];?>" />
							<input type="hidden" name="files" value="background" />
							<input type="hidden" name="files_old" value="<?php echo $record["background"];?>" />
							
							<table width="100%" border="0" cellspacing="0" cellpadding="6">
								<tr>
									<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Update Page</span><br />
									Please Complete the Form. Mandatory Fields Marked *</td>
								</tr>
								<tr>
									<td width="27%" bgcolor="#f5f5f5"><strong>Content Type*:</strong></td>
									<td width="73%" bgcolor="#f5f5f5">
										<select id="type" name="type" class="list-txt">
											<option value="0">Select type...</option>
											<option value="1" <?php echo (($record["type"] == 1) ? 'selected="selected"' : '');?>>List of items with an unique bottom image</option>
											<!--<option value="2" <?php //echo (($record["type"] == 2) ? 'selected="selected"' : '');?>>List of items with a bottom description/image</option>-->
											<option value="3" <?php echo (($record["type"] == 3) ? 'selected="selected"' : '');?>>List of items with an image</option>
											<option value="8" <?php echo (($record["type"] == 8) ? 'selected="selected"' : '');?>>List of items with an image (without dotted line)</option>
											<option value="7" <?php echo (($record["type"] == 7) ? 'selected="selected"' : '');?>>List of items with an image to the right</option>
											<option value="4" <?php echo (($record["type"] == 4) ? 'selected="selected"' : '');?>>Contact page</option>
											<option value="5" <?php echo (($record["type"] == 5) ? 'selected="selected"' : '');?>>Photo gallery with description (popup)</option>
											<option value="6" <?php echo (($record["type"] == 6) ? 'selected="selected"' : '');?>>Photos Gallery</option>
										</select>
									</td>
								</tr>
								<tr>
									<td><strong>Title (top)*:</strong></td>
									<td><input name="title_top" id="title_top" type="text" class="fields2" value="<?php echo $record["title_top"];?>" /></td>
								</tr>
								<tr>
									<td bgcolor="#f5f5f5"><strong>Title (bottom):</strong></td>
									<td bgcolor="#f5f5f5"><input name="title_bottom" id="title_bottom" type="text" class="fields2" value="<?php echo $record["title_bottom"];?>" /></td>
								</tr>
								<tr>
									<td><strong>Menu:</strong></td>
									<td><input name="menu" id="menu" type="text" class="fields2" value="<?php echo $record["menu"];?>" /></td>
								</tr>
								<tr>
									<td bgcolor="#f5f5f5"><strong>Color*:</strong></td>
									<td bgcolor="#f5f5f5">
										<table border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td><input type="radio" name="color" id="color" value="orange" <?php echo (($record["color"] == "orange") ? 'checked="checked"' : '');?> /></td>
												<td id="box-orange"></td>
												<td><input type="radio" name="color" id="color" value="green" <?php echo (($record["color"] == "green") ? 'checked="checked"' : '');?> /></td>
												<td id="box-green"></td>
												<td><input type="radio" name="color" id="color" value="blue" <?php echo (($record["color"] == "blue") ? 'checked="checked"' : '');?> /></td>
												<td id="box-blue"></td>
												<td><input type="radio" name="color" id="color" value="brown" <?php echo (($record["color"] == "brown") ? 'checked="checked"' : '');?> /></td>
												<td id="box-brown"></td>
												<td><input type="radio" name="color" id="color" value="grey" <?php echo (($record["color"] == "grey") ? 'checked="checked"' : '');?> /></td>
												<td id="box-grey"></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td bgcolor="#f5f5f5"><strong>Bottom Image:</strong></td>
									<td bgcolor="#f5f5f5">
										<input type="file" name="background" id="background" class="fields2" /><br /><br />
										<span id="note">Recommended size: no larger than 800 x 600 pixels</span></td>
								</tr>
								<?php if ($record["background"] != "") { ?>												
								<tr>
									<td bgcolor="#f5f5f5"></td>
									<td bgcolor="#f5f5f5"><img src="../../uploads/<?php echo $record["background"];?>" width="400" border="0" /><br /></td>
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
							<?php } else { ?>
							<form id="frmUpd" name="frmUpd" method="post" action="<?php echo $root;?>common/process.php" enctype="multipart/form-data" />
							<input type="hidden" id="id" name="id" value="<?php echo $_REQUEST["id"];?>" />
							<input type="hidden" id="req" name="req" value="upd" />
							<input type="hidden" id="table" name="table" value="Module" />
							<input type="hidden" id="folder" name="folder" value="pages/?visible=<?php echo $_REQUEST["visible"];?>" />
							<input type="hidden" id="position" name="position" value="<?php echo $record["position"];?>" />
							<input type="hidden" id="type" name="type" value="<?php echo $record["type"];?>" />
							<input type="hidden" id="show_home" name="show_home" value="<?php echo $record["show_home"];?>" />
							<input type="hidden" name="files" value="background" />
							<input type="hidden" name="files_old" value="<?php echo $record["background"];?>" />
							<input type="hidden" id="type" name="type" value="0" />
							<input type="hidden" id="title_bottom" name="title_bottom" value="" />
							<input type="hidden" id="menu" name="menu" value="" />
							<input type="hidden" id="color" name="color" value="" />
							<input type="hidden" id="type" name="type" value="5" />
							<input type="hidden" id="show_home" name="show_home" value="0" />
							<input type="hidden" id="background" name="background" value="" />
							
							<table width="100%" border="0" cellspacing="0" cellpadding="6">
								<tr>
									<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Update Page</span><br />
									Please Complete the Form. Mandatory Fields Marked *</td>
								</tr>
								<tr>
									<td width="27%" bgcolor="#f5f5f5"><strong>Title*:</strong></td>
									<td width="73%" bgcolor="#f5f5f5"><input name="title_top" id="title_top" type="text" class="fields2" value="<?php echo $record["title_top"];?>" /></td>
								</tr>
								<tr>
									<td><strong>Page Name*:</strong></td>
									<td><input name="page_name" id="page_name" type="text" class="fields2" value="<?php echo $record["page_name"];?>" /></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td align="right">
										<input name="btnSave" type="submit" class="but1" id="btnSave" value="Save" />
										<input name="btnCancel" type="button" class="but1" id="btnCancel" value="Cancel" onclick="history.back();" /></td>
								</tr>
							</table>
							</form>
							<?php } ?>
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
