<?php
	include 'connection.php';
	if(isset($_POST['Submit'])) 
	{
	$orderkeyID=$_GET['orderkeyID'];
	$adminemail=$_GET['adminemail'];
	$role=$_GET['role'];
	
	$neworderstatus=$_POST['neworderstatus'];
	
	$query = dbConn()->prepare("UPDATE orderdetail SET orderStatus='$neworderstatus' WHERE orderkeyID='".$orderkeyID."'");
	
	if($query -> execute()){
	echo "<p id='valid'>Your activation is successful.</p>";
	header("location:orderlist1.php?adminemail=".$adminemail."&memberIC=".$memberIC."&role=".$role."");
	}
	else{
		echo "<p id='invalid'>Unable to activated member Please try again.</p>";
	}

	}
?>