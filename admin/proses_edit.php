<?php 
include 'koneksi.php';
$judul_film = $_POST["judul_film"];
$tahun_rilis = $_POST["tahun_rilis"];
$sinopsis = $_POST["sinopsis"];
$genre = $_POST["genre"];
$nama_pemain = $_POST["nama_pemain"];
$kategori = $_POST["kategori"];
$nama_sutradara = $_POST["sutradara"];
$rating_film = $_POST["rating"];

if($_FILES["fileToUpload"]["size"]!=0){   // Jika browse image di tekan maka $_FILES akan terisi
    $target_dir = "images/"; // path directory image akan di simpan
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
        echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
    $result = mysqli_query($conn, "UPDATE `film` set `judul_film` = '$judul_film', `tahun_rilis` = '$tahun_rilis', `sinopsis` = '$sinopsis', `genre` = '$genre', `nama_pemain` = '$nama_pemain', `id_kategori` = '$kategori', `id_kategori` = '$nama_sutradara', `id_sutradara` = '$rating_film', `gambar`= '$target_file' where `id` = '$_GET[id]'");
}

$result = mysqli_query($conn, "UPDATE `film` set `judul_film` = '$judul_film', `tahun_rilis` = '$tahun_rilis', `sinopsis` = '$sinopsis', `genre` = '$genre', `nama_pemain` = '$nama_pemain', `id_kategori` = '$kategori', `id_kategori` = '$nama_sutradara', `id_sutradara` = '$rating_film' where `id` = '$_GET[id]'");

header("Location:admin.php");

