<?php
include "../koneksi.php";

//get variabel from form input
$ulasan_id=$_POST["ulasan_id"];
$nama_ulasan=$_POST["nama_ulasan"];
$ulasan=$_POST["ulasan"];
$tanggal_ulasan= date('Y-m-d');

$result = mysqli_query($conn, "INSERT INTO `ulasan` (`ulasan_id`, `nama_ulasan`, `ulasan`, `tanggal_ulasan`) Values ('$ulasan_id', '$nama_ulasan', '$ulasan', '$tanggal_ulasan')");

 header("Location:../anime-details.php?id=$ulasan_id");
?>