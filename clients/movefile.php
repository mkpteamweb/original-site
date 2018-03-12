<?php

/***************************************************************************
 *                                movefile.php
 *                            -------------------
 *   begin                : Thursday, April 8, 2004
 *   copyright            : ('C) 2004 MrScripto / Bugada Andrea
 *   email                : mrscripto@keyhosting.net
 *
 *   $Id: movefile.php, written for v1.20 PHP Advanced Transfer Manager
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

// MrScripto Mod for moving files between directories

define('IN_PHPATM', true);
$include_location = $HTTP_SERVER_VARS['DOCUMENT_ROOT'].dirname($HTTP_SERVER_VARS['PHP_SELF'])."/";
include($include_location.'include/conf.php');
include($include_location.'include/common.'.$phpExt);
$upload_path = "".$include_location."".$uploads_folder_name."";

function dirsubecho($path) {

	if ($dir = opendir($path))
	{
		while (false !== ($file = readdir($dir)))
		{
                         if (is_dir("$path/$file") && $file != '..' && $file != '.')
                         {
                              echo "<option value=\"$path/$file/\"";
                              echo ">&nbsp;&nbsp;&nbsp;$file</option>\n";
                                 dirsubecho("$path/$file");
                         }
                unset($file);
                }
                     closedir($dir);
         }
}

function direcho($path) {

	if ($dir = opendir($path))
	{
		while (false !== ($file = readdir($dir)))
		{
                         if (is_dir("$path/$file") && $file != '..' && $file != '.')
                         {
                              echo "<option value=\"$path/$file/\"";
                              echo ">$file</option>\n";
                                 dirsubecho("$path/$file");
                         }
                unset($file);
                }
                     closedir($dir);
         }
}

function show_move_file($filename, $owner_name)
{
	global $bordercolor, $headercolor, $font, $headerfont, $headerfontcolor, $tablecolor,
		   $directory, $order, $direction, $normalfontcolor, $mess, $phpExt, $upload_path;

  echo "  <br>";
  echo "  <table border=\"0\" width=\"90%\" bgcolor=\"$bordercolor\" cellpadding=\"4\" cellspacing=\"1\">\n";
  echo "    <tr>\n";
  echo "      <th align=\"left\" bgcolor=\"$headercolor\" valign=\"middle\"><font size=\"2\" face=\"$font\" color=\"$headerfontcolor\">$mess[M01]</font></th>\n";
  echo "    </tr>\n";
  echo "    <tr>\n";
  echo "        <td align=\"left\" bgcolor=\"$tablecolor\" valign=\"middle\">\n";
  echo "        <form name=\"movefile\" action=\"index.$phpExt?".SID."\" enctype=\"multipart/form-data\" method=\"post\" style=\"margin: 0\">\n";
  echo "          <input type=\"hidden\" name=\"filename\" value=\"$filename\">\n";
  echo "          <input type=\"hidden\" name=\"action\" value=\"movefile\">\n";
  echo "          <input type=\"hidden\" name=\"directory\" value=\"$directory\">\n";
  echo "          <input type=\"hidden\" name=\"order\" value=\"$order\">\n";
  echo "          <input type=\"hidden\" name=\"direction\" value=\"$direction\">\n";
  echo "          <table border=\"0\" width=\"100%\" cellpadding=\"4\">\n";
  echo "            <tr>\n";
  echo "              <td align=\"left\" width=\"15%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[19]</font></td>\n";
  echo "              <td align=\"left\" width=\"90%\" colspan=\"2\">\n";
  echo "                <font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$owner_name</font>\n";
  echo "              </td>\n";
  echo "            </tr>\n";
  echo "            <tr>\n";
  echo "              <td align=\"left\" width=\"15%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[192]</font></td>\n";
  echo "              <td align=\"left\" width=\"90%\" colspan=\"2\">\n";
  echo "                <font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$filename</font>\n";
  echo "              </td>\n";
  echo "            </tr>\n";
  echo "            <tr>\n";
  echo "              <td align=\"left\" width=\"15%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[M02]</font></td>\n";
  echo "              <td align=\"left\" width=\"90%\" colspan=\"2\">\n";
  echo "                <font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">";
  if($directory == "")
{
echo "$mess[M04]";
} else {
echo $directory;
}
  echo "              </font></td>\n";
  echo "            </tr>\n";
  echo "            <tr> \n";
  echo "              <td align=\"left\" width=\"15%\"><font size=\"1\" face=\"$font\" color=\"$normalfontcolor\">$mess[M03]</font></td>\n";
  echo "              <td align=\"left\" width=\"70%\">\n";
  echo "                <select name=\"new_dir\"><option value=\"\">$mess[M05]</option>\n";
  echo "                <option value=\"$upload_path/\">$mess[M06]</option>\n";
  direcho($upload_path);
  echo "</select>";
  echo "              </td>\n";
  echo "              <td align=\"right\" width=\"15%\">\n";
  echo "                <input type=\"submit\" class=\"vform\" value=\"$mess[M07]\" />\n";
  echo "              </td>\n";
  echo "            </tr>\n";

  echo "          </table>\n";
  echo "        </form>\n";

  echo "        </td>\n";
  echo "    </tr>\n";
  echo "    </table>\n";
}

//----------------------------------------------------------------------------
//      MAIN
//----------------------------------------------------------------------------

// Se l'utente non Ë loggato lo porto a index.php
if ($logged_user_name == '')
{
	header($header_location.'index.'.$phpExt.'?'.SID);
	exit;
}

switch($action)
{
	case 'move';
		list($upl_user, $upl_ip, $activated, $contents) = get_file_description("$uploads_folder_name/$directory/$filename", 0, 0);
		place_message($mess[M08], $mess[M01], basename(__FILE__));

		show_move_file($filename, $upl_user);
		break;

	default;
		header($header_location.'index.'.$phpExt.'?'.SID);
		break;
}

show_footer_page();
?>