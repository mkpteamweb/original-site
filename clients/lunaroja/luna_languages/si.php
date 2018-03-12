<?php
/***************************************************************************
 *                                   si.php
 *                            -------------------
 *   begin                : Wednesday', Sept 26', 2002
 *   copyright            : ('C) 2002 Stane Accetto
 *   email                : stane.accetto@siol.net
 *	 URL                  : http://stane.saax.com

 *   $Id: si.php,v 1.03 2002/09/26 21:00:00 Accetto Sta $
 *
 *	 Nota! Skripta pripada: Bugada Andrea, moj je samo prevod.
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License', or
 *   ('at your option) any later version.
 *
 ***************************************************************************/

$headerpage="include/header.htm";    // The optional header file (can absent)
$footerpage="include/footer.htm";    // The footer file (must present!)
$infopage="include/info.htm";        // The optional info file (can absent)

$charsetencoding="windows-1250";                 // The encoding for national symbols (i.e. for cyryllic  must be "windows-1251")
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "Januar",
"2" => "Februar",
"3" => "Marc",
"4" => "April",
"5" => "Maj",
"6" => "Junij",
"7" => "Julij",
"8" => "Avgust",
"9" => "September",
"10" => "Oktober",
"11" => "November",
"12" => "December",
"13" => "Danes",
"14" => "VËeraj",
"15" => "Datoteka",
"16" => "Uvrstitev",
"17" => "Velikost",
"18" => "Naloûeno",
"19" => "Lastnik",
"20" => "Naloûi datoteko",
"21" => "Lokalna datoteka",
"22" => "Opis datoteke",
"23" => "Download",
"24" => "Order",
"25" => "Domov",
"26" => "Datoteka",
"27" => "Natisni",
"28" => "Zapri",
"29" => "Pojdi nazaj",
"30" => "Ta datoteka je bila odstranjena",
"31" => "Ne morem odpreti datoteke",
"32" => "Pojdi nazaj",
"33" => "Napaka pri nalaganju!",
"34" => "Morate izbrati datoteko",
"35" => "Nazaj",
"36" => "Datoteka",
"37" => "je bila uspeöno naloûena",
"38" => "Datoteka z imenom",
"39" => "ûe obstoja",
"40" => "Datoteka je bila uspeöno naloûena",
"41" => "Izbira jezika je bila uspeöna",
"42" => "Dobrodoöli v  PHP Advanced Transfer Manager",
"43" => "Skupno uporabljen prostor",
"44" => "Prikaûi vse datoteke po datumu",
"45" => "Neveljavna ZIP datoteka!",
"46" => "Vsebina datoteke:",
"47" => "Datum/»as",
"48" => "Mapa",
"49" => "Prepovedano je naloûiti datoteko z imenom %s!",
"50" => "dovoljena velikost je preseûena",
"51" => "Informacija",
"52" => "Izberi Skin",
"53" => "Skin",
"54" => "Dobrodoöel",
"55" => "Trenutni Ëas",
"56" => "Uporabnik",
"57" => "Uporabniöko ime",
"58" => "Registriraj se",
"59" => "Registracija",
"60" => "Nedelja",
"61" => "Ponedeljek",
"62" => "Torek",
"63" => "Sreda",
"64" => "»etrtek",
"65" => "Petek",
"66" => "Sobota",
"67" => "Poölji",
"68" => "Poölji datoteko",
"69" => "Datoteka je bila poslana na naslov %s .",
"70" => "Datoteko je naloûil uporabnik: %s",
"71" => "Login",
"72" => "ZakljuËi",
"73" => "Vstopi",
"74" => "Anonimni uporabniks",
"75" => "Normalni uporabnik",
"76" => "Napredni uporabnik",
"77" => "Administrator",
"78" => "Osebno podroËje",
"79" => "Javno podroËje",
"80" => "Vpisali ste neveljavno ime raËuna ali geslo.",
"81" => "Moj profil",
"82" => "Vpogled/spreminjanje profila",
"83" => "Geslo",
"84" => "Izberi jezik",
"85" => "Izberi Ëasovno cono",
"86" => "Vaö tekoËi Ëas",
"88" => "Prosim, vnesi veljavni E-Mail naslov.",
"89" => "Vaö E-Mail naslov mora biti veljaven, ker vam bo na ta naslov poslana osebna aktivacijska koda",
"90" => "Datoteka je bila naloûena: ",
"91" => "Prosim, vnesite vaö E-Mail naslov, katerega ste vpisali ob registraciji.",
"92" => "Velikost datoteke: ",
"93" => "Prosim, zapiöite si vaöe ime in geslo",
"94" => "Registracija je obvezna. Prosim, da se registrirate.",
"95" => "Registracija ni potrebna. »e ûelite, da se vaöe ime pojavi poleg naloûene datoteke, potem se registrirajte. NihËe drug ne bo mogel uporabljati vaöega imena.",

"96" => "Skin je bil izbran.",
"97" => "Osveûi",
"98" => "Prosim, vpiöite svoje ime in geslo",
"99" => "äe vedno niste registrirani? - Registrirajte se tu!",
"100" => "Ste pozabili vaöe geslo?",
"101" => "Prosim, pojdite %s nazaj %s in znova poskusite.",
"102" => "Uspeöno ste se izkljuËili.",
"103" => "Ime uporabnika je neveljavno. Ime ne sme biti daljöe od 12 Ërk, lahko vsebuje latinske simbole / brez öumnikov/ in ötevilke. Ime lahko vsebuje tudi '-', '_', in space simbol.",
"104" => "Ime '%s' je ûe zasedeno.",
"105" => "Potrdi geslo",
"106" => "Gesli se ne ujemata.",
"107" => "Vneöena oblika E-Mail naslova je neveljavna.",
"108" => "Hvala, da ste se registrirali. Prosim, ne pozabite svojega gesla, ker je to öifrirano in vam ga ne moremo posredovati. V primeru, da ste ga pozabili, lahko uporabite program, kateri vam bo nakljuËno doloËil novo geslo in ga boste prejeli po E-Mailu.",
"109" => "Tukaj %s lahko vstopite v Upload Center. %s",
"110" => "Vaöa aktivacijska koda vam je bila poslana po E-Mailu. Vaö raËun morate aktivirati v roku 2 dni, ker bo v nasprotnem primeru avtomatiËno odstranjen.",
"111" => "nimate pravice za download te datoteke",
"112" => "Aktiviranje raËuna",
"113" => "Prosim, aktivirajte vaö raËun",
"114" => "Aktivacijska koda",
"115" => "Vaö raËun je sedaj aktiven.",
"116" => "Prosim %s tu vstopite %s.",
"117" => "Vneöeno ime raËuna ali aktivacijska koda je neveljavno.",
"118" => "RaËun je ûe aktiven.",
"119" => "Dnevno ûelim prejemati pregled naloûenih datotek po E-Mailu.",
"120" => "Spreminjanje gesla.",
"121" => "Staro geslo",
"122" => "Vneöeno ime raËuna ne obstoja.",
"123" => "Vneöeni e-mail naslov je neveljaven.",
"124" => "Novo geslo vam je bilo poslano po E-Mailu.",
"125" => "ne morem izvröiti, predmet ni najden",
"126" => "Spreminjanje nastavitev vaöega raËuna",
"127" => "Uporabi",
"128" => "Vaö profil je bil shranjen.",
"129" => "Vaöe geslo je bilo spremenjeno.",
"130" => "Vpisali ste neveljavno staro geslo.",
"131" => "Vpisati morate vaöe novo geslo.",
"132" => "Nastavitve",
"133" => "Naloûi",
"134" => "Jezik & Ëasovni pas",
"135" => "Statistika raËuna",
"136" => "Vaö raËun je bil ustvarjen:",
"137" => "Upravljanje uporabnikov",
"138" => "Obiskovalec (samo vpogled)",
"139" => "Naloûitelj (samo nalaganje)",
"140" => "RaËun '%s' je bil uspeöno spremenjen",
"141" => "Zadnji",
"142" => "Vsi",
"143" => "Novi E-Mail naslov bo veljaven öele s potrditvijo. Potrditvena koda vam je bila poslana na vaö novi E-mail naslov. Poglejte navodila v sporoËilu.",
"144" => "",
"145" => "Prosim, potrdite vaö novi E-Mail naslov.",
"146" => "Potrditvena koda",
"147" => "Potrdi",
"148" => "NiË ni potrjeno.",
"149" => "Vneöeno ime raËuna ali potrditvena koda je neveljavno.",
"150" => "Vaö novi E-Mail naslov '%s' je potrjen.",
"151" => "Naloûene datoteke",
"152" => "Files (datoteke) downloaded",
"153" => "Datoteke poslane po E-Mailu",
"154" => "RaËun je bil ustvarjen",
"155" => "Zadnji obisk",
"156" => "Status",
"157" => "Aktivni status",
"158" => "Prejem pregleda",
"159" => "E-mail",
"160" => "Skupno:",
"161" => "raËun(i)",
"162" => "Briöi raËun",
"163" => "Pokaûi %s raËun(e) od %s",
"164" => "Konfiguracija",
"165" => "Editiraj datoteke",
"166" => "Editiraj datoteko",
"167" => "Datoteka %s je bila uspeöno spremenjena",
"168" => "Shrani",
"169" => "Briöi",
"170" => "Briöi datoteke",
"171" => "Mirror",
"172" => "Da",
"173" => "Ne",
"174" => "Aktiven",
"175" => "Neaktiven",
"176" => "Neautoriziran",
"177" => "Obûalujem, streûnik ne more izvröiti mail programa.",
"178" => "Vaöa registracija ni uspela. Prosim, poskusite pozneje.",
"179" => "Prosim, poskusite pozneje.",
"180" => "datoteka je bila uspeöno brisana",
"181" => "nimate pravice brisati te datoteke",
"182" => "mapa je bila uspeöno brisana",
"183" => "nimate pravice brisati te mape",
"184" => "mapa je bila uspeöno ustvarjena",
"185" => "nimate pravice ustvariti nove mape",
"186" => "Ustvari novo mapo",
"187" => "Ime mape",
"188" => "Make dir",
"189" => "mapa ûe obstoja, prosim, izberite drugo ime",
"190" => "ime mape je obvezno",
"191" => "Spremeni",
"192" => "Datoteka",
"193" => "Spremeni datoteko / podrobnosti mape",
"194" => "predmet je bil uspeöno preimenovan.",
"195" => "nimate pravice preimenovati ta predmet",
"196" => "Root path ni pravilen. Preglejte nastavitve",
"197" => "Vrstni red po",
"198" => "preimenovanje ni bilo uspeöno, datoteka ûe obstoja",
"199" => "Zadnje naloûene datoteke",
"200" => "Najbolj pogosti download",
"201" => "preimenovanje ni bilo uspeöno, ime ni dovoljeno",
"202" => "Web naslov ni veljavem",
"203" => "http naslov datoteke",
"204" => "Naloûi datoteko s http naslovom",

//
// New strings introduced in version 1.10
//
"205" => "Always stay logged",
"206" => "Can't execute: name not allowed",
"207" => "IP address blocked",
"208" => "Your IP address has been blocked by Administration!",
"209" => "To obtain more infos contact the Administrator",

//
// New strings introduced in version 1.12
//
"210" => "Daily allowed Mb exceeded",
"211" => "Monthly allowed Mb exceeded",
"212" => "Daily allowed download Mb exceeded",
"213" => "Monthly allowed download Mb exceeded",
"214" => "Validate File",
"215" => "File Validated",
"216" => "Are you sure to delete",
"217" => "you don't have permission to validate that object",
"218" => "This file will be listed only after administration validation",
"219" => "File viewer"
);


//
// Send file e-mail configuration
//
$sendfile_email_subject = 'Zahtevana datoteka';
$sendfile_email_body = '
Tukaj je zahtevana datoteka po E-Mailu

';
$sendfile_email_end = 'Lep pozdrav,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Dnevni pregled";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Potrditev e-maila';
$confirm_email_body = 'Spoötovani uporabnik %s,

Ker nam je vaöa varnost pomembna, je nujno, da potrdite vaö novi e-mail naslov.

Vaöa osebna potrditvena koda je: %s

Aktiviranje e-mail naslova je preprosto:
1. ObiöËite nas  %s in mi vas bomo vodili
2. Vnesite ime vaöega raËuna in potrditveno kodo.
3. Kliknite na \'Potrdi\' gumb.

';
$confirm_email_end = 'Lep pozdrav,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Novo geslo';
$chpass_email_body = 'Spoötovani uporabnik,

Vaöe new geslo je %s

';
$chpass_email_end = 'Lep pozdrav,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Potrditev registracije';
$register_email_body = 'Spoötovani uporabnik %s,

Hvala lepa za registracijo.

Ker nam je vaöa varnost pomembna, je nujno, da potrdite vaö raËun.

Vaöa osebna aktivacijska koda je: %s
(pozor: to ni vaöe geslo)

Aktiviranje Vaöega raËuna je preprosto:
1. ObiöËite nas  %s in mi vas bomo vodili
2. Vnesite ime vaöega raËuna in aktivacijsko kodo.
3. Kliknite na \'Aktiviraj raËun\' gumb.

';
$register_email_end = 'Lep pozdrav,';
?>
