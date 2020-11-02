<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDB = "profil";

//Membuat Koneksi
$conn = mysqli_connect($namaServer, $username, $password, $namaDB);
//check koneksi
if (!$conn) {
    die("Koneksi Gagal");
}
?>