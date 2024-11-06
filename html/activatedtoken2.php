<!DOCTTYPE html>
<html>
	<head>
		<title></title>
		 <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="bgcover">

<?php
	include 'connection.php';
	if(isset($_POST['Submit'])) 
	{
	$memberIC=$_GET['memberIC'];
	$role=$_GET['role'];
	
	
	$query1 = dbConn()->prepare('SELECT * FROM member WHERE memberIC="'. $memberIC .'"');
	$query1->execute();
	$members = $query1->fetchAll(PDO::FETCH_OBJ);
	foreach($members as $member){
	$serialkey = $member->serialkey;
	}
	
	
	
	
	$tokenserial=$_POST['tokenserial'];
	
	if($tokenserial==$serialkey){
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
	$query = dbConn()->prepare("UPDATE member SET memberStatus='Activated', serialkey='$serial' WHERE memberIC='".$memberIC."'");
	
	if($query -> execute()){
	echo "<div class='pos'>";
	echo "<img src='images/icons/logoc1.png'>";
	echo "<p id='valid'>Your activation is successful.</p>";
	header("location:index2.php?memberIC=".$memberIC."&role=".$role."");
	echo "</div>";
	}
	else{
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<p id='invalid'>Unable to activated member Please try again.</p>";
		echo "</div>";
	}
	}else{
		echo "<div class='pos'>";
		echo "<p id='invalid'>Unable to activated member. Please try again.</p>";
		echo "</div>";
	}
	}
?>

</body>
</html>
