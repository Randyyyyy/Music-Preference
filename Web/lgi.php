<?php
$connection = mysqli_connect('localhost','root','1234','user');
$username = $_POST['userName'];
$password = $_POST['passWord'];


if(empty($_POST['userName']) === true || empty($_POST['passWord']) === true)
{
	$message = "Username and Password can not be blank!";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo " <script type='text/javascript'>history.back();</script>";
}
else 
{
	$result = mysqli_fetch_assoc(mysqli_query($connection,"select user_id from `user_account` where `user_id`='$username' and `password`='$password';"));
	$user = $result['user_id'];
	if($result['user_id'] != null)
	{	
		mysqli_query($connection,"drop table if exists cur_user");
		mysqli_query($connection,"CREATE TABLE `user`.`cur_user` (`user` VARCHAR(45) NOT NULL,  PRIMARY KEY (`user`));");
		mysqli_query($connection,"insert into `cur_user` (`user`) values ('$user')");
		header('Location:preference.php');
	}
	else
	{
		$message = "Wrong username or password!";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script type='text/javascript'> history.back();</script>";
	}
	mysqli_free_result($result);
}

?>