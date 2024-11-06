<?php
	include 'connection.php';
	if(isset($_POST['Submit'])) 
	{
	$adminemail=$_GET['adminemail'];
	$role=$_GET['role'];
	
	$newadminname=$_POST['newadminname'];
	$newadminphone=$_POST['newadminphone'];
	$newadminpassword=$_POST['newadminpassword'];
	$newcadminpassword=$_POST['newcadminpassword'];
								
	$query = dbConn()->prepare("UPDATE admin SET adminname='$newadminname', adminphone='$newadminphone',adminpassword='$newadminpassword' WHERE adminemail='".$adminemail."'");				
	if($query -> execute()){
	echo "<p id='valid'>Gallery is successfully updated.</p>";
	header("location:index1.php?adminemail=".$adminemail."&role=".$role."");
	}
	else{
		echo "<p id='invalid'>Unable to update profile.</br>
		Please click <input type='button' name='back' value='Back' onclick='goBack()'>.</p>
		<script>
		function goBack(){
		window.history.back();
		}
		</script>";
	}	
	}
?>