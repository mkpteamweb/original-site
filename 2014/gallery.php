<?php 
	sleep(3);
	include "common/dal.php"; 
	$modules = getRecords("Module",false,"","position ASC");
	$audios = getRecord("Audio",1);
	$audioFile = $audios["audio1"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<meta name="viewport" content="width=980" />
<link rel="shortcut icon" href="favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
    
<link rel="stylesheet" href="css/style.css?v=2"><!-- general styles -->   
<link rel="stylesheet" href="css/colorbox.css" /><!-- styles for the lightbox -->

<script src="js/modernizr-1.6.min.js"></script>
    
<!-- all other scripts are at the end -->
</head>
<body>
<?php
		$module_content = getRecords("Gallery",false,"id_module=".$_REQUEST["id"],"position ASC");
		if (is_array($module_content)){
			echo '<div id="galleria" align="center">';
			foreach($module_content as $content){
				echo '<a href="uploads/'.$content['photo_dtl'].'"><img title="" alt="" src="uploads/'.$content['photo_tmb'].'"></a>';
			}
			echo '</div>';
		}
?>		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script><!-- the jQuery from google -->
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script><!-- jQuery library for the accordion functionality -->
<script src="js/galleria-1.2.4.min.js"></script><!-- plugin for a gallery  -->    
<script src="js/jquery.cycle.all.js"></script><!-- plugin for a gallery  -->  
<script>
	// Load the classic theme
	Galleria.loadTheme('js/classic/galleria.classic.min.js');    
	// Initialize Galleria
	$('#galleria').galleria({
							width: 880, // change this values according to your needs
							height: 580,
							autoplay: 5000
					});
</script>        
</body> 
</html> 