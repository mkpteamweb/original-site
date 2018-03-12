<?php
/***************************************************************************
 *                                   pl.php
 *                            -------------------
 *   begin                : Tuesday', Aug 15', 2002
 *   copyright            : ('C) 2002 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id: pl.php, v1.03 2002/09/29 23:53:50 gimmi Exp $
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

$headerpage="include/header.htm";
$footerpage="include/footer.htm";
$infopage="include/info.htm";

$charsetencoding="iso-8859-2";
$uploadcentercaption="PHP Advanced Transfer Manager";
$uploadcentermessage="phpATM";

$mess=array(
"0" => "",
"1" => "StyczeÒ",
"2" => "Luty",
"3" => "Marzec",
"4" => "KwiecieÒ",
"5" => "Maj",
"6" => "Czerwiec",
"7" => "Lipiec",
"8" => "SierpieÒ",
"9" => "WrzesieÒ",
"10" => "Paºdziernik",
"11" => "Listopad",
"12" => "GrudieÒ",
"13" => "Dzisiaj",
"14" => "Wczoraj",
"15" => "Opis pliku",
"16" => "Operacje",
"17" => "WielkoÊ",
"18" => "Data wys„ania",
"19" => "W„aciciel",
"20" => "Wysy„aj",
"21" => "Plik w",
"22" => "Opis pliku",
"23" => "¶ci±gnij",
"24" => "Poprzedni katalog",
"25" => "Home",
"26" => "Plik",
"27" => "Drukuj",
"28" => "Zamknij",
"29" => "WrÛÊ",
"30" => "Ten plik zosta„ skasowany",
"31" => "Nie moøna otworzyÊ pliku",
"32" => "WrÛÊ",
"33" => "B„±d podczas Uploadowania!",
"34" => "musisz wybraÊ dobry plik",
"35" => "WrÛÊ",
"36" => "plik",
"37" => "wys„ano poprawnie",
"38" => "plik '",
"39" => "' juø istnieje",
"40" => "wys„ano poprawnie.",
"41" => "jÍzyk zosta„ wybrany.",
"42" => "witamy na PHP Advanced Transfer Manager",
"43" => "Ca„a pamiÍÊ zajÍta",
"44" => "pokaø ca„± zawartoÊ archiwum.",
"45" => "Plik Zip b„Ídny!",
"46" => "plik zawiera:",
"47" => "Data/Godzina",
"48" => "Katalog",
"49" => "nie moøna uploadowaÊ pliku o nazwie %s",
"50" => " przekracza maksymaln± d„ugoÊ.",
"51" => "Infomracje",
"52" => "Wybierz Skin",
"53" => "Skin",
"54" => "Witaj",
"55" => "Jest teraz godzina",
"56" => "Uøytkownik",
"57" => "Uøytkownik",
"58" => "Zarejestruj siÍ",
"59" => "Rejestracja",
"60" => "Niedziela",
"61" => "Poniedzia„ek",
"62" => "Wtorek",
"63" => "¶roda",
"64" => "Czwartek",
"65" => "Piatek",
"66" => "Sobota",
"67" => "Wyslij",
"68" => "Wyslij poprzez e-mail",
"69" => "plik zosta„ wys„any na adres %s.",
"70" => "plik wprowadzony przez uøytkownika: %s",
"71" => "Login",
"72" => "Logout",
"73" => "Wejdº",
"74" => "Anonim",
"75" => "Uøytkownik",
"76" => "Superuzytkownik",
"77" => "Administrator",
"78" => "Teren przywatny",
"79" => "Teren publiczny",
"80" => "nazwa lub has„o nie jest poprawne.",
"81" => "Profil",
"82" => "Obs„uga profilu",
"83" => "Has„o",
"84" => "Wybierz jÍzyk",
"85" => "Strefa czasowa",
"86" => "Uøyj czasu bierz±cego",
"88" => "Adres e-mail:",
"89" => "sprawdº czy adres email jest poprawny, zostanie wys„any kod aktywacyjny.",
"90" => "Wstawiono plik: ",
"91" => "Adres email uøyty do rejestracji",
"92" => "Rozmiar pliku: ",
"93" => "ProszÍ wprowadziÊ nazwe i has„o",
"94" => "naleøy siÍ zarejestrowaÊ.",
"95" => "Nie trzeba siÍ rejestrowaÊ. Rejestracja pozwoli na dodanie twojej nazwy do wszystkich plikÛw przez ciebie dodanych. Øaden inny uzytkowanik nie moøe wykorzystaÊ twojej nazwy do uploadowania pliku.",
"96" => "Skin wybrany.",
"97" => "Odwieø",
"98" => "Wprowadº nazwe i has„o dostÍpu",
"99" => "Jeszcze siÍ nie zarejestrowa„e? - Rejestracja jest tutaj!",
"100" => "Zapomnia„e has„a?",
"101" => "ProszÍ %s wrÛc %s i ponÛw prÛbe.",
"102" => "Logout wykonany poprawnie.",
"103" => "Nazwa uøytkownika nie jest poprawna. Nie moøna uøywaÊ powyøej 12 znakÛw, oraz znakÛw typu, '-', '_' i spacji.",
"104" => "Nazwa ktÛr± wybra„e ('%s') nie jest dostepna.",
"105" => "Wpisz ponownie has„o",
"106" => "Wpisane Has„a nie s± jednakowe.",
"107" => "Wpisany format adresu email nie jest poprawny.",
"108" => "DziÍkuje za zarejestrowanie siÍ. ZapamiÍtaj twoj± nazwe i has„o (Login i Password). Jeli zapomnisz te dane, mozliwe, øe ich nie odzyskasz, jednak postaramy sie ci pomÛc.",
"109" => "Moøesz %s wejÊ na Upload naciskaj±c tutaj %s",
"110" => "Wys„any zosta„ kod aktywacyjny na twÛj email. Wygenerowany dostep do konta jest waøny przez 2 dni, jesli nie potwierdzisz rejestracji zostanie ona usuniÍta.",
"111" => "Nie moøna ci±gn±Ê pliku, nie maj± one odpowiednich danych.",
"112" => "Aktywacja rejestracji",
"113" => "Aktywuj swoj± rejestracjÍ.",
"114" => "Kod aktywacyjny",
"115" => "Od tego momentu aktywowa„eÊ swoj± rejestracjÍ.",
"116" => "ProszÍ %s aby wszed„ tutaj %s.",
"117" => "Nazwa lub kod aktywacyjny nie s± poprawne.",
"118" => "Ten uzytkownik zosta„ juø aktywowany.",
"119" => "ChcÍ otrzymywaÊ dzienny raport:",
"120" => "ZmieÒ Has„o dostÍpu.",
"121" => "Stare Has„o",
"122" => "Wprowadzony wøytkownik nie jest aktywny.",
"123" => "Wprowadzony email nie jest poprawny.",
"124" => "Nowe has„o zosta„o przes„ane poprzez email",
"125" => "nie moøna wykonac operacji, nie znaleziono obiektu",
"126" => "ZmieÒ preferencje",
"127" => "Wykonaj",
"128" => "profil zapamietany.",
"129" => "has„o zmienione.",
"130" => "stare has„o nie jest poprawne.",
"131" => "Musisz podaÊ nowe has„o.",
"132" => "Konfiguracja",
"133" => "Upload",
"134" => "JÍzyk i strefa czasowa",
"135" => "Statystyka uøytkownika",
"136" => "TwÛj profil zosta„ wygenerowany:",
"137" => "Obs„uga uøytkownikÛw",
"138" => "GoÊ (tylko ogl±danie)",
"139" => "Uploader (tylko upload)",
"140" => "profil '%s' zmodyfikowany poprawnie",
"141" => "Ostatnie",
"142" => "Wszystkie",
"143" => "Zmiana adresu email jest waøna po potwierdzeniu. TwÛj kod aktywacyjny znajdziesz w skrzynce email. Wykonaj czynnoci opisane w emailu.",
"144" => "",
"145" => "ProszÍ wprowadziÊ dane i potwierdzic nowy adres email:",
"146" => "Kod aktywacyjny",
"147" => "Potwierdº nowy adres email",
"148" => "Wprowadzony uøytkownik nie ma nic do potwierdzenia.",
"149" => "Nazwa uzytkownika i kod potwierdzaj±cy nie s± poprawne.",
"150" => "twÛj nowy adres email '%s' zosta„ potwirdzony.",
"151" => "Pliki wys„ano",
"152" => "¶ci±gniÍto pliki",
"153" => "pliki prze emailowane",
"154" => "Data stworzenia profilu",
"155" => "Data ostatniego wejcia",
"156" => "Rola",
"157" => "Status aktywacji",
"158" => "Odebrano raport",
"159" => "E-mail",
"160" => "Ca„oÊ:",
"161" => "profil",
"162" => "Skasuj profil ",
"163" => "Popaø %s profil przy wielkoci di %s",
"164" => "konfiguracja",
"165" => "Edytuj plik",
"166" => "Edytuj plik",
"167" => "Iplikl %s zosta„ zmodyfikowany poprawnie",
"168" => "Zapisz",
"169" => "Skasuj",
"170" => "Skasuj plik",
"171" => "Mirror",
"172" => "Tak",
"173" => "Nie",
"174" => "Atktywny",
"175" => "Wys„any",
"176" => "Brak autoryzacji",
"177" => "Przykronam serwer nie moøe wykonaÊ programu pocztowego.",
"178" => "Rejestracja nie powiod„a siÍ, proszÍ spÛbowac pÛºniej",
"179" => "ProszÍ sprÛbowac pÛºniej",
"180" => "fplik zosta„ skasowany",
"181" => "nie posiadasz odpowiednich uprawnieÒ do skasowania pliku",
"182" => "katalog zosta„ skasowany",
"183" => "nie posiadasz uprawnieÒ do skasowania katalogu",
"184" => "katalog zosta„ stworzony",
"185" => "nie posiadasz uprawnieÒ do stworzenia katalogu",
"186" => "StwÛrz nowy katalog",
"187" => "Nazwa katalogu",
"188" => "StwÛrz katalog",
"189" => "inie mozna stworzyc katalogu, taki juz istnieje",
"190" => "musisz podaÊ normaln± nazwÍ katalogu",
"191" => "ZmieÒ",
"192" => "Nazwa pliku",
"193" => "ZmieÒ detale katalogu",
"194" => "nazwa obiektu zmieniona poprawnie.",
"195" => "nie posiadasz odpowiednich uprawnieÒ do zmiany nazwy obiektu",
"196" => "Wstawiono z„y root path, zmieÒ ustawienia w konfiguracji!",
"197" => "Wykoanj",
"198" => "nie mozna zmieniÊ nazwy, taki plik istnieje",
"199" => "Pliki ostatnio wgrane",
"200" => "Pliki najczÍciej ci±gane",
"201" => "nie mozna zmieniÊ, nazwa niedostÍpna",

//
// New strings introduced in version 1.02
//
"202" => "Adres web nie jest poprawny",
"203" => "Adres pliku",
"204" => "Wylij plik z adreseum http",

//
// New strings introduced in version 1.10
//
"205" => "Always stay logged",
"206" => "Can't execute: name not allowed",
"207" => "ip blocked",
"208" => "Your ip has been blocked by Administration!",
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
$sendfile_email_subject = 'Ø±dany plik';
$sendfile_email_body = '
Oto plik, ktÛry chcia„e dodtaÊ poprzez email

';
$sendfile_email_end = 'Mi„ego dnia,';

//
// Digest e-mail configuration
//
$digest_email_subject = "Dzienny raport";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Potwierdº zmianÍ emaila';
$confirm_email_body = 'Drogi uøytkowniku %s,

Poniewaø dbamy o bezpieczeÒstwo twoich danych, twÛj profil nie zosta„ jeszcze stworzony.

Aby go uruchomiÊ musisz wprowadziÊ kod aktywacyjny: %s
(UWAGA to nie jest password - has„o!)

AktywowaÊ rejestracjÍ-profil jest bardzo „atwo:
1. Idº na stwonÍ %s itam zostaniesz pokierowany ktok po kroku.
2. Wprowadº nazwÍ uøytkownika i email.
3. Wszystko zatwierdº .

';
$confirm_email_end = 'Mi„ego dnia,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Nowe has„o-password';
$chpass_email_body = 'Nazwa uøytkownika,

Nowe has„o Ë %s
Moøesz je zmieniÊ kiedy chcesz.

';
$chpass_email_end = 'Mi„ego dnia,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Potwierdº rejestracje';
$register_email_body = 'Uøytkowniku  %s,

DziÍkujemy, øe siÍ zarejestrowa„e

poniewaø dbamy o bezpieczeÒstwo twoich danych profil nie zosta„ jeszcze aktywowany.

Aby go aktywowaÊ musisz wpisaÊ kod aktywacyjny Ë: %s
(uwaga! to nie jest has„o-password)

AktywowaÊ rejestracjÍ-profil jest bardzo „atwo:
1. Idº na stwonÍ %s itam zostaniesz pokierowany ktok po kroku.
2. Wprowadº nazwÍ uøytkownika i email.
3. Wszystko zatwierdº .

';
$register_email_end = 'Mi„ego dnia,';

?>
