<?php
	include_once 'config.php';
?>

<html>
	<head>
	</head>
	<body>
		
<br/><br/><a href="function.html"> To the function page</a><br/><br/>
<table border="1" width="100%">
<tr>
	<th>m_id</th>
	<th>hall_type</th>
	<th>capacity</th>
	<th>needs</th>
	<th>Update</th>
	
	</tr>
	<?php
	$sql = "select * from meeting";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		//echo"<tr><td>".$row["w_id"]."</td><td>".$row["w_theme"]."</td><td>".$row["capacity"]."</td><td>".$row["description"]."</td></tr>";

		//take one raw at a time
		//asociative array
		while($row=$result->fetch_assoc()){
			echo"<tr>";
			echo"<td>".$row["m_id"]."</td>";
			echo"<td>".$row["capacity"]."</td>";
			echo"<td>".$row["hall_type"]."</td>";
			echo"<td>".$row["needs"]."</td>";
			echo"<td><a href='mDelete.php?m_id=$row[m_id]'>Delete</a></td>";
		
		}
	}
	else{
		echo "0 results";
	}
	echo"</table>";
	$conn->close();
	?>

<br/>
<br/>
<br/>


</body>
</html>