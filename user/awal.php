<?php
session_start();

if (isset($_SESSION['isUserLogin']) == true) {
    header("Location: index.php");
    exit();
}

include 'koneksi.php';

// Proses login jika formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        $_SESSION['isUserLogin'] = true; // Simpan username dalam session
        // Arahkan ke halaman dashboard atau halaman lainnya
        header("Location: index.php");
        exit();
    } else {
        echo "<script>
                alert('Maaf Passsword dan Username Salah Silahkan Masukkan Yang Benar');
                window.location.href = 'login_user.php';
              </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../dashboard/admin/cslogin/owl.carousel.min.css">
    <link rel="stylesheet" href="../dashboard/admin/cslogin/bootstrap.min.css">
    <link rel="stylesheet" href="../dashboard/admin/cslogin/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <title>Login Admin</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contents position-absolute top-50 start-50 translate-middle">
                    <div class="row justify-content-center">
                        <div class="d-grid gap-2">
                            <img src="../dashboard/admin/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
                            <a href="../dashboard/admin/login.php" class="btn btn-primary" role="button"><p class="fs-5" style="color: white;">Login With Admin</p></a>
                            <a href="login_user.php" class="btn btn-primary" role="button"><p class="fs-5" style="color: white;">Login With User</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="../dashboard/admin/jslogin/jquery-3.3.1.min.js"></script>
            <script src="../dashboard/admin/jslogin/popper.min.js"></script>
            <script src="../dashboard/admin/jslogin/bootstrap.min.js"></script>
            <script src="../dashboard/admin/jslogin/main.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>
</body>

</html>