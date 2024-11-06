<!DOCTYPE html>
<html lang="en">
<head>
	<title>Comfirm Order</title>
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
				Order Method
			</h3>
		</center>
			<hr>
			<div class="row">
			<?php
				if(isset($_GET['memberIC'])&& isset($_GET['role'])){
					$memberIC=$_GET['memberIC'];
					$role=$_GET['role'];
					include 'connection.php';
					$query1 = dbConn()->prepare('SELECT * FROM member WHERE memberIC="'. $memberIC .'"');
					$query1->execute();
					$members = $query1->fetchAll(PDO::FETCH_OBJ);
					foreach($members as $member){
					$membername = $member->membername;
					$memberaddress = $member->memberaddress;
					}
					
					echo"
					<table id='formtable'>
						<form method='POST' action='confirmorder2.php?memberIC=".$memberIC."&role=".$role."'>
									<tr>
										<th colspan='2'>Member Activation</th>
									</tr>
									<tr>
										<td><b>Order Method:</b></td>
										<td><select name=orderMethod>
										<option value='Pick-up'>Pick-up</option>
										<option value='Delivery'>Delivery</option>
										</select></td>
									</tr>
									<tr>
										<td><b>Date:</b></td>
										<td><input type='date' name='orderDate'></td>
									</tr>
									<tr>
										<td><b>Time:</b></td>
										<td><input type='time' name='orderTime'></td>
									</tr>
									<tr>
										<td><b>Location Address:</b></td>
										<td><textarea name='orderAddress' rows='4' cols='46%'>$memberaddress</textarea></td>
									</tr>
									<tr>
										<td style='border:none;' colspan='2'  id='buttonrow'><input id='buttonclick' class='button' type='submit' name='Submit' value='Submit'/>
										<input id='buttonclick1' class='button' type='button' name='back' value='Back' onclick='goBack()'></td>
									</tr>
								</form>
								</table>
								";
			}
			?>
			<script>
			function goBack(){
			window.history.back();
			}
			</script>
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