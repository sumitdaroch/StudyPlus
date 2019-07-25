<?php require "header_files.php"; ?>
<script>
		function f1()
		{
			$(document).ready(function()
			{
				$("#signinform").modal("show");
			});
		}
		function f2()
		{
			$(document).ready(function()
			{
				$("#signupform").modal("show");
			});
		}
		function f3()
		{
		$(document).ready(function()
			{
				$("#expertform").modal("show");
			});
		
		}
		
</script>
			<!--- signin modal -->		
<div id="signinform" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sign In</h4>
      </div>
      <div class="modal-body">
		<!-- content goes here -->
		<?php 
        require "connection.php";
       error_reporting('ERROR');
       session_start();
       if(isset($_REQUEST['sub3']))
    {
	$a=$_REQUEST['mail'];
	$b=md5($_REQUEST['pswd']);
	$flag=0;
	$q="select * from user where user_email='$a' and user_pswd='$b'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{
		header("location:view_profile.php");
		$_SESSION['u_name']=$r['user_name'];
		$_SESSION['u_id']=$r['user_id'];
        $flag=1;
	}
	if($flag==0)

		{
			echo"<script>alert('wrong email_id and password');</script>";

		}
	}

?>
		 

        <form method="post">
					<div class="form-group">
						<label>Email ID</label>
						<input type="text" name="mail" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pswd" class="form-control" required>
					</div>
		
		<!-- content end here -->
      </div>
      <div class="modal-footer">
	  <input type="submit" value="submit" name="sub3" class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
		</form>
      </div>
    </div>
  </div>
</div>	
<!--- signin modal end -->


<!--- signup modal -->		
<div id="signupform" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Your Account</h4>
      </div>
      <div class="modal-body">
		<!-- content goes here -->
		<?php require "header_files.php";
       error_reporting('ERROR');
       if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['fname'];
	$b=$_REQUEST['lname'];
	$c=$_REQUEST['uemail'];
	$d=md5($_REQUEST['upswd']);
	$m=0;
	$z="select * from user where user_email='$c'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$failure="email id Already Exist!!!";
		$m=1;
	}
	if($m==0)
	{
		$q="insert into user(user_name,user_lastname,user_email,user_pswd,time)values('$a','$b','$c','$d',NOW())";
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
        <form method="post">
		 <p style="color:green;"><?php echo $success; ?></p>
			     <p style="color:red;"><?php echo $failure; ?></p>
		
					<div class="form-group">
						<label>Firstname</label>
						<input type="text" name="fname" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Lastname</label>
						<input type="text" name="lname" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email ID</label>
						<input type="text" name="uemail" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="upswd" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
						<input type="password" name="cpswd" class="form-control" required>
					</div>
		
		<!-- content end here -->
      </div>
      <div class="modal-footer">
	  <input type="submit" name="sub1" value="submit" class="btn btn-primary">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
		</form>
      </div>
    </div>
  </div>
</div>	
<!--- signup modal end -->		
		
		
		<!--expert hiring model-->
		<div id="expertform" class="modal fade" role="dialog">
  <div class="modal-dialog">
	<!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Expert Hiring</h4>
      </div>
      <div class="modal-body">	
		<!-- content goes here -->
		
		<?php include "header_files.php"; 

         error_reporting('ERROR');
         if(isset($_REQUEST['sub2']))
         {
				 $a=$_REQUEST['name'];
				 $b=$_REQUEST['mail'];
				 $c=md5($_REQUEST['pswd']);
				 $d=$_REQUEST['dname'];
				 $e=$_REQUEST['cmp'];
				 $f=$_REQUEST['locn'];
				 $g=$_REQUEST['phn'];
				 $h=$_REQUEST['qlfy'];
				 $i=$_REQUEST['skl'];
				 $j=$_REQUEST['wrkex'];
				 $k=$_FILES['rsm']['name'];
				 $l=$_FILES['img']['name'];
				 $n='inactive';
				 //allowed Extension
			$allowedExtsimg = array("jpg", "png", "JPG", "PNG", "jpeg");
			$extensionimg = end(explode(".", $l));
			$allowedExtspdf = array("docx", "ppt", "pdf", "doc");
			$extensionpdf = end(explode(".", $k));
		  //allowed Extension End	 
			$m=0;
	
	     $z="select * from expert where expert_email='$b'";
	     $chk=$conn->query($z);
	
			while($r=$chk->fetch_assoc())
			{
				echo "<script>alert('Email id already exist!!!!!!'); </script>";
				$m=1;
			}
	
			if($m==0)
			{
				foreach($allowedExtsimg as $arrimg)
				{
					foreach($allowedExtspdf as $arrpdf)
					{
						if(($arrimg==$extensionimg)&&($arrpdf==$extensionpdf))
						{
				
							$q="insert into expert(expert_name,expert_email,expert_pswd,expert_designation,expert_company,expert_location,expert_phone,expert_qualification,expert_skills,expert_work_experience,expert_resume,expert_image,expert_status,time)	values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$n',NOW())";
							
							if($conn->query($q))
							{
											move_uploaded_file($_FILES['img']['tmp_name'],"admin/expert/image/".$l);

											move_uploaded_file($_FILES['rsm']['tmp_name'],"admin/expert/resume/".$k);
											echo "<script>alert('Expert inserted successfully'); </script>";
							}
							else
							{
								echo "<script>alert('Try again'); </script>";
							}
						}
				
					}
				}
			}

	}
	
?> 
		
		
        <form enctype="multipart/form-data" method="post" class="form-group">
		
		         <p style="color:green;"><?php echo $success; ?></p>
			     <p style="color:red;"><?php echo $failure; ?></p>
		
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="mail" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pswd" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Designation</label>
						<input type="text" name="dname" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Company</label>
						<input type="text" name="cmp" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Location</label>
						<input type="text" name="locn" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="phn" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Qualification</label>
						<input type="text" name="qlfy" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Skills</label>
						<input type="text" name="skl" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Work_Experience</label>
						<input type="text" name="wrkex" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Resume</label>
						<input type="file" name="rsm" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="file" name="img" class="form-control" required>
					</div>
					
					<!--content ends here---->
					</div>
					<div class="modal-footer">
	  <input type="submit" value="submit" class="btn btn-primary" name="sub2">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
		</form>
      </div>
    </div>
  </div>
</div>	
<!--expert hiring model ends--->
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="detail">
						<ul class="nav navbar-nav">
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> +91 708 742 5488</li>
							<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Sat 9:00 Am to 6:30 Pm </li>
						</ul>
					</div>
					<div class="indicate">
						<ul class="nav navbar-nav navbar-right">
						<li><a href="#" onclick="f1()"><span class="glyphicon glyphicon-log-in"></span> SignIn</a></li>
						<li><a href="#" onclick="f2()"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
						<li><a href="expert/index.php">Expert Login</a></li>
						<li><a href="#" onclick="f3()">Expert Hiring</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.php">Studies <span>Plus</span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
									<li><a href="about.php"><span data-hover="About">About</span></a></li>
									<li><a href="cat.php"><span data-hover="Categories">Categories</span></a></li>
									<li><a href="projects.php"><span data-hover="Gallery">Gallery</span></a></li>	
									<li><a href="expert_bl.php"><span data-hover="Expert">Expert</span></a></li>
									
									<li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>
	<!--header-->
		<div class="banner-w3agile">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>About</span></h3>
			</div>
		</div>
		<!--content-->
		<div class="content">
			<!--about-->
			<div class="about-w3">
				<div class="container">
					<h2 class="tittle">About Us</h2>
					<div class="about-grids">
						<div class="col-md-6 about-grid">
						 <h4>Who We Are</h4>
							 <p>STS Mentor has been developed by group of senior IT Professionals of STS on 1 January, 2017. Right from the inception of this start up, STS has prospered by Leaps and bounds in technology products and critical solutions. Our technologies are acknowledged by leading names of the industry such as Sun Microsystems, Oracle, and Computer Associates etc. STS believes in Quality and it is evident from various technology breaks through like from fastest development systems to Desktop Retail Applications integrated with highly innovative data center services which STS has achieved in a short span.</p>
							
						 </div>
						<div class="col-md-6 video-grid">
							<iframe src="https://player.vimeo.com/video/78554725?color=741731&title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> 
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!--about-->
			<!--What we do-->
				<div class="what-w3">
					<div class="container">
						<h3 class="tittle">What we do</h3>
						<div class="what-grids">
							<div class="col-md-6 what-grid">
								<div class="mask">
									<img src="images/9.jpg" class="img-responsive zoom-img" />
								</div>
								<div class="what-bottom">
									
									<p> Omninos Solutions will deliver the highest value to our customers, employees as the premier technology marketing, distribution and services company, globally. The 21st century is sure to bring more innovation, new services and newer technology, thus new products and services to sell. </p>
								</div>
							</div>
							<div class="col-md-6 what-grid">
								<div class="what-bottom1">
									
									<p> Omninos Solutions will continue to shape and lead the markets in which it chooses to compete. We assure to give value to your money and hence, we will provide eminent work. You will be assigned a well devoted team for your project and the manager will be in touch with you till the end of project. Be assured of getting unique and outstanding work for all your IT related requirements.</p>
								</div>
								<div class="mask">
									<img src="images/8.jpg" class="img-responsive zoom-img" />
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			<!--What we do-->
			
		</div>	
		<!--content-->
		<!--footer-->
		<div class="footer-w3">
				<div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-grid">
							<h4>About Us</h4>
							<p></p>
						</div>
						<div class="col-md-4 footer-grid">
						<h4>Instagram Posts</h4>
							<div class="footer-grid1">
								<img src="images/w1.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/w2.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/w4.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/w5.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/w6.jpg" alt=" " class="img-responsive">
							</div>
							<div class="footer-grid1">
								<img src="images/w2.jpg" alt=" " class="img-responsive">
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 footer-grid">
						<h4>Information</h4>
							<ul>
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Sector 118, TDI city,SAS Nagar, Punjab 160055 </li>
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i></li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="">info@omninos.com 
</a></li>
								<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Mon-Sat 09:00 am to 6:30 pm</li>
							</ul>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<!---copy--->
			<?php require "footer.php"; ?>	


				
</body>
</html>
