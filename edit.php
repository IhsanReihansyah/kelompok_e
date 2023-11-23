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
            return confirmation;
        }

        function validateForm() {
            var judulfilm = document.forms[0]["judul_film"].value;
            var tahunrilis = document.forms[0]["tahun_rilis"].value;
            var sinopsis = document.forms[0]["sinopsis"].value;
            var genre = document.forms[0]["genre"].value;
            var namapemain = document.forms[0]["nama_pemain"].value;
            var gambar = document.forms[0]["gambar"].value;
            var kategori = document.forms[0]["kategori"].value;
            var namasutradara = document.forms[0]["nama_sutradara"].value;
            var ratingfilm = document.forms[0]["rating_film"].value;

            var valid = true;

            if (judulfilm === "") {
                document.getElementById("judulfilmError").innerHTML = "Judul Film harus diisi!";
                valid = false;
            } else {
                document.getElementById("judulfilmError").innerHTML = "";
            }

            if (tahunrilis === "") {
                document.getElementById("tahunrilisError").innerHTML = "Silahkan masukan tahun rilis";
                valid = false;
            } else {
                document.getElementById("tahunrilisError").innerHTML = "";
            }

            if (sinopsis === "") {
                document.getElementById("sinopsisError").innerHTML = "Sinopsis Wajib diisi!";
                valid = false;
            } else {
                document.getElementById("sinopsisError").innerHTML = "";
            }

            if (genre === "") {
                document.getElementById("genreError").innerHTML = "Genre tidak boleh kosong";
                valid = false;
            } else {
                document.getElementById("genreError").innerHTML = "";
            }

            if (namapemain === "") {
                document.getElementById("namapemainError").innerHTML = "Nama Pemain tidak boleh kosong!";
                valid = false;
            } else {
                document.getElementById("namapemainError").innerHTML = "";
            }

            if (gambar === "") {
                document.getElementById("gambarError").innerHTML = "Gambar tidak boleh kosong!";
                valid = false;
            } else {
                document.getElementById("gambarError").innerHTML = "";
                // Tambahkan validasi untuk ekstensi gambar
                var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
                if (!allowedExtensions.exec(gambar)) {
                    document.getElementById("gambarError").innerHTML = "Format gambar tidak valid. Gunakan format JPG, JPEG, atau PNG.";
                    valid = false;
                }
            }

            if (kategori === "") {
                document.getElementById("kategoriError").innerHTML = "Kategori Wajib diisi!";
                valid = false;
            } else {
                document.getElementById("kategoriError").innerHTML = "";
            }

            if (namasutradara === "") {
                document.getElementById("namasutradaraError").innerHTML = "Silahkan masukan Nama sutradara";
                valid = false;
            } else {
                document.getElementById("namasutradaraError").innerHTML = "";
            }

            if (ratingfilm === "") {
                document.getElementById("ratingfilmError").innerHTML = "Rating Film Wajib diisi!";
                valid = false;
            } else {
                document.getElementById("ratingfilmError").innerHTML = "";
            }

            return valid;
        }
    </script>
</head>
<body class="sb-nav-fixed">
    <?php
    include 'koneksi.php';

    $film = mysqli_query($conn,"SELECT * from film where id='$_GET[id]'");

    while($f = mysqli_fetch_array($film)){
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
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
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
                    <div class="card-body">
                        <div class="container">
                            <!-- Form untuk menambah data -->
                            <form action="proses_edit.php?id=<?php echo $id ?>" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                                <table class="table">
                                    <tr>
                                        <td>Id</td>
                                        <td>:</td>
                                        <td><input type="text" name="id" disabled value="<?php echo $id ?>"></td>
                                    </tr>

                                    <tr>
                                        <td>Judul Film</td>
                                        <td>:</td>
                                        <td><input type="text" name="judul_film" value="<?php echo $judul_film ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="judulfilmError" class="error-message"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Tahun Rilis</td>
                                        <td>:</td>
                                        <td><input type="date" name="tahun_rilis" value="<?php echo $tahun_rilis ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="tahunrilisError" class="error-message"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Sinopsis</td>
                                        <td>:</td>
                                        <td><textarea name="sinopsis"><?php echo $sinopsis ?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="sinopsisError" class="error-message"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Genre</td>
                                        <td>:</td>
                                        <td><input type="text" name="genre" value="<?php echo $genre ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="genreError" class="error-message"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Nama Pemain</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama_pemain" value="<?php echo $nama_pemain ?>"></td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="namapemainError" class="error-message"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Gambar</td>
                                        <td>:</td>
                                        <td>
                                            <input type="file" id="gambar" name="gambar">
                                            <?php echo "<img src='$gambar' alt='' style='max-width: 100px; max-height: 100px;'>"; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="gambarError" class="error-message"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Kategori</td>
                                        <td>:</td>
                                        <td><input type="text" name="kategori" value="<?php echo $kategori ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="kategoriError" class="error-message"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Nama Sutradara</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama_sutradara" value="<?php echo $nama_sutradara ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="namasutradaraError" class="error-message"></span></td>
                                    </tr>

                                    <tr>
                                        <td>Rating Film</td>
                                        <td>:</td>
                                        <td><input type="number" name="rating_film" value="<?php echo $rating_film ?>"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><span id="ratingfilmError" class="error-message"></span></td>
                                    </tr>
                                </table>
                                <input type="submit" name="Submit" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="js/scripts.js"></script>
        </body>
        </html>
