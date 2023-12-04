<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Halaman Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

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

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
  <?php include "navbar/navbar.php" ?>

        <!-- Layout container -->
        <div class="layout-page">
        <?php include 'koneksi.php'; ?>
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
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
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Dirgham</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="login.php">
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

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0">Tambah Film</h5>
                    </div>
                    <div class="card-body">
                      <form action="proses_tambah_film.php" method="POST">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Film</label>
                          <div class="col-sm-10">
                          <input type="text" class="form-control" id="judul_film" name="judul_film" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Tahun Rilis</label>
                          <div class="col-sm-10">
                          <input type="date" class="form-control" id="tahun_rilis" name="tahun_rilis" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Sinopsis</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <textarea id="sinopsis" name="sinopsis" rows="4" cols="50" class="form-control" required></textarea>
                              <span class="input-group-text" id="basic-default-email2"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Nama Pemain</label>
                          <div class="col-sm-10">                
                            <input type="text" class="form-control" id="nama_pemain" name="nama_pemain" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-message">Genre Film</label>
                          <div class="col-sm-10">
                          <?php
                          $query = mysqli_query($conn, "SELECT DISTINCT genre FROM film");
                          $genres = array();
                          while ($data = mysqli_fetch_array($query)) {
                            $genre = $data['genre'];
                            if (!empty($genre)) {
                              $genre_list = explode(',', $genre);
                              $genres = array_merge($genres, $genre_list);
                            }
                          }

                          $genres = array_unique(array_map('trim', $genres));

                          foreach ($genres as $genre) {
                            echo '<input type="checkbox" id="genre_' . $genre . '" name="genre[]" value="' . $genre . '">';
                            echo '<label for="genre_' . $genre . '">' . $genre . '</label><br>';
                          }
                          ?>
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Upload Gambar</label>
                          <div class="col-sm-10">                
                          <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload"accept="images/*" required>                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Link youtube</label>
                          <div class="col-sm-10">                
                            <input type="text" class="form-control" id="video" name="video" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                                <div class="col-sm-10">  
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option selected>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM kategori");
                                        if (mysqli_num_rows($query) > 0) {
                                          while ($data = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $data["id_kategori"] . "'>" . $data["kategori"] . "</option>";
                                          }
                                        } else {
                                          echo "<option value=''>No items available</option>";
                                        }
                                        ?>
                                </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="kategori">Sutradara</label>
                                <div class="col-sm-10">  
                                <select class="form-control" id="nama_sutradara" name="nama_sutradara" required>
                                    <option selected>
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM sutradara");
                                        if (mysqli_num_rows($query) > 0) {
                                          while ($data = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $data["id_sutradara"] . "'>" . $data["nama_sutradara"] . "</option>";
                                          }
                                        } else {
                                          echo "<option value=''>No items available</option>";
                                        }
                                        ?>
                                </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                              <label class="col-sm-2 col-form-label" for="basic-default-message">Tag</label>
                              <div class="col-sm-10">
                                <?php
                                $query = mysqli_query($conn, "SELECT DISTINCT tag FROM film");
                                $tags = array();
                                while ($data = mysqli_fetch_array($query)) {
                                  $tagData = $data['tag'];
                                  if (!empty($tagData)) {
                                    $tagList = explode(',', $tagData);
                                    $tags = array_merge($tags, $tagList);
                                  }
                                }
                                
                                $tags = array_unique(array_map('trim', $tags));
                                
                                foreach ($tags as $tag) {
                                  echo '<input type="checkbox" id="tag_' . $tag . '" name="tag[]" value="' . $tag . '">';
                                  echo '<label for="tag_' . $tag . '">' . $tag . '</label><br>';
                                }

                                ?>
                                </div>
                              </div>
                              <div class="row justify-content-end">
                                <div class="col-sm-10">
                                  <button type="submit" name="Submit" class="btn btn-primary">Send</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <!-- / Content -->

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