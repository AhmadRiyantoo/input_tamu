<html>
<head>
<title>Contoh Koneksi Database</title>
</head>
<body>
<b>
<?php
$host='localhost';
$username='root';
$paswosword='';
$koneksi=mysql_connect($host,$username,$paswosword);
if($koneksi)
	{echo"Koneksi server BERHASIL<br><br>";}
else
	{echo"Koneksi server GAGAL<br><br>";}
$database='formulir';
$mydb=mysql_select_db($database,$koneksi);
if($mydb)
	{echo"berhasil memilih database";}
else
	{echo"tidak dapat memilih database";}
	
?>
</b>
</body>
</html>

