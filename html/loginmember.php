<!DOCTTYPE html>
<html>
	<head>
		<title>Error</title>
			<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="bgcover">
<?php
session_start();
include 'connection.php';
echo "<center>";
if(isset($_POST['Submit1'])) 
{
	$membername = $_POST['membername'];
	$memberpassword = $_POST['memberpassword'];
if(empty($membername) || empty($memberpassword)) {
	echo "The fields can't be empty</br>
	Please click <a href='login.php'><button>Back</button></a>.";
} else {
$query = dbConn()->prepare("SELECT * FROM member WHERE membername='$membername' AND  memberpassword='$memberpassword' ");
$query->execute(array());

if($query->rowCount() >= 1) {
    $_SESSION['membername'] = $membername;
	$query1 = dbConn()->prepare('SELECT * FROM member WHERE membername="'. $membername .'"');
	$query1->execute();
	$members = $query1->fetchAll(PDO::FETCH_OBJ);
	foreach($members as $member){
	$memberIC = $member->memberIC;
	$role = $member->role;
	}
    header("location:index2.php?memberIC=".$memberIC."&role=".$role."");
} else {
	
if(!isset($_SESSION["membervalid"])){
	$_SESSION['membervalid']=0;
}
	$_SESSION['membervalid']++;
	if($_SESSION['membervalid']<=3){
	
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
	echo "<h2>Invalid Login Attempt!</h2>";
	echo "<p>You have attempt ".$_SESSION['membervalid']."x for login.</p>";
    echo "<p>Username/Password is wrong.</p>
	<p>Please click <a href='login.php'><br><button id='buttonclick' class='button'>Back</button></a></p>";
	echo "</div>";
	}
	else{
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<h2>Invalid Login Attempt!</h2>";
		$_SESSION['membervalid']=0;
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