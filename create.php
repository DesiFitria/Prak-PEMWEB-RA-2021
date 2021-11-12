<?php
include "koneksi.php";
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$prodi = $_POST["prodi"];
$angkatan = $_POST["angkatan"];

$sql = "insert into mahasiswa (nim, nama, prodi, mahasiswa) values('$nim', '$nama', '$prodi', '$angkatan')";
$hasil = mysqli_query($con,$sql);

echo = "Success";
?>