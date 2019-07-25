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
                    <h1 class="page-header">View Admin</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table">
				<?php
				
				$id=$_GET['z']; 
				if($id=="")
				{
					echo "<script>alert('Invalid ID'); window.location='manage_admin.php';</script>";
				}
				else
				{
					$q="select * from admin where admin_id='$id'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
						<tr>
							<th>ID</th>
							<td><?php echo $r['admin_id']; ?></td>
						</tr>
						<tr>
							<th>Name</th>
							<td><?php echo $r['admin_name']; ?></td>
						</tr>
						<tr>
							<th>Email ID</th>
							<td><?php echo $r['admin_email']; ?></td>
						</tr>
						<tr>
							<th>Registered Time</th>
							<td><?php echo $r['time']; ?></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<a href="manage_admin.php" class="btn btn-primary">Go Back To Previous Page</a>
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
