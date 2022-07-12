<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIDE 2</title>
</head>
<body bgcolor="#FFE4E1">
<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];


echo "<head><title>My Guest Book</title></head>";
$fp = fopen("TA.txt", "a+");
fputs($fp, "$nama|$alamat|$email\n");
fclose($fp);



echo "<center><h2>DATA ANDA</h2></center>";
$fp = fopen("TA.txt", "r");

echo "<table border='1' bgcolor='cyan'><pre>";
echo "<tr><td>tanggal</td><td>Nama</td><td>alamat</td><td>email</td></tr>";

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo "<tr><td>";
    echo date('D-M-Y');
    echo "</td><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td></tr>";
    
}
echo "</pre>";
echo "</table>";
echo "<br><br>";

echo "<h1><center style='font-family:courier,arial,helvetica;'>program yang disediakan</center></h1>";
echo "<ol>";
echo "<li><a href='index.html'>Kalkulator</li>";
echo "</ol>";

?>



</body>
</html>