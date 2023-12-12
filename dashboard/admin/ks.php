<?php
session_start();

if (isset($_SESSION['isAdminLogin']) != true) {
  header("Location: login.php");
  exit();
}
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Halaman Admin</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <?php include "navbar/navbar.php" ?>

  <!-- Layout container -->
  <!-- Navbar -->

  <!-- / Navbar -->
  <div class="layout-page">
    <?php
    $query = mysqli_query($conn, "SELECT * FROM kritikdansaran;");
    ?>
    <!-- Content wrapper -->
    <div class="content-wrapper">
      <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Kritik Dan Saran</h4>

        <!-- Responsive Table -->
        <div class="card">
          <h5 class="card-header">Data Kritik Dan Saran</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr class="text-nowrap">
                  <th>No</th>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Pesan</th>
                </tr>
              </thead>
              <tbody>
                <?php if (mysqli_num_rows($query) > 0) { ?>
                  <?php
                  $no = 1;
                  while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                      <td>
                        <?php echo $no ?>
                      </td>
                      <td>
                        <?php echo $data["id"]; ?>
                      </td>
                      <td>
                        <?php echo $data["nama"]; ?>
                      </td>
                      <td>
                        <?php echo $data["email"]; ?>
                      </td>
                      <td>
                        <?php echo $data["pesan"]; ?>
                      </td>
                    </tr>
                    <?php $no++;
                  } ?>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <!--/ Responsive Table -->
      </div>
      <!-- / Content -->
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Dream Movie 2023</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>

      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src="../assets/vendor/libs/jquery/jquery.js"></script>
      <script src="../assets/vendor/libs/popper/popper.js"></script>
      <script src="../assets/vendor/js/bootstrap.js"></script>
      <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

      <script src="../assets/vendor/js/menu.js"></script>
      <!-- endbuild -->

      <!-- Vendors JS -->

      <!-- Main JS -->
      <script src="../assets/js/main.js"></script>

      <!-- Page JS -->

      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>