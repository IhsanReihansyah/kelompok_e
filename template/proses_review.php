<?php
include "./koneksi.php";

$result = mysqli_query($conn, "INSERT INTO `ulasan` (`id`, `ulasan_id`, `nama_ulasan`, 'ulasan', `tanggal_ulasan`) Values ('$id', '$ulasan_id', '$nama_ulasan', '$ulasan', '$tanggal_ulasan')");

//get variabel from form input
$id=$_POST["id"];
$ulasan_id=$_POST["ulasan_id"];
$nama_ulasan=$_POST["nama_ulasan"];
$ulasan=$_POST["ulasan"];
$tanggal_ulasan= date('Y-m-d');

if($result){
    header("Location:./anime-details.php?id=$ulasan_id");
}
?>