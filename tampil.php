<!DOCTYPE html>
<html>
<head>
    <title>Sewa DVD</title>
    <center>
        <h1> Data DVD</h1>
        <a href="tambah.php"><input type="button"
        value="tambah"></a>
</head>
<body>
<table border="89">
<tr>

<th>nama penyewa</th>
<th>alamat</th>
<th>genre film</th>
<th>judul film</th>
<th>tahun film</th>
<th>tanggal sewa</th>
<th>tanggal kembali</th>
<th>harga</th>
        
</tr>
<?php
include "koneksi.php";
$query= mysqli_query($db,"SELECT * FROM tb_penyewa INNER JOIN tb_dvd ON tb_penyewa.id_dvd=tb_dvd.id_dvd");

$no1;
foreach ($query as $row):
 ?>
 <tr>

    <td><?=$row['nama_penyewa'];?></td>
    <td><?=$row['alamat'];?></td>
    <td><?=$row['genre_film'];?></td>
    <td><?=$row['judul_film'];?></td>
    <td><?=$row['tahun_film'];?></td>
    <td><?=$row['tanggal_sewa'];?></td>
    <td><?=$row['tanggal_kembali'];?></td>
    <td><?=$row['harga'];?></td>

<td>
<a href="edit.php?id_penyewa=<?= $row['id_penyewa']; ?>">Edit</a>||
        <a href="hapus.php?id_penyewa=<?= $row['id_penyewa']; ?>">Hapus</a>
    </td>
   </tr>

  <?php endforeach; ?>

</table>  
</body>
</center>
</html>