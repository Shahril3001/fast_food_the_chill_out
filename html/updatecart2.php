<?php
	include 'connection.php';
	if(isset($_POST['Submit'])) 
	{
	$memberIC=$_GET['memberIC'];
	$cartID=$_GET['cartID'];
	$role=$_GET['role'];
	$productID=$_GET['productID'];
	$newcartquantity=$_POST['newcartquantity'];
	
	$query = dbConn()->prepare('SELECT * FROM product WHERE productID="'. $productID .'"');
	$query->execute();
	$products = $query->fetchAll(PDO::FETCH_OBJ);
	foreach($products as $product){
	$productPrice  = $product->productPrice;	
	}
								
	$totalPrice=$newcartquantity*$productPrice;
	$totalPrice=number_format($totalPrice,2);							
								
								
	$query1 = dbConn()->prepare("UPDATE cart SET cartQuantity='$newcartquantity', cartPrice='$totalPrice' WHERE cartID='".$cartID."'");				
	if($query1-> execute()){
	echo "<p id='valid'>Order Item is successfully updated.</p>";
	header("location:cart.php?memberIC=".$memberIC."&role=".$role."");
	}
	else{
		echo "<p id='invalid'>Unable to update order item.</br>
		Please click <input type='button' name='back' value='Back' onclick='goBack()'>.</p>
		<script>
		function goBack(){
		window.history.back();
		}
		</script>";
	}	
	}
?>