<?php require 'header_files.php'; ?>
<body>
<script>
	$(document).ready(function(){
		$('#manageadmin').DataTable();

	});
</script>
<div id="wrapper">

    <!-- Navigation -->
    <?php require 'menu.php'; ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <b style="font-family:Andalus; font-size:33px;text-align:center;"> Manage Reviews </b><br><br>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table table-bordered table-striped" id="manageadmin">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>						
						<th>Action</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Subject</th>					
						<th>Action</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$i=1;
					$q="select * from user_contact ORDER BY contact_id DESC";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
						$id=$r['contact_id'];
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $r['name']; ?></td>						
						<td><?php echo $r['email']; ?></td>
						<td><?php echo $r['subject']; ?></td>
						<td>
						<a href="view_contact.php?z=<?php echo $id; ?>" class="btn btn-xs btn-info">View</a>
						<a href="delete_contact.php?z=<?php echo $id; ?>" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
					<?php
					$i++;
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
