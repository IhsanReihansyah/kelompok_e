<?php
$id = $_GET["id"]; //mendapatkan id
$query = mysqli_query($conn, "SELECT * FROM `ulasan` as u join film as f on f.id=u.ulasan_id join user as us on us.id=u.ulasan_user where f.id = '$id' ");
?>
<div class="anime__details__review">
    <?php
    if (mysqli_num_rows($query) > 0) {
        // Tampilkan "Reviews" hanya jika ada data
        ?>
        <div class="section-title">
            <h5>Reviews</h5>
        </div>
        <?php

        while ($data = mysqli_fetch_array($query)) {
            ?>
            <div class="anime__review__item">
                <div class="anime__review__item__pic">
                    <img src="../dashboard/admin/images/1.png" alt="">
                </div>
                <div class="anime__review__item__text">
                    <h6>
                        <?php echo $data["nickname"] ?>
                        <span>
                            <?php echo $data["tanggal_ulasan"] ?>&ensp;&ensp;&ensp;&ensp;&ensp; Rate
                            <?php echo $data["ulasan_rating"] ?> / 10
                        </span>
                    </h6>
                    <p>
                        <?php echo $data["ulasan"] ?>
                    </p>
                </div>
            </div>
            <?php
        }
    } else {
        // Tampilkan pesan jika tidak ada review
        ?>
        <div class="anime__details__review">
            <div class="section-title">
                <h5>Reviews</h5>
            </div>
            <div class="anime__review__item">
            </div>
        </div>
        <?php
    }
    ?>
</div>
