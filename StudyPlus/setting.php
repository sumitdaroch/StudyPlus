<?php require "header_files.php"; 
error_reporting('ERROR');
?>
</head>
<body>
	<?php require "header_afterlogin.php"; ?>
	<?php	
if(isset($_REQUEST['sub']))
{
	$a=md5($_REQUEST['cpswd']);
	$b=md5($_REQUEST['npswd']);
	$id=$_SESSION['u_id'];
	$flag=0;
	
	$z="select * from user where user_pswd='$a' and user_id='$id'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$q="update user set user_pswd='$b' where user_id='$id'";
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
         <div class="banner-w3agile">
			<div class="container">
			<h3><a href="index.html">Home</a> / <span>Setting</span></h3>
			</div>
		   </div>
		 <!--content-->
		<div class="content">
			<!--typography-page -->
				<div class="typo-w3">
					<div class="container">
						<h2 class="tittle">Setting</h2>
						<div class="grid_3 grid_4">
					   <div class="bs-example">
					  <p style="color:green"><?php echo $success; ?></p>
		               <p style="color:red"><?php echo $failure; ?></p>    
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
			
							</div>
						</div>					
					</div>
				</div>
			<!-- //typography-page -->

		</div>
		<!--content-->

		
		<!---copy--->
			<?php require "footer.php"; ?>	
			<!---copy--->


				
</body>
</html>
