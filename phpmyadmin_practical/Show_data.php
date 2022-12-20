<?php 	
		//This file included (index_mysql.php) with require() function
		//This file is working on "mysql table record in html page";
	$localhost= 'localhost';
	$username= 'root';
	$password= '';
	$database= 'a_database';

	$handler= mysql_connect($localhost, $username, $password);
	mysql_select_db($database);

	$query= "SELECT * FROM `student` ";
	$result= mysql_query($query, $handler);

	
	echo "<table class='table table-bordered'>	
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Sex</th>
				<th>Address</th>
			</tr>";
	$s_no = 0;
	while ($store= mysql_fetch_array($result)) {
		$s_no++;
		echo "<tr>";
			echo "<td>". $s_no ."</td>";
			echo "<td>". $store[1] ."</td>";
			echo "<td>". $store[2] ."</td>";
			echo "<td>". $store[3] ."</td>";
		echo "</tr>";
	}
	echo "</table>";

?>
<?php 
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Bootstrapfile\dist\css\bootstrap.min.css">
</head>
<body>

</body>
</html>