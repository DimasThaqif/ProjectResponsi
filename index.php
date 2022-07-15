<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<style type="text/css">
		body{
			background-color: #6699FF;
		}
		.footer{
    width: 100%;
    height: 100px;
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
	Komentar     :
	               <textarea name="komentar" id="komentar" rows="3" cols="30"></textarea>
	Rating       : <select name="rating" id="rating">
				   <option>1/5</option>
				   <option>2/5</option>
				   <option>3/5</option>
				   <option>4/5</option>
				   <option>5/5</option></select>
	<input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
					    </td>
					</tr>
				</pre>
				</table>
			</form>	
<?php
	include'kalender.php';
?>
<br><br>
<div class="footer">
	<center>PROGRAM MASIH DALAM PERKEMBANGAN</center>
	<center><a class="social-media-icon" href="https://www.facebook.com/dimas.attaulah/"><span class="fab fa-facebook"></span></a><a class="social-media-icon" href="https://instagram.com/dimasthaqiff_?r=nametag"><span class="fab fa-instagram"></span></a></center>
   </div>
</body>

</html>
