<?php
@session_start();

$vthost			="94.73.147.106";
$vtveritabani		="eksper";
$vtkullanici		="userB2CE27";
$vtsifre			="WPzt56R6";

@$baglan				= mysql_connect($vthost,$vtkullanici,$vtsifre) or die("baglanamadı !!");
$baglan2			= mysql_select_db($vtveritabani, $baglan) or die("Veri tabanı seçilemedi");


mysql_unbuffered_query('SET NAMES utf8');


 // if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) { 
 //     echo '<script type="text/javascript">alert("Bu site Internet Exploreri desteklemiyor!");</script>'; 
 // 	die(); 
 // } 

//  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) { 
//      echo '<script type="text/javascript">alert("Bu site Mozilla Firefox desteklemiyor! Google Chorome dan Giriş Yapınız");</script>'; 
//  	die(); } 

//  if (strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') !== FALSE) { 
 //     echo '<script type="text/javascript">alert("Bu site EDGE desteklemiyor! Google Chorome dan Giriş Yapınız");</script>'; 
//  	die();  } 


	@$session_personel = $_SESSION["personel"];

	$sorgu_per = mysql_query("select * from personel where k_adi = '$session_personel'");
	$row_per=mysql_fetch_array($sorgu_per);
		
		$personel_adi = $row_per['isim'];
		$personel_kullanici_adi = $row_per['k_adi'];
		$personel_yetki_per = $row_per['personel'];
		$personel_yetki_tal = $row_per['talep'];
		
		$_SESSION["yetki_personel_adi"] = $personel_adi;
		$_SESSION["yetki_personel"] = $personel_yetki_per;
		$_SESSION["yetki_talep"] = $personel_yetki_tal;

?>