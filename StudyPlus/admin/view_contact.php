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
                    <b style="font-family:Andalus; font-size:37px;text-align:center;"> View Reviews </b><br><br>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table table-bordered table-striped">
				<?php
				
				$id=$_GET['z']; 
				if($id=="")
				{
					echo "<script>alert('Invalid ID'); window.location='manage_contact.php';</script>";
				}
				else
				{
					$q="select * from user_contact where contact_id='$id'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
						<tr>
							<th>Name</th>
							<td><?php echo $r['name']; ?></td>
						</tr>
						<tr>
							<th>Email</th>
							<td><?php echo $r['email']; ?></td>
						</tr>
						<tr>
							<th>Subject</th>
							<td><?php echo $r['subject']; ?></td>
						</tr>
						<tr>
							<th>Contact No.</th>
							<td><?php echo $r['contact']; ?></td>
						</tr>
						<tr>
							<th>Message</th>
							<td><?php echo $r['message']; ?></td>
						</tr>
						<tr>
							<td colspan="2" align="right">
								<a href="manage_contact.php" class="btn btn-primary">Go Back To Previous Page</a>
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
