<?php 
include 'koneksi.php';

$result = mysqli_query($conn, "DELETE from sutradara where `id_sutradara` = '$_GET[id_sutradara]'");

header("Location:data_sutradara.php");

?>