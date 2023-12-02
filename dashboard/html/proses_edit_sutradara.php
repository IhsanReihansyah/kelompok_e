<?php 
include 'koneksi.php';
$nama_sutradara = $_POST["nama_sutradara"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$negara = $_POST["negara"];


$result = mysqli_query($conn, "UPDATE `sutradara` set `nama_sutradara` = '$nama_sutradara', `tanggal_lahir` = '$tanggal_lahir', `negara` = '$negara' where `id_sutradara` = '$_GET[id_sutradara]'");

header("Location:index_sutradara.php");

?>