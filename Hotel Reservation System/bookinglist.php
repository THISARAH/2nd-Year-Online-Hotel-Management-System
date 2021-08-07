<?php
	include_once 'rConnect.php';

?>
<html>
<body>
<table border = "1" width = "100%">
<tr>
	<th>Customer E-mail</th>
	<th>Password</th>
	<th>Function Name</th>
	<th>Customer Name</th>
</tr>

<?php
	$sql = "select * from register";
	$result = $conn->query($sql);       //return data query , entire table save in this result variable
	
	if($result-> num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "<tr><td>".$row["email_Address"]."</td><td>".$row["password"]."</td><td>".$row["function"]."</td><td>".$row["full_Name"]."</td></tr>" ; 
		}
	}
	else{
		echo "zero results";
	}
	
	echo "</table>";
	
	$conn->close();


?>