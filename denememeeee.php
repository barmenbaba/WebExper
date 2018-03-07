<?php
	$sorgu_ih_ka=mysql_query("select * from motor_mekanik where eksper_no = '$gelen_eksper_no' ");
				$row_ih_kap=mysql_fetch_array($sorgu_ih_ka);
				
				$sayfa_kimde = $row_ih_kap['sayfa_kimde'];
				$eksper_no = $row_ih_kap['eksper_no'];
				
		if( $sayfa_kimde != ""){
			
			echo'<div class="sayfa_kimde" > 
				
				<a>BU SAYFA ŞUAN <div class="sayfa_kimde_yaz_renk">'.$sayfa_kimde.'</div> TARAFINDAN KULLANILIYOR.</a>
			
				<form action="islemler/islem_mekanik.php?sayfa_durumu" method="post">
					<input type="hidden" name="eksper_no" value="'.$eksper_no.'">
					<input class="temizle_butonu_kim"  type="submit" value="TEMİZLE">
				</form>
			</div>';
			
		}else{ 
		
		$eksper_no		= $_POST['eksper_no'];	
		$person_no 	= $_SESSION["yetki_personel_adi"];

		$guncelle	=mysql_query("update motor_mekanik set sayfa_kimde='$person_no' where eksper_no='$gelen_eksper_no'");	
		?>
		
		
		
		
		
		
		<!----

var eksper_no=$("input[name='eksper_no']").val();
			$.ajax({
			type:"POST",
			url:"islemler/islem_mekanik.php?sayfa_durumu",
			data:{eksper_no},
			success:function(sonuc){
				
			}
		});
		
		
alert('Sayfa yüklendi!');
---->
