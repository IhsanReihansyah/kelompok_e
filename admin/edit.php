<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>DATA FILM</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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

<body class="sb-nav-fixed">
    <?php
    include 'koneksi.php';

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
        $rating_film = $f["id_rating"];
    }
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="../user/index.php">Dream Movie</a>
        <!-- Navbar Brand-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
    <?php include "template/navbar.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Edit Film</h1>
                </div>
                <div class="card-body">
                    <div class="container">
                        <!-- Form untuk menambah data -->
                        <form action="proses_edit.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data"
                            onsubmit="return confirmUpdate();">
                            <div class="form-group">
                                <label for="nama">ID Produk:</label>
                                <input type="text" class="form-control" id="id" name="id" disabled
                                    value="<?php echo $id ?>">
                            </div><br>
                            <div class="form-group">
                                <label for="nama">Judul Film:</label>
                                <input type="text" class="form-control" id="judul_film" name="judul_film"
                                    value="<?php echo $judul_film ?>">
                            </div><br>
                            <div class="form-group">
                                <label for="tahun_rilis">Tahun Rilis:</label>
                                <input type="date" class="form-control" id="tahun_rilis" name="tahun_rilis"
                                    value="<?php echo $tahun_rilis; ?>">
                                <div class="form-group">
                                    <label for="sinopsis">Sinopsis:</label>
                                    <textarea class="form-control" id="sinopsis"
                                        name="sinopsis"><?php echo $sinopsis; ?></textarea>
                                </div><br>
                                <div class="form-group">
                                    <label>Genre Film:</label><br>
                                    <input type="checkbox" name = "genre[]" value="Advanture" <?php echo (in_array("Advanture", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Advanture</label>

                                    <input type="checkbox" name = "genre[]" value="Action" <?php echo (in_array("Action", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Action</label>

                                    <input type="checkbox" name = "genre[]" value="Drama" <?php echo (in_array("Drama", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Drama</label>

                                    <input type="checkbox" name = "genre[]" value="Romance" <?php echo (in_array("Romance", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Romance</label>

                                    <input type="checkbox" name = "genre[]" value="Horor" <?php echo (in_array("Horor", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Horor</label>

                                    <input type="checkbox" name = "genre[]" value="Comedi" <?php echo (in_array("Comedi", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Comedi</label>

                                    <input type="checkbox" name = "genre[]" value="Animation" <?php echo (in_array("Animation", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Animation</label>

                                    <input type="checkbox" name = "genre[]" value="Crime" <?php echo (in_array("Crime", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Crime</label>

                                    <input type="checkbox" name = "genre[]" value="Fantasy" <?php echo (in_array("Fantasy", explode(',', $genre))) ? 'checked' : ''; ?>>
                                    <label>Fantasy</label>
                                    
                                </div><br>
                                <div class="form-group">
                                    <label for="nama_pemain">Nama Pemain:</label>
                                    <input type="text" class="form-control" id="nama_pemain" name="nama_pemain"
                                        value="<?php echo $nama_pemain ?>">
                                </div><br>
                                <div class="form-group">
                                    <label for="gambar">Upload Gambar:</label>
                                    <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload"
                                        accept="image/*">
                                    <td colspan="3"><img src="<?php echo $gambar ?>" width="100"></td>
                                </div><br>
                                <div class="form-group">
                                    <label for="kategori">Kategori:</label>                                    
                                    <select id="kategori" name="kategori" class="form-control">
                                    <option value="">Default</option>
                                    <option value="1" <?php if ($kategori == '1') echo 'selected'; ?>>Indonesia</option>
                                    <option value="2" <?php if ($kategori == '2') echo 'selected'; ?>>Korea</option>
                                    <option value="3" <?php if ($kategori == '3') echo 'selected'; ?>>China</option>
                                    <option value="4" <?php if ($kategori == '4') echo 'selected'; ?>>Jepang</option>
                                    <option value="5" <?php if ($kategori == '5') echo 'selected'; ?>>Thailand</option>
                                    <option value="6" <?php if ($kategori == '6') echo 'selected'; ?>>Amerika</option>
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
                                </div><br>
                                <div class="form-group">
                                    <label for="sutradara">Sutradara:</label>
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
                                </div><br>
                                <input type="submit" class="btn btn-primary" name="Submit" value="Simpan">
                        </form>
                    </div>
                </div>
        </div>
    </div>
    </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>