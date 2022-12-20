<?php

	if (isset($_GET['I'])) {
		echo "Insert operation complete";
	}
	elseif (isset($_GET['D'])) {
		echo "Delete operation complete";
	}
    elseif (isset($_GET['U'])) {
		echo "Update operation complete";
	}
	

	if (isset($_GET['Required'])) {
		echo "All field Required";
	}

?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<form action="delete_update.php" method="POST">
				Number: <input type="text" name="e_no" class="form-control">
				Name: <input type="text" name="e_name" class="form-control">
				Address: <input type="text" name="e_address" class="form-control">
				<div class="mt-3">
					<input type="submit" name="btn" Value="Insert" class="btn btn-secondary">
					<input type="submit" name="btn" value="Delete" class="btn btn-secondary">
					<input type="submit" name="btn" value="Update" class="btn btn-secondary">	
				</div>
			</form>
		</div>
	</div>
</div>

<?php 
	$handle= mysql_connect("localhost", "root", "");		
	mysql_select_db("a_database");
	$sql= "SELECT * FROM `employee` ";
	$result= mysql_query($sql, $handle);

	echo "<center>";
			echo "<table class='table-bordered' style='width: 400px;'>";
				echo "<tr align-'center'>";
					echo" <td>S.No</td>";
					echo" <td>Name</td>";
					echo" <td>Address</td>";
				echo" </tr>";
			//$s_no= 0;
		  while ($store= mysql_fetch_assoc($result)) {
		  	//$s_no++;
		  	echo "<tr>";
		  		echo "<td>". $store['no'] ."</td>";
		  		echo "<td>". $store['name'] ."</td>";
		  		echo "<td>". $store['address'] ."</td>";
		  	echo "</tr>";
		  }
		  echo"</table>";
	echo" </center>";
	mysql_close($handle);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
	
</head>
<body>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>
</html>