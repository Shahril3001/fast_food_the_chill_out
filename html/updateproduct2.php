<?php
	include 'connection.php';
	if(isset($_POST['Submit'])) 
	{
	$adminemail=$_GET['adminemail'];
	$role=$_GET['role'];
	$productID = $_GET['productID'];
	$newproductName=$_POST['newproductName'];
	$newproductCategory=$_POST['newproductCategory'];
	$newproductIngredient=$_POST['newproductIngredient'];
	$newproductPrice=$_POST['newproductPrice'];
								
	$target_dir = "data/img/product/";
	$target_dir = $target_dir . basename( $_FILES["newproductImage"]["name"]);
	$uploadOk=1;

	if (file_exists($target_dir . $_FILES["newproductImage"]["name"])) {
	echo "Sorry, file already exists.";
	$uploadOk = 0;
	}
	if ($uploadOk==0) {
		echo "Sorry, your file was not uploaded.";
	} 
	else { 
	if (move_uploaded_file($_FILES["newproductImage"]["tmp_name"], $target_dir)) 
	{
		$imageup = $target_dir;
	echo "<img src='" . $imageup . "' />";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	}
	$query = dbConn()->prepare("UPDATE product SET productImage='$imageup', productName='$newproductName', productCategory='$newproductCategory', productIngredient='$newproductIngredient', productPrice='$newproductPrice' WHERE productID='".$productID."'");				
	if($query -> execute()){
	$adminemail=$_GET['adminemail'];
	echo "<p id='valid'>Gallery is successfully updated.</p>";
	header("location:manage.php?adminemail=".$adminemail."&role=".$role."");
	}
	else{
		echo "<p id='invalid'>Unable to update gallery. Please try again.</p>";
	}	
	}
?>