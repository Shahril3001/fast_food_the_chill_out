<!DOCTTYPE html>
<html>
	<head>
		<title></title>
		 <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="bgcover">

<?php
	echo "<center>";
	include 'connection.php';
	if(isset($_POST['Submit'])) 
	{
	$adminemail=$_GET['adminemail'];
	$role=$_GET['role'];
	
	$productname=$_POST['productname'];
	$productcategory=$_POST['productcategory'];
	$productingredient=$_POST['productingredient'];
	$productprice=$_POST['productprice'];
				
				
		if(empty($productname) || empty($productcategory)|| empty($productingredient)|| empty($productprice)) {
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<h2>Invalid Value!</h2>";
		echo "<p>The fields can't be empty </br>
		Please click <br><input id='buttonclick' class='button' type='button' name='back' value='Back' onclick='goBack()'></p>
		<script>
			function goBack(){
			window.history.back();
			}
		</script>
		
		";
		echo "</div>";

		}else{		
		$target_dir="data/img/product/";
		$target_dir=$target_dir. basename($_FILES["productimg"]["name"]);
		move_uploaded_file($_FILES["productimg"]["tmp_name"],$target_dir);
		$imageup=$target_dir;
									
		$query = dbConn()->prepare("INSERT INTO product VALUE(null, '".$imageup."', '".$productname."', '".$productingredient."', '".$productcategory."', '".$productprice."')"); 
		if($query -> execute()){
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<p id='valid'>Product is successfully added.</p>";
		header("location:manage.php?adminemail=".$adminemail."&role=".$role."");
		echo "</div>";

		}
		else{
			echo "<div class='pos'>";
			echo "<img src='images/icons/logoc1.png'>";
			echo "<p id='invalid'>Unable to submit gallery. Please try again.</p>";
			echo "</div>";

		}
		}		
	}
	echo "</center>";
?>
</body>
</html>