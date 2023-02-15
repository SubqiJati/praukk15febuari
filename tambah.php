<!DOCTYPE html>
<html>
<head>  
<title>Document</title>
</head>
<body>
<center>
    <header>
    <h1>From Tambah</h1>
</header>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_penyewa">Nama  : </label>
                    <input type="text" name="nama_penyewa" />
</p>
                <p>
                    <label for="alamat">Alamat : </label>
                    <textarea name="alamat" row="5"></textarea>  
</p>
                <p>
                    <label for="genre_film">Genre Film : </label>
                    <input type="text" name="genre_film"/>
</p>
<p>
                    <label for="judul_film">Judul Film : </label>
                    <input type="text" name="judul_film" />
</p>
<p>
                    <label for="tahun_film">Tahun Film : </label>
                    <input type="text" name="tahun_film" />
</p>
<p>
                    <label for="tanggal_sewa">Tanggal Sewa : </label>
                    <input type="date" name="tanggal_sewa" />
</p>
<p>
                    <label for="tanggal_kembali"> Tanggal Kembali: </label>
                    <input type="date" name="tanggal_kembali" />
</p>
<p>
                    <label for="harga">Harga : </label>
                    <input type="number" name="harga" />
</p>
                <p>
                    <input type="submit" value="Tambah" name="tambah" />
</p>
</center>
</fieldset>
<form>
</body>
</html>