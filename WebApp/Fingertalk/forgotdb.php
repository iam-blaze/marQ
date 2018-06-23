<?php

	$id = $_POST['id'];
	$Ph_no = $_POST['Ph_no'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$con = mysqli_connect("localhost","root","","Fingertalk") or die (mysql_error());
	$result = mysqli_query($con,"select * from user_table where id='$id' and Ph_no = '$Ph_no'") or die("unable to login please try again".mysql_error());
	$row = mysqli_fetch_array($result);


	if ($password==$password2)
	{
		if( $row['id']==$id  && $row['Ph_no']==$Ph_no)
		{
			mysqli_query($con,"UPDATE `user_table` SET `password` = '$password' WHERE `user_table`.`id` = '$id'" );
			header("location:index.html");
		}
		else if( $row['id']!=$id  && $row['Ph_no']!=$Ph_no)
		{
			echo "details missmatched please check the id and phone number and try again";
		}
	}
	else
	{
		echo"password mismatch";
	}

?>
