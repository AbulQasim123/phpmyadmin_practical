<?php 	
	if ($_SERVER['REQUEST_METHOD']) {
		if (isset($_POST['search_rollno'])) {
			$search_rollno= $_POST['search_rollno'];
			if (!empty($search_rollno)) {
				$handler= mysql_connect("localhost", "root", "");
				mysql_select_db("a_database");
				if (!$handler) {
					die("Could no connect");
				}
				$query= " SELECT * FROM students_detail WHERE rollno=". $search_rollno;
				$result= mysql_query($query, $handler);
				mysql_close($handler);
				/*
					This code is also correct
				if (mysql_num_rows($result)) {
					echo "Record found";
				}else{
					echo "Record not found";
				}
				*/
				if (mysql_num_rows($result)) {
					echo "<div class='container-fluid'>";
					echo "<div class='row'>";
					echo "<div class='col-md-7'>";
					echo "<table class='table table-bordered'>";
					echo "<b>Your Record is Here.</b>";
					echo "<tr class='text-left'>
							<th>Roll No</th>
							<th>Fullname</th>
							<th>Fathername</th>
							<th>Course</th>
							<th>Sex</th>
							<th>Address</th>
						  </tr>";
					//$no=0;
					while ($store= mysql_fetch_assoc($result)) {
						//$no++;
						echo "<tr>";
							echo "<td>".$store['rollno']."</td>";
							echo "<td>".$store['fullname']."</td>";
							echo "<td>".$store['fathername']."</td>";
							echo "<td>".$store['course']."</td>";
							echo "<td>".$store['sex']."</td>";
							echo "<td>".$store['address']."</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "</div>";
					echo "</div>";
					echo "</div>";
				}else{
					echo "<b class='text-danger'>Record not found! Please Try again.</b>";
				}
			}
			else{
				echo "<b class='text-danger'>Please enter your roll no.</b>";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<form action="" method="post">
					<strong>Enter roll no to search from database:</strong>
					<input type="text" name="search_rollno" class="form-control">
					<input type="submit" name="" value="Search" class="btn btn-primary my-3">
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>
</html>