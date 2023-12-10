<?php
include "../koneksi.php";

//get variabel from form input
$ulasan_user=$_POST["ulasan_user"];
$ulasan_id=$_POST["ulasan_id"];
$nama_ulasan=$_POST["nama_ulasan"];
$ulasan=$_POST["ulasan"];
$ulasan_rating=$_POST["ulasan_rating"];
$tanggal_ulasan= date('Y-m-d');

$result = mysqli_query($conn, "INSERT INTO `ulasan` (`id`, `ulasan_user`, `ulasan_id`, `nama_ulasan`, `ulasan`, `ulasan_rating`, `tanggal_ulasan`) VALUES (NULL, '$ulasan_user', '$ulasan_id', '$nama_ulasan', '$ulasan', '$ulasan_rating', '$tanggal_ulasan')");

 header("Location:../anime-details.php?id=$ulasan_id");
?>