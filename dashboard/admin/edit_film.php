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
    <script>
        function confirmUpdate() {
            var confirmation = confirm("Yakin ingin mengubah data?");
            if (confirmation) {
                // Jika pengguna mengkonfirmasi (klik OK), maka formulir akan dikirim
                return true;
            } else {
                // Jika pengguna membatalkan (klik Batal), formulir tidak akan dikirim
                return false;
            }
        }
    </script>
  </head>

  <body>
  <?php include "navbar/navbar.php" ?>

        <!-- Layout container -->
        <div class="layout-page">
        <?php include 'koneksi.php';
        $film = mysqli_query($conn, "SELECT * from film where id='$_GET[id]'");

        while ($f = mysqli_fetch_array($film)) {
          $id = $f["id"];
          $judul_film = $f["judul_film"];
          $tahun_rilis = $f["tahun_rilis"];
          $sinopsis = $f["sinopsis"];
          $genre = $f["genre"];
          $nama_pemain = $f["nama_pemain"];
          $gambar = $f["gambar"];
          $kategori = $f["id_kategori"];
          $id_sutradara = $f["id_sutradara"];
          // $rating_film = $f["id_rating"];
          $tag = $f["tag"];
          $video = $f["video"];

        }
        ?>
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
                            <span class="fw-semibold d-block">MyAdmin</span>
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
                      <h5 class="mb-0">Edit Film</h5>
                    </div>
                    <div class="card-body">
                    <!-- Form untuk menambah data -->
                    <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data"
                            onsubmit="return confirmUpdate();">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">ID Film</label>
                          <div class="col-sm-10">
                          <input type="text" class="form-control" id="id" name="id" disabled value="<?php echo $id ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Judul Film</label>
                          <div class="col-sm-10">
                          <input type="text" class="form-control" id="judul_film" name="judul_film" required value="<?php echo $judul_film ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-company">Tahun Rilis</label>
                          <div class="col-sm-10">
                          <input type="date" class="form-control" id="tahun_rilis" name="tahun_rilis" required value="<?php echo $tahun_rilis ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-email">Sinopsis</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                            <textarea id="sinopsis" name="sinopsis" rows="4" cols="50" class="form-control" required><?php echo $sinopsis; ?></textarea>
                              <span class="input-group-text" id="basic-default-email2"></span>
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Nama Pemain</label>
                          <div class="col-sm-10">                
                            <input type="text" class="form-control" id="nama_pemain" name="nama_pemain" required value="<?php echo $nama_pemain ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Genre</label> 
                        <div class="form-group col-sm-10">
                                    <input type="checkbox" name = "genre[]" value="Advanture" <?php echo (in_array("Advanture", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Advanture</label><br>

                                    <input type="checkbox" name = "genre[]" value="Action" <?php echo (in_array("Action", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Action</label><br>

                                    <input type="checkbox" name = "genre[]" value="Drama" <?php echo (in_array("Drama", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Drama</label><br>

                                    <input type="checkbox" name = "genre[]" value="Romance" <?php echo (in_array("Romance", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Romance</label><br>

                                    <input type="checkbox" name = "genre[]" value="Horor" <?php echo (in_array("Horor", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Horor</label><br>

                                    <input type="checkbox" name = "genre[]" value="Comedi" <?php echo (in_array("Comedi", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Comedi</label><br>

                                    <input type="checkbox" name = "genre[]" value="Animation" <?php echo (in_array("Animation", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Animation</label><br>

                                    <input type="checkbox" name = "genre[]" value="Crime" <?php echo (in_array("Crime", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Crime</label><br>

                                    <input type="checkbox" name = "genre[]" value="Fantasy" <?php echo (in_array("Fantasy", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Fantasy</label><br>
                                    
                                    </div>
                        </div>
                                
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Upload Gambar</label>
                          <div class="col-sm-10">                
                          <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" accept="images/*">
                          <td colspan="3"><img src="<?php echo $gambar ?>" width="100"></td>
                         </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Video</label>
                          <div class="col-sm-10">                
                            <input type="text" class="form-control" id="video" name="video" value="<?php echo $video ?>">
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Kategori</label> 
                        <div class="form-group col-sm-10">
                                    <select id="kategori" name="kategori" class="form-control">
                                    <option value="">Default</option>
                                    <option value="1" <?php if ($kategori == '1')
                                      echo 'selected'; ?>>Indonesia</option>
                                    <option value="2" <?php if ($kategori == '2')
                                      echo 'selected'; ?>>Korea</option>
                                    <option value="3" <?php if ($kategori == '3')
                                      echo 'selected'; ?>>China</option>
                                    <option value="4" <?php if ($kategori == '4')
                                      echo 'selected'; ?>>Jepang</option>
                                    <option value="5" <?php if ($kategori == '5')
                                      echo 'selected'; ?>>Thailand</option>
                                    <option value="6" <?php if ($kategori == '6')
                                      echo 'selected'; ?>>Amerika</option>
                                    </select>
                                    <!-- <div class="col-md-12">
                                        <select class="form-select" id="kategori" required name="kategori">
                                            <option selected>
                                                <?php
                                                $query = mysqli_query($conn, "SELECT * FROM kategori");
                                                if (mysqli_num_rows($query) > 0) {
                                                  while ($data = mysqli_fetch_array($query)) {
                                                    echo "<option value='" . $data["kategori"] . "' if ($kategori == '" . $data["id_kategori"] . "') echo 'selected'; >" . $data["kategori"] . "</option>";
                                                  }
                                                } else {
                                                  echo "<option value=''>No items available</option>";
                                                }
                                                ?>
                                            </option>
                                        </select>
                                    </div> -->
                                </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Kategori</label> 
                        <div class="form-group col-sm-10">
                                    <select class="form-control" id="sutradara" name="sutradara">
                                        <?php
                                        $querysutradara = mysqli_query($conn, "SELECT * FROM sutradara");

                                        if (mysqli_num_rows($querysutradara) > 0) {
                                          while ($datasutradara = mysqli_fetch_array($querysutradara)) {
                                            $selected = ($datasutradara['id_sutradara'] == $id_sutradara) ? 'selected' : '';
                                            echo "<option value='" . $datasutradara["id_sutradara"] . "' $selected>" . $datasutradara["nama_sutradara"] . "</option>";
                                          }
                                        } else {
                                          echo "<option value=''>Tidak ada item tersedia</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-phone">Tag</label> 
                        <div class="form-group col-sm-10">
                                    <input type="checkbox" name = "tag[]" value="Latest Film" <?php echo (in_array("Latest Film", explode(',', $tag))) ? 'checked' : ''; ?>>
                                    <label>Latest Film</label><br>

                                    <input type="checkbox" name = "tag[]" value="Trending Now" <?php echo (in_array("Trending Now", explode(',', $tag))) ? 'checked' : ''; ?>>
                                    <label>Trending Now</label><br>

                                    <input type="checkbox" name = "tag[]" value="Most Repeat" <?php echo (in_array("Most Repeat", explode(',', $tag))) ? 'checked' : ''; ?>>
                                    <label>Most Repeat</label><br>

                                    <input type="checkbox" name = "tag[]" value="Top Views Day" <?php echo (in_array("Top Views Day", explode(',', $tag))) ? 'checked' : ''; ?>>
                                    <label>Top Views Day</label><br>

                                    <input type="checkbox" name = "tag[]" value="Top Views Week" <?php echo (in_array("Top Views Week", explode(',', $tag))) ? 'checked' : ''; ?>>
                                    <label>Top Views Week</label><br>

                                    <input type="checkbox" name = "tag[]" value="Top Views Month" <?php echo (in_array("Top Views Month", explode(',', $tag))) ? 'checked' : ''; ?>>
                                    <label>Top Views Month</label><br>

                                    <input type="checkbox" name = "tag[]" value="Top Views Year" <?php echo (in_array("Top Views Year", explode(',', $tag))) ? 'checked' : ''; ?>>
                                    <label>Top Views Year</label><br>    
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