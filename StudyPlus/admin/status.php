<?php
require "connection.php";
//error_reporting('ERROR');

$id=$_GET['z'];

$status=$_GET['status'];


	if($status=="inactive")
	{
		$q="update expert set expert_status='active' where expert_id='$id'";
		if($conn->query($q))
		{
			echo "<script>alert('Status Updated Successfully!!!'); window.location='manage_expert.php';</script>";
		}
		else
		{
			echo "<script>alert('Try Again!!!'); window.location='manage_expert.php';</script>";
		}
	}
	else
	{
		$q="update expert set expert_status='inactive' where expert_id='$id'";
		if($conn->query($q))
		{
			echo "<script>alert('Status Updated Successfully!!!'); window.location='manage_expert.php';</script>";
		}
		else
		{
			echo "<script>alert('Try Again!!!'); window.location='manage_expert.php';</script>";
		}
	}

?>