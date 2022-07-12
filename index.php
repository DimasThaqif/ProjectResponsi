<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>unknown</title>
	<style type="text/css">
		body{
			background-color: lightcoral;
		}
		</style>
</head>

<body>
	
	<marquee><h1>SELAMAT DATANG</h1></marquee>

	
	<form name="form1" method="post" action="setelahnya.php">
		<table width="50%" border="1" align="center" bgcolor="cyan">
			<tr>
				<td width="100%" colspan="2" bgcolor="cyan"><H2 Align= "center">TUGAS AKHIR PEMROGRAMAN WEB</H2></td>
					</tr>
					<tr>
						<td width="50" colspan="2" bgcolor="cyan"><pre><h3><center>masukkan data anda</center></h3>
	Nama Lengkap : <input name="nama" type="text" id="nama"> 
	Alamat       : <input name="alamat" type="text" id="alamat">
	E-Mail       : <input name="email" type="text" id="email">
	<input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					    </td>
					</tr>
				</pre>
				</table>
			</form>	
</body>
</html>
<?php
	include'kalender.php';
?>