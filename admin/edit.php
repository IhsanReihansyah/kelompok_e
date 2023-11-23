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
        $nama_sutradara = $f["id_sutradara"];
        $rating_film = $f["id_rating"];
    }
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="admin.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data Film
                        </a>
                    </div>
                </div>
            </nav>
        </div>
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
                                    <select class="form-control" id="kategori" name="kategori">
                                        <?php
                                        $queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
                                        if (mysqli_num_rows($queryKategori) > 0) {
                                            while ($dataKategori = mysqli_fetch_array($queryKategori)) {
                                                $selectedKategori = ($dataKategori['id_kategori'] == $kategori) ? 'selected' : '';
                                                echo "<option value='" . $dataKategori["id_kategori"] . "' $selectedKategori>" . $dataKategori["kategori"] . "</option>";
                                            }
                                        } else {
                                            echo "<option value=''>Tidak ada item tersedia</option>";
                                        }
                                        ?>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <label for="sutradara">Sutradara:</label>
                                    <select class="form-control" id="sutradara" name="sutradara">
                                        <?php
                                        $querysutradara = mysqli_query($conn, "SELECT * FROM sutradara");
                                        if (mysqli_num_rows($querysutradara) > 0) {
                                            while ($datasutradara = mysqli_fetch_array($querysutradara)) {
                                                $selected = ($datasutradara['id_sutradara'] == $sutradara) ? 'selected' : '';
                                                echo "<option value='" . $datasutradara["id_sutradara"] . "' $selected>" . $datasutradara["nama_sutradara"] . "</option>";
                                            }
                                        } else {
                                            echo "<option value=''>Tidak ada item tersedia</option>";
                                        }
                                        ?>
                                    </select>
                                </div><br>

                                <div class="form-group">
                                    <label for="rating">Rating Film:</label>
                                    <select class="form-control" id="rating" name="rating">
                                        <?php
                                        $queryrating = mysqli_query($conn, "SELECT * FROM rating");
                                        if (mysqli_num_rows($queryrating) > 0) {
                                            while ($datarating = mysqli_fetch_array($queryrating)) {
                                                $selected = ($datarating['id_rating'] == $rating) ? 'selected' : '';
                                                echo "<option value='" . $datarating["id_rating"] . "' $selected>" . $datarating["rating_film"] . "</option>";
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