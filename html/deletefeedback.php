<?php
	include 'connection.php';
	$adminemail=$_GET['adminemail'];
	$role=$_GET['role'];
	$feedbackID = $_GET["feedbackID"];
	
	$query = dbConn()->prepare("DELETE  FROM feedback WHERE feedbackID='".$feedbackID."'");
	if($query->execute()){
	echo"Success to deleted.";
	}
	else{
	echo"Fail to deleted.";
	}
	header("location:feedbacklist.php?adminemail=".$adminemail."&role=".$role."");
?>