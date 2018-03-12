<?php include "common/vars.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Site</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="scripts/scripts.js"></script>
</head>
<body>
<div id="main">
	<div id="header">
		<div align="center" style="height:100px;"><img src="images/logo-mkp.gif" border="0" alt="<?php echo $site_name;?>"></div>
	</div>
	<div id="content">
		<div align="center" id="center-col-login">
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont">
					<form id="frmLogin" name="frmLogin" method="post" action="common/process.php">
					<input type="hidden" name="req" value="login" />
					<table width="100%" border="0" cellspacing="0" cellpadding="6">
						<tr>
							<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Control Access</span><br />
							Please Complete the Form. Mandatory Fields Marked *</td>
						</tr>
						<?php if (isset($_REQUEST["error"])){ ?>
						<tr><td colspan="2"><div class="red-msg">Login Failed. Please try again</div></td></tr>
						<?php } ?>
						<tr>
							<td width="27%" bgcolor="#f5f5f5"><strong>Username*:</strong></td>
							<td width="73%" bgcolor="#f5f5f5"><input name="username" type="text" class="fields3" id="username" /></td>
						</tr>
						<tr>
							<td bgcolor="#f5f5f5"><strong>Password*:</strong></td>
							<td bgcolor="#f5f5f5"><input name="pass" type="password" class="fields3" id="pass" /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td align="right"><input name="btnLogin" type="submit" class="but1" id="btnLogin" value="Login" /></td>
						</tr>
					</table>
					</form>
				</div>
			</div>
    </div>
	</div>
</div>
<?php include "common/footer.php";?>
</body>
</html>
