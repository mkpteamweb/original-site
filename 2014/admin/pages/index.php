<?php 
	$root = "../";
	$page = ($_REQUEST["visible"] == 1) ? "pages" : "invisibles";
	$title = ($_REQUEST["visible"] == 1) ? "Pages" : "Invisibles Pages";
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
			<h2><?php echo $title;?></h2>
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont">

					<div class="box-widgets" id="tables">
						<div class="box-widgets-cont">
						<div align="right"><a href="add.php?visible=<?php echo $_REQUEST["visible"];?>" class="links-actions"><span class="txt-green">+</span> Add New</a></div>
<?php
	$result = getRecords("Module",true,"show_home=".$_REQUEST["visible"],"position ASC");
	$query = $result["query"];
	if ($query){
?>						
							<table width="100%" border="0" cellspacing="0" cellpadding="5" class="cont">
								<tr>
									<td align="center" colspan="4"><?php echo $result["navBar"];?></td>
								</tr>
								<?php if ($_REQUEST["visible"] == 1){ ?>
								<tr>
									<td width="40%" height="25" class="table-r2"><strong>Title</strong></td>
									<td width="35%" height="25" class="table-r2"><strong>Menu</strong></td>
									<td width="25%" height="25" class="table-r2"><strong>Actions</strong></td>
								</tr>
								<?php } else { ?>
								<tr>
									<td width="70%" height="25" class="table-r2"><strong>Title</strong></td>
									<td width="30%" height="25" class="table-r2"><strong>Actions</strong></td>
								</tr>
								<?php } ?>
<?php
		while ($record = mysql_fetch_assoc($query)) {
			$class = ($class == "table-r1") ? "table-r2" : "table-r1";
			switch($record["type"]){
				case 4:
					$content_url = "contact";
					break;
				case 5:
				case 6:
					$content_url = "gallery";
					break;
				default:
					$content_url = "content";
					break;
			}
?>								
								<tr>
									<td class="<?php echo $class;?>"><?php echo $record["title_top"]." ".$record["title_bottom"];?></td>
									<?php if ($_REQUEST["visible"] == 1){ ?>
									<td class="<?php echo $class;?>"><?php echo $record["menu"];?></td>
									<?php } ?>
									<td class="<?php echo $class;?>" style="color:#ccc;">
									<a href="upd.php?id=<?php echo $record["id"];?>&visible=<?php echo $_REQUEST["visible"];?>" class="links-actions"><span class="txt-green">+</span> Edit</a>
									&nbsp;|&nbsp;
									<a href="javascript:confirmDelete(<?php echo $record["id"];?>,'Module','pages/?visible=<?php echo $_REQUEST["visible"];?>','background');" class="links-actions"><span class="txt-red">x</span> Delete</a>
									&nbsp;|&nbsp;
									<a href="../<?php echo $content_url;?>/?id_module=<?php echo $record["id"];?>&visible=<?php echo $_REQUEST["visible"];?>" class="links-actions"><span class="txt-green">*</span> View Content</a>
									<?php if ($_REQUEST["visible"] == 0){ ?>
									&nbsp;|&nbsp;
									<a href="javascript:;" class="links-actions" onClick="PopupCenter('../../<?php echo $record["page_name"];?>', 'MergerCommunications',880,700);"><span class="txt-green">*</span> Preview</a>
									<?php } ?>
									</td>
								</tr>
<?php
		}
?>
							</table>
<?php
	}
?>
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
