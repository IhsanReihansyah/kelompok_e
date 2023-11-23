<?php 
include 'koneksi.php';

// get variable from form input
$id = $_POST["id"];
$judul_film = $_POST["judul_film"];
$tahun_rilis = $_POST["tahun_rilis"];
$sinopsis = $_POST["sinopsis"];
$genre = $_POST["genre"];
$nama_pemain = $_POST["nama_pemain"];
$kategori = $_POST["kategori"];
$nama_sutradara = $_POST["nama_sutradara"];
$rating_film = $_POST["rating_film"];

// Inisialisasi variabel target_file
$target_file = "";

if ($_FILES["gambar"]["size"] > 0) {   // Jika browse image ditekan maka $_FILES akan terisi
    $allowedExtensions = array("jpg", "jpeg", "png");
    $fileExtension = pathinfo($_FILES["gambar"]["name"], PATHINFO_EXTENSION);

    if (!in_array($fileExtension, $allowedExtensions)) {
        echo "Format gambar tidak valid. Gunakan format JPG, JPEG, atau PNG.";
        // Hentikan eksekusi lebih lanjut jika ekstensi tidak valid
        exit;
    }

    if ($_FILES["gambar"]["size"] > 3 * 1024 * 1024) {
        echo "Ukuran file gambar terlalu besar. Harap unggah file dengan ukuran maksimum 3 MB.";
        // Hentikan eksekusi lebih lanjut jika gambar terlalu besar
        exit;
    }

    $target_dir = "../img/anime/"; // path directory image akan disimpan
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]); // full path dari image yang akan disimpan

    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) { // fungsi ini untuk memindahkan file dari tempat asal ke target_file
        echo "The file " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . " has been uploaded.<br>";
    } else {
        echo "Sorry, there was an error uploading your file.<br>";
    }
}

// Mengganti $item_image menjadi $target_file pada query SQL
$result = mysqli_query($conn, "UPDATE `film` SET `id` = '$id', `judul_film` = '$judul_film', `tahun_rilis` = '$tahun_rilis', `sinopsis` = '$sinopsis', `genre` = '$genre', `nama_pemain` = '$nama_pemain', `kategori` = '$kategori', `nama_sutradara` = '$nama_sutradara', `rating_film` = '$rating_film', `gambar` = '$target_file' WHERE `id` = '$_GET[id]'");

// Pindahkan atau hapus echo berikut jika diperlukan

header("Location: index.php");
?>
