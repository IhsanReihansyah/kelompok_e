<?php
include "../koneksi.php";

//get variabel from form input
$ulasan_id=$_POST["ulasan_id"];
$nama_ulasan=$_POST["nama_ulasan"];
$ulasan=$_POST["ulasan"];
$ulasan_rating=$_POST["ulasan_rating"];

$tanggal_ulasan= date('Y-m-d');

// $result = mysqli_query($conn, "INSERT INTO `ulasan` (`ulasan_id`, `nama_ulasan`, `ulasan`, `ulasan_rating`, `tanggal_ulasan`) Values ('$ulasan_id', '$nama_ulasan', '$ulasan', '$ulasan_rating', '$tanggal_ulasan') where `id` = '$_GET[id]'");
$result = mysqli_query($conn, "UPDATE `ulasan` set `ulasan_id` = '$ulasan_id', `nama_ulasan` = '$nama_ulasan', `ulasan` = '$ulasan', `ulasan_rating` = '$ulasan_rating', `tanggal_ulasan` = '$tanggal_ulasan'");


 header("Location:../anime-details.php?id=$ulasan_id");
?>