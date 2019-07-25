<?php
error_reporting('ERROR');
require "connection.php";
session_start();
if($_SESSION==NULL)
{
	header("location:index.php");
}
$eid=$_REQUEST['eid'];
$u_id=$_SESSION['u_id'];
$st=$_REQUEST['st'];
$flag=0;

if($eid=="" || $u_id=="")
{
	echo "<script>alert('Error!!!'); window.location='experts.php';</script>";
}
else
{
		$q="select * from expert_rating where expert_id='$eid' and user_id='$u_id'";
		$chk=$conn->query($q);
		while($r=$chk->fetch_assoc())
		{
			$ratid=$r['rating_id'];
			
			if($r['status']==$st)
			{
				echo "<script>alert('Already Rated You!!!'); window.location='experts.php';</script>";
			}
			else
			{
				$x="update expert_rating set status='$st' where expert_id='$eid' and user_id='$u_id'";
				if($conn->query($x))
				{
					echo "<script>alert('Rating Updated Successfully!!!'); window.location='experts.php';</script>";
				}
				else
				{
					echo "hello";
				}
				
			}
			
			$flag=1;
		}
		if($flag==0)
		{
			$z="insert into expert_rating(expert_id,user_id,status)values('$eid','$u_id','$st')";
			if($conn->query($z))
			{
				echo "<script>alert('Rated Successfully!!!'); window.location='experts.php';</script>";
			}
			else
			{
				echo "<script>alert('Try Again!!!'); window.location='experts.php';</script>";
			}
		}
}

?>