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
    </head>
    <body class="sb-nav-fixed">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT f.id, f.judul_film, f.tahun_rilis,f.sinopsis,f.genre,f.nama_pemain,f.gambar,k.kategori,s.nama_sutradara,r.rating_film FROM `film` AS f JOIN kategori AS k ON k.id_kategori = f.id_kategori JOIN sutradara AS s ON s.id_sutradara=f.id_sutradara JOIN rating AS r ON r.id_rating=f.id_rating ORDER BY f.id ASC;");
                ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3">Dream Movie</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="sutradara.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tambah Sutradara
                            </a>
                            <a class="nav-link" href="tambah_film.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tambah Film
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Film</h1>
                        <div class="card mb-4">
                            <div class="card-body">
                             Halaman ini Khusus Admin   
                            </div>
                        </div>
                            <table id="film" class="table table-striped table-bordered">
                                    <thead>
                                    <tr><th>No</th>
                                        <th>ID Film</th>
                                            <th>Judul Film</th>
                                            <th>Tahun Rilis</th>
                                            <th>Sinopsis</th>
                                            <th>Genre</th>
                                            <th>Nama Pemain</th>
                                            <th>Gambar</th>
                                            <th>kategori</th>
                                            <th>Nama Sutradara</th>
                                            <th>Rating Film</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(mysqli_num_rows($query) > 0){ ?>
                                    <?php
                                    $no = 1;
                                    while($data = mysqli_fetch_array($query)){
                                    ?>
                                    <tr>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $data["id"]; ?></td>
                                    <td><?php echo $data["judul_film"]; ?></td>
                                    <td><?php echo $data["tahun_rilis"]; ?></td>
                                    <td><?php echo $data["sinopsis"]; ?></td>
                                    <td><?php echo $data["genre"]; ?></td>
                                    <td><?php echo $data["nama_pemain"]; ?></td>
                                    <td> <img src="<?php echo $data["gambar"] ?>" width="100"> </td>
                                    <td><?php echo $data["kategori"]; ?></td>
                                    <td><?php echo $data["nama_sutradara"]; ?></td>
                                    <td><?php echo $data["rating_film"]; ?></td>
                                    <td>
                                        <center>
                                        <a href="edit.php?id=<?php echo $data["id"] ?>" class="btn btn-warning btn-sm"> Ubah </a>&nbsp; 
                                    <a href="proses_hapus.php?id=<?php echo $data["id"] ?>" onclick="return confirm('Yakin Ingin Menghapus Data?')"
                                    class="btn btn-danger btn-sm">Delete </a>
                                        </center>
                                    </td>
                                </tr>
                                <?php $no++; } ?>
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
    $(document).ready(function () {
        $('#film').DataTable();
    });
</script>
    </body>
</html>