<?php require "header_files.php";?>
<body>
<!--header-->
<?php require "header_afterlogin.php";?> 
<!--header-->
    <?php
	error_reporting('ERROR');
     $z=$_GET['z'];
	 ?>
	 <div class="row">
	 <br><br><br><br>
	 <div class="col-md-4">
	 <p align="center"><img src="images/w4.jpg" class="img-circle"  class="img-responsive" height="200px" width="200px">
	 <br><br>
     <a href="view_tutorial.php?z=<?php echo $z;?>" class="btn btn-success">View Tutorial</a></p>
	 </div>
	<div class="col-md-4">
	<p align="center"><img src="images/a4.jpg" class="img-circle"  class="img-responsive" height="200px" width="200px">
	<br><br>
	<a href="view_video.php?z=<?php echo $z;?>" class="btn btn-success">View Video</a></p>
	</div>
	<div class="col-md-4">
	<p align="center"><img src="images/w6.jpg" class="img-circle"  class="img-responsive" height="200px" width="200px">
	<br><br>
	<a href="view_screenshot.php?z=<?php echo $z;?>" class="btn btn-success">View Screenshot</a></p>
	</div>
    </div> 
	<br><br>
	<!---copy--->
	<?php require "footer.php"; ?>	
	<!---copy--->
</body>
</html>