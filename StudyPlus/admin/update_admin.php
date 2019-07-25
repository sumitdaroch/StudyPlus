<?php
require "connection.php";

if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['uid'];
	$b=$_REQUEST['uname'];
	
	$q="update admin set admin_name='$b' where admin_id='$a'";
	if($conn->query($q))
	{
		echo "<script>alert('Record Updated Successfully'); window.location='manage_admin.php';</script>";
	}
	else
	{
		echo "<script>alert('Try Again!!!'); window.location='manage_admin.php';</script>";
	}
}




?>