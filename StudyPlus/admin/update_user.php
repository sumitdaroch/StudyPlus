<?php
require "connection.php";

if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['uid'];
	$b=$_REQUEST['uname'];
	
	$q="update user set user_name='$b' where user_id='$a'";
	if($conn->query($q))
	{
		echo "<script>alert('Record Updated Successfully'); window.location='manage_user.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again!!!'); window.location='manage_user.php';</script>";
	}
}




?>