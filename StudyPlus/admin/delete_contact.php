<?php
require "connection.php";

$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID!!'); window.location='manage_contact.php';</script>";
}
else
{
	$flag=0;
	$q="select * from user_contact where contact_id='$id'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{
		$x="delete from user_contact where contact_id='$id'";
		if($conn->query($x))
		{
			echo "<script>alert('Record Deleted Successfully!!'); window.location='manage_contact.php';</script>";
		}
		else
		{
				echo "<script>alert('Try Again!!'); window.location='manage_contact.php';</script>";
		}
		$flag=1;
	}
		if($flag==0)
		{
			echo "<script>alert('Sorry Unable To Delete!! Id not PRESENT!!'); window.location='manage_contact.php';</script>";
		}
}
?>