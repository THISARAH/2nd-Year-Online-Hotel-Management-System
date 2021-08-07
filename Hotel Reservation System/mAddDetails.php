<?php
	include_once 'config.php';
?>

<?php

	$hall = $_POST["choice1"];
	$capacity =$_POST["choice2"];
	$needs = $_POST["choice3"];

	$sql="insert into meeting(m_id,hall_type,capacity,needs)values('','$hall','$capacity','$needs')";
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Data Inserted Succesfully')</script>";
		header("Location:mView.php");
		//can redirect to the main page.....
	}
	else{
		echo"<script>alert('Error in inserting records')</script>";
	}
	
	mysqli_close($conn);
?>
?>