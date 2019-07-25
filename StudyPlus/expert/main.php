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
						<img src="images/1.jpg" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_tutorial.php" class="btn btn-danger active">Total Tutorial:
					<?php
					
					$id=$_SESSION['e_id'];
					
						$x="select * from tutorial where tutorial_uploaded_by='$id'";
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
						$x="select * from video where video_uploaded_by='$id'";
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
						<img src="images/camera.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="manage_screenshot.php" class="btn btn-danger active">Total Screenshot:
					<?php
						$x="select * from screenshot where screenshot_uploaded_by='$id'";
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
						<img src="images/book-open-flat.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="download_tutorial.php" class="btn btn-danger active">Tutorial Download &amp; Rating 
					
					
					</a>
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
				<div class="col-lg-1"></div>
				<div class="col-lg-3" align="center" style="box-shadow:1px 1px 5px gray; border-radius:10px;">
					<br>
						<img src="images/1432826530-image.png" class="img-circle" style="height:150px; width:150px; box-shadow:1px 1px 5px gray">
					<br><br>
					<a href="download_screenshot.php" class="btn btn-danger active">Screenshot Download &amp; Rating</a>
					<br><br>
				</div>
			
			</div>
			<!-- ... 1st row end ... -->
			
			
			
			
        </div>
    </div>

</div>



</body>
</html>
