<?php 
require "connection.php";
error_reporting('ERROR');
session_start();
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['email'];
	$b=md5($_REQUEST['pswd']);
	$c="active";
	$flag=0;
	
	$q="select * from expert where expert_email='$a' and expert_pswd='$b'and expert_status='$c'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{
		header("location:main.php");
		$_SESSION['e_name']=$r['expert_name'];
		$_SESSION['e_id']=$r['expert_id'];
		$flag=1;
	}
	if($flag==0)
	{
		$failure="Wrong Email ID or Password";
	}
}	
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/styles.css" rel="stylesheet">
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">


<!-- content -->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Welcome to Expert Panel</h1>
            <div class="account-wall shade">
                <img class="profile-img" src="images/profile.png">
                  
				<p align="center" style="color:red"><?php echo $failure; ?></p>
				  
                <form class="form-signin" method="post">
					<div class="form-group">
						<input type="text" name="email" class="form-control" placeholder="Email" required >
					</div>
					<div class="form-group">
						<input type="password" name="pswd" class="form-control" placeholder="Password" required>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="sub">
						Sign in</button>
                
               <span class="clearfix"></span>
                </form>
            </div>
            <br>
			<p align="center">
				<a href="../index.php">{ Go Back To Home }</a>
			</p>
        </div>
    </div>
</div>
<!-- content end -->

<!-- footer -->
<?php require "footer.php"; ?>	
<!-- footer end -->


</div>
</body>
</html>
