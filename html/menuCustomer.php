<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="js/index.js"></script>
<script src="js/active.js"></script>

</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<?php 
					include 'header.php';
					?>

					<!-- Social -->
					<div class="social flex-w flex-l-m p-r-20">
						<a href="https://www.tripadvisor.com/"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
						<a href="https://www.facebook.com/"><i class="fa fa-facebook m-l-21" aria-hidden="true"></i></a>
						<a href="https://twitter.com/"><i class="fa fa-twitter m-l-21" aria-hidden="true"></i></a>
						<button class="btn-show-sidebar m-l-33 trans-0-4"></button>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Sidebar -->
	<aside class="sidebar trans-0-4">
		<!-- Button Hide sidebar -->
		<button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

		<!-- - -->
		<?php 
		include 'side.php';
		?>

		<!-- - -->
		<div class="gallery-sidebar t-center p-l-60 p-r-60 p-b-40">
			<!-- - -->
	</aside>

	<!-- Chef -->
	<section class="bg1-pattern p-t-120 p-b-105">
		<div class="container t-center">
			<center>
			<h3>
				Menu
			</h3><hr>
<script>
	$(document).ready(function(){
		$("#Lunchtab").show();
		$("#Sidestab").hide();
		$("#Dinnertab").hide();
		$("#Drinktab").hide();
		$("#Desserttab").hide();
		$("#HappyHourtab").hide();
	});
	$(document).ready(function(){
    $("#Lunchbtn").click(function(){
       $("#Lunchtab").show();
		$("#Sidestab").hide();
		$("#Dinnertab").hide();
		$("#Drinktab").hide();
		$("#Desserttab").hide();
		$("#HappyHourtab").hide();
    });
    $("#Sidesbtn").click(function(){
		$("#Lunchtab").hide();
		$("#Sidestab").show();
		$("#Dinnertab").hide();
		$("#Drinktab").hide();
		$("#Desserttab").hide();
		$("#HappyHourtab").hide();
    });
	  $("#Dinnerbtn").click(function(){
		$("#Lunchtab").hide();
		$("#Sidestab").hide();
		$("#Dinnertab").show();
		$("#Drinktab").hide();
		$("#Desserttab").hide();
		$("#HappyHourtab").hide();
    });
	  $("#Drinkbtn").click(function(){
		$("#Lunchtab").hide();
		$("#Sidestab").hide();
		$("#Dinnertab").hide();
		$("#Drinktab").show();
		$("#Desserttab").hide();
		$("#HappyHourtab").hide();
    });
	  $("#Dessertbtn").click(function(){
        $("#Lunchtab").hide();
		$("#Sidestab").hide();
		$("#Dinnertab").hide();
		$("#Drinktab").hide();
		$("#Desserttab").show();
		$("#HappyHourtab").hide();
    });
	  $("#HappyHourbtn").click(function(){
		$("#Lunchtab").hide();
		$("#Sidestab").hide();
		$("#Dinnertab").hide();
		$("#Drinktab").hide();
		$("#Desserttab").hide();
		$("#HappyHourtab").show();
    });
	});
	</script>
			<div class="row">
							<div class="menucontainer">
							
							<?php
							include 'connection.php';
							$categories=['Lunch','Sides','Dinner','Drink','Dessert','HappyHour'];
							foreach($categories as $category){
								echo"<button class='logintab'  id='".$category."btn'><h5>$category</h5></button>";
							}
							echo"<div id='cart'><a href='cart.php?memberIC=".$memberIC."&role=".$role."'><img class='poscart' src='images/cart.png' alt='' height='45px' width='50px'></a></div>";
							foreach($categories as $category){
								echo"<div class='menudetail' id='".$category."tab'>";
								$query1 = dbConn()->prepare('SELECT * FROM product WHERE productCategory="'. $category.'"');
								$query1->execute();
								$products = $query1->fetchAll(PDO::FETCH_OBJ);
					foreach($products as $product){
					$productID = $product->productID;	
					$productImage = $product->productImage;
					$productName = $product->productName;
					$productPrice = $product->productPrice;
					
					echo "
					<div class='product-item'>
					<div class='product-image'><center><a href='$productImage'><img src='$productImage' alt='' height='230px' width='220px'></a></center></div>
					<div class='product-name'>$productName</div>
					<div class='product-price'>BND$$productPrice</div>
					<a href='ordermenu.php?memberIC=".$memberIC."&productID=".$productID."&role=".$role."'><button id='buttonclick' class='button'>ORDER</button></a>
					</div>
					
					
					";					
					}
					
					

								echo"</div>";
							}
							?>							
							</div>
			</div>
			</center>
		</div>
	</section>

	<!-- Footer -->
	<footer class="bg1">
		<div class="container p-t-40 p-b-70">
				<?php 
				include 'footer.php';
				?>
		</div>
	</footer>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/parallax100/parallax100.js"></script>
	<script type="text/javascript">
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>