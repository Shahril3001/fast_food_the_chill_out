<!DOCTTYPE html>
<html>
	<head>
		<title></title>
		 <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="bgcover">
<?php
echo "<center>";
include 'connection.php';

if(isset($_POST['Submit1'])) 
{
	$adminname = $_POST['adminname'];
	$adminphone = $_POST['adminphone'];
	$adminemail = $_POST['adminemail'];
	$accesspassword = $_POST['accesspassword'];
	$adminpassword = $_POST['adminpassword'];
	$admincpassword = $_POST['admincpassword'];


if(empty($adminname) || empty($adminphone) || empty($adminemail) || empty($accesspassword) || empty($adminpassword) || empty($admincpassword)) {
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<p>Fields can't be empty</p>
		<p>Please click <a href='register.php'><button id='buttonclick' class='button'>Register</button></a> to register again.</p>";
		echo "</div>";
} else {
if($accesspassword=="admin"){
$query = dbConn()->prepare("SELECT * FROM admin WHERE adminname='$adminname'");
$query->execute(array($adminname));
if($query->rowCount() >= 1) {
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
   echo "<p>Username is already exists. Please click <br><a href='login.php'><button id='buttonclick' class='button'>Login</button></a> if its your.</p>
   Else, please click <br><a href='register.php'><button id='buttonclick' class='button'>Register</button></a> to register again.
   ";
   echo "</div>";
} else {
	if($adminpassword==$admincpassword){
		$query = dbConn()->prepare("INSERT INTO admin VALUE(null, '".$adminname."', '".$adminemail."', '".$adminphone."', '".$adminpassword."','admin','00/00/0000')"); 
		if($query -> execute()){
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<p>Registration is success.</br>
		Click <a href='login.php'><button id='buttonclick' class='button'>Login</button></a> for proceed</p>";
		echo "</div>";
		}
	else{
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo"<h2>Registration is fail.</h2>";
		echo "</div>";
	}	
	}
	else{
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<h2>Password doesn't match.</h2>
		<p>Please click <a href='register.php'><button id='buttonclick' class='button'>Register</button></a> to register again.</p>
		";
		echo "</div>";
	}
}
}else{
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
	echo "<h2>Opps!</h2><p> You are not possible to proceed.</br>
	Please click <a href='register.php'><button id='buttonclick' class='button'>Back</button></a>.</p>";
	echo "</div>";
}
}
}
echo "</center>";
?>
<script>
function goBack(){
window.history.back();
}
</script>
</body>
</html>