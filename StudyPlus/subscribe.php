<?php
date_default_timezone_set("Asia/Kolkata");
error_reporting('ERROR');
require "connection.php";
session_start();
if($_SESSION==NULL)
{
	header("location:index.php");
}
$eid=$_REQUEST['eid'];
$uid=$_SESSION['u_id'];
$st=$_REQUEST['status'];
$date=date("d-m-Y");
$flag=0;

if($eid=="" || $st=="")
{
	echo "<script>alert('Error!!!'); window.location='../index.php';</script>";
}
else
{
	if($st=='subscribe')
		{
			$x="insert into subscribe(expert_id,user_id,status,enrolling_date 	)values('$eid','$uid','$st','$date')";
			if($conn->query($x))
			{
				echo "<script>alert('Subscribe Successfully!!!'); window.location='experts.php';</script>";
			}
			else
			{
				echo "hello";
			}
		}
		else if($st=='unsubscribe')
		{
			$x="delete from subscribe where expert_id='$eid' and user_id='$uid'";
			if($conn->query($x))
			{
				echo "<script>alert('UnSubscribe Successfully!!!'); window.location='myexpert.php';</script>";
			}
			else
			{
				echo "hello";
			}		
		}
}


?>