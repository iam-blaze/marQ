<?php


$con = mysqli_connect("localhost","root","","Fingertalk") or die (mysql_error());

	$First_name = $_POST['First_name'];
	$Last_name = $_POST['Last_name'];
	$id = $_POST['id'];
	$Ph_no = $_POST['Ph_no'];
	$Mail_id = $_POST['Mail_id'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	
	
	if ($password==$password2)
	{	
		$sql="INSERT INTO `user_table` (`First_name`, `Last_name`, `id`, `Ph_no`, `Email_id`, `password`) VALUES ('$First_name', '$Last_name', '$id', '$Ph_no', '$Mail_id', '$password')";
		mysqli_query($con,$sql);
		header("location:index.html");
	}
	else
	{
		echo"password mismatch";
	}

?>