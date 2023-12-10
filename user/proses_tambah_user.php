<?php

if ($_POST["password"] == $_POST["re-password"]) {
    include 'koneksi.php';
    $nickname = $_POST["nickname"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    //ngehash password
    $hashed_password = hash('sha256', $password);

    $result = mysqli_query($conn, "INSERT INTO `user` (`nickname`, `username`, `password`) VALUES ('$nickname', '$username', '$hashed_password');");

    header("Location: login_user.php");
    exit();
} else {
    echo "<script>
            alert('Maaf Passsword dan Username Salah Silahkan Masukkan Yang Benar');
            window.location.href = 'SignIn.php';
          </script>";
}

?>