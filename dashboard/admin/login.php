<?php
session_start();

if (isset($_SESSION['isAdminLogin']) == true) {
  header("Location: index.php");
  exit();
}

include 'koneksi.php';

// Proses login jika formulir dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = hash('sha256', $_POST['password']);

  $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    // Login berhasil
    $_SESSION['isAdminLogin'] = true; // Simpan username dalam session
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
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="cslogin/owl.carousel.min.css">
  <link rel="stylesheet" href="cslogin/bootstrap.min.css">
  <link rel="stylesheet" href="cslogin/style.css">

  <link rel="icon" type="image/x-icon" href="../../img/logo.png">


  <title>Login Admin</title>
</head>

<body>
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4"><br><br>
                <h3>Login Admin</h3>
              </div>
              <form action="login.php" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <input type="submit" value="Log In" name="submit" class="btn btn-block btn-primary">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="jslogin/jquery-3.3.1.min.js"></script>
  <script src="jslogin/popper.min.js"></script>
  <script src="jslogin/bootstrap.min.js"></script>
  <script src="jslogin/main.js"></script>
</body>

</html>