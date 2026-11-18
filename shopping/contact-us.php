<?php
session_start();
include_once('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shopping Portal | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SAME CSS AS index.php -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/green.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rateit.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
</head>

<body class="cnt-home">

<!-- HEADER (same as index.php) -->
<header class="header-style-1">
    <?php include('includes/top-header.php');?>
    <?php include('includes/main-header.php');?>
    <?php include('includes/menu-bar.php');?>
</header>

<!-- PAGE CONTENT -->
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-md-offset-3">

                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contact Information</h3>
                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered" style="margin:0 auto; text-align:left;">
                            <tr>
                                <th width="120">Address</th>
                                <td>
                                    4665 ABC Building,<br>
                                    XYZ Area,<br>
                                    Mumbai – 400001,<br>
                                    India
                                </td>
                            </tr>
                            <tr>
                                <th>Contact No</th>
                                <td>+91 12345 7890<br>011-22334455</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>info@yourdomain.com</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</div>

<!-- FOOTER -->
<?php include('includes/footer.php');?>

<!-- SAME JS AS index.php -->
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