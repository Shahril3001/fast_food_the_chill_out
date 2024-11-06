<html>
<head>
<title>Log Out</title>
</head>
<body>

<?php
include 'connection.php';
$date=date("Y-m-d h:i:sa");	
$adminemail=$_GET['adminemail'];
$query = dbConn()->prepare("UPDATE admin SET lastLogin=:date WHERE adminemail='".$adminemail."'");
$query->bindParam(":date", $date);
$query -> execute();
session_start();
session_unset();
session_destroy();
header("location:index.php");
exit();
?>
</body>
</html>