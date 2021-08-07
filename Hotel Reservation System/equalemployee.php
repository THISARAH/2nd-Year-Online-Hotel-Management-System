<?php
	include_once 'eConnect.php';
?>


<?php
	$name = $_POST["field1"];
	$gender = $_POST["field2"];
	$telno = $_POST["field3"];
	$addres =$_POST["field4"];
	
	$sql = "insert into employee(eName,eGender,eTelno,eAddress)values('$name','$gender','$telno','$addres')";        //insert data query
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted succefully')</script>";
	}
	else{
		echo "<script>alert('ERROR inserting')</script>";
	}
	mysqli_close($conn);
?>