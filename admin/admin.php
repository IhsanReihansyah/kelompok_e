<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Film</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha384-vG9JMLSRdtpZ9kHFVzBkHjs4zg4Jzfs4lyd82BYCg/DfOdwQZh6v02ssUnTEmA0i" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body class="sb-nav-fixed">
    <style>
        .btn i {
            margin-right: 8px;
            /* Mengatur margin antara ikon dan teks */
        }

        .btn-warning i {
            color: #ffc107;
            /* Warna ikon "Ubah" */
        }

        .btn-danger i {
            color: #dc3545;
            /* Warna ikon "Delete" */
        }
    </style>

    <?php
    include 'koneksi.php';
    $query = mysqli_query($conn, "SELECT f.id, f.judul_film, f.tahun_rilis,f.sinopsis,f.genre,f.nama_pemain,f.gambar,f.tag,k.kategori,s.nama_sutradara FROM `film` AS f JOIN kategori AS k ON k.id_kategori = f.id_kategori JOIN sutradara AS s ON s.id_sutradara=f.id_sutradara ORDER BY f.id ASC;");
    ?>
    <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #00237A;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" style="color: #ffffff;" href="../user/index.php">Dream Movie</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars" style="color: #ffffff;"></i>
        </button>

        <!-- Navbar-->
        <?php
        include "template/navbar2.php";
        ?>

    </nav>
    <div id="layoutSidenav">
        <?php include "template/navbar.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Film</h1>
                    <div class="card mb-4" style="background-color: #9EA9B1;">
                        <div class="card-body" style="color: black; font-weight: bold;">
                            Halaman ini Khusus Data Film
                        </div>
                    </div>
                    <table id="film" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">No</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">ID Film</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Judul Film
                                </th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Tahun Rilis
                                </th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Sinopsis</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Genre</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Nama Pemain
                                </th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Gambar</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Video</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Tag</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">kategori</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Nama
                                    Sutradara</th>
                                <th style="background-color: #00237A; color: #ffffff; text-align: center;">Aksi</th>
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
                                            <?php echo $data["judul_film"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $data["tahun_rilis"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $data["sinopsis"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $data["genre"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $data["nama_pemain"]; ?>
                                        </td>
                                        <td> <img src="<?php echo $data["gambar"] ?>" width="100"> </td>
                                        <td>
                                            <?php echo $data["video"]; ?>
                                        </td>

                                        <td>
                                            <?php echo $data["tag"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $data["kategori"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $data["nama_sutradara"]; ?>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="proses_hapus.php?id=<?php echo $data["id"] ?>"
                                                    onclick="return confirm('Yakin Ingin Menghapus Data?')"
                                                    class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                        </td>
                                    </tr>
                                    <?php $no++;
                                } ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    </main><br><br><br>
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
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        document.getElementById("navbarDropdown").addEventListener("click", function () {
            document.getElementById("navbarDropdown").classList.toggle("show");
            document.getElementById("navbarDropdown").setAttribute("aria-expanded", "true");
            document.getElementById("navbarDropdown").nextElementSibling.classList.toggle("show");
        });
        $(document).ready(function () {
            $('#film').DataTable();
        });
    </script>
</body>

</html>