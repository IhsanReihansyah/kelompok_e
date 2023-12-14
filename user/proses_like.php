<?php
session_start();
include "koneksi.php";

$filmId = $_POST['filmId'];

$idUser = $_SESSION['userId'];

$check_like_query = mysqli_query($conn, "SELECT * FROM film_like WHERE film_id = '$filmId' AND user_id = '$idUser'");
$user_has_liked = mysqli_num_rows($check_like_query) > 0;

if ($user_has_liked) {
    // Jika pengguna sudah memberikan like, lakukan unlike
    mysqli_query($conn, "DELETE FROM film_like WHERE film_id = '$filmId' AND user_id = '$idUser'");
} else {
    // Jika pengguna belum memberikan like, lakukan like
    mysqli_query($conn, "INSERT INTO film_like (film_id, user_id) VALUES ('$filmId', '$idUser')");
}

header("Location: anime-details.php?id=$filmId");
exit();