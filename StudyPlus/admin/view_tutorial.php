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
                    <h1 class="page-header">View tutorial</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table">
				<?php
				
				$id=$_GET['z']; 
				if($id=="")
				{
					echo "<script>alert('Invalid ID'); window.location='manage_tutorial.php';</script>";
				}
				else
				{
					$q="select * from tutorial where tutorial_id='$id'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
						<tr>
							<th>ID</th>
							<td><?php echo $r['tutorial_id']; ?></td>
						</tr>
						<tr>
							<th>Title</th>
							<td><?php echo $r['tutorial_title']; ?></td>
						</tr>
						<tr>
							<th>Uploadcover</th>
							<td><img src="../admin/upload_cover/<?php echo $r['tutorial_uploadcover']; ?>" height='100px' width='200px'></td>
						</tr>
						<tr>
							<th>Uploadtutorial</th>
							<td><a href="../admin/upload_tutorial/<?php echo $r['tutorial_uploadtutorial']; ?>">Download Tutorial</a></td>
						</tr>
						
						<tr>
							<th>Category</th>
							<td><?php echo $r['tutorial_category']; ?></td>
						</tr>
						
						<tr>
							<th>Registered Time</th>
							<td><?php echo $r['time']; ?></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<a href="manage_tutorial.php" class="btn btn-primary">Go Back To Previous Page</a>
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
