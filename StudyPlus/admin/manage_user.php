<?php require "header_files.php"; ?> 
<script>
$("document").ready(function(){
	$("#manageuser").DataTable();
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
                    <h1 class="page-header">Manage User</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table id="manageuser" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Registered Time</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Registered Time</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$q="select * from user";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
					?>
					<tr>
						<td><?php echo $r['user_id']; ?></td>
						<td><?php echo $r['user_name']; ?></td>
						<td><?php echo $r['user_email']; ?></td>
						<td><?php echo $r['time']; ?></td>
						<td>
							<a href="view_user.php?z=<?php echo $r['user_id'];?>" class="btn btn-xs btn-info">View</a>
							<a href="edit_user.php?z=<?php echo $r['user_id'];?>"class="btn btn-xs btn-warning">Edit</a>
							<a href="delete_user.php?z=<?php echo $r['user_id'];?>" class="btn btn-xs btn-danger">Delete</a>

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
