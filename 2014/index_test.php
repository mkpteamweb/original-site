<?php 
	sleep(2);
	include "common/dal.php"; 
	$modules = getRecords("Module",false,"","position ASC");
	$audios = getRecord("Audio",1);
	$audioFile = $audios["audio1"];
	$contact = getRecord("Contact",1);	

	/*
	 * This is the link placed on the bottom inside home slide
	*/
	$module_home_banner_link = "#module52";
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
<div id="container">
	<div id="side_nav">
		<h1><a href="#module0" title="MKP communications inc."><img src="i/logo-mkp.gif" alt="MKP communications inc." /></a></h1>
		<nav>
<?php
	//MENU
	if (is_array($modules)){
		echo '<ul id="nav">';
		foreach($modules as $module){
			if ($module["menu"] != ""){
				if ($module["type"] == 5){
					echo '<li><a href="javascript:;" id="'.$module['color'].'" onClick="PopupCenter(\'detail.php?id='.$module['id'].'\', \'MergerCommunications\',880,700);">'.$module['menu'].'</a></li>';
				} else if ($module["type"] == 6){
					echo '<li><a href="javascript:;" id="'.$module['color'].'" onClick="PopupCenter(\'gallery.php?id='.$module['id'].'\', \'Gallery\',880,580);">'.$module['menu'].'</a></li>';
				} else {
					echo '<li><a href="#module'.$module['id'].'" id="'.$module['color'].'">'.$module['menu'].'</a></li>';
				}
				$cont++;
			}
		}
		echo '<li id="client_login"><a href="http://www.mkpteam.com/clients/"><span>Client Login</span></a></li>';
		echo '
			<li id="socialbuttons">
				<a href="http://www.linkedin.com/company/908258" target="_blank"><img src="i/linkedin.png" width="24" height="24" /></a>
				<a href="http://www.facebook.com/mkpteam" target="_blank"><img src="i/fb.png" width="24" height="24" /></a>
			</li>';
		echo '<li id="contactMKP"><a href="mailto:'.$contact["email"].'">Contact MKP</a></li>';
		echo '<li id="copyright">&copy; 2013 MKP communications inc.</li>';
		echo '</ul>';
	}
?>		
		</nav>
		<!--<p class="contactMKP"><a href="mailto:<?php //echo $contact["email"];?>">Contact MKP</a>
		<p class="copyright">&copy; 2011 MKP communications, inc.</p>--> 
	</div>
	<!-- #side_nav --> 

	<div id="content">
		<div class="section">
<?php
	if (is_array($modules)){
		$toplineWidth = 780 * count($modules);
		echo '<div id="top-line" style="width:'.$toplineWidth.'px;"></div>';
		echo '<ul>';
		echo '<li class="sub" id="module0">';
		echo '<div id="module_home">';

		echo '<div id="text" style="font-size: 16px">';
		echo 'MKP is a creative marketing company with a difference. We\'re
					relentlessly innovative yet strategically disciplined... big-picture
					thinkers who grind every last detail... stalwart marketers who are
					great fun to work with.
					<br /><br />
					These traits have attracted some of the brightest corporations in
					the U.S., who rely on MKP for hard-hitting communications
					programs, advertising and sales collateral of the highest quality.
					<br /><br />
					In our opinion, you should too.<br /><br />';
		echo '<a href="javascript:;" id="button-mkpland"><img src="i/MKPLand-link.png" border="0" /></a>';
		echo '</div>';
		echo '<div id="module_home_banner">
					<a href="'.$module_home_banner_link.'" target="_self">
						<img src="i/banner1.jpg" />
					</a>
			   </div>';
		echo '</div>';

		echo '<div id="module_mkpland_wrapper" style="display:none;">
					<div id="module_mkpland">
						<div id="galleryImg_mkpland"> 
							<img src="uploads/17.jpg" alt="" />		
							<img src="uploads/16.jpg" alt="" />		
							<img src="uploads/15.jpg" alt="" />		
							<img src="uploads/14.jpg" alt="" />		
							<img src="uploads/13.jpg" alt="" />		
							<img src="uploads/12.jpg" alt="" />		
							<img src="uploads/11.jpg" alt="" />		
							<img src="uploads/10.jpg" alt="" />		
							<img src="uploads/09.jpg" alt="" />		
							<img src="uploads/08.jpg" alt="" />		
							<img src="uploads/07.jpg" alt="" />		
							<img src="uploads/06.jpg" alt="" />		
							<img src="uploads/05.jpg" alt="" />		
							<img src="uploads/04.jpg" alt="" />		
							<img src="uploads/03.jpg" alt="" />		
							<img src="uploads/02.jpg" alt="" />		
							<img src="uploads/01.jpg" alt="" />		
						</div>		
						<div id="galleryNav_mkpland"></div>
					</div>	
				</div>	
		';
		echo '</li>';
		foreach($modules as $module){
		if ($module["menu"] != ""){
				echo '<li class="sub" id="module'.$module["id"].'">';
				echo '<div id="title-'.$module['color'].'">';
				echo '<div id="top">'.$module["title_top"].'</div>';
				echo '<div id="bottom">'.$module["title_bottom"].'</div>';
				echo '</div>';
				
				switch ($module["type"]){
					case 1:
						$module_content = getRecords("Content",false,"id_module=".$module["id"],"position ASC");
						if (is_array($module_content)){
							echo '<div class="accordion" style="margin-top:80px; background-image:url(uploads/'.$module["background"].'); background-position:bottom; background-repeat:no-repeat;">';
							foreach($module_content as $content){
								echo '<h3><a href="#" class="'.$module['color'].'">'.$content['title'].'</a></h3>';
								echo '<div>';
								echo '<p>'.$content['description'].'</p>';
								echo '</div>';
							}
							echo '</div>';
							$team = getRecords("Team",false,"","position ASC");
							if (is_array($team)){
								echo '<div id="button-team"></div>';
								echo '<div id="team" align="center">';
								echo '<div id="left-arrow"><img id="previous-team" src="i/left-arrow-out.jpg" onMouseOver="this.src=\'i/left-arrow-over.jpg\'" onMouseOut="this.src=\'i/left-arrow-out.jpg\'" border="0" /></div>';
								echo '<div id="photos">';
								foreach($team as $member){
									echo '<img src="uploads/'.$member["photo_out"].'" border="0" onMouseOver="this.src=\'uploads/'.$member["photo_over"].'\'" onMouseOut="this.src=\'uploads/'.$member["photo_out"].'\'" />';
								}
								echo '</div>';
								echo '<div id="right-arrow"><img id="next-team" src="i/right-arrow-out.jpg" onMouseOver="this.src=\'i/right-arrow-over.jpg\'" onMouseOut="this.src=\'i/right-arrow-out.jpg\'" /></div>						';
								echo '</div>';
								echo '<div id="button-message-hillary"><img src="i/btn-message-hillary.jpg" border="0" /></div>';						
							}
						}
						break;
	
					case 2:
						$module_content = getRecords("Content",false,"id_module=".$module["id"],"position ASC");
						if (is_array($module_content)){
							echo '<div class="accordion-green" style="margin-top:80px;">';
							$info = '';
							$video = '';
							$num = 1;
							$total = count($module_content);
							foreach($module_content as $content){
	
								$info .= '<div id="module'.$module["id"].'_description'.$num.'" '.(($num == 1) ? '' : 'style="display:none;"').'>';
								$info .= '<div id="title-'.$module['color'].'">'.$content['title'].'</div>';
								$info .= '<div id="description">'.$content['description'].'</div>';
								$info .= '</div>';
								
								$show_video = "false";
								if ($content['video'] != ""){
									$video .= '<div id="module'.$module["id"].'_video'.$num.'" '.(($num == 1) ? '' : 'style="display:none;"').'>';
									$video .= $content['video'];
									$video .= '</div>';
									$show_video = "true";							
								}
								/*
								if ($num == 1 && $content["background"] != ""){
									$styleFirst = 'style="background-image:url(uploads/'.$content["background"].'); background-repeat:no-repeat; background-position:center top;"';
								}
								*/

								echo '<h3><a href="javascript:;" class="'.$module['color'].'2" onClick="showContent('.$module["id"].','.$num.','.$total.',\''.$content["background"].'\',\''.$show_video.'\');">'.$content['title'].'</a></h3>';
								echo '<div></div>';
								$num++;
							}
							echo '</div>';
							//echo '<div id="module'.$module["id"].'_photo" class="module_photo2" '.$styleFirst.'>';
							echo '<div id="module'.$module["id"].'_photo" class="module_photo2">';
							echo $video;
							echo '</div>';
							
							echo '<div id="module'.$module["id"].'_content" class="module_content2">';
							echo $info;						
							echo '</div>';
						}
						break;
	
					case 3:
						$module_content = getRecords("Content",false,"id_module=".$module["id"],"position ASC");
						if (is_array($module_content)){
							//$extra_style = ($module_content[0]['background'] != "") ? 'background-image:url(uploads/'.$module_content[0]['background'].'); background-repeat:no-repeat; background-position:bottom;' : '';
							//echo '<div id="module'.$module["id"].'_content" class="accordion" style="margin-top:80px; '.$extra_style.'" >';
							echo '<div id="module'.$module["id"].'_content" class="accordion" style="margin-top:80px;" >';
							foreach($module_content as $content){
								echo '<h3><a href="javascript:;" id="module'.$module["id"].'_content'.$content['id'].'" class="'.$module['color'].'" onClick="changeBackground('.$module["id"].',\''.$content['background'].'\');">'.$content['title'].'</a></h3>';
								echo '<div>';
								echo '<p>'.$content['description'].'</p>';
								echo '</div>';
							}
							echo '</div>';
						}
						break;
	
					case 4:
						$contact = getRecord("Contact",1);
						if (is_array($contact)){
							echo '<div id="contact-us">';
						
							$address = '';
							$address_title .= 'MKP communications inc., ';
							$address_format1 = '';
							$address_format2 = '';
							$phone = '';
							$fax = '';
							$email = '';
							if ($contact['address1'] != ""){
								$address .= $contact['address1'].'<br />';
								$address_title .= $contact['address1'];
								$address_format1 = str_replace(" ","+",$contact['address1']);
							}
						
							if ($contact['address2'] != ""){
								$address .= $contact['address2'].'<br />';
								$address_title .= $contact['address2'];
								$address_format2 = str_replace(" ","+",$contact['address2']);
							}
							
							//if ($contact['map'] != ""){
								//$address = '<a href="uploads/'.$contact['map'].'" id="module'.$module["id"].'_box" onClick="showThumbnails('.$module["id"].',0)" title="'.$address_title.'">'.$address.'</a><br />';
								
								$address = '<a href="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=MKP+Communications+inc.,+'.$address_format2.','.$address_format2.'&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=47.301626,93.076172&amp;vpsrc=6&amp;ie=UTF8&amp;hq=MKP+Communications+inc.,+'.$address_format1.'&amp;hnear=+'.$address_format2.'&amp;ll=40.736332,-73.993349&amp;spn=0.011381,0.018239&amp;z=15&amp;output=embed" id="module'.$module["id"].'_box" onClick="showMap('.$module["id"].')" title="'.$address_title.'">'.$address.'</a><br />';
							//}
						
							if ($contact['phone'] != ""){
								$phone = 'P '.$contact['phone'].'<br />';
							}
						
							if ($contact['fax'] != ""){
								$fax = 'F '.$contact['fax'].'<br /><br />';
							}
						
							if ($contact['email'] != ""){
								$email = '<a href="mailto:'.$contact['email'].'">'.$contact['email'].'</a>';
							}
						
							if ($contact['email'] != ""){
								$email = '<a href="mailto:'.$contact['email'].'">'.$contact['email'].'</a>';
							}
						
							if ($contact['background'] != ""){
								$background = '<img src="uploads/'.$contact['background'].'" style="margin-left:20px; margin-top:50px;" />';
							}
						
							echo $address;
							echo $phone;
							echo $fax;
							echo $email;
							echo '</div>';
							echo $background;
						}
						break;
	
					case 5:
						/*
						$module_content = getRecords("Gallery",false,"id_module=".$module["id"],"position ASC");
						if (is_array($module_content)){
							echo '<div id="module'.$module["id"].'-content" align="center" style="margin-top:80px;">';
							echo '<table border="0" cellspacing="0" cellpadding="0">';
							$count = 0;
							$num = 1;
							$content = '';
							foreach($module_content as $content){
								$item = '';
								$item .= '<td align="center"><a href="javascript:;" id="module'.$module["id"].'_box'.$num.'" onClick="showThumbnails('.$module["id"].','.$num.')"><img title="" alt="" src="i/'.$content['photo_tmb'].'" height="100"><br /><strong>'.$content['title'].'</strong></a></td>';
								
								$info .= '<div style="display:none">'; 
								$info .= '<div id="module'.$module["id"].'_inline'.$num.'">';
								$info .= '<div align="center"><img title="" alt="" src="i/'.$content['photo_dtl'].'" width="400" /></div>';
								$info .= '<hr />';
								$info .= '<p><strong>'.$content['title'].'</strong><br />'.$content['description'].'</p>';
								$info .= '</div>';
								$info .= '</div>';
					
								$count++;
								$num++;
								switch ($count){
									case 1:
										echo '<tr>';
										echo $item;
										echo '<td width="20"><td>';
										break;
									case 4:
										echo '<td width="20"><td>';
										echo $item;
										echo '</tr>';
										echo '<tr><td height="20"></td></tr>';
										$count = 0;
										break;
									default:
										echo $item;
										break;
								}
							}
							if (count($count) > 0) echo '<td colspan="'.(6 - $count).'"></td></tr>';		
							echo '</table>';
							echo '</div>';
							echo $info;
						}
						*/
						break;
	
					case 6:
						/*
						$module_content = getRecords("Gallery",false,"id_module=".$module["id"],"position ASC");
						if (is_array($module_content)){
							echo '<div id="module'.$module["id"].'">';
							echo '<div id="galleria" style="margin-top:80px;">';
							foreach($module_content as $content){
								echo '<a href="uploads/'.$content['photo_dtl'].'"><img title="" alt="" src="uploads/'.$content['photo_tmb'].'"></a>';
							}
							echo '</div>';
							echo '</div>';
						}
						*/
						break;

					case 7:
						$module_content = getRecords("Content",false,"id_module=".$module["id"],"position ASC");
						if (is_array($module_content)){
							$video = '';
							$num = 1;
							$total = count($module_content);

							echo '<div class="accordion" style="margin-top:80px; width:40%;">';
							foreach($module_content as $content){
								$show_video = "false";
								if ($content['video'] != ""){
									$video .= '<div id="module'.$module["id"].'_video'.$num.'" '.(($num == 1) ? '' : 'style="display:none;"').'>';
									$video .= $content['video'];
									$video .= '</div>';
									$show_video = "true";							
								}

								$show_audio = "false";
								if ($content['id'] == 9){
									$audio .= '<div id="module'.$module["id"].'_audio'.$num.'" '.(($num == 1) ? '' : 'style="display:none;"').'>';
									$audio .= '<div id="audioPlayer7"><div id="jpId" class="jpId"></div><div id="link"><a href="#" id="btnPlay">play</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" id="btnPause">pause</a></div></div>';
									$audio .= '</div>';
									$show_audio = "true";
								}
								/*
								if ($num == 1 && $content["background"] != ""){
									$styleFirst = 'style="background-image:url(uploads/'.$content["background"].'); background-repeat:no-repeat; background-position:center top;"';
								}
								*/
								
								echo '<h3><a href="javascript:;" class="'.$module['color'].'" onClick="showContent('.$module["id"].','.$num.','.$total.',\''.$content["background"].'\',\''.$show_video.'\',\''.$show_audio.'\');">'.$content['title'].'</a></h3>';
								echo '<div>';
								echo '<p>'.$content['description'].'</p>';
								echo '</div>';
								$num++;
							}
							echo '</div>';
							//echo '<div id="module'.$module["id"].'_photo" class="module_photo7" '.$styleFirst.'>';
							echo '<div id="module'.$module["id"].'_photo" class="module_photo7">';
							echo $video;
							echo $audio;
							echo '</div>';
							
						}
						break;

					case 8:
						$module_content = getRecords("Content",false,"id_module=".$module["id"],"position ASC");
						if (is_array($module_content)){
							//$extra_style = ($module_content[0]['background'] != "") ? 'background-image:url(uploads/'.$module_content[0]['background'].'); background-repeat:no-repeat; background-position:bottom;' : '';
							//echo '<div id="module'.$module["id"].'_content" class="accordion" style="margin-top:80px; border:none; '.$extra_style.'" >';
							echo '<div id="module'.$module["id"].'_content" class="accordion" style="margin-top:80px; border:none;" >';
							foreach($module_content as $content){
								echo '<h3><a href="javascript:;" id="module'.$module["id"].'_content'.$content['id'].'" class="'.$module['color'].'" style="border: none;" onClick="changeBackground('.$module["id"].',\''.$content['background'].'\');">'.$content['title'].'</a></h3>';
								echo '<div>';
								echo '<p>'.$content['description'].'</p>';
								echo '</div>';
							}
							echo '</div>';
						}
						break;
	
						
				}
				echo '</li>';
			
			}
		}
		echo '</ul>';
	}
?>		
		</div><!-- .section -->
	</div><!-- #content -->
</div>


    
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script><!-- the jQuery from google -->
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script><!-- jQuery library for the accordion functionality -->
		<script src='js/jquery.easing.1.3.js'></script><!-- easing plugin for scrolls and accordion  -->
		<script src='js/jquery.scrollTo-min.js'></script><!-- plugin for scrolling content  -->
		<script src='js/jquery.localscroll-min.js'></script><!-- plugin for scrolling content inside the same page  -->
		<script src="js/init.js"></script><!-- this is the controller of the scroll -->   
		<script src="js/jquery.accordion.pack.js"></script> <!-- plugin for accordion  -->
		<script src="js/jquery.colorbox-min.js"></script><!-- plugin for lightbox named Colorbox  -->
		<script src="js/galleria-1.2.4.min.js"></script><!-- plugin for a gallery  -->    
		<script src="js/jquery.cycle.all.js"></script><!-- plugin for a gallery  -->  
		<script src="js/jquery.jplayer.min.js"></script><!-- plugin for a audio player  -->   

		<!--[if lt IE 7 ]>
    	<script src="js/libs/dd_belatedpng.js"></script>
    	<script> DD_belatedPNG.fix('img, .png_bg'); </script>
  	<![endif]-->
		<script>
			$(document).ready(function() {
				// looks for any object with the class accordion and applies the animation
				$(".accordion").accordion({
					// type of animation that can be selected from the jquery.easing.1.3.js
					animated: 'easeInOutQuint',
					collapsible: true, 
					active: false					
				});

				$(".accordion-green").accordion({
					// type of animation that can be selected from the jquery.easing.1.3.js
					animated: 'easeInOutQuint',
					collapsible: true, 
					active: false 
				});

				//Remove class 'selected' to the all parent <li>
				$("ul#nav a").click(function() {			
					$("ul#nav a").each(function (i) {
						if ($(this).removeClass() == "selected") {
							$(this).removeClass();
						}
					});
					
					//Add class 'selected' to the current parent <li>
					$(this).addClass("selected");
				});
	
				$("#button-message-hillary").click(function() {			
					$('#button-message-hillary').css('display', 'none');
					$('#button-team').css('display', '');
					$('#team').css('display', 'none');
				});
	
				$("#button-team").click(function() {			
					$('#button-team').css('display', 'none');
					$('#button-message-hillary').css('display', 'block');
					$('#team').css('display', 'block');
				});

				$('#photos').cycle({
					fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
					prev:   '#previous-team', 
					next:   '#next-team', 
					timeout: 0 				
				});

				$("#jpId").jPlayer( {
					ready: function() { // The $.jPlayer.event.ready event
						$(this).jPlayer("setMedia", { // Set the media
							mp3: "uploads/<?php echo $audioFile;?>"
						});
					},
					swfPath: "js",
					supplied: "mp3"
				});
				
				$("#btnPlay").click( function() {
					$("#jpId").jPlayer("play"); // Play.
				});
			
				$("#btnPause").click( function() {
					$("#jpId").jPlayer("pause"); // Pause.
				});

				var gallery_html = $("#module_mkpland_wrapper").html();
				$("#button-mkpland").click(function() {			
					//$('#module_home').css('display', 'none');
					$("#module_mkpland_wrapper").remove();
					//$('#module_mkpland_wrapper').css('display', 'block');
				
					$.colorbox({
						html: gallery_html,
						width: 660,
						height: 645
						
					});

					$('#galleryImg_mkpland').cycle({
						fx:     'fade',
						pager:  '#galleryNav_mkpland'
					});
					
				});
				
			});

			// Load the classic theme
			Galleria.loadTheme('js/classic/galleria.classic.min.js');    
			// Initialize Galleria
			$('#galleria').galleria({
									width: 700, // change this values according to your needs
									height: 410,
									autoplay: 5000
							});


			function showThumbnails(id,num){
				$(document).ready(function(){
					if (num == 0){
						$("#module"+id+"_box").colorbox({transition:"fade"});
					} else {				
						$("#module"+id+"_box"+num).colorbox({width:"50%", inline:true, href:"#module"+id+"_inline"+num});				
					}
				})
			}		

			function showMap(id){
				$(document).ready(function(){
					$("#module"+id+"_box").colorbox({width:"80%", height:"80%", iframe:true});				
				})
			}		
			
			function showContent(id_module,id,total,image,video,audio){
				$(document).ready(function(){
					for (i=1;i<=total;i++){
						//$('#module_description'+i).css('display', 'none');
						$('#module'+id_module+'_video'+i).css('display', 'none');
						$('#module'+id_module+'_audio'+i).css('display', 'none');
					}
					$('#module'+id_module+'_content').css('display', '');
					//$('#module_description'+id).css('display', '');

					if (image != ""){
						$('#module'+id_module+'_photo').css('background-image', 'url(uploads/'+image+')');
						$('#module'+id_module+'_photo').css('background-repeat', 'no-repeat');
						$('#module'+id_module+'_photo').css('background-position', 'center top');
					} else {
						$('#module'+id_module+'_photo').css('background-image', '');
					}

					if (video == 'true'){
						$('#module'+id_module+'_video'+id).css('display', '');
					}

					if (audio == 'true'){
						$('#module'+id_module+'_audio'+id).css('display', '');
					}
				})
			}
			
			function changeBackground(id,image){
				$('#module'+id+'_content').css('background-image', 'url(uploads/'+image+')');
				$('#module'+id+'_content').css('background-repeat', 'no-repeat');
				$('#module'+id+'_content').css('background-position', 'bottom');
			}
			
			function PopupCenter(URL,title,width,height) {
				var left = (screen.width/2)-(width/2);
				var top = (screen.height/2)-(height/2);
				if (title == "Gallery"){
					parameters = 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+width+', height='+height+', top='+top+', left='+left
				} else { 
					parameters = 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=no, width='+width+', height='+height+', top='+top+', left='+left
				}
				var targetWin = window.open (URL, title, parameters);
			}			
		</script>        
        
    <!-- change the UA-xxxxxxxx-x to be your site's ID -->
    <script> var _gaq = [['_setAccount', 'UA-xxxxxxxx-x'], ['_trackPageview']]; (function(d, t) { var g = d.createElement(t), s = d.getElementsByTagName(t)[0]; g.async = true; g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; s.parentNode.insertBefore(g, s); })(document, 'script'); </script>

</body> 
</html> 