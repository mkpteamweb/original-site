<?php 
	$page = "home";
	include "common/vars.php";
	include "common/session.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php echo $admin_title;?></title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="scripts/scripts.js"></script>
</head>
<body>
<div id="main">
	<?php include "common/header.php";?>	
	
	<div id="content">
		<div id="left-col"><br /></div>
		<div id="center-col">
		<h2>Dashboard</h2>
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont" style="height:300px;"><br /></div>
			</div>
    </div>
		<div id="right-col"><br /></div>	
	</div>
</div>
<?php include "common/footer.php";?>
</body>
</html>
