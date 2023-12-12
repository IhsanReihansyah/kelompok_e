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
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Halaman Admin</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>


<body>
    <?php include "navbar/navbar.php" ?>

    <!-- Layout container -->
    <div class="layout-page">
        <?php
        include 'koneksi.php';
        ?>
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                <!-- Search -->
                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center">
                        <i class="bx bx-search fs-4 lh-0"></i>
                        <form method="GET" action="index.php">
                            <input type="text" name="cari" class="form-control border-0 shadow-none"
                                placeholder="Search..." aria-label="Search..." value="<?php if (isset($_GET['cari'])) {
                      echo $_GET['cari'];
                    } ?>" />
                        </form>
                    </div>
                </div>
                <!-- /Search -->

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="images/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="images/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-semibold d-block">Admin</span>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->
                </ul>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Film</h4>

              <!-- Responsive Table -->
              <div class="card">
                <h5 class="card-header">Data Film</h5>
                <div class="table-responsive text-nowrap">
                  <table  id="film" class="table table-striped table-bordered">
                    <thead>
                      <tr class="text-nowrap">
                        <th>No</th>
                        <th>Id Film</th>
                        <th>Judul Film</th>
                        <th>Tahun Rilis</th>
                        <th>Sinopsis</th>
                        <th>Genre</th>
                        <th>Nama Pemain</th>
                        <th>Gambar</th>
                        <th>Video</th>
                        <th>Tag</th>
                        <th>Kategori</th>
                        <th>Nama Sutradara</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (isset($_GET['cari'])) {
                      $pencarian = $_GET['cari'];
                      $query = "SELECT f.id, f.judul_film, f.tahun_rilis,f.sinopsis,f.genre,f.nama_pemain,f.gambar,f.video,f.tag,k.kategori,s.nama_sutradara FROM `film` AS f JOIN kategori AS k ON k.id_kategori = f.id_kategori JOIN sutradara AS s ON s.id_sutradara=f.id_sutradara WHERE Judul_film LIKE '%" . $pencarian . "%' ORDER BY f.id ASC";
                  } else {
                    $query = "SELECT f.id, f.judul_film, f.tahun_rilis,f.sinopsis,f.genre,f.nama_pemain,f.gambar,f.video,f.tag,k.kategori,s.nama_sutradara FROM `film` AS f JOIN kategori AS k ON k.id_kategori = f.id_kategori JOIN sutradara AS s ON s.id_sutradara=f.id_sutradara ORDER BY f.id ASC";
                  }

                  $tampil = mysqli_query($conn, $query);
                    if (mysqli_num_rows($tampil) > 0) { ?>
                                <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($tampil)) {
                      ?>
                                <tr>
                                    <th scope="row"><?php echo $no ?></th>
                                    <td><?php echo $data["id"]; ?></td>
                                    <td><?php echo $data["judul_film"]; ?></td>
                                    <td><?php echo $data["tahun_rilis"]; ?></td>
                                    <td>
                                        <?php
                          $sinopsis = $data["sinopsis"];
                          $words = explode(" ", $sinopsis);
                          $truncated = implode(" ", array_slice($words, 0, 20));
                          echo $truncated;
                          if (count($words) > 20) {
                            ?>
                                        <span id="dots<?php echo $no; ?>">...</span>
                                        <span id="more<?php echo $no; ?>" style="display: none;">
                                            <?php echo implode(" ", array_slice($words, 20)); ?>
                                        </span>
                                        <a href="javascript:void(0);" onclick="toggleSinopsis(<?php echo $no; ?>)"
                                            id="readMoreBtn<?php echo $no; ?>">Baca selengkapnya</a>
                                        <?php
                          }
                          ?>
                                    </td>
                                    <td><?php echo $data["genre"]; ?></td>
                                    <td><?php echo $data["nama_pemain"]; ?></td>
                                    <td> <img src="<?php echo $data["gambar"] ?>" width="100"> </td>
                                    <td><?php echo $data["video"]; ?></td>
                                    <td><?php echo $data["tag"]; ?></td>
                                    <td><?php echo $data["kategori"]; ?></td>
                                    <td><?php echo $data["nama_sutradara"]; ?></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    href="edit_film.php?id=<?php echo $data["id"] ?>">
                                                    <i class="bx bx-edit-alt me-2"></i> Edit</a>
                                                <a class="dropdown-item"
                                                    href="proses_hapus.php?id=<?php echo $data["id"] ?>">
                                                    <i class="bx bx-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
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
            <script>
            function toggleSinopsis(index) {
                var dots = document.getElementById("dots" + index);
                var moreText = document.getElementById("more" + index);
                var btnText = document.getElementById("readMoreBtn" + index);

        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "Baca selengkapnya";
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "Baca kurang";
          moreText.style.display = "inline";
        }
      }
    </script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#film').DataTable();
        });
    </script>
  </body>
</html>