<!DOCTYPE html>
<html lang="en">
<head>
	<title>Feedback</title>
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
<script src="ckeditor/ckeditor.js"></script>
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


	<!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url(images/bg.jpg);">
		<h2 class="tit6 t-center">
			Feedback Page
		</h2>
	</section>

	<!-- Chef -->
	<section class="section-chef bgwhite p-t-115 p-b-95">
		<div class="container">
			<center>
			<h3>
				Feedback Page
			</h3>
			
			<hr>
			<b>Leave a Comment</b>
			<p>Your email address will not be published. Required fields are marked *</p></br>
			<div class="row"><?php
			echo"
							<form method='POST' id='formpage' action='feedback1_2.php?memberIC=".$memberIC."&role=".$role."'>";?>
								<table id="formtable">
									<tr>
										<th colspan="2">Feedback</th>
									</tr>
									<tr>
										<td><b>Username:</b></td>
										<td><input type="text" name="fbusername" size='25' placeholder="Your name..."></td>
									</tr>
									<tr>
										<td><b>Subject:</b></td>
										<td><input type="text" name="fbsubject" size='25' placeholder="Your subject..."></td>
									</tr>
									<tr>
										<td><b>Email:</b></td>
										<td><input type="email" name="fbemail" size='25' placeholder="Your email..."></td>
									</tr>
									<tr>
										<td><b>Comment:</b></td>
										<td><textarea name="fbcomment"  id='editor1' rows='5' cols='40%' placeholder="Your comment.."></textarea></td>
									</tr>
									<tr>
										<td style="border:none;" colspan="2"  id="buttonrow"><input id="buttonclick" class="button" type="submit" name="Submit" value="Submit"><input id="buttonclick1" class="button" type="reset" name="reset" value="Reset"/></td>
									</tr>
					</table>	
				</form>
				<script>	
				CKEDITOR.replace( 'editor1' );
				</script>
				</center>
			</div>
		</div>
	</section>
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" id="ourmaps">

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
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.min.js"></script>
	 <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#ourmaps',
                    lat: 4.903061,
                    lng: 114.9135445,
                    scrollwheel: false
                });

                //locations request
                map.getElevations({
                    locations: [[4.903061, 114.9135445]],
                    callback: function (result, status) {
                        if (status == google.maps.ElevationStatus.OK) {
                            for (var i in result) {
                                map.addMarker({
                                    lat: result[i].location.lat(),
                                    lng: result[i].location.lng(),
                                    infoWindow: {
                                        content: '<address class="tooltip_address"><b>Junky Burger</b><br />Jalan Awan Hijau, Taman OUG<br />58200 Kuala Lumpur <br />Malaysia <br /></address>'
                                    }
                                });
                            }
                        }
                    }
                });

            });
        </script>
</body>
</html>