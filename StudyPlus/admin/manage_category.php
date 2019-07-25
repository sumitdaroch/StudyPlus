<?php require "header_files.php"; ?> 
<script>
$("document").ready(function(){
	$("#managecategory").DataTable();
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
                    <h1 class="page-header">Manage Category</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table id="managecategory" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Registered Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Registered Time</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$q="select * from category";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
					?>
					<tr>
						<td><?php echo $r['category_id']; ?></td>
						<td><?php echo $r['category_name']; ?></td>
						<td><?php echo $r['time']; ?></td>
						<td>
						
							
							<a href="delete_category.php?z=<?php echo $r['category_id'];?>" class="btn btn-xs btn-danger">Delete</a>

						
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
