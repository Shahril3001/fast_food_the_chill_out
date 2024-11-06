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

if(isset($_POST['Submit'])) 
{
$membername=$_POST['membername'];
$membericnumber=$_POST['membericnumber'];
$memberphone=$_POST['memberphone'];
$memberemail=$_POST['memberemail'];
$memberaddress=$_POST['memberaddress'];
$memberpassword=$_POST['memberpassword'];
$membercpassword=$_POST['membercpassword'];

function generateRandomString($length = 10) {
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
		}
		$serial=generateRandomString();
		
		

if(empty($membername) || empty($membericnumber) || empty($memberphone) || empty($memberemail) || empty($memberaddress) || empty($memberpassword) || empty($membercpassword)) {
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
    echo "<p>Fields can't be empty</p>
		<p>Please click<br> <input type='button' id='buttonclick' class='button' name='back' value='Back' onclick='goBack()'></p>";
	echo "</div>";
} else {
$query = dbConn()->prepare("SELECT * FROM member WHERE membername='$membername'");;
$query->execute(array($membername));
if($query->rowCount() >= 1) {
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
   echo "<p>Username is already exists. Please click <br><a href='login.php'><button id='buttonclick' class='button'>Login</button></a> if its your.</br>
   Else, please click <br><a href='register.php'><button id='buttonclick' class='button'>Register</button></a> to register again.
   ";
   echo "</div>";
} else {
	if($memberpassword==$membercpassword){
		
		$query = dbConn()->prepare("INSERT INTO member VALUE(null, '".$membername."','".$membericnumber."','".$memberemail."','".
		
		$memberphone."','".$memberaddress."','".$memberpassword."','member','Not Activated','".$serial."','00/00/0000')"); 
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
		<p>Please click <a href='register.php'><button id='buttonclick' class='button'>Register</button></a> for register again.</p>
		";
		echo "</div>";
	}
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