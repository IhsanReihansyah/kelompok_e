<!-- search_film.php -->
<?php
include 'koneksi.php';

if (isset($_GET['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);
    $query = "SELECT f.id, f.judul_film, f.tahun_rilis, f.sinopsis, f.genre, f.nama_pemain, f.gambar, f.video, f.tag, k.kategori, s.nama_sutradara FROM `film` AS f JOIN kategori AS k ON k.id_kategori = f.id_kategori JOIN sutradara AS s ON s.id_sutradara=f.id_sutradara WHERE f.judul_film LIKE '%$searchTerm%' ORDER BY f.id ASC";
} else {
    // Default query tanpa pencarian
    $query = "SELECT f.id, f.judul_film, f.tahun_rilis, f.sinopsis, f.genre, f.nama_pemain, f.gambar, f.video, f.tag, k.kategori, s.nama_sutradara FROM `film` AS f JOIN kategori AS k ON k.id_kategori = f.id_kategori JOIN sutradara AS s ON s.id_sutradara=f.id_sutradara ORDER BY f.id ASC";
}

$result = mysqli_query($conn, $query);
?>

<!-- ... (Kode tabel dan konten lainnya tetap sama) ... -->