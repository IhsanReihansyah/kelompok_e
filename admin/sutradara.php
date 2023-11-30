<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tambah Sutradara</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
    <?php include "template/navbar2.php" ?>
    <div id="layoutSidenav">
        <?php include "template/navbar.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Tambah Sutradara</h1><br><br>
                </div>
                <div class="card-body">
                    <div class="container">
                        <!-- Form untuk menambah data -->
                        <form action="proses_tambah_sutradara.php" method="POST" onsubmit="return confirmUpdate();">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" class="form-control" id="nama_sutradara" name="nama_sutradara"
                                    required>
                            </div><br>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir:</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                    required>
                            </div><br>
                            <div class="form-group">
                                <label for="negara">Negara:</label>
                                <input type="text" class="form-control" id="negara" name="negara" required>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>