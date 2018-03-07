<?php
include "baglan.php";
@session_start();

?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">

<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/anasayfa.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/check_buton.css" />
<link rel="stylesheet" type="text/css" href="css/eksper_basla.css" />
<link rel="stylesheet" type="text/css" href="css/fontlar/font.css" />
 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>


</head>
<body>


<?php include "session_zimbirti.php"; ?>
<?php include "header.php"; ?>


<script type="text/javascript">

$(function(){
	setInterval(function(){
		
	gonderrrrrrr()
		
	},300)
});

//mesaj gönderme
function gonderrrrrrr(){
	var kasasi=$("input[name='arac_kasa']:checked").val()
	var plaka_alanii=$("input[name='plaka']").val();;

		if($('#kasa_sec:checked').val() != null) {
			$('.pasif_buton').addClass ('pasif_buton_gizle');
			$('.basla_buton').removeClass ('buton_gizle');
		}else{
			$('.pasif_buton').removeClass ('pasif_buton_gizle');
			$('.basla_buton').addClass ('buton_gizle');
		}
	
}


</script>

	<div class="eksper_basla_alan">
		<form action="eksper_basla?plaka_kaydet" method="post">
			<input class="basla_text" type="text" name="plaka" placeholder="Araç Plakası" required>
				<div class="arac_kasa">
					<label class="basla_check">
						<input name="arac_kasa" id="kasa_sec"  type="radio" value="sedan">
						<span class="check_buton check_sedan"></span>
					</label>
				</div>
				<div class="arac_kasa">
					<label class="basla_check">
						<input name="arac_kasa" id="kasa_sec"  type="radio" value="coupe">
						<span class="check_buton check_coupe"></span>
					</label>
				</div>
				<div class="arac_kasa">
					<label class="basla_check">
						<input name="arac_kasa" id="kasa_sec"  type="radio" value="jeep">
						<span class="check_buton check_jeep"></span>
					</label>
				</div>
				<div class="arac_kasa">
					<label class="basla_check">
						<input name="arac_kasa" id="kasa_sec"  type="radio" value="mini">
						<span class="check_buton check_mini"></span>
					</label>
				</div>
				<div class="arac_kasa">
					<label class="basla_check">
						<input name="arac_kasa" id="kasa_sec"  type="radio" value="van">
						<span class="check_buton check_van"></span>
					</label>
				</div>
			<input class="basla_buton" type="submit" value="BAŞLA" />
			<div class="pasif_buton">Kasa Seçin</div>
		</form>	
		
	</div>

	
	
<?php 
if (isset($_GET['plaka_kaydet'])) {

$sayi_tut1		=rand(111,999);
$sayi_tut2		=rand(111,999);
$sayi_tut3		=rand(111,999);
$sayi_tut4		=rand(111,999);
$eksper_no		=$sayi_tut1.$sayi_tut2.$sayi_tut3.$sayi_tut4;

date_default_timezone_set('Europe/istanbul'); 
$saat = date('H:i');	
$tarih = date('Y.m.d'); 
	
$plaka	=$_POST['plaka'];	
$arac_kasa	=$_POST['arac_kasa'];	
	
	if($arac_kasa ==""){
		echo'İncelenecek Aracın Kasa Tipini Seçin';
		?><meta http-equiv="refresh" content="2; URL=eksper_basla"><?php 
	}
	if($plaka ==""){
		echo'İncelenecek Aracın Plakasını Girin';
		?><meta http-equiv="refresh" content="2; URL=eksper_basla"><?php 
	}
	if($arac_kasa !="" and $plaka != ""){
		$alt_takim_yuruyen	=mysql_query("insert into alt_takim_yuruyen set eksper_no='$eksper_no' ");
			
		$elektronik_ic_aks	=mysql_query("insert into elektronik_ic_aks set eksper_no='$eksper_no' ");
			
		$kaporta_boya	=mysql_query("insert into kaporta_boya set eksper_no='$eksper_no' ");
			
		$motor_mekanik	=mysql_query("insert into motor_mekanik set eksper_no='$eksper_no' ");
			
		$motor_performans	=mysql_query("insert into motor_performans set eksper_no='$eksper_no' ");
		
		$musteri	=mysql_query("insert into musteri set plaka='$plaka', eksper_no='$eksper_no', tarih='$tarih', saat='$saat', arac_kasa='$arac_kasa' ");
							
		?><meta http-equiv="refresh" content="0; URL=<?php echo'a5sg6Jkd-'.$eksper_no.''; ?>"><?php 				
	}
}
?>



</body>
</html>