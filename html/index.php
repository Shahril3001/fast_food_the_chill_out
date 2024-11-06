<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

		<?php 
		include 'side.php';
		?>
	</aside>

	<!-- Slide1 -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/titlebg.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
							The Chill Out
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
							<!-- Button1 -->
							<a href="#menu" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url(images/burger.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
							The Chill Out
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
							<!-- Button1 -->
							<a href="#menu" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1" style="background-image: url(images/pizza.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							Welcome to
						</span>

						<h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
							The Chill Out
						</h2>

						<div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
							<!-- Button1 -->
							<a href="#menu" class="btn1 flex-c-m size1 txt3 trans-0-4">
								Look Menu
							</a>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick1-dots"></div>
		</div>
	</section>

	<!-- Welcome -->
	<section class="section-welcome bg1-pattern p-t-120 p-b-105">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-t-45 p-b-30">
					<div class="wrap-text-welcome t-center">
						<span class="tit2 t-center">
							The Chill Out
						</span>

						<h3 class="tit3 t-center m-b-35 m-t-5">
							Welcome
						</h3>

						<p class="t-center m-b-22 size3 m-l-r-auto">
							The Chill Out is a fast food restaurant that provided variety flavor of pizza and burger as its signature dish.
						</p>

						<a href="about.php" class="txt4">
							Our Story
							<i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
						<img src="images/resto.jpg" alt="IMG-OUR">
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Intro -->
	<section class="section-intro">
		<div class="header-intro parallax100 t-center p-t-135 p-b-158" style="background-image: url(images/middle.jpg);">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				The Chill Out
			</h3>
		</div>

		<div class="content-intro bg-white p-t-77 p-b-133">
			<div class="container">
				<div class="row">
					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<img src="images/event.jpg" alt="IMG-INTRO">
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Special Event
								</h4></a>

								<p class="m-b-20">
									The Chill out also provide services such as preparation for special event. For any inquiry, do contact us for further details.
								</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<img src="images/deli.jpg" alt="IMG-INTRO">
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Delicious Food
								</h4></a>

								<p class="m-b-20">
									" We've eaten three times at "The Chill Out," a relatively new Italian Fast Food restaurant in Brunei, and have had exceptionally good meals each time. Although small, the restaurant is reasonably attractive with minimalistic interior. "
								</p>

							</div>
						</div>
					</div>

					<div class="col-md-4 p-t-30">
						<!-- Block1 -->
						<div class="blo1">
							<div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom">
								<img src="images/cater.jpg" alt="IMG-INTRO">
							</div>

							<div class="wrap-text-blo1 p-t-35">
								<a href="#"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
									Catering Services
								</h4></a>

								<p class="m-b-20">
									The Chill out also provide services such as catering for Small-Medium Event Such as Birthday Party or Bridal Shower. For any inquiry, do contact us for further details.
								</p>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- Our menu -->
	<section id="menu" class="section-ourmenu bg2-pattern p-t-115 p-b-120">
		<div class="container">
			<div class="title-section-ourmenu t-center m-b-22">
				<span class="tit2 t-center">
					Discover
				</span>

				<h3 class="tit5 t-center m-t-2">
					Our Menu
				</h3>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/lunch.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php" class="btn2 flex-c-m txt5 ab-c-m size4">
									Lunch
								</a>
							</div>
						</div>

						<div class="col-sm-6">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/dinner.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php" class="btn2 flex-c-m txt5 ab-c-m size5">
									Dinner
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/happy.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php" class="btn2 flex-c-m txt5 ab-c-m size6">
									Happy Hour
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="row">
						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/drinks.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php" class="btn2 flex-c-m txt5 ab-c-m size7">
									Drink
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/sides.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php" class="btn2 flex-c-m txt5 ab-c-m size8">
									Sides
								</a>
							</div>
						</div>

						<div class="col-12">
							<!-- Item our menu -->
							<div class="item-ourmenu bo-rad-10 hov-img-zoom pos-relative m-t-30">
								<img src="images/dessert.jpg" alt="IMG-MENU">

								<!-- Button2 -->
								<a href="menu.php" class="btn2 flex-c-m txt5 ab-c-m size9">
									Dessert
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- Review -->
	<section class="section-review p-t-115">
		<!-- - -->
		<div class="title-review t-center m-b-2">
			<span class="tit2 p-l-15 p-r-15">
				Customers Say
			</span>

			<h3 class="tit8 t-center p-l-20 p-r-15 p-t-3">
				Review
			</h3>
		</div>

		<!-- - -->
		<div class="wrap-slick3">
			<div class="slick3">
				<div class="item-slick3 item1-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/r1.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto">
									“ It's a great fast food restaurant to bring your family and friends ”
								</p>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Nur'Arisyah
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item2-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/r2.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto">
									“ Excellent eating experience.. from walking in the door and being greeted by employee, seated and drink order taken, was maybe 5 minutes. Meal was served hot and excellent taste. Server was very friendly and helpful. ”
								</p>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Marie Simmons
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick3 item3-slick3">
					<div class="wrap-content-slide3 p-b-50 p-t-50">
						<div class="container">
							<div class="pic-review size14 bo4 wrap-cir-pic m-l-r-auto animated visible-false" data-appear="zoomIn">
								<img src="images/r3.jpg" alt="IGM-AVATAR">
							</div>

							<div class="content-review m-t-33 animated visible-false" data-appear="fadeInUp">
								<p class="t-center txt12 size15 m-l-r-auto">
									“ Great food at a great price! Love the Pizza as well as the Ice Cream. Love this place! ”
								</p>

								<div class="star-review fs-18 color0 flex-c-m m-t-12">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
									<i class="fa fa-star p-l-1" aria-hidden="true"></i>
								</div>

								<div class="more-review txt4 t-center animated visible-false m-t-32" data-appear="fadeInUp">
									Alice Word
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="wrap-slick3-dots m-t-30"></div>
		</div>
	</section>


	<!-- Video -->
	<section class="section-video parallax100" style="background-image: url(images/middle2.jpg);">
		<div class="content-video t-center p-t-225 p-b-250">
			<span class="tit2 p-l-15 p-r-15">
				Discover
			</span>

			<h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
				Our Video
			</h3>

			<div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal" data-target="#modal-video-01" >
				<div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
					<i class="fa fa-play fs-18 m-l-2" aria-hidden="true">
					</i>	
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

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>

	<!-- Modal Video 01-->
	<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

		<div class="modal-dialog" role="document" data-dismiss="modal">
			<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

			<div class="wrap-video-mo-01">
				<div class="w-full wrap-pic-w op-0-0"><img src="images/icons/video-16-9.jpg" alt="IMG"></div>
				<div class="video-mo-01">
					<iframe src="https://www.youtube.com/embed/cxB4ACaaR4I?rel=0&amp;showinfo=0" allowfullscreen></iframe>
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
	<script src="js/main.js"></script>

</body>
</html>