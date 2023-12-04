<?php 
include 'koneksi.php';
if($_POST['Submit']){
    var_dump($_POST);
    die;
}
// get variable from form input
$nama_sutradara = $_POST["nama_sutradara"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$negara = $_POST["negara"];

$result = mysqli_query($conn, "INSERT INTO `sutradara` (`nama_sutradara`, `tanggal_lahir`, `negara`) VALUES ('$nama_sutradara', '$tanggal_lahir', '$negara');");

header("Location:index_sutradara.php");
?>