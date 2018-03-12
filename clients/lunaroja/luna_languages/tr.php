<?php
/***************************************************************************
 *                                   tr.php
 *                            -------------------
 *   begin                : Tuesday', Mar 26', 2004
 *   copyright            : ('C) 2002 Bugada Andrea
 *   email                : phpATM@free.fr
 *
 *   $Id: tr.php, v1.10 2004/03/26 23:53:50 bugada Exp $
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

$headerpage="include/header.htm";    // The optional header file (can absent)
$footerpage="include/footer.htm";    // The footer file (must present!)
$infopage="include/info.htm";        // The optional info file (can absent)

$charsetencoding="windows-1254";                 // The encoding for national symbols (i.e. for cyryllic  must be "windows-1251")
$uploadcentercaption="Php Geliœmiœ Transfer Y–neticisi";
$uploadcentermessage="T¸rkÁeye Mert Ulaœ taraf›ndan Áevrilmiœtir";

$mess=array(
"0" => "",
"1" => "Ocak",
"2" => "Þubat",
"3" => "Mart",
"4" => "Nisan",
"5" => "May›s",
"6" => "Haziran",
"7" => "Temmuz",
"8" => "A•ustos",
"9" => "Eyl¸l",
"10" => "Ekim",
"11" => "Kas›m",
"12" => "Aral›k",
"13" => "Bug¸n",
"14" => "D¸n",
"15" => "Dosya Ad›",
"16" => "Pop¸larite",
"17" => "Boyutu",
"18" => "Y¸klenen",
"19" => "Sahibi",
"20" => "Dosya Y¸kle",
"21" => "Yerel Dosya",
"22" => "Dosya Tan›m›",
"23" => "Y¸kle",
"24" => "S›rala",
"25" => "Anasayfa",
"26" => "Dosya",
"27" => "Yazd›r",
"28" => "Kapat",
"29" => "Geri Git",
"30" => "Bu dosya kald›r›lm›œt›r",
"31" => "Dosyay› aÁam›yorum",
"32" => "Geri Git",
"33" => "Dosyay› y¸klerken hata oluœtu !",
"34" => "Bir dosya seÁmelisiniz",
"35" => "Geri",
"36" => "Dosya",
"37" => "baœar›l› bir œekilde y¸klendi",
"38" => "Dosya ad›",
"39" => "zaten var",
"40" => "Dosya baœar›l› bir œekilde y¸klendi",
"41" => "Dil baœar›l› bir œekilde seÁildi",
"42" => "Php Geliœmiœ Transfer Y–neticisine hoœ geldiniz",
"43" => "Toplam kullan›lan alan",
"44" => "T¸m g¸nler iÁindeki dosyalar› g–ster",
"45" => "Yanl›œ/Hasarl› ZIP dosyas›!",
"46" => "Arœiv iÁerikleri:",
"47" => "G¸n/Zaman",
"48" => "Dizin",
"49" => "%s isminde bir dosya y¸klemeniz yasakt›r!",
"50" => "izin verilen dosya boyutunu aœ›yor",
"51" => "Bilgi",
"52" => "G–r¸n¸m seÁin",
"53" => "G–r¸n¸m",
"54" => "Hoœgeldiniz",
"55" => "Þu anki zaman",
"56" => "Kullan›c›",
"57" => "Kullan›c› Ad›",
"58" => "Kay›t Ol",
"59" => "Kaydolma",
"60" => "Pazar",
"61" => "Pazartesi",
"62" => "Sal›",
"63" => "«arœamba",
"64" => "Perœembe",
"65" => "Cuma",
"66" => "Cumartesi",
"67" => "G–nder",
"68" => "Dosyay› maille g–nder",
"69" => "Dosya baœar›yla %s addresine g–nderilmiœtir.",
"70" => "Kullan›c› taraf›ndan y¸klenen dosya: %s",
"71" => "Sisteme Giriœ",
"72" => "Sistemden «›k›œ",
"73" => "Gir",
"74" => "Anonymous",
"75" => "Normal User",
"76" => "Power User",
"77" => "Administrator",
"78" => "Private zone",
"79" => "Public zone",
"80" => "Yanl›œ bir kullan›c› ad› veya œifre girdiniz.",
"81" => "Profilim",
"82" => "Profilimi g–r¸nt¸le/de•iœtir",
"83" => "Þifre",
"84" => "Dil seÁiniz",
"85" => "Zaman dilimi seÁiniz",
"86" => "Þu anki zaman",
"88" => "L¸tfen geÁerli bir e-mail adresi giriniz.",
"89" => "E-mail hesab›n›z›n aktif oldu•una emin olun, Á¸nk¸ size –zel aktivasyon kodunuz bu e-mail adresine g–nderilecektir.",
"90" => "Dosya y¸klendi: ",
"91" => "L¸tfen kay›t s›ras›nda yazd›•›n›z e-mail hesab›n›z› giriniz.",
"92" => "Dosya boyutu: ",
"93" => "L¸tfen isminizi ve œifrenizi yaz›n›z",
"94" => "Kay›t olmak gereklidir. L¸tfen kay›t olunuz.",
"95" => "Kay›t olman›z gerekmemektedir. E•er t¸m y¸kledi•iniz dosyalara isminizi eklemek isterseniz kay›t olabilirsiniz. Baœka hiÁkimse kendi dosylar›n› y¸klemek iÁin sizin ad›n›z› kullanamaz.",
"96" => "G–r¸n¸m seÁildi.",
"97" => "Yenile",
"98" => "L¸tfen kay›t isminizi ve œifrenizi giriniz",
"99" => "Hala kay›t olmad›n›zm›? - Buradan kay›t olun!",
"100" => "Þifrenizimi unuttunuz?",
"101" => "L¸tfen, geri %s gidin %s ve tekrar deneyin.",
"102" => "Baœar›l› olarak sistemden Á›kt›n›z.",
"103" => "Kullan›c› ad› geÁersiz. Kullan›c› ad› 12 sembolden uzun olmamal› ve latin harfleri ve numaralardan oluœmal›d›r. Kullan›c› ad› ayn› zamanda '-', '_', ve boœluk sembollerini iÁinde bar›nd›rmamal›d›r.",
"104" => "SeÁmiœ oldu•unuz '%s' baœkas› taraf›ndan al›nm›œt›r.",
"105" => "Þifreyi do•rula",
"106" => "Þifreler birbirleriyle uymuyor.",
"107" => "Girilen e-mail format› geÁersizdir.",
"108" => "Kay›t oldu•unuz iÁin teœekk¸rler. Þifreniz veritaban›m›zda kripte edildi•i iÁin œifrenizi size geri bildiremiyoruz, bu sebeple l¸tfen œifrenizi unutmay›n›z. Ne var ki œifrenizi unutman›z durumunda emailinize yeni ve rasgele bir œifre yarat›l›p g–nderilecektir.",
"109" => "Buradan %s Y¸kleme alan›na giriœ yapabilirsiniz. %s",
"110" => "Aktivasyon kodunuz emailinize g–nderilmiœtir. 2 g¸n iÁinde hesab›n›z› aktive etmezseniz hesab›n›z otomatik olarak silinecektir.",
"111" => "Bu dosyay› y¸klemek iÁin gerekli izne sahip de•ilsiniz",
"112" => "Hesab› aktive et",
"113" => "L¸tfen hesab›n›z› aktive ediniz",
"114" => "Aktivasyon kodu",
"115" => "Hesab›n›z œu anda aktiftir.",
"116" => "L¸tfen %s buradan giriœ yap›n›z %s.",
"117" => "Girmiœ oldu•unuz hesap ad› veya aktivasyon kodu geÁersizdir.",
"118" => "Hesap zaten aktif durumda.",
"119" => "Emailime g¸nl¸k olarak y¸klenen dosyalar›n listesini g–nderilmesini istiyorum.",
"120" => "Þifrenizi de•iœtirin.",
"121" => "Eski œifreniz",
"122" => "Girilen hesap ad› geÁersizdir.",
"123" => "Girilen e-mail adresi geÁersizdir.",
"124" => "Yeni œifreniz e-mailinize g–nderilmiœtir.",
"125" => "iœlemi gerÁekleœtiremiyorum, obje bulunamad›",
"126" => "Hesab›n›zdaki ayarlar› –zelleœtirin",
"127" => "Uygula",
"128" => "Profiliniz kaydedilmiœtir.",
"129" => "Þifreniz de•iœtirilmiœtir.",
"130" => "÷nceki œifrenizi yanl›œ girdiniz.",
"131" => "Yeni œifrenizi belrlemeniz gerekmektedir.",
"132" => "Ayarlar",
"133" => "Y¸kle",
"134" => "Dil & zaman dilimi",
"135" => "Hesap istatistikleri",
"136" => "Hesab›n›z yarat›lm›œt›r:",
"137" => "Kullan›c› y–netimi",
"138" => "G–zleyici (sadece izleyebilir)",
"139" => "Y¸kleyici (sadece y¸kleme yapabilir)",
"140" => "Hesap '%s' baœar›yla de•iœtirilmiœtir",
"141" => "Son",
"142" => "Hepsi",
"143" => "Yeni e-mail adresi onayland›ktan sonra aktif olur. Onay kodu e-maili adresinize g–nderilmiœtir. E-mailin iÁindeki aÁ›klamalara bak›n›z.",
"144" => "",
"145" => "L¸tfen yeni e-mail adresinizi onaylay›n.",
"146" => "Onay kodu",
"147" => "Onayla",
"148" => "Onaylanacak birœey bulunamad›.",
"149" => "Girilen hesap ad› veya onay kodu geÁersizdir.",
"150" => "Yeni e-mail adresiniz '%s' onaylanm›œt›r.",
"151" => "Dosyalar y¸klendi",
"152" => "Dosyalar indirildi",
"153" => "Dosyalar e-mail ile g–nderildi",
"154" => "Hesap yarat›ld›",
"155" => "Son eriœim zaman›",
"156" => "Durum",
"157" => "Aktif durum",
"158" => "Haberleri al",
"159" => "e-mail",
"160" => "Toplam:",
"161" => "hesap(s)",
"162" => "Hesab› sil",
"163" => "G–sterilen %s hesaplar›n(s) %s",
"164" => "Y¸kleme alan›n› ayarla",
"165" => "Dosyalar› d¸zenle",
"166" => "Dosyay› d¸zenle",
"167" => "Dosya %s baœar›yla de•iœtirilmiœtir",
"168" => "Kaydet",
"169" => "Sil",
"170" => "Dosyalar› sil",
"171" => "alternatif",
"172" => "Evet",
"173" => "Hay›r",
"174" => "Aktif",
"175" => "Deaktif",
"176" => "ðzinsiz",
"177" => "Ðzg¸n¸m ama sunucu posta program›n› Áal›œt›ramad›.",
"178" => "Kay›d›n›z baœar›s›z oldu. L¸tfen daha sonra tekrar deneyin.",
"179" => "L¸tfen daha sonra tekrar deneyin.",
"180" => "Dosya baœar›yla silindi",
"181" => "Bu dosyay› silmek iÁin yetkiniz bulunmamaktad›r",
"182" => "Dizin baœar›yla silinmiœtir",
"183" => "Bu dizini silmek iÁin yetkiniz bulunmamaktad›r",
"184" => "dizin baœar›yla yarat›lm›œt›r",
"185" => "Dizin yaratmak iÁin yetkiniz bulunmamaktad›r",
"186" => "Yeni dizin yarat",
"187" => "Dizin ad›",
"188" => "Dizin yarat",
"189" => "dizin zaten mevcut, l¸tfen farkl› bir ad seÁiniz",
"190" => "bir dizin ismi belirlemek zorundas›n›z",
"191" => "De•iœtir",
"192" => "Dosya Ad›",
"193" => "Dosyay› de•iœtir / dizin detaylar›",
"194" => "objenin ismi baœar›yla de•iœtirildi.",
"195" => "bu dosyan›n ismini de•iœtirmek iÁin yetkiniz yok",
"196" => "K–k dizini do•ru de•il. Ayarlar› kontrol ediniz",
"197" => "Buna g–re s›rala",
"198" => "isim de•iœtirilme baœar›s›z oldu, dosya zaten mevcut",
"199" => "Son y¸klenenler",
"200" => "En Áok y¸klenenler",
"201" => "isim de•iœtirilme baœar›s›z oldu, bu isme izin verilmemektedir",

//
// New strings introduced in version 1.02
//
"202" => "Girdi•iniz url adresi geÁersizdir",
"203" => "Dosya http adresi",
"204" => "Dosyay› http adresinden y¸kle",

//
// New strings introduced in version 1.10
//
"205" => "Her zaman kay›tl› kal",
"206" => "ðœlem yap›lam›yor: bu isime izin verilmiyor",
"207" => "IP adresi bloke olmuœtur",
"208" => "Ip adresiniz y–netici taraf›ndan bloke edilmiœtir!",
"209" => "Daha detayl› bilgi iÁin y–neticiye baœvurunuz",


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
$sendfile_email_subject = 'ðstenen dosya';
$sendfile_email_body = '
E-mail ile g–nderilmesini istedi•iniz dosya

';
$sendfile_email_end = 'Sayg›lar,';

//
// Digest e-mail configuration
//
$digest_email_subject = "G¸nl¸k liste";

//
// Confirm new e-mail configuration
//
$confirm_email_subject = 'Yeni e-mailinizi onaylay›n';
$confirm_email_body = 'Say›n %s,

G¸venli•iniz bizim iÁin –nemli oldu•undan yeni e-mail adresinizin bu al›nd›dan sonra onaylanmas› gerekmektedir.
Kiœisel onay kodunuz: %s

E-mail adresinizi aktive etmek Áok basittir:
1. Sitemizi bu adresten %s ziyaret edin ve biz size bu iœlemler s›ras›nda yol g–sterelim
2. Hesab›n›z›n ad›n› ve onay kodunu girin.
3. Onayla \'Confirm\' d¸•mesine t›klay›n.

';
$confirm_email_end = 'Sayg›lar,';

//
// Send password e-mail configuration
//
$chpass_email_subject = 'Yeni œifre';
$chpass_email_body = 'Say›n kullan›c›,

Yeni œifreniz %s olarak atanm›œt›r

';
$chpass_email_end = 'Sayg›lar,';

//
// Confirm registration e-mail configuration
//
$register_email_subject = 'Kayd› Onayla';
$register_email_body = 'Say›n %s,

Kay›t oldu•unuz iÁin teœekk¸r ederiz.

G¸venli•iniz bizim iÁin –nemli oldu•undan yeni e-mail adresinizin bu al›nd›dan sonra onaylanmas› gerekmektedir.

Kiœisel onay kodunuz: %s
(not: bu sizin œifreniz de•ildir)

E-mail adresinizi aktive etmek Áok basittir:
1. Sitemizi bu adresten %s ziyaret edin ve biz size bu iœlemler s›ras›nda yol g–sterelim
2. Hesab›n›z›n ad›n› ve onay kodunu girin.
3. Hesab› aktive et \'Activate account\' d¸•mesine t›klay›n.


';
$register_email_end = 'Sayg›lar,';
?>
