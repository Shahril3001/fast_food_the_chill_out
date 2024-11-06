<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
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
			<h4 class="txt20 m-b-33">
				Gallery
			</h4>
	</aside>

	<!-- Chef -->
	<section class="bg1-pattern p-t-120 p-b-105">
		<div class="container t-center">
			<center>
			<h3>
				Registration Page
			</h3><hr>
<script>
	$(document).ready(function(){
		$("#studenttab").show();
		$("#lecturertab").hide();
	});
	$(document).ready(function(){
    $("#btn1").click(function(){
        $("#studenttab").show();
		$("#lecturertab").hide();
    });
    $("#btn2").click(function(){
        $("#lecturertab").show();
		$("#studenttab").hide();
    });
	});
	</script>
			<div class="row">
							<div class="logincontainer">
							<button class="logintab" id="btn1"><h5>Member</h5></button>
							<button class="logintab" id="btn2"><h5>Employee</h5></button>
							<div class="detail" id="studenttab">
							<form method="POST" action="registermember.php">
								<table id="formtable">
									<tr>
										<th colspan="2">Member</th>
									</tr>
									<tr>
										<td><b>Username:</b></td>
										<td><input type="text" size='25' name="membername" required></td>
									</tr>
									<tr>
										<td><b>IC Number:</b></td>
										<td><input type="text" size='25' class="memberprofile" name="membericnumber" required></td>
									</tr>
									<tr>
										<td><b>Phone:</b></td>
										<td><input type="number" size='25' class="memberprofile" name="memberphone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
		    							maxlength = "7"></td>
									</tr>
									<tr>
										<td><b>Email:</b></td>
										<td><input type="email" size='25' name="memberemail" required></td>
									</tr>
									<tr>
										<td><b>Address:</b></td>
										<td><textarea rows='5' cols='40%' name="memberaddress"required></textarea></td>
									</tr>
									<tr>
										<td><b>Password:</b></td>
										<td><input type="password" name="memberpassword" required></td>
									</tr>
									<tr>
										<td><b>Confirm Password:</b></td>
										<td><input type="password" name="membercpassword" required></td>
									</tr>
									<tr>
										<td style="border:none;" colspan="2"  id="buttonrow"><input id="buttonclick" class="button" type="submit" name="Submit" value="Submit"><input id="buttonclick1" class="button" type="reset" name="reset" value="Reset"/></td>
									</tr>
								</table>
								
							</form>
							</div>
							<div class="detail" id="lecturertab">
							<form method="post" action="registeradmin.php">
								<table id="formtable">
									<tr>
										<th colspan="2">Employee</th>
									</tr>
									<tr>
										<td><b>Username:</b></td>
										<td><input type="text" name="adminname" required></td>
									</tr>
									<tr>
										<td><b>Phone:</b></td>
										<td><input type="number" class="memberprofile" name="adminphone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
		    							maxlength = "7"></td>
									</tr>
									<tr>
										<td><b>Email:</b></td>
										<td><input type="email" name="adminemail" required></td>
									</tr>
									<tr>
										<td><b>Admin Code:</b></td>
										<td><input type="password" name="accesspassword" required></td>
									</tr>
									<tr>
										<td><b>Password:</b></td>
										<td><input type="password" name="adminpassword" required></td>
									</tr>
									<tr>
										<td><b>Confirm Password:</b></td>
										<td><input type="password" name="admincpassword" required></td>
									</tr>
									<tr>
										<td style="border:none;" colspan="2" id="buttonrow"><input id="buttonclick" class="button" type="submit" name="Submit1" value="Submit"><input id="buttonclick1" class="button" type="reset" name="reset" value="Reset"/></td>
									</tr>
								</table>
								
							</form>
							</div>
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