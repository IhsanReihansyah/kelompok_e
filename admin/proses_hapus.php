<?php 
include 'koneksi.php';

$result = mysqli_query($conn, "DELETE from film where `id` = '$_GET[id]'");

header("Location:admin.php");

?>