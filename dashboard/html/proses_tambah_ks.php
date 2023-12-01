<?php 
include 'koneksi.php';
// get variable from form input
$nama = $_POST["nama"];
$email = $_POST["email"];
$pesan = $_POST["pesan"];

$result = mysqli_query($conn, "INSERT INTO `kritikdansaran` (`nama`, `email`, `pesan`) VALUES ('$nama', '$email', '$pesan');");
header("Location:../user/index.php");
?>