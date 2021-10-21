<?php
$namaServer = "localhost";
$username = "root";
$password = "";
$namaDatabase = "portofolio";

//Membuat Koneksi
$conn = mysqli_connect($namaServer,$username,$password,$namaDatabase);

//Cek Koneksi
if(!$conn){
    die("Koneksi Gagal: ".mysqli_connect_error());
}

?>