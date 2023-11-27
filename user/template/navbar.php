<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-1">
                <div class="header__logo">
                    <a href="./index.php">
                        <img src="../img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./kategori.php">Categories <span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="./kategoriIndonesia.php">Indonesia</a></li>
                                    <li><a href="./kategoriKorea.php">Korea</a></li>
                                    <li><a href="./kategoriChina.php">China</a></li>
                                    <li><a href="./kategoriJepang.php">Jepang</a></li>
                                    <li><a href="./kategoriThailand.php">Thailand</a></li>
                                    <li><a href="./kategoriAmerika.php">Amerika</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Genre<span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="./genreRomance.php">Romance</a></li>
                                    <li><a href="./genreHoror.php">Horor</a></li>
                                    <li><a href="./genreAdvanture.php">Advanture</a></li>
                                    <li><a href="./genreAction.php">Action</a></li>
                                    <li><a href="./genreComedi.php">Comedi</a></li>
                                    <li><a href="./genreDrama.php">Drama</a></li>
                                    <li><a href="./genreAnimation.php">Animation</a></li>
                                    <li><a href="./genreCrime.php">Crime</a></li>
                                    <li><a href="./genreFantasy.php">Fantasy</a></li>
                                </ul>
                            <li><a href="./about.php">About</a></li>
                            <li>
                                <form method="GET" action="kategori.php">
                                    <input type="text" name="cari" placeholder="Search" size="15" class="rounded" value="<?php if (isset($_GET['cari'])) {
                                        echo $_GET['cari'];
                                    } ?>">
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-1">
                <div class="header__logo">
                <a href="./contact.php"><span class="fa fa-paper-plane mr-4"></span></a>
                <a href="../admin/login.php"><span class="icon_profile"></span></a>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>