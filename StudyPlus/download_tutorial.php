<?php
require "connection.php";
session_start();
if($_SESSION==NULL)
{
	header("location:index.php");
}
$uid=$_SESSION['u_id'];
$tid=$_GET['tid'];
$tfile=$_GET['tfile'];
if($tid==NULL || $tfile==NULL)
{
	header("location:index.php");
}
else
{
	$flag=0;
	$q="select * from tutorial_download where tutorial_id='$tid'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{	
		$total=$r['download']+1;
		$z="update tutorial_download set download='$total' where  tutorial_id='$tid'";
		if($conn->query($z))
		{
			header("Content-type:application/$tfile");
			header("Content-Disposition:attachment;filename=".$tfile);
			readfile("admin/upload_tutorial/".$tfile);
		}
		else{ echo "not updated"; }
		$flag=1;
	}
	if($flag==0)
	{
		$download=1;
		$i="insert into tutorial_download(tutorial_id,download)values('$tid','$download')";
		if($conn->query($i))
		{
			header("Content-type:application/$tfile");
			header("Content-Disposition:attachment;filename=".$tfile);
			readfile("admin/upload_tutorial/".$tfile);
			
		} 
		else 
		{ echo "error"; }
	}
}

?>