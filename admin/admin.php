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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    $query = mysqli_query($conn, "SELECT f.id, f.judul_film, f.tahun_rilis,f.sinopsis,f.genre,f.nama_pemain,f.gambar,f.video,f.tag,k.kategori,s.nama_sutradara FROM `film` AS f JOIN kategori AS k ON k.id_kategori = f.id_kategori JOIN sutradara AS s ON s.id_sutradara=f.id_sutradara ORDER BY f.id ASC;");
    ?>
    <?php
        include "template/navbar2.php";
        ?>
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
                    <div class="dropdown-center">
                        &#8195;<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Filter Data
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="admin_NoSinopsis.php">Without Sinopsis</a></li>
                            <li><a class="dropdown-item" href="admin_NoGenre.php">Without Genre</a></li>
                            <li><a class="dropdown-item" href="admin_Both.php">Both</a></li>
                        </ul>
                    </div>
                    <table id="sutradara" class="table table-striped table-bordered">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#sutradara').DataTable();
        });
    </script>
</body>

</html>