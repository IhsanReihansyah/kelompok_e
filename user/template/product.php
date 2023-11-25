<?php
function tampilkanProduk1($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_kategori"] == '1') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}
function tampilkanProduk2($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_kategori"] == '2') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                        <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                        <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanProduk3($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_kategori"] == '3') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                        <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                        <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}
function tampilkanProduk4($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_kategori"] == '4') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                        <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                        <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}
function tampilkanProduk5($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_kategori"] == '5') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                        <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                        <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}
function tampilkanProduk6($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_kategori"] == '6') {
                ?>

        <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                        <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                        <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanProduktop($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_kategori"] == '4') {
                ?>
                <div class="hero__items set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>
                                    <?php echo $data["judul_film"] ?>
                                </h2>
                                <a href="anime-details.php?id=<?php echo $data["id"]?>"><span>Detail Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre1($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '1') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre2($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '2') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre3($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '3') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre4($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '4') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre5($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '5') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre6($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '6') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre7($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '7') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre8($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '8') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}

function tampilkanGenre9($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            if ($data["id_genre"] == '9') {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="../<?php echo $data["gambar"] ?>">
                            <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div>
                            <div class="comment"><i class=""></i><?php echo $data["genre"] ?></div>
                        </div>
                        <div class="product__item__text">
                            <h5><a href="anime-details.php?id=<?php echo $data["id"]?>">
                                    <?php echo $data["judul_film"] ?>
                                </a></h5>
                        </div>
                    </div>
                </div>

                <?php
            }
        }
    }
}
?>