<?php
require "connection.php";
$id=$_GET['z'];
if($id=="")
{
echo"<script>alert('Invalid ID!!!');
window.location='manage_category.php';</script>";
}

else
{
$flag=0;
$q="select * from category where category_id='$id'";
$chk=$conn->query($q);
while($r=$chk->fetch_assoc())
{
$x="delete from category where category_id='$id'";
if($conn->query($x))
{
echo "<script>alert('Record Deleted Successfully!!!');
window.location='manage_category.php';</script>";
}
else
{
echo "<script>alert('Try Again!!!');
window.location='manage_category.php';</script>";
}
$flag=1;
}
if($flag==0)
{
echo "<script>alert('Sorry!!!Unable to Delete!!!ID Not Present!!!');
window.location='manage_category.php';</script>";
}
}
?>