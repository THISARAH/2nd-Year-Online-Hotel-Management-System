<?php
	include_once 'eConnect.php';

?>

<?php
	$cardname	 = $_POST["field12"];
	$cardno		 = $_POST["field13"];
	$expdate	 = $_POST["field14"];
	$cvv		 = $_POST["field15"];
	
	$sql = "insert into payment(card_Name,card_Number,exp_Date,cvv)values('$cardname','$cardno','$expdate','$cvv')";        //insert data query
	
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Record inserted succefully')</script>";
	}
	else{
		echo "<script>alert('ERROR in inserting')</script>";
	}
	mysqli_close($conn);
?>