<?php
ob_start();
$conn=new mysqli("localhost","amit420","amit420","internsProjects");
if($conn->connect_error)
{
echo "DB not Connected!!!".$conn->connect_error;
}
else
{
//echo "DB Connected!!!";
}
?>