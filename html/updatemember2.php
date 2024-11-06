<?php
	include 'connection.php';
	if(isset($_POST['Submit'])) 
	{
	$memberIC=$_GET['memberIC'];
	$role=$_GET['role'];
	
	$newmembername=$_POST['newmembername'];
	$newmemberphone=$_POST['newmemberphone'];
	$newmemberemail=$_POST['newmemberemail'];
	$newmemberaddress=$_POST['newmemberaddress'];
	$newmemberpassword=$_POST['newmemberpassword'];
	$newcmemberpassword=$_POST['newmemberpassword'];
								
	$query = dbConn()->prepare("UPDATE member SET membername='$newmembername', memberphone='$newmemberphone', memberemail='$newmemberemail', memberaddress='$newmemberaddress', memberpassword='$newmemberpassword' WHERE memberIC='".$memberIC."'");				
	if($query -> execute()){
	echo "<p id='valid'>Gallery is successfully updated.</p>";
	header("location:index2.php?memberIC=".$memberIC."&role=".$role."");
	}
	else{
		echo "<p id='invalid'>Unable to update profile. Please try again.</p>";
	}	
	}
?>