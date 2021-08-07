<?php
	include_once 'rConnect.php';

?>


<?php
	$email		 = $_POST["field1"];
	$pass 		 = $_POST["field2"];
	$function	 = $_POST["field3"];
	$fname 		 = $_POST["field4"];
	$address	 = $_POST["field5"];
	$mobileno 	 = $_POST["field6"];
	$checkin 	 = $_POST["field7"];
	$checkout 	 = $_POST["field8"];
	$noguests 	 = $_POST["field9"];
	$nochildren  = $_POST["field10"];
	$req		 = $_POST["field11"];
	
	$sql = "insert into register(email_Address,password,function,full_Name,address,mobile_Number,check_In,check_Out,no_Guests,no_Children,requests)values('$email','$pass','$function','$fname','$address','$mobileno','$checkin','$checkout','$noguests','$nochildren','$req')";        //insert data query
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted succefully')</script>";
	}
	else{
		echo "<script>alert('ERROR in inserting')</script>";
	}
	mysqli_close($conn);
?>