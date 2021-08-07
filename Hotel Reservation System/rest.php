<?php
 include_once 'config.php';
?>

<?php
    $name =$_POST["fname"];
	$email = $_POST["email"];
	$time =$_POST["time"];
	$seats =$_POST["r_seats"];
	
	$sql="insert into buisiness(id,fname,email,time,r_seats )values('',' $name','$email','$time','$seats')";
	
	if(mysqli_query($conn,$sql)){
	   echo"<script>alert('your booking was recorded succesfully')</script>";
	
	}else{
	    echo"<script>alert('error')</script>";
	}
	
	 mysqli_close($conn);
	
	
	?>