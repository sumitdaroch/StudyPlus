<?php require 'header_files.php'; ?>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php require 'menu.php'; ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Welcome To Your Account !!!</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			
			<!-- ... 2nd row ... -->
			<div class="col-lg-12" style="margin-top:30px;">
                <div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/25f8915538b54dd39f520236c29f82.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_admin.php" class="btn btn-danger active">Total Admin:
					<?php
						$x="select * from admin";
						$chk1=$conn->query($x);
						$row=$chk1->num_rows;
						echo $row;
					?>
					
					</a>
					<br><br>
				</div> 
				 <div class="col-lg-1"></div>
				<div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/finance-controller.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_user.php" class="btn btn-danger active">Total Users:
					<?php
						$x="select * from user";
						$chk1=$conn->query($x);
						$row=$chk1->num_rows;
						echo $row;
					?>
					
					</a>
					<br><br>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/Accept-Male-User.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_expert.php" class="btn btn-danger active">Total Active Expert:
					<?php
						$x="select * from expert where expert_status='active'";
						$chk1=$conn->query($x);
						$row=$chk1->num_rows;
						echo $row;
					?>
					
					</a>
					<br><br>
				</div>
			
			</div>
			<!-- ... 2nd row end... -->
			
			
			 <!-- ... 1st row ... -->
			<div class="col-lg-12" style="margin-top:30px;">
                <div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/20140407_534215f90bef6-210x210.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_expert.php" class="btn btn-danger active">Total InActive Expert:
					<?php
						$x="select * from expert where expert_status='inactive'";
						$chk1=$conn->query($x);
						$row=$chk1->num_rows;
						echo $row;
					?>
					
					</a>
					<br><br>
				</div> 
				 <div class="col-lg-1"></div>
				<div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/1.jpg" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_tutorial.php" class="btn btn-danger active">Total Tutorials: 
					<?php
						$x="select * from tutorial";
						$chk1=$conn->query($x);
						$row=$chk1->num_rows;
						echo $row;
					?>
					</a>
					<br><br>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/youtube-flat.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_video.php" class="btn btn-danger active">Total Videos:
					<?php
						$x="select * from video";
						$chk1=$conn->query($x);
						$row=$chk1->num_rows;
						echo $row;
					?>
					</a>
					<br><br>
				</div>
			
			</div>
			<!-- ... 1st row end ... -->
			<!-- ... 1st row ... -->
			<div class="col-lg-12" style="margin-top:30px;">
                <div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/camera.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_screenshot.php" class="btn btn-danger active">Total Screenshots:
					<?php
						$x="select * from screenshot";
						$chk1=$conn->query($x);
						$row=$chk1->num_rows;
						echo $row;
					?>
					
					</a>
					<br><br>
				</div> 
				 <div class="col-lg-1"></div>
				<div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/book-open-flat.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="download_tutorial.php" class="btn btn-danger active">Tutorial Download &amp; Rating</a>
					<br><br>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/Play-icon.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="download_video.php" class="btn btn-danger active">Video Download &amp; Rating</a>
					<br><br>
				</div>
			
			</div>
			<!-- ... 1st row end ... -->
			<!-- ... 1st row ... -->
			<div class="col-lg-12" style="margin-top:30px;">
                <div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/1432826530-image.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="download_screenshot.php" class="btn btn-danger active">Screen Download &amp; Rating</a>
					<br><br>
				</div> 
				 
			
			</div>
			<!-- ... 1st row end ... -->
			
			
        </div>
    </div>

</div>



</body>
</html>
