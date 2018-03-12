<?php 
	$root = "../";
	$page = "audio";
	include $root."common/dal.php";
	include $root."common/session.php";
	$record = getRecord("Audio",1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $admin_title;?></title>
<link href="<?php echo $root;?>css/styles.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $root;?>css/skin/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="<?php echo $root;?>scripts/scripts.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $root;?>scripts/jquery.jplayer.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#audioPlayer1").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				mp3: "../../uploads/<?php echo $record["audio1"];?>"
			});
		},
		swfPath: "../scripts",
		supplied: "mp3"
	});

	$("#audioPlayer2").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				mp3: "../../uploads/<?php echo $record["audio2"];?>"
			});
		},
		swfPath: "../scripts",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_interface_2"
	});

	$("#audioPlayer3").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				mp3: "../../uploads/<?php echo $record["audio3"];?>"
			});
		},
		swfPath: "../scripts",
		supplied: "mp3",
		cssSelectorAncestor: "#jp_interface_3"
	});
});
</script>
</head>
<body>
<div id="main">
	<?php include $root."common/header.php";?>		
	<div id="content">
		<div id="center-col">
			<h2>Audio</h2>
			<div class="box-widgets" id="elements">
				<div class="box-widgets-cont">

					<div class="box-widgets" id="elements">
						<div class="box-widgets-cont">
							<form id="frmUpd" name="frmUpd" method="post" action="<?php echo $root;?>common/process.php" enctype="multipart/form-data" />
							<input type="hidden" id="id" name="id" value="1" />
							<input type="hidden" id="req" name="req" value="upd" />
							<input type="hidden" id="table" name="table" value="Audio" />
							<input type="hidden" id="folder" name="folder" value="audio" />
							<input type="hidden" name="files" value="audio1,audio2,audio3" />
							<input type="hidden" name="files_old" value="<?php echo $record["audio1"];?>,<?php echo $record["audio2"];?>,<?php echo $record["audio3"];?>" />
							<table width="100%" border="0" cellspacing="0" cellpadding="6">
								<tr>
									<td colspan="2" style="padding-bottom:15px;"><span class="tit1">Update Audio Information</span><br />
									Please Complete the Form. Mandatory Fields Marked *</td>
								</tr>
								<tr>
									<td width="27%" bgcolor="#f5f5f5"><strong>Audio (Main Site Advertising):</strong></td>
									<td width="73%" bgcolor="#f5f5f5"><input type="file" name="audio1" id="audio1" class="fields2" /></td>
								</tr>
								<?php if ($record["audio1"] != "") {?>
								<tr>
									<td></td>
									<td>
										<div id="audioPlayer1" class="jp-jplayer"></div>
								
										<div class="jp-audio">
											<div class="jp-type-single">
												<div id="jp_interface_1" class="jp-interface">
													<ul class="jp-controls">
														<li><a href="#" class="jp-play" tabindex="1">play</a></li>
														<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
														<li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
														<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
														<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
													</ul>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div class="jp-play-bar"></div>
														</div>
													</div>
													<div class="jp-volume-bar">
														<div class="jp-volume-bar-value"></div>
													</div>
													<div class="jp-current-time"></div>
													<div class="jp-duration"></div>
												</div>
												<div id="jp_playlist_1" class="jp-playlist">
												</div>
											</div>
										</div>									
									</td>
								</tr>
								<?php } ?>
								<tr>
									<td><strong>Audio (Dime_MKPSamples):</strong></td>
									<td><input type="file" name="audio2" id="audio2" class="fields2" /></td>
								</tr>
								<?php if ($record["audio2"] != "") {?>
								<tr>
									<td></td>
									<td>
										<div id="audioPlayer2" class="jp-jplayer"></div>
								
										<div class="jp-audio">
											<div class="jp-type-single">
												<div id="jp_interface_2" class="jp-interface">
													<ul class="jp-controls">
														<li><a href="#" class="jp-play" tabindex="1">play</a></li>
														<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
														<li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
														<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
														<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
													</ul>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div class="jp-play-bar"></div>
														</div>
													</div>
													<div class="jp-volume-bar">
														<div class="jp-volume-bar-value"></div>
													</div>
													<div class="jp-current-time"></div>
													<div class="jp-duration"></div>
												</div>
												<div id="jp_playlist_2" class="jp-playlist">
												</div>
											</div>
										</div>									
									</td>
								</tr>
								<?php } ?>
								<tr>
									<td><strong>Audio (Advertising Samples):</strong></td>
									<td><input type="file" name="audio3" id="audio3" class="fields2" /></td>
								</tr>
								<?php if ($record["audio3"] != "") {?>
								<tr>
									<td></td>
									<td>
										<div id="audioPlayer3" class="jp-jplayer"></div>
								
										<div class="jp-audio">
											<div class="jp-type-single">
												<div id="jp_interface_3" class="jp-interface">
													<ul class="jp-controls">
														<li><a href="#" class="jp-play" tabindex="1">play</a></li>
														<li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
														<li><a href="#" class="jp-stop" tabindex="1">stop</a></li>
														<li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
														<li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
													</ul>
													<div class="jp-progress">
														<div class="jp-seek-bar">
															<div class="jp-play-bar"></div>
														</div>
													</div>
													<div class="jp-volume-bar">
														<div class="jp-volume-bar-value"></div>
													</div>
													<div class="jp-current-time"></div>
													<div class="jp-duration"></div>
												</div>
												<div id="jp_playlist_3" class="jp-playlist">
												</div>
											</div>
										</div>									
									</td>
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
