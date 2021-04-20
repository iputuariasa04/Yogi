<?php
//hubungkan ke functions
require 'functions.php';


//query tampilkan (select)
$data_mahasiswa = query("SELECT * FROM data_mahasiswa");

?>
<!DOCTYPE html>
<html>

<head>
    <title>Halaman Daftar Mahasiswa</title>
</head>

<body>
    <h3>Menampilkan isi database Mahasiswa</h3>
    <a href="tambah.php">Input Data Mahasiswa Baru</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Jurusan</th>
            <th>Tahun Masuk</th>
            <th>Jenis Kelamin</th>
        </tr>

        <?php foreach ($data_mahasiswa as $mhs) : ?>
            <tr>
                <td><?php echo ($mhs["nim"]) ?></td>
                <td><?php echo ($mhs["nama"]) ?></td>
                <td><?php echo ($mhs["tanggal_lahir"]) ?></td>
                <td><?php echo ($mhs["tempat_lahir"]) ?></td>
                <td><?php echo ($mhs["jurusan"]) ?></td>
                <td><?php echo ($mhs["tahun_masuk"]) ?></td>
                <td><?php echo ($mhs["jk"]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>