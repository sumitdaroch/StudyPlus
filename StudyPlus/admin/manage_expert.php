<?php require "header_files.php"; ?> 
<script>
$("document").ready(function(){
	$("#manageadmin").DataTable();
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
                    <h1 class="page-header">Manage Expert</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table id="manageadmin" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$q="select * from expert ORDER BY expert_id DESC";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{ $st=$r['expert_status'];
					?>
					<tr>
						<td><?php echo $r['expert_id']; ?></td>
						<td><?php echo $r['expert_name']; ?></td>
						<td><?php echo $r['expert_email']; ?></td>
						<td>
						<?php 
						if($st=="inactive")
						{
						?>
							<a href="<?php echo "status.php?status=".$st."&z=".$r['expert_id'] ?>" class="btn btn-warning btn-sm"><?php echo $st;?></a>
						<?php
						   }
							 else
						   {
						?>
							<a href="<?php echo "status.php?status=".$st."&z=".$r['expert_id'] ?>" class="btn btn-success btn-sm"><?php echo $st;?></a>
						<?php
							}
						?>
						</td>
						<td>
							<a href="view_expert.php?z=<?php echo $r['expert_id'];?>"  class="btn btn-xs btn-info">View</a>
							<a href="delete_expert.php?z=<?php echo $r['expert_id'];?>" class="btn btn-xs btn-danger">Delete</a>
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
