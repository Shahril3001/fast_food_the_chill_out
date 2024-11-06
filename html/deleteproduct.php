<?php
	include 'connection.php';
	$adminemail=$_GET['adminemail'];
	$role=$_GET['role'];
	$productID = $_GET["productID"];
	
	$query = dbConn()->prepare("DELETE  FROM product WHERE productID='".$productID."'");
	if($query->execute()){
	echo"Success to deleted.";
	}
	else{
	echo"Fail to deleted.";
	}
	header("location:manage.php?adminemail=".$adminemail."&role=".$role."");
?>