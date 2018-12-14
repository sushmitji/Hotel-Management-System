<?php
	include 'connect.php';
	session_start();

	$validation=1;

	$roomtype = $_POST['roomtype'];
	$roomchoice = $_POST['roomchoice'];
	$roomview = $_POST['roomview'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];
	$custid = $_SESSION['custid'];

	$sql = "SELECT Roomno FROM room where Type='$roomtype' AND Choice='$roomchoice' AND View='$roomview'";

	//$abc = $mysqli->query($sql) or die("BOOM!");

	//$sql2 = 'SELECT * FROM roomnos';

	$result = $mysqli->query($sql) or die("BLAH!");

	//$data = array();

	if ($result->num_rows > 0)
	{
		$roombooked=false;
		while($row = $result->fetch_assoc())
		{
			$data[] = $row;
		}
		for($i=0;$i<$result->num_rows;$i++)
		{
			$x = $data[$i]['Roomno'];
			$query = "SELECT * from reservation where Roomno=".(int)$x;
			

			$result2 = $mysqli->query($query) or die("BANG");

			if($result2->num_rows == 0)  //that room is not booked
			{
				$_SESSION['roomno']=$x;
				$_SESSION['checkin']=$checkin;
				$_SESSION['checkout']=$checkout;
				$roombooked=true;
				header("Location:confirmbooking.php");
				/*////MAKE PAYment page and then insert value to book room
				$query2 = "INSERT INTO reservation values(default,'$custid',".(int)$x.",'$checkin','$checkout')";
				echo $query2;
				$mysqli->query($query2) or die("insert error");
				$roombooked=true;
				break;*/
			}
			else
			{
				$roombooked=false;
			}
		}
		if($roombooked==false)
		{
			for($j=0;$j<$result->num_rows;$j++) 
			{
				$val=0;
				$x = $data[$j]['Roomno'];

				$query = "SELECT * from reservation where Roomno=".(int)$x;

				

				$result2 = $mysqli->query($query) or die("BANG");
				while($row = $result2->fetch_assoc())
				{
					$booked[] = $row;
				}
				


				for($k=0;$k<$result2->num_rows;$k++)
				{

					$roomno = $booked[$k]['Roomno'];           //get all the details of the room (on which which date periods it is booked)
					$cin = $booked[$k]['Checkin'];
					$cout = $booked[$k]['Checkout'];

					$cin = strtotime($cin);
					$cout = strtotime($cout);
					$tscheckin = strtotime($checkin);
					$tscheckout = strtotime($checkout);


					if((($tscheckin < $cin)&&($tscheckout<=$cin))||(($tscheckin>=$cout)&&($tscheckout>$cout)))
					{
						$val++;
					}
					else
					{
						$val = 0;
						$roombooked=false;
					}
					
				}
				if($val==$result2->num_rows)
				{
					$_SESSION['roomno']=$roomno;
					$_SESSION['checkin']=$checkin;
					$_SESSION['checkout']=$checkout;
					header("Location:confirmbooking.php");	
					$roombooked=true;
					
					break;
				}
				$booked = array();
			}
		}
		if($roombooked)
		{
			echo "Room successfully booked!";
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("All rooms booked for these dates! Try different dates or select different room preferrences.")';
			echo '</script>';
			$validation=0;
			

		}
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("All rooms booked for these dates! Try different dates or select different room preferrences.")';
		echo '</script>';

		$validation=0;
		
			
	}
	
	if($validation==0)
	{
		echo '<script>';
		echo 'location="bookroom.php"';
		echo '</script>';
	}
?>




