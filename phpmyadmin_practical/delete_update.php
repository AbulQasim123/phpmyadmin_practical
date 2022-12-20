<?php 
	if ($_SERVER['REQUEST_METHOD']) {
		if (!empty($e_no) && !empty($e_name) && !empty($e_address)) {
			$btn= $_POST['btn'];
			$handle= mysql_connect("localhost", "root", "");
			mysql_select_db("a_database");
			if ($btn == "Insert") {
				$e_no= $_POST['e_no'];
				$e_name= $_POST['e_name'];
				$e_address= $_POST['e_address'];
				
				$query= "INSERT INTO `employee` (`no`, `name`, `address`) VALUES ('$e_no', '$e_name', '$e_address')";
				header("location: Update_Del.php?I=1;");
			}else if ($btn == "Delete") {
				$e_no= $_POST['e_no'];

				$query= " DELETE FROM `employee` WHERE `employee`.`no` =" . $e_no;
				header("location: Update_Del.php?D=2;");
					
			}else if ($btn == "Update") {
				$e_no= $_POST['e_no'];
				$e_name= $_POST['e_name'];
				$e_address= $_POST['e_address'];
				$query= " UPDATE `employee` SET name = '$e_name', address = '$e_address' WHERE `employee`.`no`=" . $e_no;

				header("location: Update_Del.php?U=3;");	
			}
			mysql_query($query, $handle);
			mysql_close($handle);
		}else{
			header("location: Update_Del.php?Required=4");
		}
			
		//echo "One task performed";
		
	}	
	 
		//header("Location: Update_Del.php");
?>


