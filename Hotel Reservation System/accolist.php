<?php
	include_once 'rConnect.php';

?>

<html>
<body>
<table border = "1" width = "100%">
<tr>
	<th>Customer Name</th>

	<th>Customer e-mail</th>
	<th>Customer mobile number</th>

	<th> check-in</th>
	<th> check-out</th>
	<th> Number of guests</th>
</tr>

<?php
	$sql = "select * from productlaunching";
	$result = $conn->query($sql);       //return data query , entire table save in this result variable
	
	if($result-> num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "<tr><td>".$row["name"].

			"</td><td>".$row["email"].
			"</td><td>".$row["mobile_number"].

			"</td><td>".$row["check_in"].
			"</td><td>".$row["check_out"].
			"</td><td>".$row["no_of_guests"].
			"</td></tr>" ; 
		}
	}
	else{
		echo "zero results";
	}
	
	echo "</table>";
	
	$conn->close();


?>