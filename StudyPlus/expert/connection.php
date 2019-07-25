<?php
$conn=new mysqli("localhost","root","","project");
if($conn->connect_error)
{
echo "DB not Connected!!!".$conn->connect_error;
}
else
{
//echo "DB Connected!!!";
}
?>