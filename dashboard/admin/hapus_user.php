<?php 
include 'koneksi.php';

$result = mysqli_query($conn, "DELETE from user where `id` = '$_GET[id]'");

header("Location:data_user.php");

?>