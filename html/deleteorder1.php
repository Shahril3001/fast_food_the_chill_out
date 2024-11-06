<?php
	include 'connection.php';
	$adminemail=$_GET['adminemail'];
	$role=$_GET['role'];
	$orderkeyID = $_GET["orderkeyID"];
	
	$query = dbConn()->prepare("DELETE  FROM orderdetail WHERE orderkeyID='".$orderkeyID."'");
	$query1 = dbConn()->prepare("DELETE  FROM orderitem WHERE orderkeyID='".$orderkeyID."'");
	if($query->execute()&&$query1->execute()){
	echo"Success to deleted.";
	}
	else{
	echo"Fail to deleted.";
	}
	header("location:orderlist1.php?adminemail=".$adminemail."&role=".$role."");
?>