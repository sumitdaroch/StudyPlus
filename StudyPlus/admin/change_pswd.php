<?php 
require 'header_files.php';
error_reporting('ERROR');
 ?>
<body>
<div id="wrapper">
     <!-- Navigation -->
    <?php require 'menu.php'; ?>
<?php	
if(isset($_REQUEST['sub']))
{
	$a=md5($_REQUEST['cpswd']);
	$b=md5($_REQUEST['npswd']);
	$id=$_SESSION['a_id'];
	$flag=0;
	
	$z="select * from admin where admin_pswd='$a' and admin_id='$id'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$q="update admin set admin_pswd='$b' where admin_id='$id'";
		if($conn->query($q))
		{
			$success="Password Updated Successfully!!!";
		}
		else
		{
			$failure="Try Again!!!".$conn->connect_error;
		}
		$flag=1;
	}
	if($flag==0)
	{
		$failure="Password Mis-Match!!!".$conn->connect_error;
	}
	
}
?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Settings</h1>
                </div>
            </div>
				<p style="color:green"><?php echo $success; ?></p>
				<p style="color:red"><?php echo $failure; ?></p>
            <!-- ... Your content goes here ... -->
			<form method="post">		
				<div class="form-group">
					<label for="userpswd">Current Password</label>
					<input type="password" id="userpswd" name="cpswd" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="userpswd">New Password</label>
					<input type="password" id="usercpswd" name="npswd" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="userpswd">Re-Enter New Password</label>
					<input type="password" id="usercpswd" name="rpswd" class="form-control" required>
				</div>
				
				<input type="submit" class="btn btn-primary" value="Submit" name="sub">
			</form>
			<!-- ... Your content end here ... -->
			
        </div>
    </div>

</div>



</body>
</html>
