<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
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
	</aside>

	<!-- Chef -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container">
			<center>
			<h3>
				Cart List
			</h3>
			</center>
			<hr>
			<?php
					$memberIC=$_GET['memberIC'];
					$role=$_GET['role'];
					$cloneID = 0;
					$overall=0;
					include 'connection.php';
					$query = dbConn()->prepare('SELECT * FROM cart WHERE memberIC="'. $memberIC .'"');
					$query->execute();
					$carts = $query->fetchAll(PDO::FETCH_OBJ);
					
					
			echo"
			<div class='row'>
			
				<table id='listtable'>
					<tr>
						<th  width='20px'>#</th>
						<th width='300px' >Image</th>
						<th>Detail</th>
						<th>Action</th>
					</tr>";
					foreach($carts as $cart){
					$cloneID++;
					$cartID = $cart->cartID;
					$productID = $cart->productID;	
					$cartQuantity  = $cart->cartQuantity ;
					$cartPrice  = $cart->cartPrice;
					
					if(isset($cartPrice)){
					$overall += $cartPrice;
					$overall=number_format($overall,2);
					}
					else{
						$overall=0;
						$overall=number_format($overall,2);
					}
					$query1 = dbConn()->prepare('SELECT * FROM product WHERE productID="'. $productID .'"');
					$query1->execute();
					$products = $query1->fetchAll(PDO::FETCH_OBJ);
					foreach($products as $product){
					$productName = $product->productName;
					$productImage = $product->productImage;
					$productPrice = $product->productPrice;
					}					
					
					echo "
					<tr>
					<td>$cloneID</td>
					<td><center><a href='$productImage'><img src='$productImage' alt='' height='150px' width='150px'></a></center></td>
					<td><p><b>Menu Name:</b> $productName</br>
					<b>Quantity:</b> $cartQuantity</br>
					<b>Price:</b> BND$$productPrice</br><hr>
					<b>Total Price:</b> BND$$cartPrice</br>
					</p></td>
					<td><center>
					<p><a href='updatecart.php?memberIC=".$memberIC."&productID=".$productID."&cartID=".$cartID."&role=".$role."'><button id='buttonclick' class='button' class='formbutton'>Change</button></a></p>
					<p><a href='deletecart.php?memberIC=".$memberIC."&cartID=".$cartID."&role=".$role."'><button class='formbutton' id='buttonclick1' class='button'>Remove</button></a></p>
					</center>
					</td>
					</tr>";
					}
					
					echo"
					<tr>
						<td colspan='2'  id='buttonrow'><b>Total Overall:</b></td>
						<td colspan='2'  id='buttonrow'>BND$$overall</td>
					</tr>
					<tr>
						<td style='border:none;' colspan='4'  id='buttonrow'>
						<a href='comfirmorder.php?memberIC=".$memberIC."&role=".$role."'><button id='buttonclick' class='button' class='confirm'>Confirm</button></a>
						<input id='buttonclick' class='button' type='button' name='back' value='Back' onclick='goBack()'></td>
					</tr>";
					echo"</table>";
			?>
			</div>
			<script>
			function goBack(){
			window.history.back();
			}
			</script>
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