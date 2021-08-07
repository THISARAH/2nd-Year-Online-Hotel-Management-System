<?php
 include_once 'config.php';
?>

<?php
    $name =$_POST["fname"];
	$email = $_POST["email"];
	$time =$_POST["time"];
	$movie =$_POST["movie"];
	
	$sql="insert into hotelreservation(id,fname,email,time,movie)values('','$name','$email','$time','$movie')";
	
	if(mysqli_query($conn,$sql)){
	   echo"<script>alert('your booking was recorded succesfully')</script>";
	
	}else{
	    echo"<script>alert('error')</script>";
	}
	
	 mysqli_close($conn);
	
	
	?>