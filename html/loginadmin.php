<!DOCTTYPE html>
<html>
	<head>
		<title></title>
		 <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="bgcover">
<?php
session_start();
include 'connection.php';

echo "<center>";
if(isset($_POST['Submit'])) 
{
	$adminname = $_POST['adminname'];
	$adminpassword = $_POST['adminpassword'];
	
	if(empty($adminname) || empty($adminpassword)) {
		echo "The fields can't be empty</br>
		Please click <a href='login.php'><button>Back</button></a>.";
	} else {
	$query = dbconn()->prepare("SELECT * FROM admin WHERE adminname='$adminname' AND adminpassword='$adminpassword' ");
	$query->execute(array());

	if($query->rowCount() >= 1) {
		$_SESSION['adminname'] = $adminname;
		$query1 = dbconn()->prepare('SELECT * FROM admin WHERE adminname="'. $adminname .'"');
		$query1->execute();
		$admins = $query1->fetchAll(PDO::FETCH_OBJ);
		foreach($admins as $admin){
		$adminemail = $admin->adminemail;
		$role = $admin->role;
		}

		header("location:index1.php?adminemail=".$adminemail."&role=".$role."");
	} else {
		if(!isset($_SESSION["adminvalidation"])){
			$_SESSION['adminvalidation']=0;
		}
		$_SESSION['adminvalidation']++;
		if($_SESSION['adminvalidation']<=3){
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<h2>Invalid Login Attempt!</h2>";
		echo "<p>You have attempt ".$_SESSION['adminvalidation']."x for login.</p>";
		echo "<p>Username/Password is wrong.</p>
		<p>Please click <a href='login.php'><br><button id='buttonclick' class='button'>Back</button></a>";
		echo "</div>";
		}
		else{
			echo "<div class='pos'>";
			echo "<img src='images/icons/logoc1.png'>";
			echo "<h2>Invalid Login Attempt!</h2>";
			$_SESSION['adminvalidation']=0;
			echo "<p id='invalid'>Opps! Sorry, Username/Password is wrong. Please wait for 15 second to re-login.</p>";
			echo "<meta http-equiv='refresh' content='15; url=login.php'/>";
			echo "</div>";
		}
	}
}
}
echo "<//center>";
?>

</body>
</html>