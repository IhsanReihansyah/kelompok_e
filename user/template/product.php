<?php
function tampilkanProduktop($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
                ?>
                <div class="hero__items set-bg" data-setbg="../dashboard/admin/<?php echo $data["gambar"] ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <h2>
                                    <?php echo $data["judul_film"] ?>
                                </h2>
                                <a href="anime-details.php?id=<?php echo $data["id"] ?>"><span>Detail Now</span> <i
                                        class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
        }
    }
}

function tampilkanGenre($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
            ?>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="../dashboard/admin/<?php echo $data["gambar"] ?>">
                        <!-- <div class="ep">
                                <?php echo $data["ulasan_rating"] ?>
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

function tampilkantag($query)
{
    if (mysqli_num_rows($query) > 0) {
        while ($data = mysqli_fetch_array($query)) {
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                            data-setbg="../dashboard/admin/<?php echo $data["gambar"] ?>">
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