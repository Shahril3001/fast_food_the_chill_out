<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order List</title>
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
	<section class="bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<center>
			<h3>
				Order List
			</h3>
			</center>
			<hr>
			<?php
					$cloneID = 0;
					include 'connection.php';
					$orderlistquery = dbConn()->prepare('SELECT * FROM orderdetail');
					$orderlistquery->execute();
					$orderlists = $orderlistquery->fetchAll(PDO::FETCH_OBJ);
			echo"
			<div class='row'>
				<table id='listtable'>
					<tr>
						<th  width='20px'>#</th>
						<th>Description</th>
						<th width='100px'>Discount</th>
						<th width='120px'>Extra Charge</th>
						<th width='100px'>Recorded</th>
						<th width='100px'>Status</th>
						<th width='200px'>Action</th>
					</tr>";
					foreach($orderlists as $orderlist){
					$cloneID++;
					$memberIC = $orderlist->memberIC;	
					$memberStatus = $orderlist->memberStatus;	
					$orderMethod = $orderlist->orderMethod;	
					$orderDate = $orderlist->orderDate;	
					$orderTime = $orderlist->orderTime;	
					$orderAddress = $orderlist->orderAddress;	
					$orderStatus = $orderlist->orderStatus;	
					$orderOverall = $orderlist->orderOverall;	
					$orderkeyID = $orderlist->orderkeyID;	
					$orderRecord = $orderlist->orderRecord;	
					
					if($orderMethod=="Delivery"){
						$charges="Extra Charge (+BND$20.00)";
					}else{
						$charges="No Extra Charge";
					}
					
					if($memberStatus=="Activated"){
						$discounts="Discount(20%)";
					}else{
						$discounts="No Discount";
					}
					
					
					
					
					echo "
					<tr>
					<td>$cloneID</td>
					<td><p><b>Order Method:</b> $orderMethod</br>
					<b>Account Status:</b> $memberStatus</br>
					<b>Date:</b> $orderDate</br>
					<b>Time:</b> $orderTime</br>
					<b>Location:</b> $orderAddress</br>
					<b>Total Overall:</b> BND$$orderOverall</p>
					</td>
					<td width='100px'>$discounts</td>
					<td width='120px'>$charges</td>
					<td width='100px'>$orderRecord</td>
					<td width='100px'>$orderStatus</td>
					<td width='200px'><center>
					<p><a href='orderstatus.php?adminemail=".$adminemail."&orderkeyID=".$orderkeyID."&role=".$role."'><button id='buttonclick' class='button'>Update Status</button></a></p>
					<p><a href='orderdetail1.php?adminemail=".$adminemail."&orderkeyID=".$orderkeyID."&role=".$role."'><button id='buttonclick' class='button'>Order List</button></a></p>
					<p><a href='deleteorder1.php?adminemail=".$adminemail."&orderkeyID=".$orderkeyID."&role=".$role."'><button id='buttonclick1' class='button''>Delete</button></a></p>
					</center>
					</td>
					</tr>";
					}
					echo"</table>";
			?>
			</div>
	
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