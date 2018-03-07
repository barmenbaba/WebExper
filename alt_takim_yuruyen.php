<?php
include "baglan.php";
session_start();

$gelen_eksper_no =$_SESSION['eksper_no'];
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">

<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/anasayfa.css" />
<link rel="stylesheet" type="text/css" href="css/header.css" />
<link rel="stylesheet" type="text/css" href="css/musteri.css" />
<link rel="stylesheet" type="text/css" href="css/motor_mekanik.css" />
<link rel="stylesheet" type="text/css" href="css/kaporta_boya.css" />
<link rel="stylesheet" type="text/css" href="css/motor_performans.css" />
<link rel="stylesheet" type="text/css" href="css/elektronik_ic.css" />
<link rel="stylesheet" type="text/css" href="css/check_buton.css" />
<link rel="stylesheet" type="text/css" href="css/kaporta_boya_coupe.css" />
<link rel="stylesheet" type="text/css" href="css/kaporta_boya_mini.css" />
<link rel="stylesheet" type="text/css" href="css/kaporta_boya_jeep.css" />
<link rel="stylesheet" type="text/css" href="css/kaporta_boya_van.css" />
<link rel="stylesheet" type="text/css" href="css/fontlar/font.css" />
 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/javalar/alt_takim.js"></script>


</head>
<body>


<?php include "session_zimbirti.php"; ?>
<?php include "header.php"; ?>


	<script type="text/javascript">

	function areYouSure() {
		
		var eksper_no=$("input[name='eksper_no']").val();
		
		$.ajax({
			type:"POST",
			url:"islemler/islem_alt_takim.php?sayfa_durumu",
			data:{eksper_no},
			success:function(sonuc){
				
			}
		});
	}

	window.onbeforeunload = areYouSure;

	</script>


<content>

	<div class="eksper_menu">
		<a class="eks_menu" href="musteri"><p>Araç/Müşteri</p></a>
		<a class="eks_menu m1" href="kaporta_boya"><p>Kaporta/Boya</p></a>
		<a class="eks_menu m1 m3" href="motor_mekanik"><p>Motor & Mekanik</p></a>
		<a class="eks_menu eks_menu_aktif m2" href="alt_takim_yuruyen"><p>Alt Takım & Yürüyen Aks.</p></a>
		<a class="eks_menu m1 m2" href="elektronik_ic_aks"><p>Elektronik & İç Aks.</p></a>
		<a class="eks_menu m1 m2 m3" href="motor_performans"><p>Motor Performans</p></a>
	</div>
	
	<div class="form_alan">
	
		<div class="genel_alan_tablar alt_takim_acik">
			<div class="alan_98">
				<div class="satir_baslik">
					<div class="kontrol_noktasi"><div class="baslik_yazi">KONTROL NOKTASI</div></div>
					<div class="durumu"><div class="baslik_yazi">DURUMU</div></div>
					<div class="durum_notu"><div class="baslik_yazi">DURUM NOTU</div></div>
				</div>
				
				<?php 
					$sorgumoalrr=mysql_query("select * from alt_takim_yuruyen where eksper_no = '$gelen_eksper_no' ");
					$row_alt=mysql_fetch_array($sorgumoalrr);

						$id	= $row_alt['id'];
						$eksper_no	= $row_alt['eksper_no'];
						$lastik = $row_alt['lastik'];
						$jant = $row_alt['jant'];
						$rot_kollari_rot_baslari = $row_alt['rot_kollari_rot_baslari'];
						$amortisor_kontrol = $row_alt['amortisor_kontrol'];
						$on_arka_fren_disk = $row_alt['on_arka_fren_disk'];
						$on_arka_fren_balata = $row_alt['on_arka_fren_balata'];
						$yakit_hortumlari = $row_alt['yakit_hortumlari'];
						$helezon_yaylar = $row_alt['helezon_yaylar'];
						$aks_kontrol = $row_alt['aks_kontrol'];
						$salincak_burc_kontrol = $row_alt['salincak_burc_kontrol'];
						$dingil_kontrol = $row_alt['dingil_kontrol'];
						$motor_travers_kontrol = $row_alt['motor_travers_kontrol'];
						$fren_hortum_kontrol = $row_alt['fren_hortum_kontrol'];
						$arac_alti_muhafaza_kontrol = $row_alt['arac_alti_muhafaza_kontrol'];
						$davlumbaz_kontrol = $row_alt['davlumbaz_kontrol'];
						$direksiyon_pompa_kontrol = $row_alt['direksiyon_pompa_kontrol'];
						$direksiyon_kutusu = $row_alt['direksiyon_kutusu'];
						
						$lastik_not = $row_alt['lastik_not'];
						$jant_not = $row_alt['jant_not'];
						$rot_kollari_rot_baslari_not = $row_alt['rot_kollari_rot_baslari_not'];
						$amortisor_kontrol_not = $row_alt['amortisor_kontrol_not'];
						$on_arka_fren_disk_not = $row_alt['on_arka_fren_disk_not'];
						$on_arka_fren_balata_not = $row_alt['on_arka_fren_balata_not'];
						$yakit_hortumlari_not = $row_alt['yakit_hortumlari_not'];
						$helezon_yaylar_not = $row_alt['helezon_yaylar_not'];
						$aks_kontrol_not = $row_alt['aks_kontrol_not'];
						$salincak_burc_kontrol_not = $row_alt['salincak_burc_kontrol_not'];
						$dingil_kontrol_not = $row_alt['dingil_kontrol_not'];
						$motor_travers_kontrol_not = $row_alt['motor_travers_kontrol_not'];
						$fren_hortum_kontrol_not = $row_alt['fren_hortum_kontrol_not'];
						$arac_alti_muhafaza_kontrol2_not = $row_alt['arac_alti_muhafaza_kontrol2_not'];
						$davlumbaz_kontrol_not = $row_alt['davlumbaz_kontrol_not'];
						$direksiyon_pompa_kontrol_not = $row_alt['direksiyon_pompa_kontrol_not'];
						$direksiyon_kutusu_not = $row_alt['direksiyon_kutusu_not'];
						$alt_takim_not = $row_alt['alt_takim_not'];
						
						
				?>
		<form method="post" onsubmit="return false;">
			<?php echo'<input type="hidden" name="eksper_no" value="'.$eksper_no.'">'; ?>
				
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Lastikler</p></div>
					<div class="durumu">
						
						<?php 
						if($lastik == 'iyi'){$dd1_iyi = ' checked="checked"';}
						if($lastik == 'orta'){$dd1_orta = ' checked="checked"';}
						if($lastik == 'zayıf'){	$dd1_zayif = ' checked="checked"';}
						if($lastik == ''){	$dd1_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="lastik" '.$dd1_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="lastik" '.$dd1_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="lastik" '.$dd1_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="lastik" '.$dd1_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="lastik_not" placeholder="Durum Notu" >'.$lastik_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Jantlar</p></div>
					<div class="durumu">
						
						<?php 
						if($jant == 'iyi'){$dd2_iyi = ' checked="checked"';}
						if($jant == 'orta'){$dd2_orta = ' checked="checked"';}
						if($jant == 'zayıf'){	$dd2_zayif = ' checked="checked"';}
						if($jant == ''){	$dd2_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="jant" '.$dd2_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="jant" '.$dd2_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="jant" '.$dd2_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="jant" '.$dd2_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="jant_not" placeholder="Durum Notu" >'.$jant_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Davlumbaz kontrol</p></div>
					<div class="durumu">
						
						<?php 
						if($davlumbaz_kontrol == 'iyi'){$dd15_iyi = ' checked="checked"';}
						if($davlumbaz_kontrol == 'orta'){$dd15_orta = ' checked="checked"';}
						if($davlumbaz_kontrol == 'zayıf'){	$dd15_zayif = ' checked="checked"';}
						if($davlumbaz_kontrol == ''){	$dd15_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="davlumbaz_kontrol" '.$dd15_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="davlumbaz_kontrol" '.$dd15_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="davlumbaz_kontrol" '.$dd15_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="davlumbaz_kontrol" '.$dd15_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="davlumbaz_kontrol_not" placeholder="Durum Notu" >'.$davlumbaz_kontrol_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Rot kolları & Rotbaşları</p></div>
					<div class="durumu">
						
						<?php 
						if($rot_kollari_rot_baslari == 'iyi'){$dd3_iyi = ' checked="checked"';}
						if($rot_kollari_rot_baslari == 'orta'){$dd3_orta = ' checked="checked"';}
						if($rot_kollari_rot_baslari == 'zayıf'){	$dd3_zayif = ' checked="checked"';}
						if($rot_kollari_rot_baslari == ''){	$dd3_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="rot_kollari_rot_baslari" '.$dd3_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="rot_kollari_rot_baslari" '.$dd3_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="rot_kollari_rot_baslari" '.$dd3_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="rot_kollari_rot_baslari" '.$dd3_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="rot_kollari_rot_baslari_not" placeholder="Durum Notu" >'.$rot_kollari_rot_baslari_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Direksiyon pompa kontrolleri</p></div>
					<div class="durumu">
						
						<?php 
						if($direksiyon_pompa_kontrol == 'iyi'){$dd21_iyi = ' checked="checked"';}
						if($direksiyon_pompa_kontrol == 'orta'){$dd21_orta = ' checked="checked"';}
						if($direksiyon_pompa_kontrol == 'zayıf'){	$dd21_zayif = ' checked="checked"';}
						if($direksiyon_pompa_kontrol == ''){	$dd21_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="direksiyon_pompa_kontrol" '.$dd21_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="direksiyon_pompa_kontrol" '.$dd21_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="direksiyon_pompa_kontrol" '.$dd21_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="direksiyon_pompa_kontrol" '.$dd21_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="direksiyon_pompa_kontrol_not" placeholder="Durum Notu" >'.$direksiyon_pompa_kontrol_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Direksiyon kutusu kontrolleri</p></div>
					<div class="durumu">
						
						<?php 
						if($direksiyon_kutusu == 'iyi'){$dd23_iyi = ' checked="checked"';}
						if($direksiyon_kutusu == 'orta'){$dd23_orta = ' checked="checked"';}
						if($direksiyon_kutusu == 'zayıf'){	$dd23_zayif = ' checked="checked"';}
						if($direksiyon_kutusu == ''){	$dd23_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="direksiyon_kutusu" '.$dd23_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="direksiyon_kutusu" '.$dd23_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="direksiyon_kutusu" '.$dd23_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="direksiyon_kutusu" '.$dd23_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="direksiyon_kutusu_not" placeholder="Durum Notu" >'.$direksiyon_kutusu_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Amortisör kontrolü</p></div>
					<div class="durumu">
						
						<?php 
						if($amortisor_kontrol == 'iyi'){$dd4_iyi = ' checked="checked"';}
						if($amortisor_kontrol == 'orta'){$dd4_orta = ' checked="checked"';}
						if($amortisor_kontrol == 'zayıf'){	$dd4_zayif = ' checked="checked"';}
						if($amortisor_kontrol == ''){	$dd4_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="amortisor_kontrol" '.$dd4_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="amortisor_kontrol" '.$dd4_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="amortisor_kontrol" '.$dd4_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="amortisor_kontrol" '.$dd4_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="amortisor_kontrol_not" placeholder="Durum Notu" >'.$amortisor_kontrol_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Ön fren diskleri ve balatalar</p></div>
					<div class="durumu">
						
						<?php 
						if($on_arka_fren_disk == 'iyi'){$dd5_iyi = ' checked="checked"';}
						if($on_arka_fren_disk == 'orta'){$dd5_orta = ' checked="checked"';}
						if($on_arka_fren_disk == 'zayıf'){	$dd5_zayif = ' checked="checked"';}
						if($on_arka_fren_disk == ''){	$dd5_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="on_arka_fren_disk" '.$dd5_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="on_arka_fren_disk" '.$dd5_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="on_arka_fren_disk" '.$dd5_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="on_arka_fren_disk" '.$dd5_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="on_arka_fren_disk_not" placeholder="Durum Notu" >'.$on_arka_fren_disk_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Arka fren diskleri ve balatalar</p></div>
					<div class="durumu">
						
						<?php 
						if($on_arka_fren_balata == 'iyi'){$dd6_iyi = ' checked="checked"';}
						if($on_arka_fren_balata == 'orta'){$dd6_orta = ' checked="checked"';}
						if($on_arka_fren_balata == 'zayıf'){	$dd6_zayif = ' checked="checked"';}
						if($on_arka_fren_balata == ''){	$dd6_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="on_arka_fren_balata" '.$dd6_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="on_arka_fren_balata" '.$dd6_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="on_arka_fren_balata" '.$dd6_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="on_arka_fren_balata" '.$dd6_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="on_arka_fren_balata_not" placeholder="Durum Notu" >'.$on_arka_fren_balata_not.'</textarea></div>'; ?>
				</div>
			
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Helezonlar, Yaylar</p></div>
					<div class="durumu">
						
						<?php 
						if($helezon_yaylar == 'iyi'){$dd8_iyi = ' checked="checked"';}
						if($helezon_yaylar == 'orta'){$dd8_orta = ' checked="checked"';}
						if($helezon_yaylar == 'zayıf'){	$dd8_zayif = ' checked="checked"';}
						if($helezon_yaylar == ''){	$dd8_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="helezon_yaylar" '.$dd8_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="helezon_yaylar" '.$dd8_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="helezon_yaylar" '.$dd8_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="helezon_yaylar" '.$dd8_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="helezon_yaylar_not" placeholder="Durum Notu" >'.$helezon_yaylar_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Aks ve rulman kontrolleri</p></div>
					<div class="durumu">
						
						<?php 
						if($aks_kontrol == 'iyi'){$dd9_iyi = ' checked="checked"';}
						if($aks_kontrol == 'orta'){$dd9_orta = ' checked="checked"';}
						if($aks_kontrol == 'zayıf'){	$dd9_zayif = ' checked="checked"';}
						if($aks_kontrol == ''){	$dd9_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="aks_kontrol" '.$dd9_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="aks_kontrol" '.$dd9_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="aks_kontrol" '.$dd9_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="aks_kontrol" '.$dd9_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="aks_kontrol_not" placeholder="Durum Notu" >'.$aks_kontrol_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Salıncak burç kontrolleri</p></div>
					<div class="durumu">
						
						<?php 
						if($salincak_burc_kontrol == 'iyi'){$dd10_iyi = ' checked="checked"';}
						if($salincak_burc_kontrol == 'orta'){$dd10_orta = ' checked="checked"';}
						if($salincak_burc_kontrol == 'zayıf'){	$dd10_zayif = ' checked="checked"';}
						if($salincak_burc_kontrol == ''){	$dd10_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="salincak_burc_kontrol" '.$dd10_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="salincak_burc_kontrol" '.$dd10_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="salincak_burc_kontrol" '.$dd10_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="salincak_burc_kontrol" '.$dd10_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="salincak_burc_kontrol_not" placeholder="Durum Notu" >'.$salincak_burc_kontrol_not.'</textarea></div>'; ?>
				</div>
			
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Motor travers kontrolleri</p></div>
					<div class="durumu">
						
						<?php 
						if($motor_travers_kontrol == 'iyi'){$dd12_iyi = ' checked="checked"';}
						if($motor_travers_kontrol == 'orta'){$dd12_orta = ' checked="checked"';}
						if($motor_travers_kontrol == 'zayıf'){	$dd12_zayif = ' checked="checked"';}
						if($motor_travers_kontrol == ''){	$dd12_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="motor_travers_kontrol" '.$dd12_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="motor_travers_kontrol" '.$dd12_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="motor_travers_kontrol" '.$dd12_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="motor_travers_kontrol" '.$dd12_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="motor_travers_kontrol_not" placeholder="Durum Notu" >'.$motor_travers_kontrol_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Fren hortumları kontrolleri</p></div>
					<div class="durumu">
						
						<?php 
						if($fren_hortum_kontrol == 'iyi'){$dd13_iyi = ' checked="checked"';}
						if($fren_hortum_kontrol == 'orta'){$dd13_orta = ' checked="checked"';}
						if($fren_hortum_kontrol == 'zayıf'){	$dd13_zayif = ' checked="checked"';}
						if($fren_hortum_kontrol == ''){	$dd13_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="fren_hortum_kontrol" '.$dd13_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="fren_hortum_kontrol" '.$dd13_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="fren_hortum_kontrol" '.$dd13_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="fren_hortum_kontrol" '.$dd13_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="fren_hortum_kontrol_not" placeholder="Durum Notu" >'.$fren_hortum_kontrol_not.'</textarea></div>'; ?>
				</div>
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Araç altı muhafazası kontrol</p></div>
					<div class="durumu">
						
						<?php 
						if($arac_alti_muhafaza_kontrol == 'iyi'){$dd14_iyi = ' checked="checked"';}
						if($arac_alti_muhafaza_kontrol == 'orta'){$dd14_orta = ' checked="checked"';}
						if($arac_alti_muhafaza_kontrol == 'zayıf'){	$dd14_zayif = ' checked="checked"';}
						if($arac_alti_muhafaza_kontrol == ''){	$dd14_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="arac_alti_muhafaza_kontrol2" '.$dd14_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="arac_alti_muhafaza_kontrol2" '.$dd14_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="arac_alti_muhafaza_kontrol2" '.$dd14_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="arac_alti_muhafaza_kontrol2" '.$dd14_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="arac_alti_muhafaza_kontrol2_not" placeholder="Durum Notu" >'.$arac_alti_muhafaza_kontrol2_not.'</textarea></div>'; ?>
				</div>
			
			
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Yakıt hortumları</p></div>
					<div class="durumu">
						
						<?php 
						if($yakit_hortumlari == 'iyi'){$dd7_iyi = ' checked="checked"';}
						if($yakit_hortumlari == 'orta'){$dd7_orta = ' checked="checked"';}
						if($yakit_hortumlari == 'zayıf'){	$dd7_zayif = ' checked="checked"';}
						if($yakit_hortumlari == ''){	$dd7_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="yakit_hortumlari" '.$dd7_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="yakit_hortumlari" '.$dd7_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="yakit_hortumlari" '.$dd7_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="yakit_hortumlari" '.$dd7_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="yakit_hortumlari_not" placeholder="Durum Notu" >'.$yakit_hortumlari_not.'</textarea></div>'; ?>
				</div>	
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
				<div class="satir">
					<div class="kontrol_noktasi"><p>Dingil ve torsiyon burç kontrolleri</p></div>
					<div class="durumu">
						
						<?php 
						if($dingil_kontrol == 'iyi'){$dd11_iyi = ' checked="checked"';}
						if($dingil_kontrol == 'orta'){$dd11_orta = ' checked="checked"';}
						if($dingil_kontrol == 'zayıf'){	$dd11_zayif = ' checked="checked"';}
						if($dingil_kontrol == ''){	$dd11_bos = ' checked="checked"';}
							
						echo'
						<div class="checkler_motor yazi_yesil2">
							<label class="buton_secim">İYİ
								<input name="dingil_kontrol" '.$dd11_iyi.' type="radio" value="iyi">
							<span class="check_buton check_yesil2"></span>
						</div>
						
						<div class="checkler_motor yazi_hardal">
							<label class="buton_secim">ORTA
								<input name="dingil_kontrol" '.$dd11_orta.'  type="radio" value="orta">
							<span class="check_buton check_hardal"></span>
						</div>
						
						<div class="checkler_motor yazi_kirmizi">
							<label class="buton_secim">ZAYIF
								<input name="dingil_kontrol" '.$dd11_zayif.'  type="radio" value="zayıf">
							<span class="check_buton check_kirmizi"></span>
						</div>
						
						<div class="checkler_iptal">
							<label class="iptal_check">
								<input name="dingil_kontrol" '.$dd11_bos.' type="radio" value="">
							<span class="check_buton"></span>
						</div>
						';
						?>
					</div>
					<?php echo'<div class="durum_notu"><textarea name="dingil_kontrol_not" placeholder="Durum Notu" >'.$dingil_kontrol_not.'</textarea></div>'; ?>
				</div>
				
			<!--//////////////////////////////////////////////////////////////////////////////////////////-->
		
				<div class="genel_notlar_alani">
					<div class="gen_not_bas">NOTLAR</div>
					<textarea name="alt_takim_not" ><?php echo''.$alt_takim_not.''; ?></textarea>
				</div>
				
				</form>


				<?php 
				echo'
					<form method="post" onsubmit="return false;">	
						<div class="ihale_alani">
							<div class="yazi">
								<label class="buton_secim"><p>Ben '.$personel_adi.'bu formun  doğruluğunu onaylıyorum</p>
									<input name="ihala_alt_takim_check" type="checkbox" value="'.$personel_adi.'">
								<span class="check_buton check_siyah"></span>
							</div>
							<input type="hidden" name="eksper_no" value="'.$eksper_no.'">
							<input class="ihale_butonu_alt_takim" type="submit" value="TAMAMLA" onclick="ihale_alt_takim()" />
							<div class="kof_check_buton kof_check_alt_takim">ONAYLAYIN</div>
						</div>
					</form>
					';
				?>	
					
			</div>		

		</div>
		<div class="genel_alan_tablar alt_takim_kapali">
			
			
		<div class="alt_takim_bitti_son"></div>
			
			<div class="sonuc_bilgi">
				<p>Bu Alan Tamamlanmış Artık Değişiklik Yapılamaz</p>
				<a href="talepkle-5" class="talep_buton">DÜZENLEME TALEBİ GÖNDER</a>
			</div>
			
			<div class="sonuc_bilgi">
			<a href="yazdir_alt_takim-<?php echo''.$eksper_no.''; ?>" class="talep_buton">BU SAYFAYI YAZDIR</a>
			</div>
			
		</div>
	</div>
	
</content>


</body>
</html>