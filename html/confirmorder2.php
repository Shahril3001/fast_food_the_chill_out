<!DOCTTYPE html>
<html>
	<head>
		<title></title>
		 <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="bgcover">
<?php
echo"<center>";
	include 'connection.php';
	include 'orderkey.php';
	if(isset($_POST['Submit'])) 
	{	
	$memberIC=$_GET['memberIC'];
	$role=$_GET['role'];
	$overall=0;
	$orderAddress=$_POST['orderAddress'];
	$orderMethod=$_POST['orderMethod'];
	$orderDate=$_POST['orderDate'];		
	$orderTime=$_POST['orderTime'];		
	$orderRecord=date("Y-m-d h:i:sa");	
	
	if(empty($orderRecord) || empty($orderTime)|| empty($orderDate)|| empty($orderMethod)|| empty($orderAddress)) {
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

}
	else{

	/* Retrieve member */
	$customerquery = dbConn()->prepare('SELECT * FROM member WHERE memberIC="'. $memberIC .'"');
	$customerquery->execute();
	$members = $customerquery->fetchAll(PDO::FETCH_OBJ);
	foreach($members as $member){
		$memberStatus = $member->memberStatus;
	}
	
	/* Retrieve cart */
	$cartquery = dbConn()->prepare('SELECT * FROM cart WHERE memberIC="'. $memberIC .'"');
	$cartquery->execute();
	$carts = $cartquery->fetchAll(PDO::FETCH_OBJ);
	foreach($carts as $cart){
	$cloneID++;
	$cartID = $cart->cartID;
	$productID = $cart->productID;	
	$cartQuantity  = $cart->cartQuantity ;
	$cartPrice  = $cart->cartPrice;
	$overall += $cartPrice;
	$overall=number_format($overall,2);
	
	/* Insert into orderitem */
	$orderitemquery = dbConn()->prepare("INSERT INTO orderitem VALUE(null,'".$productID."','".$cartQuantity."','".
	$cartPrice."', '".$memberIC."','".$orderkey."')");  
	$orderitemquery -> execute();
	}
	

	if($orderMethod=="Delivery" && $memberStatus=="Not Activated"){
		$overall1=(($overall+20.00));
		$confirmoverall=number_format($overall1,2);
	}elseif($orderMethod=="Pick-up" && $memberStatus=="Not Activated"){
		$overall1=($overall);
		$confirmoverall=number_format($overall1,2);
	}elseif($orderMethod=="Delivery" && $memberStatus=="Activated"){
		$overall1=(($overall+20.00)*80/100);
		$confirmoverall=number_format($overall1,2);
	}else{
		$overall1=(($overall)*80/100);
		$confirmoverall=number_format($overall1,2);
	}
	
	/* Delete cart */
	$deletecart = dbConn()->prepare("DELETE  FROM cart WHERE memberIC='".$memberIC."'");
	$deletecart->execute();
	
	$orderdetailquery = dbConn()->prepare("INSERT INTO orderdetail VALUE(null, '".$memberIC."','".$memberStatus."','".$orderkey."','".$orderMethod."','".
	$orderDate."','".$orderTime."','".$orderAddress."','Pending','".$confirmoverall."','".$orderRecord."')");  
					
	if($orderdetailquery -> execute()){
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
	echo "<p id='valid'>Order is successfully added.</p>";
	header("location:menuCustomer.php?memberIC=".$memberIC."&role=".$role."");
	echo "</div>";

	}
	else{
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<p id='invalid'>Unable to order. Please try again.</p>";
		echo "</div>";

	
	}
		
	}
	
	}
	echo"</center>";
?>
</body>
</html>
