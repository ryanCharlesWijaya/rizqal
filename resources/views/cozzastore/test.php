<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menampilkan Gambar</title>
</head>

<body>
<table width="70%" border="1" cellpadding="4" cellspacing="4" align="center">
<tr>
    <th>ID</th>
    <th>FOTO</th>
    <th>KETERANGAN</th>
</tr>
<?php
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link, "katalog");
$sql=mysqli_query($link, "SELECT * FROM produk");
while ($data=mysqli_fetch_array($sql)){
?>
<tr>
    <td><?=$data['id_produk']?></td>
    <td><?="<img src='images/".$data['gambar_produk']."'style=''>"?></td>
    <td><?=$data['nama_produk']?></td>
</tr>
<?php }?>
</table>
</body>
</html>