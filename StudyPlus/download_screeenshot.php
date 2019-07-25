<?php
session_start();
require "connection.php";
$uid=$_SESSION['u_id'];
$aid=$_REQUEST['sid'];
$afile=$_REQUEST['sfile'];
if($aid==NULL)
{
	header("location:index.php");
}
else
{
	$flag=0;
	$q="select * from screenshot_download where screenshot_id='$aid'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{	
		$total=$r['download']+1;
		$z="update screenshot_download set download='$total' where screenshot_id='$aid'";
		if($conn->query($z))
		{
			header("Content-type:application/$afile");
			header("Content-Disposition:attachment;filename=".$afile);
			readfile("admin/screenshot_cover/".$afile);
		}
		else{ echo "not updated"; }
		$flag=1;
	}
	if($flag==0)
	{
		$download=1;
		$i="insert into screenshot_download(screenshot_id,download)values('$aid','$download')";
		if($conn->query($i))
		{
			header("Content-type:application/$afile");
			header("Content-Disposition:attachment;filename=".$afile);
			readfile("admin/screenshot_cover/".$afile);
		} 
		else 
		{ echo "error"; }
	}
}

?>