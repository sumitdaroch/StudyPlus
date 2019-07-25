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
                    <h1 class="page-header">View video</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table">
				<?php
				
				$id=$_GET['z']; 
				if($id=="")
				{
					echo "<script>alert('Invalid ID'); window.location='manage_video.php';</script>";
				}
				else
				{
					$q="select * from video where video_id='$id'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
						<tr>
							<th>ID</th>
							<td><?php echo $r['video_id']; ?></td>
						</tr>
						<tr>
							<th>Title</th>
							<td><?php echo $r['video_title']; ?></td>
						</tr>
						<tr>
							<th>Uploadcover</th>
							<td><img src="../admin/video_cover/<?php echo $r['video_uploadcover']; ?>" height='100px' width='200px'></td>
						</tr>
						<tr>
							<th>Videolist</th>
							<td><iframe id="videoframe" width="300" height="150" src="https://www.youtube.com/embed/<?php echo $r['video_list']; ?>" frameborder="0" allowfullscreen></iframe></td>
						</tr>
						
						<tr>
							<th>Category</th>
							<td><?php echo $r['video_category']; ?></td>
						</tr>
						
						<tr>
							<th>Registered Time</th>
							<td><?php echo $r['time']; ?></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<a href="manage_video.php" class="btn btn-primary">Go Back To Previous Page</a>
							</td>
						</tr>
				<?php
					}
				}
				?>
			</table>
			
			
        </div>
    </div>

</div>



</body>
</html>
