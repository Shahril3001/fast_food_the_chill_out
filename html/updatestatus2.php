<?php
	include 'connection.php';
	if(isset($_POST['Submit'])) 
	{
	$memberIC=$_GET['memberIC'];
	$adminemail=$_GET['adminemail'];
	$role=$_GET['role'];
	
	$newmemberstatus=$_POST['newmemberstatus'];
	
	$query = dbConn()->prepare("UPDATE member SET memberStatus='$newmemberstatus' WHERE memberIC='".$memberIC."'");
	
	if($query -> execute()){
	echo "<p id='valid'>Your activation is successful.</p>";
	header("location:customerlist.php?adminemail=".$adminemail."&memberIC=".$memberIC."&role=".$role."");
	}
	else{
		echo "<p id='invalid'>Unable to activated member Please try again.</p>";
	}

	}
?>