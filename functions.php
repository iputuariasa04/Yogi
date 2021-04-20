<?php
//konek kedatabase 
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");


function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

//jika sudah ambil data mahasiswa dari form
function tambah($data)
{
	global $conn;
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$jk = htmlspecialchars($data["jk"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$tahun_masuk = htmlspecialchars($data["tahun_masuk"]);

	$query = "INSERT INTO data_mahasiswa VALUES ('$nim','$nama','$jk','$tanggal_lahir','$tempat_lahir','$jurusan','$tahun_masuk')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
