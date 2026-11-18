<?php
session_start();
include('includes/config.php');

/* ADD TO CART LOGIC — SAME AS INDEX */
if (isset($_GET['action']) && $_GET['action'] == "add") {
    $id = intval($_GET['id']);
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity']++;
    } else {
        $sql = "SELECT productPrice FROM products WHERE id='$id'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);

        $_SESSION['cart'][$id] = array(
            "quantity" => 1,
            "price" => $row['productPrice']
        );
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">

	    <title>Shopping Portal Home Page</title>

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="row">

            <!-- LEFT SIDEBAR (OPTIONAL – SAME AS INDEX) -->
            <div class="col-md-3 sidebar">
                <?php include('includes/side-menu.php'); ?>
            </div>

            <!-- MAIN PRODUCT AREA -->
            <div class="col-md-9">
                <div class="category-product">
                    <div class="row">

                        <?php
                       # $cid = intval($_GET['cid']);
                       $cid = isset($_GET['cid']) ? intval($_GET['cid']) : 0;
                        $sql = "SELECT * FROM products WHERE category='$cid'";
                        $query = mysqli_query($con, $sql);

                        if (mysqli_num_rows($query) > 0) {
                            while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-sm-6 col-md-4 wow fadeInUp">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="product-details.php?pid=<?php echo $row['id']; ?>">
                                                <img src="admin/productimages/<?php echo $row['id']; ?>/<?php echo $row['productImage1']; ?>" class="img-responsive" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="product-info text-left">
                                        <h3 class="name"><?php echo htmlentities($row['productName']); ?></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>
                                        <div class="product-price">
                                            <span class="price">Rs. <?php echo htmlentities($row['productPrice']); ?></span>
                                        </div>
                                    </div>

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <a href="categorywise-products.php?action=add&id=<?php echo $row['id']; ?>&cid=<?php echo $cid; ?>" class="btn btn-primary icon">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <button class="btn btn-primary cart-btn" type="button">
                                                        Add to cart
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        } else {
                            echo "<h4>No Products Found</h4>";
                        }
                        ?>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- FOOTER — SAME AS INDEX -->
<?php include('includes/footer.php'); ?>

<!-- EXACT SAME JS AS index.php -->
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