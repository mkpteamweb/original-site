<?php 
	include "common/dal.php";
	$id = $_REQUEST["id"];
	$module = getRecord("Module",$id);
	$contact = getRecord("Contact",1);	
	$audios = getRecord("Audio",1);
	$audioFile2 = $audios["audio2"];
	$audioFile3 = $audios["audio3"];
?>
<!doctype html>  
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="iso-8859-1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>MKP communications inc.</title>
<meta name="description" content="MKP communications inc.">
<meta name="author" content="NearSource">
    
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
<link rel="stylesheet" href="css/style.css?v=2"><!-- general styles -->  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script><!-- the jQuery from google -->
<script src="js/jquery.jplayer.min.js"></script><!-- plugin for a audio player  -->
<script>
	$(document).ready(function() {
		$("#jpId36").jPlayer( {
			ready: function() { // The $.jPlayer.event.ready event
				$(this).jPlayer("setMedia", { // Set the media
					mp3: "uploads/<?php echo $audioFile2;?>"
				});
			},
			swfPath: "js",
			supplied: "mp3"
		});
		
		$("#btnPlay").click( function() {
			$("#jpId36").jPlayer("play"); // Play.
		});
	
		$("#btnPause").click( function() {
			$("#jpId36").jPlayer("pause"); // Pause.
		});

		$("#jpId65").jPlayer( {
			ready: function() { // The $.jPlayer.event.ready event
				$(this).jPlayer("setMedia", { // Set the media
					mp3: "uploads/<?php echo $audioFile3;?>"
				});
			},
			swfPath: "js",
			supplied: "mp3"
		});
		
		$("#btnPlay").click( function() {
			$("#jpId65").jPlayer("play"); // Play.
		});
	
		$("#btnPause").click( function() {
			$("#jpId65").jPlayer("pause"); // Pause.
		});

	});
</script>
</head>
<body>
<div id="merger" align="center">
<table width="800" height="500" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td align="left">
			<a href="index.php"><img src="i/logo-mkp.gif" width="70" border="0" /></a><br />
			<div id="home">Home</div>
			<div id="title"><?php echo $module["title_top"];?></div><br />
			<?php echo ((!isset($_REQUEST["id_content"])) ? "Click on any thumbnail for case history and larger view" : "");?></td>
	</tr>
	<tr>
		<td align="center" style="padding-top:20px;">
<?php
	if (!isset($_REQUEST["id_content"])){

		$module_content = getRecords("Gallery",false,"id_module=".$id,"position ASC");
		if (is_array($module_content)){
			echo '<table border="0" cellspacing="0" cellpadding="0">';
			$count = 0;
			$content = '';
			$total = count($module_content);
			foreach($module_content as $content){
				$item = '';
				$item .= '<td align="center"><a href="?id='.$id.'&id_content='.$content['id'].'&total='.$total.'"><img title="" alt="" src="uploads/'.$content['photo_tmb'].'" height="200" border="0" /></a></td>';
	
				$count++;
				switch ($count){
					case 1:
						echo '<tr>';
						echo $item;
						echo '<td width="20"><td>';
						break;
					case 2:
						echo '<td width="20"><td>';
						echo $item;
						echo '</tr>';
						echo '<tr><td colspan="3" height="30"></td></tr>';
						$count = 0;
						break;
					default:
						echo $item;
						break;
				}
			}
			if (count($count) > 0) echo '<td colspan="'.(3 - $count).'"></td></tr>';		
			echo '</table>';
			echo $info;
		}
	
	} else {
		$id_content = $_REQUEST["id_content"];
		$total = $_REQUEST["total"];
		$content = getRecord("Gallery",$id_content);
		
		$breadcrumb = "";
		if ($content["position"] == 1){
			$breadcrumb	.= "Previous";
		} else {
			$position_prev = $content["position"] - 1;
			$prev = getRecords("Gallery",false,"id_module=".$id." AND position=".$position_prev,"position ASC");
			$breadcrumb	.= '<a href="?id='.$id.'&id_content='.$prev[0]["id"].'&total='.$total.'">Previous</a>';
		}

		$breadcrumb	.= '&nbsp;&nbsp;&nbsp;<a href="?id='.$id.'">Index</a>&nbsp;&nbsp;';

		if ($content["position"] == $total){
			$breadcrumb	.= "Next";
		} else {
			$position_next = $content["position"] + 1;
			$next = getRecords("Gallery",false,"id_module=".$id." AND position=".$position_next,"position ASC");
			$breadcrumb	.= '<a href="?id='.$id.'&id_content='.$next[0]["id"].'&total='.$total.'">Next</a>';
		}
		
		echo '<table border="0" cellspacing="0" cellpadding="0">';
		echo '<tr>';
		echo '<td align="center"><div id="subtitle">'.$content["title"].'</div></td>';
		echo '</tr>';
		echo '<tr><td align="center">'.$breadcrumb.'</td></tr>';
		echo '<tr>';
		echo '<td align="center">';		
		if ($id_content == 36 || $id_content == 65){
			echo '<div id="audioPlayer'.$id_content.'"><div id="jpId'.$id_content.'"></div><div id="link"><a href="#" id="btnPlay">play</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="btnPause">pause</a></div></div>';
		}
		echo '<img title="" alt="" src="uploads/'.$content['photo_dtl'].'">';
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td align="center">';		
		echo '<div id="subtitle" align="left">'.$content["description"].'</div>';
		echo '</td>';
		echo '</tr>';
		echo '</table>';
			
	}
?>		
		</td>
	</tr>
	<tr><td align="left" style="padding-top:10px;"><a href="mailto:<?php echo $contact["email"];?>">Contact MKP</a></td></tr>	
</table>
</div>
</body>
</html>
