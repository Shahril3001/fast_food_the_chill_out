					<!-- Menu -->
					<div class="logo">
						<a href="index.html">
							<img src="images/icons/logoc1.png" alt="IMG-LOGO" data-logofixed="images/icons/logoc2.png">
						</a>
					</div>
					<?php
					if(isset($_GET['role'])){
					$role=$_GET['role'];
					if($role=="admin"){
					$adminemail=$_GET['adminemail'];
						echo"
					<div class='wrap_menu p-l-45 p-l-0-xl'>
						<nav class='menu'>
							<ul class='main_menu'>
								<li>
									<a href='index1.php?adminemail=".$adminemail."&role=".$role."'>Home</a>
								</li>

								<li>
									<a href='manage.php?adminemail=".$adminemail."&role=".$role."'>Product</a>
								</li>
								
								<li>
									<a href='customerlist.php?adminemail=".$adminemail."&role=".$role."'>Customer</a>
								</li>
								
								<li>
									<a href='orderlist1.php?adminemail=".$adminemail."&role=".$role."'>Order</a>
								</li>

								<li>
									<a href='feedbacklist.php?adminemail=".$adminemail."&role=".$role."'>Feedback</a>
								</li>

								<li>
									<a href='logout.php?adminemail=".$adminemail."'>Logout</a>
								</li>
							</ul>
						</nav>
					</div>";
					}else{
					$memberIC=$_GET['memberIC'];
					$role=$_GET['role'];
					echo"
					<div class='wrap_menu p-l-45 p-l-0-xl'>
						<nav class='menu'>
							<ul class='main_menu'>
								<li>
									<a href='index2.php?memberIC=".$memberIC."&role=".$role."'>Home</a>
								</li>

								<li>
									<a href='menuCustomer.php?memberIC=".$memberIC."&role=".$role."'>Menu</a>
								</li>
								
								<li>
									<a href='orderlist.php?memberIC=".$memberIC."&role=".$role."'>Order History</a>
								</li>

								<li>
									<a href='feedback1.php?memberIC=".$memberIC."&role=".$role."'>Feedback</a>
								</li>

								<li>
									<a href='logout2.php?memberIC=".$memberIC."'>Logout</a>
								</li>
							</ul>
						</nav>
					</div>";
					}
					}
					else{
					echo"
					<div class='wrap_menu p-l-45 p-l-0-xl'>
						<nav class='menu'>
							<ul class='main_menu'>
								<li>
									<a href='index.php'>Home</a>
								</li>

								<li>
									<a href='about.php'>About</a>
								</li>

								<li>
									<a href='menu.php'>Menu</a>
								</li>
								
								<li>
									<a href='login.php'>Login</a>
								</li>

								<li>
									<a href='register.php'>Register</a>
								</li>
								
								<li>
									<a href='gallery.php'>Gallery</a>
								</li>

								<li>
									<a href='feedback.php'>Feedback</a>
								</li>
							</ul>
						</nav>
					</div>";
					}
					?>