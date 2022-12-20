
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$std_id= $_POST['std_id'];	
		$std_name= $_POST['std_name'];
		$std_sex= $_POST['std_sex'];
		$std_address= $_POST['std_address'];


		$conn_error= 'Could not connect';

		$mysql_host= 'localhost';
		$mysql_user= 'root';
		$mysql_pass= '';
		$mysql_db= 'a_database';

		$handler= mysql_connect($mysql_host, $mysql_user, $mysql_pass);
		          //die($conn_error);
				  mysql_select_db($mysql_db, $handler);
				  
	 	$query= "INSERT INTO `student` (`name`, `sex`, `address`) VALUES ('$std_name', '$std_sex', '$std_address')";
	 	$Error= mysql_query($query, $handler);
	 	mysql_close($handler);
	 	echo "Insert operation complete";
	 	//header ("location: index_mysql.php ? c=1");
 	    
 	    
	}
 	
/*
	if (@mysql_connect($mysql_host, $mysql_user, $mysql_pass)) {
		if (@mysql_select_db($mysql_db)) {
			echo "Connected";
		}
		else{
			 echo "$conn_error";
		}
	}
*/	
/*	
	if (!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)) {
		die($conn_error);
	}
*/
?>

<?php 
/*
	// Insert Record to mysql database table
	
	$std_id= $_POST['std_id'];
	$std_name= $_POST['std_name'];
	$std_sex= $_POST['std_sex'];
	$std_address= $_POST['std_address'];

	$handler= mysql_connect("localhost", "root", "");
	mysql_select_db("a_database");
	$query= "INSERT INTO `student` (`name`, `sex`, `address`) VALUES ('$std_name', '$std_sex', '$std_address')";
	mysql_query($query, $handler);
	header('Location: index_mysql.php ? c= 1');
	//mysql_close($handler);
*/	

	// show mysql table record in html page.
	
?>