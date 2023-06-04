<?php
//mengaktifkan session
session_start();
 
// menentukan session
$_SESSION["Captcha"]="";
 
// membuat gambar dengan menentukan ukuran
$gbr = imagecreate(200, 50);
 
//warna background captcha
imagecolorallocate($gbr, 25, 25, 25);
 
// pengaturan font captcha
$color = imagecolorallocate($gbr, 253, 252, 252);
$font = "Fonts/Code New Roman.otf"; 
$ukuran_font = 20;
$posisi = 32;

// membuat nomor acak dan ditampilkan pada gambar
for($i=0;$i<=5;$i++) {
	// jumlah karakter
	$angka=rand(0, 9);
 
	$_SESSION["Captcha"].=$angka;
 
	$kemiringan= rand(20, 20);
 	
	imagettftext($gbr, $ukuran_font, $kemiringan, 8+30*$i, $posisi, $color, $font, $angka);	
}

//untuk membuat gambar 
imagepng($gbr); 
imagedestroy($gbr);

header("Content-type: image/png");
?>