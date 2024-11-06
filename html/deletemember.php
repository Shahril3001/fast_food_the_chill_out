<?php
	include 'connection.php';
	$memberIC=$_GET['memberIC'];
	$role=$_GET['role'];
	$adminemail = $_GET["adminemail"];
	
	$query = dbConn()->prepare("DELETE  FROM cart WHERE memberIC='".$memberIC."'");
	$query1 = dbConn()->prepare("DELETE  FROM member WHERE memberIC='".$memberIC."'");
	$query2 = dbConn()->prepare("DELETE  FROM orderdetail WHERE memberIC='".$memberIC."'");
	$query3 = dbConn()->prepare("DELETE  FROM orderitem WHERE memberIC='".$memberIC."'");
	
	if($query->execute()&&$query1->execute()&&$query2->execute()&&$query3->execute()){
	echo"Success to deleted.";
	}
	else{
	echo"Fail to deleted.";
	}
	header("location:customerlist.php?adminemail=".$adminemail."&role=".$role."");
?>