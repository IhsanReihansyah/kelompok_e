<?php 
include 'koneksi.php';
$judul_film = $_POST["judul_film"];
$tahun_rilis = $_POST["tahun_rilis"];
$sinopsis = $_POST["sinopsis"];
$nama_pemain = $_POST["nama_pemain"];
$video = $_POST["video"];
$kategori = $_POST["kategori"];
$nama_sutradara = $_POST["nama_sutradara"];

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.<br>";
} else {
    echo "Sorry, there was an error uploading your file.<br>";
}

if (isset($_POST['genre']) && is_array($_POST['genre'])) {
    $selected_genres = implode(',', $_POST['genre']); // Menggabungkan genre yang dipilih menjadi satu string dipisahkan koma
} else {
    $selected_genres = ''; // Atur default jika tidak ada genre yang dipilih
}

if (isset($_POST['tag']) && is_array($_POST['tag'])) {
    $selected_tags = implode(',', $_POST['tag']); // Menggabungkan tag yang dipilih menjadi satu string dipisahkan koma
} else {
    $selected_tags = ''; // Atur default jika tidak ada tag yang dipilih
}

$result = mysqli_query($conn, "INSERT INTO `film` (`judul_film`, `tahun_rilis`, `sinopsis`, `genre`, `nama_pemain`, `video`, `tag`,`id_kategori`, `id_sutradara`, `gambar`) VALUES ('$judul_film', '$tahun_rilis', '$sinopsis', '$selected_genres', '$nama_pemain','$video','$selected_tags', '$kategori', '$nama_sutradara', '$target_file');");

header("Location: index.php");
?>