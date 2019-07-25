<?php
session_start();
require "connection.php";
$uid=$_SESSION['u_id'];
$aid=$_REQUEST['vid'];
if($aid==NULL)
{
	header("location:index.php");
}
else
{
	$flag=0;
	$q="select * from video_download where video_id='$aid'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{	
		$total=$r['download']+1;
		$z="update video_download set download='$total' where video_id='$aid'";
		if($conn->query($z))
		{
			echo "viewed success";
		}
		else{ echo "not updated"; }
		$flag=1;
	}
	if($flag==0)
	{
		$download=1;
		$i="insert into video_download(video_id,download)values('$aid','$download')";
		if($conn->query($i))
		{
			echo "viewed success";
		} 
		else 
		{ echo "error"; }
	}
}

?>