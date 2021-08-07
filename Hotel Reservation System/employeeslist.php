<?php
	include_once 'rConnect.php';

?>

<html>
<body>
<table border = "1" width = "100%">
<tr>
	<th>Employee Name</th>                   

	<th>Employee Gender</th>
	<th>Employee Tel No</th>

	<th>Employee Address</th>
	<th>eID</th>
</tr>

<?php
	$sql = "select * from employee";
	$result = $conn->query($sql);       //return data query , entire table then save in this result variable
	
	if($result-> num_rows>0){
		while($row = $result->fetch_assoc()){
			echo "<tr><td>".$row["eName"].

			"</td><td>".$row["eGender"].
			"</td><td>".$row["eTelno"].                               

			"</td><td>".$row["eAddress"].
			
			
			"<td><a href='deleteemployee.php?eID=$row[eID]'>Delete</a>".
			
			"</td></tr>" ; 
		}
	}
	else{
		echo "zero results";
	}
	
	echo "</table>";
	
	$conn->close();


?>