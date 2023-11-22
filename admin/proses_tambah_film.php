<?php 
include 'koneksi.php';
$judul_film = $_POST["judul_film"];
$tahun_rilis = $_POST["tahun_rilis"];
$sinopsis = $_POST["sinopsis"];
$genre = $_POST["genre"];
$nama_pemain = $_POST["nama_pemain"];
$kategori = $_POST["kategori"];
$nama_sutradara = $_POST["nama_sutradara"];
$rating_film = $_POST["rating_film"];

$target_dir = "images/"; // path directory image akan di simpan
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // full path dari image yg akan di simpan
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { // fungsi ini utk memindahkan file dr tempat asal ke target_file
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

$result = mysqli_query($conn, "INSERT INTO `film` (`judul_film`, `tahun_rilis`, `sinopsis`, `genre`, `nama_pemain`,`id_kategori`,`id_sutradara`,`id_rating`,`gambar`) VALUES ('$judul_film', '$tahun_rilis', '$sinopsis', '$genre', '$nama_pemain', '$kategori','$nama_sutradara','$rating_film','$target_file');");

header("Location:admin.php");

?>