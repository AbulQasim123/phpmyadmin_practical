<?php 
	
/*
		These all code are correct
	if ($_SERVER['REQUEST_METHOD']) {
		if (isset($_POST['user_name']) && isset($_POST['user_password'])) {
			$user_name= $_POST['user_name'];
			$user_password= $_POST['user_password'];
			if (!empty($user_name) && !empty($user_password)) {
				$handler= mysql_connect("localhost", "root", "");
				if (!$handler) {
					die("Could not connect");
				}
				mysql_select_db("a_database");
				$sql= " SELECT * FROM `login_user` ";
				$result= mysql_query($sql, $handler);

				$flag=0;
				while ($store= mysql_fetch_array($result)) {
					if ($store['username'] == $user_name  && $store['userpassword'] == $user_password ) {
						$flag= 1;
					}
				}
					if ($flag == 1) {
						echo "Login success";
					}
				    else{
						echo "Invalid username and password.! Please try again later.";
					}
					mysql_close($handler);
			}else{
				echo "All field are required";
			}
		}
		//header("Location: Login_user.php ? T=0; ");
	}
*/	
	if (isset($_GET['T'])) {
		echo "<div class='alert alert-danger data-dismiss text-danger font-italic'>
				<b>Success !</b> Invalid Username and Password. Please try again later.
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
			  </div>";
	}
	elseif (isset($_GET['R'])) {
		echo "<div class='alert alert-primary data-dismiss text-danger font-italic'>
				<b>Alert !</b> All field are required.
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
			   </div>";
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
				<form action="checkLogin_user.php" method="post">
					<h3>Login</h3>
					Username: <input type="text" name="user_name" id="user_name" class="form-control">
					password: <input type="text" name="user_password" id="user_password" class="form-control">
					<input type="submit" name="" value="Login" class="btn btn-info my-3 btn-block">
				</form>
			</div>
		</div>	
	</div>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
	<script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>
</html>