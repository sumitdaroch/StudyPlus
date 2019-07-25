<?php
error_reporting('ERROR');
require "connection.php";
session_start();
if($_SESSION==NULL)
{
	header("location:index.php");
}
$eid=$_GET['eid'];
$sid=$_REQUEST['sid'];
$u_id=$_SESSION['u_id'];
$st=$_REQUEST['st'];
$flag=0;

if($sid=="" || $u_id=="")
{
	echo "<script>alert('Error!!!'); window.location='
	view_screenshot.php?z=$eid';</script>";
}
else
{
		$q="select * from sreenshot_rating where screenshot_id='$sid' and user_id='$u_id'";
		$chk=$conn->query($q);
		while($r=$chk->fetch_assoc())
		{
			$rasid=$r['rating_id'];
			
			if($r['status']==$st)
			{
				echo "<script>alert('Already Rated You!!!'); window.location='view_screenshot.php?z=$eid';</script>";
			}
			else
			{
				$x="update sreenshot_rating set status='$st' where screenshot_id='$sid' and user_id='$u_id'";
				if($conn->query($x))
				{
					echo "<script>alert('Rating Updated Successfully!!!'); window.location='view_screenshot.php?z=$eid';</script>";
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
			$z="insert into sreenshot_rating(screenshot_id,user_id,status)values('$sid','$u_id','$st')";
			if($conn->query($z))
			{
				echo "<script>alert('Rated Successfully!!!'); window.location='view_screenshot.php?z=$eid';</script>";
			}
			else
			{
				echo "<script>alert('Try Again!!!'); window.location='view_screenshot.php?z=$eid';</script>";
			}
		}
}

?>