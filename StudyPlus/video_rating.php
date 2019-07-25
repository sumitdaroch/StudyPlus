<?php
error_reporting('ERROR');
require "connection.php";
session_start();
if($_SESSION==NULL)
{
	header("location:index.php");
}
$eid=$_GET['eid'];
$vid=$_REQUEST['vid'];
$u_id=$_SESSION['u_id'];
$st=$_REQUEST['st'];
$flag=0;

if($vid=="" || $u_id=="")
{
	echo "<script>alert('Error!!!'); window.location='
	view_video.php?z=$eid';</script>";
}
else
{
		$q="select * from video_rating where video_id='$vid' and user_id='$u_id'";
		$chk=$conn->query($q);
		while($r=$chk->fetch_assoc())
		{
			$ravid=$r['rating_id'];
			
			if($r['status']==$st)
			{
				echo "<script>alert('Already Rated You!!!'); window.location='view_video.php?z=$eid';</script>";
			}
			else
			{
				$x="update video_rating set status='$st' where video_id='$vid' and user_id='$u_id'";
				if($conn->query($x))
				{
					echo "<script>alert('Rating Updated Successfully!!!'); window.location='view_video.php?z=$eid';</script>";
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
			$z="insert into video_rating(video_id,user_id,status)values('$vid','$u_id','$st')";
			if($conn->query($z))
			{
				echo "<script>alert('Rated Successfully!!!'); window.location='view_video.php?z=$eid';</script>";
			}
			else
			{
				echo "<script>alert('Try Again!!!'); window.location='view_video.php?z=$eid';</script>";
			}
		}
}

?>