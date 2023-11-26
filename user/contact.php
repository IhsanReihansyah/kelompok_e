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
    <?php include "template/footer.php" ?>
    <!-- Footer Section End -->


    <script src="js/script.js"></script>

</body>

</html>
