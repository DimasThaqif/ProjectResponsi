<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>SLIDE 2</title>
    <style type="text/css">
		.footer{
    width: 100%;
    height: 50px;
    padding-left: 15px;
    line-height: 50px;
    background: #333;
    color: #fff;
		}
		.social-media-icon {
    padding: 5px;
    background: #222;
    color: #fff;
    border-radius: 4px;
}

a.social-media-icon:hover{
    background: #fff!important;
    color: #222!important;
}

	</style>
</head>
<body bgcolor="#eb85c0">
<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$rating = $_POST['rating'];
$komentar = $_POST['komentar'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("TA.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$rating|$komentar\n");
fclose($fp);



echo "<center><h2>DATA ANDA</h2></center>";
$fp = fopen("TA.txt", "r");

echo "<table border='1' bgcolor='#9e0f94'><pre>";
echo "<tr><td>tanggal</td><td>Nama</td><td>alamat</td><td>email</td><td>rating</td><td>komentar</td></tr>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>";
    echo date('D-M-Y');
    echo "</td><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>";
    
}
echo "</pre>";
echo "</table>";
echo "<br><br>";

echo "<h1><center style='font-family:courier,arial,helvetica;'>program yang disediakan</center></h1>";
echo "<ol>";
echo "<li><a href='index.html'>Kalkulator</li>";
echo "</ol>";
echo "<br><br>";


?>
<div class="footer">
	<center><a class="social-media-icon" href="https://www.facebook.com/dimas.attaulah/"><span class="fab fa-facebook"></span></a><a class="social-media-icon" href="https://instagram.com/dimasthaqiff_?r=nametag"><span class="fab fa-instagram"></span></a></center>
   </div>
</body>
</html>