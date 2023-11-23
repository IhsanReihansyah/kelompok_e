<?php 
include 'koneksi.php';
// get variable from form input
$nama_sutradara = $_POST["nama_sutradara"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$negara = $_POST["negara"];

$result = mysqli_query($conn, "INSERT INTO `sutradara` (`nama_sutradara`, `tanggal_lahir`, `negara`) VALUES ('$nama_sutradara', '$tanggal_lahir', '$negara');");
header("Location:sutradara.php");
?>