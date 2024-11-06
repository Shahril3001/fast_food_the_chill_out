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
	$memberIC=$_GET['memberIC'];
	$role=$_GET['role'];
	$productID=$_GET['productID'];
	
	$cartquantity=$_POST['cartquantity'];
	
	
	if(empty($cartquantity)) {
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<h2>Invalid Value!</h2>";
		echo "Fields can't be empty</br>
		Please click <br> <input id='buttonclick' class='button' type='button' name='back' value='Back' onclick='goBack()'>.
		<script>
		function goBack(){
		window.history.back();
		}
		</script>";
		echo "</div>";
	}
	else{
		$query1 = dbConn()->prepare('SELECT * FROM product WHERE productID="'. $productID .'"');
		$query1->execute();
		$products = $query1->fetchAll(PDO::FETCH_OBJ);
		foreach($products as $product){
		$productPrice = $product->productPrice;
		}
		
		$totalPrice=$cartquantity*$productPrice;
		$totalPrice=number_format($totalPrice,2);
		
	$query = dbConn()->prepare("INSERT INTO cart VALUE(null, '".$productID."', '".$cartquantity."', '".$totalPrice."', '".$memberIC."')"); 
	if($query -> execute()){
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
	echo "<p id='valid'>Feedback is successfully added.</p>";
	header("location:menuCustomer.php?memberIC=".$memberIC."&role=".$role."");
	echo "</div>";
	}
	else{
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<h2>Invalid Value!</h2>";
		echo "<p id='invalid'>Unable to submit. Please try again.</br>
		Please click <input id='buttonclick' class='button' type='button' name='back' value='Back' onclick='goBack()'>.
		<script>
		function goBack(){
		window.history.back();
		}
		</script></p>";
		echo "</div>";
	}
	}							
	}
	echo "</center>";
?>
</body>
</html>
