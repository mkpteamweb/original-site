<?php
/***************************************************************************
 *                               admin_register.php
 *                            -------------------
 *   begin                : Wednesday', July 14', 2004
 *   copyright            : ('C) 2002 MrScripto
 *   email                : me@mrscripto.com
 *
 *   $Id: register.php, v1.11 2004/07/14 11:53:50 scripto Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License', or
 *   ('at your option) any later version.
 *
 ***************************************************************************/

define('IN_PHPATM', true);
$include_location = $HTTP_SERVER_VARS['DOCUMENT_ROOT'].dirname($HTTP_SERVER_VARS['PHP_SELF'])."/";
include($include_location.'include/conf.php');
include($include_location.'include/common.'.$phpExt);

function print_default()
{
global $mess, $font, $normalfontcolor, $selectedfontcolor, $homeurl, $languages;
global $uploadcentercaption,$require_email_confirmation, $mail_functions_enabled;
global $tablecolor,$bordercolor,$headercolor,$headerfontcolor,$allow_choose_language;
global $phpExt,$dft_language,$user_status,$logged_user_name;

echo "
	<br>
   <table border=\"0\" width=\"90%\" bgcolor=\"$bordercolor\" cellpadding=\"4\" cellspacing=\"1\">
     <tr>
       <th align=\"left\" bgcolor=\"$headercolor\" valign=\"middle\"><font size=\"2\" face=\"$font\" color=\"$headerfontcolor\">$mess[M21]</font></th>
     </tr>
     <tr>
         <td align=\"left\" bgcolor=\"$tablecolor\" valign=\"middle\">
         <form name=\"admin_register\" action=\"admin_register.$phpExt?".SID."\" enctype=\"multipart/form-data\" method=\"post\" style=\"margin: 0\">
           <input type=\"hidden\" name=\"action\" value=\"".ACTION_REGISTER."\">
           <table border=\"0\" width=\"100%\" cellpadding=\"4\">
             <tr>
               <td align=\"left\" width=\"40%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[57]</font></td>
               <td align=\"left\" width=\"60%\" colspan=2>
                 <input type=\"text\" name=\"user_name\" class=\"vform\" size=25>
               </td>
             </tr>
             <tr>
               <td align=\"left\" width=\"40%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[83]</font></td>
               <td align=\"left\" width=\"60%\" colspan=2>
                 <input type=\"password\" name=\"user_pass\" class=\"vform\" size=25>
               </td>
             </tr>
             <tr>
             <tr>
               <td align=\"left\" width=\"40%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[105]</font></td>
               <td align=\"left\" width=\"60%\" colspan=2>
                 <input type=\"password\" name=\"user_pass1\" class=\"vform\" size=25>
               </td>
             </tr>
             <tr>
               <td align=\"left\" width=\"40%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[88]";

echo "</font></td>
               <td align=\"left\" width=\"60%\">
                 <input type=\"text\" name=\"typed_email\" class=\"vform\" size=25>
               </td>
             </tr>

             <tr>
               <td align=\"left\" width=\"40%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[156]</font></td>
               <td align=\"left\" width=\"60%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">
                 <select name=\"typed_status\" class=\"vform\" size=\"1\">";

                   echo "<option value=\"0\">$mess[77]</option>";
                   echo "<option value=\"1\">$mess[76]</option>";
                   echo "<option value=\"2\" selected>$mess[75]</option>";
                   echo "<option value=\"3\">$mess[138]</option>";
                   echo "<option value=\"4\">$mess[139]</option>";

         echo "</select>
               </font></td>
             </tr>";


echo "
	         <tr>
	           <td align=\"left\" width=\"40%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[M20]</font></td>
	           <td align=\"left\" width=\"50%\">
	             <input type=\"checkbox\" name=\"send_mail_to_user\">
	           </td>
	           <td align=\"right\" width=\"10%\">
		  	<input type=\"submit\" value=\"$mess[58]\" class=\"vform\" />
	           </td>
	         </tr>
           </table>
         </form>
         </td>
     </tr>
     </table>
 </div>";
}

//----------------------------------------------------------------------------
//      MAIN
//----------------------------------------------------------------------------

// Se l'utente Ë giý loggato mostro il profilo
if ($logged_user_name == '' || $user_status != ADMIN)
{
    header($header_location.'login.'.$phpExt.'?'.SID);
    exit;
}

switch($action)
{
	case ACTION_SELECTSKIN;
		change_skin();
		place_message($mess[59], $mess[96], basename(__FILE__));
		print_default();
		break;

	case ACTION_REGISTER;
		$userfilename = "$users_folder_name/$user_name";

		// User name can contain only latin and number spases,
		// and space, "_", "-" symbols inside the name
		if (!eregi("^[a-z0-9][a-z0-9 _-]{0,10}[a-z0-9]$", $user_name))
		{
			place_message($mess[M21], $mess[103]." ".sprintf($mess[101], "<a href=\"admin_register.$phpExt?".SID."\" style=\"font-size:10px;\">", "</a>"), basename(__FILE__));
			break;
		}

		// Se l'utente esiste giý ritorno un errore
		if (file_exists($userfilename))
		{
			place_message($mess[M21], sprintf($mess[104], $user_name)." ".sprintf($mess[101], "<a href=\"admin_register.$phpExt?".SID."\" style=\"font-size:10px;\">", "</a>"), basename(__FILE__));
			break;
		}

		// Se le password non coincidono ritorno un errore
		if ($user_pass != $user_pass1)
		{
			place_message($mess[M21], $mess[106]." ".sprintf($mess[101], "<a href=\"admin_register.$phpExt?".SID."\" style=\"font-size:10px;\">", "</a>"), basename(__FILE__));
			break;
		}

		// Se l'indirizzo e-mail non Ë valido ritorno un errore
		if (!eregi( "^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$", $typed_email))
		{
			place_message($mess[M21], $mess[107]." ".sprintf($mess[101], "<a href=\"admin_register.$phpExt?".SID."\" style=\"font-size:10px;\">", "</a>"), basename(__FILE__));
			break;
		}


			//$logged_user_name = $user_name;
			$enc_user_pass = md5($user_pass);
			//srand((double)microtime()*1000000);
			$enc_logged_user_id = 0;
			$user_status = $typed_status;
			$user_temp_info = "";
			$user_wish_receive_digest = 0;
			$activationcode = 1;
			$user_account_creation_time = time();
			$language = $dft_language;

			// scrivo i dati nella sessione corrente
			//if ($major > 4 || $release > 0)
			//{
			//	$_SESSION['logged_user_name'] = $logged_user_name;
			//	$_SESSION['logged_user_id'] = $logged_user_id;
			//}
			//else
			//{
			//	$HTTP_SESSION_VARS['logged_user_name'] = $logged_user_name;
			//	$HTTP_SESSION_VARS['logged_user_id'] = $logged_user_id;
			//}


			// Create user account file
			$user_email = $typed_email;
			create_user_profile($user_name);

			if (isset($send_mail_to_user))
			{
				if ($send_mail_to_user == 'on')
				{
					//send an email
					//Change the body2 variables for the email to your users
					$headers="Content-Type: text; charset=iso-8859-1\n";
					$headers.="From: $admin_name <$admin_email>";
					$body2 = "Welcome! $user_name \n\n";
					$body2 .= "Your new account has been created at $domain_name. \n";
					$body2 .= "Access your new account by using the link below. \n\n";
					$body2 .= "Login page: $installurl/login.php \n\n";
					$body2 .= "Username is: $user_name \n";
					$body2 .= "Password is: $user_pass \n\n";
					$body2 .= "Please keep this email for future reference. \n";
					$body2 .= "If you have any questions contact us at: $admin_email \n\n";
					$body2 .= "Thanks \n$admin_name \n";
				    if (!$use_smtp)
				    {
               				$result = @mail($typed_email,"Your new account info from $admin_name",$body2,$headers);
               			    }
               			    else
               			    {
               				if (!defined('SMTP_INCLUDED'))
					{
						include($include_location.'include/smtp.'.$phpExt);
					}
						$result = smtpmail($typed_email,"Your new account info from $admin_name",$body2,$headers);
				    }

				}
			}

			place_message($mess[M21], $mess[M22], basename(__FILE__));
			print_default();
			break;

	default;
		place_message($mess[M21], $mess[M21], basename(__FILE__));
		print_default();
		break;
}

show_footer_page();
?>
