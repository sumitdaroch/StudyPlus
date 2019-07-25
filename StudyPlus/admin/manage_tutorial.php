<?php require "header_files.php"; ?> 
<script>
$("document").ready(function(){
	$("#managetutorial").DataTable();
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
                    <h1 class="page-header">Manage Tutorial</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table id="managetutorial" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>UploadCover</th>
		
						<th>Category</th>
						<th>Registered Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>UploadCover</th>
						
                        <th>Category</th>
						<th>Registered Time</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					
					$q="select * from tutorial";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
					?>
					<tr>
						<td><?php echo $r['tutorial_id']; ?></td>
						<td><?php echo $r['tutorial_title']; ?></td>
						<td><img src="upload_cover/<?php echo $r['tutorial_uploadcover']; ?>" height='50px' width='100px'></td>
						
						<td><?php echo $r['tutorial_category']; ?></td>
						<td><?php echo $r['time']; ?></td>
						<td>
							 <a href="view_tutorial.php?z=<?php echo $r['tutorial_id'];?>"class="btn btn-xs btn-info">View</a>
							<a href="delete_tutorial.php?z=<?php echo $r['tutorial_id'];?>" class="btn btn-xs btn-danger">Delete</a>

							
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
