<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dream Movie 2023</title>

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
                            $query = mysqli_query($conn, "SELECT * from `film` as f join kategori as k on f.id_kategori=k.id_kategori ORDER BY f.id ASC;");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    if ($data["tag"] == 'Trending Now') {
                                        ?>

                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg"
                                                    data-setbg="../admin/<?php echo $data["gambar"] ?>">
                                                    <!-- <div class="ep">
                                                        <?php echo $data["rating_film"] ?>
                                                    </div> -->
                                                    <div class="comment"><i class=""></i>
                                                        <?php echo $data["genre"] ?>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                            <?php echo $data["judul_film"] ?>
                                                        </a></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Latest Film</h4>
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
                            $query = mysqli_query($conn, "SELECT * from `film` as f join kategori as k on f.id_kategori=k.id_kategori ORDER BY f.id ASC;");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    if ($data["tag"] == 'Latest Film') {
                                        ?>

                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg"
                                                    data-setbg="../admin/<?php echo $data["gambar"] ?>">
                                                    <!-- <div class="ep">
                                                        <?php echo $data["rating_film"] ?>
                                                    </div> -->
                                                    <div class="comment"><i class=""></i>
                                                        <?php echo $data["genre"] ?>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                            <?php echo $data["judul_film"] ?>
                                                        </a></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Most Repeat</h4>
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
                            $query = mysqli_query($conn, "SELECT * from `film` as f join kategori as k on f.id_kategori=k.id_kategori ORDER BY f.id ASC;");
                            if (mysqli_num_rows($query) > 0) {
                                while ($data = mysqli_fetch_array($query)) {
                                    if ($data["tag"] == 'Most Repeat') {
                                        ?>

                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg"
                                                    data-setbg="../admin/<?php echo $data["gambar"] ?>">
                                                    <!-- <div class="ep">
                                                        <?php echo $data["rating_film"] ?>
                                                    </div> -->
                                                    <div class="comment"><i class=""></i>
                                                        <?php echo $data["genre"] ?>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                            <?php echo $data["judul_film"] ?>
                                                        </a></h5>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                            }
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
                                $query = mysqli_query($conn, "SELECT * from `film` as f join kategori as k on f.id_kategori=k.id_kategori ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["tag"] == 'Top Views Day') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix day years"
                                                data-setbg="../admin/<?php echo $data["gambar"] ?>">
                                                <!-- <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div> -->
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                        <?php echo $data["judul_film"] ?>
                                                    </a></h5>
                                            </div>
                                            <?php
                                        }

                                    }
                                }
                                $query = mysqli_query($conn, "SELECT * from `film` as f join kategori as k on f.id_kategori=k.id_kategori ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["tag"] == 'Top Views Week') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix month week"
                                                data-setbg="../admin/<?php echo $data["gambar"] ?>">
                                                <!-- <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div> -->
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                        <?php echo $data["judul_film"] ?>
                                                    </a></h5>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                $query = mysqli_query($conn, "SELECT * from `film` as f join kategori as k on f.id_kategori=k.id_kategori ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["tag"] == 'Top Views Month') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix week years"
                                                data-setbg="../admin/<?php echo $data["gambar"] ?>">
                                                <!-- <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div> -->
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                        <?php echo $data["judul_film"] ?>
                                                    </a></h5>
                                            </div>
                                            <?php
                                        }
                                    }
                                }
                                $query = mysqli_query($conn, "SELECT * from `film` as f join kategori as k on f.id_kategori=k.id_kategori ORDER BY f.id ASC;");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        if ($data["tag"] == 'Top Views Year') {
                                            ?>
                                            <div class="product__sidebar__view__item set-bg mix years month"
                                                data-setbg="../admin/<?php echo $data["gambar"] ?>">
                                                <!-- <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div> -->
                                                <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
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
    <?php include "template/footer.php" ?>
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