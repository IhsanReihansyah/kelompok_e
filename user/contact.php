<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
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

    <header>
        <h1>Contact Us</h1>
    </header>
    <section>
        <form action="" method="POST">
            <label for="name">Name<span class="required">*</span> :</label>
            <input type="text" name="name" class="box" required>

            <label for="email">Email<span class="required">*</span> :</label>
            <input type="email" name="email" class="box" required>

            <label for="message">Message<span class="required">*</span> :</label>
            <textarea name="message" class="box" required></textarea>

            <input type="submit" value="Send Message" name="send" class="btn btn-primary">
        </form>
    </section>

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
                            <li class="active"><a href="./index.php">Homepage</a></li>
                            <li><a href="./categories.php">Categories</a></li>
                            <li><a href="./genre.php">Genre</a></li>
                            <li><a href="./about.php">About</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="./blog.php">Our Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | Dream Movie 2023
                    </p>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


    <script src="js/script.js"></script>

</body>

</html>
