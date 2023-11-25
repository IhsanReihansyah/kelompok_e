<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
</head>

<body>

    <?php
    include 'koneksi.php';
    include "template/product.php";
    ?>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include "template/navbar.php" ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <?php
                $query = mysqli_query($conn, "SELECT * from film as f ORDER BY f.id ASC;");
                tampilkanProduktop($query);
                ?>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="kategori.php" class="primary-btn">View All <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                            tampilkanProduk1($query);
                            ?>
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="kategori.php" class="primary-btn">View All <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                            tampilkanProduk2($query);
                            ?>
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Recently Added Shows</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="kategori.php" class="primary-btn">View All <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                            tampilkanProduk3($query);
                            ?>
                        </div>
                    </div>
                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Live Action</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="kategori.php" class="primary-btn">View All <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                            tampilkanProduk4($query);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <?php
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["id_kategori"] == '1') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix day years"
                                                data-setbg="../<?php echo $data["gambar"] ?>">
                                                <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                                        <?php echo $data["judul_film"] ?>
                                                    </a></h5>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["id_kategori"] == '2') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix month week"
                                                data-setbg="../<?php echo $data["gambar"] ?>">
                                                <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                                        <?php echo $data["judul_film"] ?>
                                                    </a></h5>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["id_kategori"] == '3') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix week years"
                                                data-setbg="../<?php echo $data["gambar"] ?>">
                                                <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                                        <?php echo $data["judul_film"] ?>
                                                    </a></h5>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["id_kategori"] == '4') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix years month"
                                                data-setbg="../<?php echo $data["gambar"] ?>">
                                                <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                                        <?php echo $data["judul_film"] ?>
                                                    </a></h5>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                            $query = mysqli_query($conn, "SELECT * from `film` as f join rating as r on r.id_rating=f.id_rating ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["id_kategori"] == '5') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix day"
                                                data-setbg="../<?php echo $data["gambar"] ?>">
                                                <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                                        <?php echo $data["judul_film"] ?>
                                                    </a></h5>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.php"><img src="../img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
                        is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com"
                            target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/player.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>


</body>

</html>