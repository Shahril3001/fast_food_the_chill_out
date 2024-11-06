<!DOCTTYPE html>
<html>
	<head>
		<title></title>
		 <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="bgcover">
<?php
	include 'connection.php';
	$memberIC=$_GET['memberIC'];
	$role=$_GET['role'];
	$cartID = $_GET["cartID"];
	
	$query = dbConn()->prepare("DELETE  FROM cart WHERE cartID='".$cartID."'");
	if($query->execute()){
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
	echo"Success to deleted.";
	echo "</div>";
	}
	else{
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
	echo"Fail to deleted.";
	echo "</div>";
	}
	header("location:cart.php?memberIC=".$memberIC."&role=".$role."");
?>
</body>
</html>
