		<?php
		if(isset($_GET['role'])){
		$role=$_GET['role'];
		if($role=="admin"){
		$adminemail=$_GET['adminemail'];
		echo"
		<ul class='menu-sidebar p-t-95 p-b-70'>
			<li class='t-center m-b-13'>
				<a href='index1.php?adminemail=".$adminemail."&role=".$role."' class='txt19'>Home</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='manage.php?adminemail=".$adminemail."&role=".$role."' class='txt19'>Product</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='customerlist.php?adminemail=".$adminemail."&role=".$role."' class='txt19'>Customer</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='orderlist1.php?adminemail=".$adminemail."&role=".$role."' class='txt19'>Order</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='feedbacklist.php?adminemail=".$adminemail."&role=".$role."' class='txt19'>Feedback</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='logout.php?adminemail=".$adminemail."' class='txt19'>Logout</a>
			</li>
		</ul>";
		
		}else{
		$memberIC=$_GET['memberIC'];
		$role=$_GET['role'];
		echo"
		<ul class='menu-sidebar p-t-95 p-b-70'>
			<li class='t-center m-b-13'>
				<a href='index2.php?memberIC=".$memberIC."&role=".$role."' class='txt19'>Home</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='menuCustomer.php?memberIC=".$memberIC."&role=".$role."' class='txt19'>Menu</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='orderlist.php?memberIC=".$memberIC."&role=".$role."' class='txt19'>Order History</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='feedback1.php?memberIC=".$memberIC."&role=".$role."' class='txt19'>Feedback</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='logout2.php?memberIC=".$memberIC."' class='txt19'>Logout</a>
			</li>
		</ul>";
		}
		}else{
		echo"
		<ul class='menu-sidebar p-t-95 p-b-70'>
			<li class='t-center m-b-13'>
				<a href='index.php' class='txt19'>Home</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='index.php' class='txt19'>About</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='menu.php' class='txt19'>Menu</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='login.php' class='txt19'>Login</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='register.php' class='txt19'>Register</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='gallery.php' class='txt19'>Gallery</a>
			</li>
			<li class='t-center m-b-13'>
				<a href='feedback.php' class='txt19'>Feedback</a>
			</li>
		</ul>";
		}
		?>