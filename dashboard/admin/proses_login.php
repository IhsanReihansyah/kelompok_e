<?php
include 'koneksi.php';

// Proses login jika formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        session_start();
        $_SESSION['username'] = $username; // Simpan username dalam session

        // Arahkan ke halaman dashboard atau halaman lainnya
        header("Location: index.php");
        exit();
    } else {
        echo "<script>
                alert('Maaf Passsword dan Username Salah Silahkan Masukkan Yang Benar');
                window.location.href = 'login.php';
              </script>";
    }
}
?>