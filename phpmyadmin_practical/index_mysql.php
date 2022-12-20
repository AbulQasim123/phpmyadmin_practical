<?php
 
	if (isset($_POST['c'])) {
		echo "All field are required";
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
			<div class="col-lg-4">
				<form action="connection_server\connect_mysql.php" method="POST">
					Id: <input type="text" name="std_id" id="std_id" class="form-control">
					Name: <input type="text" name="std_name" id="std_name" class="form-control">
					Sex: <input type="text" name="std_sex" id="std_sex" class="form-control">
					Address: <textarea name="std_address" id="std_address" cols="10" rows="2" class="form-control"></textarea>
					<input type="submit" value="Insert" class="btn btn-secondary my-3">
	    		</form>
			</div>
			<div class="col-lg-8">
				<?php require 'show_data.php'; ?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>
</html>
