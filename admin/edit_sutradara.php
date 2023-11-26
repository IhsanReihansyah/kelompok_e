<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Data Sutradara</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script>
        function confirmUpdate() {
            var confirmation = confirm("Apakah Anda Yakin ingin Mengedit data?");
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
     $sutradara = mysqli_query($conn,"SELECT * FROM sutradara where id_sutradara='$_GET[id_sutradara]'");

    while($s = mysqli_fetch_array($sutradara)){
    $id_sutradara = $s["id_sutradara"];
    $nama_sutradara = $s["nama_sutradara"];
    $tanggal_lahir = $s["tanggal_lahir"];
    $negara = $s["negara"];
}
?>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../user/index.php">Dream Movie</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
        </nav>
        <div id="layoutSidenav">
        <?php include "template/navbar.php" ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit Data Sutradara</h1><br><br>
                    </div>
                    <div class="card-body">
                            <div class="container">
        <!-- Form untuk menambah data -->
        <form action="proses_edit_sutradara.php?id_sutradara=<?php echo $_GET['id_sutradara']?>" method="POST" onsubmit="return confirmUpdate();">
        <div class="form-group">
                <label for="id_sutradara">ID:</label>
                <input type="text" class="form-control" id="id_sutradara" name="id_sutradara" disabled value="<?php echo $id_sutradara ?>">
            </div><br>    
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama_sutradara" name="nama_sutradara" value="<?php echo $nama_sutradara ?>">
            </div><br>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal_Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    value="<?php echo $tanggal_lahir; ?>">
            <div class="form-group">
                <label for="negara">Negara:</label>
                <input type="text" class="form-control" id="negara" name="negara" value="<?php echo $negara ?>">
            </div><br>
            <input type="submit" class="btn btn-primary" name="Submit" value="Edit Data">
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
