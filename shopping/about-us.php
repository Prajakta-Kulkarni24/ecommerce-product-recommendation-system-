<?php
session_start();
include_once('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shopping Portal | About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS loaded exactly like index.php -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet'>
</head>

<body class="cnt-home">

<!-- HEADER (same as index.php) -->
<header class="header-style-1">
    <?php include('includes/top-header.php');?>
    <?php include('includes/main-header.php');?>
    <?php include('includes/menu-bar.php');?>
</header>

<!-- PAGE CONTENT (this is what was missing earlier) -->
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="row">

            <!-- MAIN CONTENT -->
            <div class="col-md-12">

                <h2 class="text-center">About Us</h2>
                <hr>

                <p style="font-size:15px; line-height:28px; text-align:justify;">
                    E-commerce is revolutionizing the way people shop in India.
                    Why visit multiple stores when you can shop everything online
                    with just a single click?
                </p>

                <p style="font-size:15px; line-height:28px; text-align:justify;">
                    Our shopping portal provides a wide range of products including
                    mobiles, laptops, fashion accessories, furniture such as sofas,
                    dining tables and chairs, home appliances, and much more.
                </p>

                <p style="font-size:15px; line-height:28px; text-align:justify;">
                    We focus on customer satisfaction by providing secure payments,
                    affordable prices, and fast delivery. You can shop anytime,
                    anywhere — our platform never sleeps.
                </p>

            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<?php include('includes/footer.php');?>

<!-- JS (same as index.php) -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.rateit.min.js"></script>
<script src="assets/js/lightbox.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>