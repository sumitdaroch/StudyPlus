<?php 
require 'header_files.php';

error_reporting('ERROR');


$id=$_GET['z'];
if($id=="")
{
	echo "<script>alert('Invalid ID'); window.location='manage_user.php';</script>";
}
else
{
	$q="select * from user where user_id='$id'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{
 ?>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php require 'menu.php'; ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit User</h1>
                </div>
            </div>
			<!-- ... Your content goes here ... -->
			<form method="post" action="update_user.php">
				<div class="form-group">
					<label for="useremail">ID</label>
					<input type="text" id="userid" name="uid" class="form-control" value="<?php echo $r['user_id']; ?>" required readonly>
				</div>
			
			
				<div class="form-group">
					<label for="useremail">Name</label>
					<input type="text" id="username" name="uname" class="form-control" value="<?php echo $r['user_name']; ?>" required>
				</div>
				<div class="form-group">
					<label for="useremail">Email ID</label>
					<input type="text" id="useremail" name="uemail" class="form-control" value="<?php echo $r['user_email']; ?>" required readonly>
				</div>
				
				
				
				<input type="submit" class="btn btn-primary" value="Update" name="sub">
			</form>
			<!-- ... Your content end here ... -->
			
        </div>
    </div>

</div>
<?php
	}
}
?>


</body>
</html>
