<?php
	include_once 'config.php';
?>

<html>
	<head>
	</head>
	<body>
		
<br/><br/><a href="function.html"> To the function page</a><br/><br/><br/>
<table border="1" width="100%">
<tr>
	<th>w_id</th>
	<th>w_theme</th>
	<th>capacity</th>
	<th>Description</th>
	<th>update</th>
	
	</tr>
	<?php
	$sql = "select * from wedding";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		//echo"<tr><td>".$row["w_id"]."</td><td>".$row["w_theme"]."</td><td>".$row["capacity"]."</td><td>".$row["description"]."</td></tr>";

		//take one raw at a time
		//asociative array
		while($row=$result->fetch_assoc()){
			echo"<tr>";
			echo"<td>".$row["w_id"]."</td>";
			echo"<td>".$row["w_theme"]."</td>";
			echo"<td>".$row["capacity"]."</td>";
			echo"<td>".$row["description"]."</td>";
			echo"<td><a href='delete.php?w_id=$row[w_id]'>Delete</a></td>";
		
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