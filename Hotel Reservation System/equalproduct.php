<?php
	include_once 'rConnect.php';

?>


<?php
	$name 		= $_POST["field1"];
	$mail 		= $_POST["field2"];
	$telno 		= $_POST["field3"];
	$checkin	= $_POST["field4"];
	$checkout 	= $_POST["field5"];

	$nogeusts	= $_POST["field7"];
	
	$sql = "insert into productlaunching(name,email,mobile_number,check_in,check_out,no_of_guests)values('$name ','$mail','$telno','$checkin','$checkout','$nogeusts')";        //insert data query
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted succefully')</script>";
	}
	else{
		echo "<script>alert('ERROR in inserting')</script>";
	}
	mysqli_close($conn);
?>