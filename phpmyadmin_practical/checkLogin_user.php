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
<?php 

	if ($_SERVER['REQUEST_METHOD']) {
		if (isset($_POST['user_name']) && isset($_POST['user_password'])) {
			$user_name= $_POST['user_name'];
			$user_password= $_POST['user_password'];
			if (!empty($user_name) && !empty($user_password)) {
				$handler= mysql_connect("localhost", "root", "");
				mysql_select_db("a_database");

				if (!$handler) {
					die("Could not connect");
				}
				$sql= " SELECT * FROM login_user ";
				$result= mysql_query($sql, $handler);
				mysql_close($handler);
				$flag=0;
				while ($store= mysql_fetch_array($result)) {
					if ($store['username'] == $user_name  && $store['userpassword'] == $user_password ) {
						$flag= 1;
					}
				}
					if ($flag == 1) {
						echo "<div class='alert alert-success data-dismiss font-italic'>
									<b>Success ! </b>Your Login has been successfully.
									<button type='button' class='close' data-dismiss='alert'>&times;</button>
							   </div>";
						echo "<h3>Welcome $user_name </h3>";
						// we can use header function here
					}
				    else{

						/*echo "<div class='alert alert-danger data-dismiss'>
								<b>Success !</b> Invalid Username and Password. Please try again later.
								<button type='button' class='close' data-dismiss='alert'>&times;</button>
							  </div>";
						*/	  
							  header("location: Login_user.php?T=1; ");
					}
			}
			else{
				/*echo "<div class='alert alert-info data-dismiss'>
						<b>Alert !</b> All field are required.
						<button type='button' class='close' data-dismiss='alert'>&times;</button>
					  </div>";
				*/	  
					  header("location: Login_user.php?R=1; ");
			}
		}
		//
		//header("Location: Login_user.php ? T=1; ");
	}
	
?>

