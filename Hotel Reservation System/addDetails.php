<?php
	include_once 'config.php';
?>


<?php
	$theme = $_POST["type1"];
	$capacity=$_POST["type2"];
	$desc=$_POST["type3"];
	
	$sql="insert into wedding(w_id,w_theme,capacity,description)values('','$theme','$capacity','$desc')";

	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Data Inserted Succesfully')</script>";
		header("Location:view.php");
		//can redirect to the main page.....
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>