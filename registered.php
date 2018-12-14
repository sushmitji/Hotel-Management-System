<?php 
	include 'connect.php';
	$email=$_POST['email'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pass=$_POST['password'];
	$mobno=$_POST['mobno'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];

	$check = "SELECT Email from customer WHERE Email='$email'";
	$temp = $mysqli->query($check);
	if($temp->num_rows == 0)
	{
		if($mysqli->error == 0)
		{
			$sql = "INSERT INTO customer VALUES (default,'$email', '$pass', '$fname','$lname','$gender','$city','$mobno')";
			$result = $mysqli->query($sql);
    		echo "You are successfully registered!";
		} 
		else
		{
		    echo "ERROR: Could not execute $sql.";
		}
	}
	else
	{
		echo "Email already in use, Sign up or Register with different Email";
	}

?>