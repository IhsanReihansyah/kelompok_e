<?php

if ($_POST["password"] == $_POST["re-password"]) {
    include 'koneksi.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "INSERT INTO `ulasan` (`username`, `password`) VALUES ('$username', '$password');");

    header("Location: login_user.php");
    exit();
} else {
    echo "<script>
            alert('Maaf Passsword dan Username Salah Silahkan Masukkan Yang Benar');
            window.location.href = 'SignIn.php';
          </script>";
}

?>