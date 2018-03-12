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

					<div class="box-widgets" id="tables">
						<h3>Content &nbsp; &nbsp; <span class="txt-lblue"><?php echo $module["title_top"]." ".$module["title_bottom"];?></span></h3>
						<div class="box-widgets-cont">
						<div align="right" style="margin-top:10px;">
						<a href="add.php?id_module=<?php echo $_REQUEST["id_module"];?>&visible=<?php echo $_REQUEST["visible"];?>" class="links-actions"><span class="txt-green">+</span> Add New</a>
						&nbsp;|&nbsp;
						<a href="../pages/?visible=<?php echo $_REQUEST["visible"];?>" class="links-actions">Back</a>
						</div>
<?php
	if ($module["type"] == 6){
		$photos = getRecords("Gallery",false,"id_module=".$_REQUEST["id_module"],"position ASC");
		if (is_array($photos)){
?>						
							<table width="100%" border="0" cellspacing="0" cellpadding="5" class="cont">
<?php
			$count = 0;
			foreach($photos AS $photo){
				$item = '';
				$item .= '<td align="center" valign="top" style="color:#ccc;">';
				$item .= '<img src="../../uploads/'.$photo["photo_tmb"].'" height="100" border="0" /><br />';
				$item .= '<a href="upd.php?id='.$photo["id"].'&id_module='.$_REQUEST["id_module"].'&visible='.$_REQUEST["visible"].'" class="links-actions"><span class="txt-green">+</span> Edit</a>';
				$item .= '&nbsp;|&nbsp;';
				$item .= '<a href="javascript:confirmDelete('.$photo["id"].',\'Gallery\',\'gallery/?id_module='.$_REQUEST["id_module"].'&visible='.$_REQUEST["visible"].'\',\'photo_tmb,photo_dtl\');" class="links-actions"><span class="txt-red">x</span> Delete</a>';
				$item .= '</td>';

				$count++;
				switch ($count){
					case 1:
						echo '<tr>';
						echo $item;
						break;
					case 5:
						echo $item;
						echo '</tr>';
						echo '<tr><td colspan="5" height="20"></td></tr>';
						$count = 0;
						break;
					default:
						echo $item;
						break;
				}	
			}
			if (count($count) > 0) echo '<td colspan="'.(5 - $count).'"></td></tr>';					
?>
							</table>
<?php

		}	
	} else {
		$result = getRecords("Gallery",true,"id_module=".$_REQUEST["id_module"],"position ASC");
		$query = $result["query"];
		if ($query){
?>						
							<table width="100%" border="0" cellspacing="0" cellpadding="5" class="cont">
								<tr>
									<td align="center" colspan="4"><?php echo $result["navBar"];?></td>
								</tr>
								<tr>
									<td width="80%" height="25" class="table-r2"><strong>Title</strong></td>
									<td width="20%" height="25" class="table-r2"><strong>Actions</strong></td>
								</tr>
<?php
			while ($record = mysql_fetch_assoc($query)) {
				$class = ($class == "table-r1") ? "table-r2" : "table-r1";
?>								
								<tr>
									<td class="<?php echo $class;?>"><?php echo $record["title"];?></td>
									<td class="<?php echo $class;?>" style="color:#ccc;"><a href="upd.php?id=<?php echo $record["id"];?>&id_module=<?php echo $_REQUEST["id_module"];?>&visible=<?php echo $_REQUEST["visible"];?>" class="links-actions"><span class="txt-green">+</span> Edit</a> &nbsp;|&nbsp; <a href="javascript:confirmDelete(<?php echo $record["id"];?>,'Gallery','gallery/?id_module=<?php echo $_REQUEST["id_module"];?>&visible=<?php echo $_REQUEST["visible"];?>','background');" class="links-actions"><span class="txt-red">x</span> Delete</a></td>
								</tr>
<?php
			}
?>								
							</table>
<?php
		}
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
