<?php
	include_once 'rConnect.php';

?>

<html>
<body>
<table border = "1" width = "100%">
<tr>
	<th>Customer E-mail</th>

	<th>Function Name</th>
	<th>Customer Name</th>

	<th>Customer Mobile Number</th>
	<th>Check-in</th>
	<th>Check-out</th>
	<th>No of Guests</th>
	<th>No of Children</th>
	<th>Requests</th>
</tr>

<?php
	$sql = "select * from register";
	$result = $conn->query($sql);       //return data query , entire table save in this result variable
	
	if($result-> num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "<tr><td>".$row["email_Address"].

			"</td><td>".$row["function"].
			"</td><td>".$row["full_Name"].

			"</td><td>".$row["mobile_Number"].
			"</td><td>".$row["check_In"].
			"</td><td>".$row["check_Out"].
			"</td><td>".$row["no_Guests"].
			"</td><td>".$row["no_Children"].
			"</td><td>".$row["requests"].
			"</td></tr>" ; 
		}
	}
	else{
		echo "zero results";
	}
	
	echo "</table>";
	
	$conn->close();


?>