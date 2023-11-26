<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tambah Film</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script>
        function confirmUpdate() {
            var confirmation = confirm("Apakah Anda Yakin ingin Menambah data?");
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
    ?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #00237A;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="color: #ffffff;">Dream Movie</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color: #ffffff;">></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="color: #ffffff;"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!" style="color: #000000;">Logout</a></li>
                </ul>
            </li>
        </ul>
        </nav>
        <div id="layoutSidenav">
        <?php include "template/navbar.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Film</h1><br><br>
                    </div>
                    <div class="card-body">
                            <div class="container">
        <!-- Form untuk menambah data -->
        <form action="proses_tambah_film.php" method="POST" enctype="multipart/form-data" onsubmit="return confirmUpdate();">
            <div class="form-group">
                <label for="judul">Judul Film:</label>
                <input type="text" class="form-control" id="judul_film" name="judul_film" required>
            </div><br>
            <div class="form-group">
            <label for="tahun_rilis">Tahun Rilis:</label>
            <input type="date" class="form-control" id="tahun_rilis" name="tahun_rilis" required>
            </div><br>
            <div class="form-group">
                <label for="sinopsis">Sinopsis:</label>
                <textarea id="sinopsis" name="sinopsis" rows="4" cols="50" class="form-control" required></textarea>
            </div><br>
            <div class="form-group">
                <label for="nama">Nama Pemain:</label>
                <input type="text" class="form-control" id="nama_pemain" name="nama_pemain" required>
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
                <label for="gambar">Upload Gambar:</label>
                <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" accept="image/*" required>
            </div><br>
            <div class="form-group">
                <label for="kategori">Kategori:</label>
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
            </div><br>
            <div class="form-group">
                <label for="sutradara">Sutradara:</label>
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
            </div><br>
            <input type="submit" class="btn btn-primary" name="Submit" value="Tambah Data">
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Dream Movie 2023</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
