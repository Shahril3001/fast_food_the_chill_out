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
	$fbusername=$_POST['fbusername'];
	$fbsubject=$_POST['fbsubject'];
	$fbemail=$_POST['fbemail'];
	$fbcomment=$_POST['fbcomment'];
	$fbdate=date("d/m/Y");
	
	
	if(empty($fbusername) || empty($fbsubject) || empty($fbemail) || empty($fbcomment)) {
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<h2>Invalid Value!</h2>";
		echo "Fields can't be empty</br>
		<p>Please click <br><input id='buttonclick' class='button' type='button' name='back' value='Back' onclick='goBack()'>.</p>
		<script>
		function goBack(){
		window.history.back();
		}
		</script>";
		echo "</div>";
	}
	else{
	$query = dbConn()->prepare("INSERT INTO feedback VALUE(null, '".$fbusername."', '".$fbsubject."', '".$fbemail."', '".$fbcomment."', '".$fbdate."')"); 
	if($query -> execute()){
		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
	echo "<p id='valid'>Feedback is successfully added.</p>";
	header("location:feedback.php");
	echo "</div>";
	}
	else{

		echo "<div class='pos'>";
		echo "<img src='images/icons/logoc1.png'>";
		echo "<h2>Invalid Value!</h2>";
		echo "<p id='invalid'>Unable to submit gallery. Please try again.</p>
		<p>Please click <br><input id='buttonclick' class='button' type='button' name='back' value='Back' onclick='goBack()'></p>.
		<script>
		function goBack(){
		window.history.back();
		}
		</script></p>";
		echo "</div>";
	}
	}							
	}
	echo "</center>";
?>

</body>
</html>