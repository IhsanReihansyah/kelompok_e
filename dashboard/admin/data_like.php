<?php
session_start();

if (isset($_SESSION['isAdminLogin']) != true) {
    header("Location: ../../user/awal.php");
    exit();
}
include 'koneksi.php';
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
    data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Data Like</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../img/logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../assets/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>

<body>
    <?php include "navbar/navbar.php" ?>

    <!-- Layout container -->
    <div class="layout-page">
        <?php
        include 'koneksi.php';
        ?>
        <!-- Navbar -->



        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Data Like User</h4>

                <!-- Main Content Start -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- <a href="tambah_admin.php" class="btn btn-primary mb-3"><i
                                                class="fa-solid fa-circle-plus"></i></a> -->

                                        <!-- Tabel Start -->
                                        <table id="like" class="table table-striped table-bordered">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>Judul Film</th>
                                                    <th>Genre</th>
                                                    <th>Jumlah Like</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                
                                                $query = mysqli_query($conn, "SELECT fl.*, f.*, u.*, (SELECT COUNT(*) FROM `film_like` WHERE film_id = fl.film_id) as totalLikes FROM film_like as fl JOIN film as f ON f.id = fl.film_id JOIN user as u ON fl.user_id = u.id GROUP BY film_id;");
                                                
                                                while ($data = mysqli_fetch_array($query)) {
                                                    ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $data['judul_film']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $data['genre']; ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                                echo $data['totalLikes'];
                                                            ?>
                                                    </td>
                                                </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <!-- Tabel End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Main Content End -->

            </div>
            <!-- Content Wrapper Page End -->
        </div>

        <!-- jQuery -->
        <script src="../../components/js/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="../../components/js/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="../../components/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="../../components/js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="../../components/js/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="../../components/js/jquery.vmap.min.js"></script>
        <script src="../../components/js/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../components/js/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="../../components/js/moment.min.js"></script>
        <script src="../../components/js/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="../../components/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="../../components/js/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="../../components/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../../components/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../components/js/dashboard.js"></script>

        <!-- DataTables  & Plugins -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {
            $('#like').DataTable({
                searching: false, // Menonaktifkan fitur pencarian
                // scrollX: true
            });
        });
        </script>

</body>

</html>