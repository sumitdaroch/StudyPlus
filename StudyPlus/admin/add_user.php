<?php require "header_files.php";
error_reporting('ERROR');
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['uname'];
	$b=$_REQUEST['uemail'];
	$c=$_REQUEST['upswd'];
	$m=0;
	$z="select * from user where user_email='$b'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$failure="email id Already Exist!!!";
		$m=1;
	}
	if($m==0)
	{
		$q="insert into user(user_name,user_email,user_pswd)values('$a','$b','$c')";
		if($conn->query($q))
		{
			$success="user inserted successfully";
		}
		else
		{
			$failure="Try Again";
		}
	}
}
?> 
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php require "menu.php"; ?> 

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add User</h1>
                </div>
            </div>
               <p style="color:green;"><?php echo $success;?></p>
			  <p style="color:red;"><?php echo $failure;?></p>
            <!-- ... Your content goes here ... -->
			<script>
				function f1()
			{
				var a=document.getElementById("name").value;
				var b=document.getElementById("pswd").value;
				var c=document.getElementById("upswd").value;
				if(!isNaN(a))
				{
					alert("Invalid Name!! Only Character are allowed!!!");
					return false;
				}
					if(c!=b)
					{
						alert("Password Mismatch");
						return false;
					}
				}
			
			
</script>
			<form name="add_user" method="post">
			<div class="form-group">
			<label>Name</label>
			<input type="text" name="uname" class="form-control"required>
			</div>
			<div class="form-group">
			<span id="uemail">Email-Id</span>
			<input type="text" name="uemail" class="form-control">
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" name="upswd" class="form-control"required>
			</div>
			<div class="form-group">
			<label>Confirm Password</label>
			<input type="password"name="cpswd"  class="form-control"required>
			</div>
			<input type="submit"name="sub" class="btn btn-primary" onclick="return(f1())">
			
			</form>
			
			
        </div>
    </div>
	</div


</body>
</html>
