
<?php require "header_files.php"; ?> 
<script>
$("document").ready(function(){
	$("#managevideo").DataTable();
});
</script>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php require "menu.php"; ?> 

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Video</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table id="managevideo" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Cover</th>
						<th>Category</th>
						<th>Registered Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Cover</th>
						<th>Category</th>
						<th>Registered Time</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					
					$q="select * from video";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
					?>
					<tr>
						<td><?php echo $r['video_id']; ?></td>
						<td><?php echo $r['video_title']; ?></td>
						<td><img src="video_cover/<?php echo $r['video_uploadcover']; ?>" height='50px' width='100px'></td>
						
						<td><?php echo $r['video_category']; ?></td>
						<td><?php echo $r['time']; ?></td>
						<td>
							<a href="view_video.php?z=<?php echo $r['video_id'];?>"class="btn btn-xs btn-info">View</a>
							
							<a href="delete_video.php?z=<?php echo $r['video_id'];?>" class="btn btn-xs btn-danger">Delete</a>

							
						</td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<!-- ... Your content end here ... -->

        </div>
    </div>

</div>



</body>
</html>
