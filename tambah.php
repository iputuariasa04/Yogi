<?php
//hubungkan ke functions
require 'functions.php';

if (isset($_POST["submit"])) {

    //cek apakah data sudah masuk apa belum
    if (tambah($_POST) > 0) {
        echo "
			<script>
				alert('Data yang anda Input sukses');
				document.location.href='tampil.php';
			</script>
		";
    } else {
        echo "
			<script>
				alert('Data yang anda Input gagal');
			</script>
		";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="box">
        <h1>Form Input Data Mahasiswa</h1>
        <form action="" method="post">
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jk" value="Perempuan">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                        <select name="jurusan">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Komputer">Sistem Komputer</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tahun Masuk</td>
                    <td>:</td>
                    <td>
                        <select name="tahun_masuk">
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>