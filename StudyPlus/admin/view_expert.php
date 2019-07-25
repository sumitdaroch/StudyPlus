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
                    <h1 class="page-header">View Expert</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table">
				<?php
				
				$id=$_GET['z']; 
				if($id=="")
				{
					echo "<script>alert('Invalid ID'); window.location='manage_expert.php';</script>";
				}
				else
				{
					$q="select * from expert where expert_id='$id'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{ $st=$r['expert_status'];
				?>
						<tr>
							<th>ID</th>
							<td><?php echo $r['expert_id']; ?></td>
						</tr>
						<tr>
							<th>Name</th>
							<td><?php echo $r['expert_name']; ?></td>
						</tr>
						<tr>
							<th>Email ID</th>
							<td><?php echo $r['expert_email']; ?></td>
						</tr>
						<tr>
							<th>Profile Pic</th>
							<td><img src="expert/image/<?php echo $r['expert_image']; ?>" height='100px' width='200px'></td>
						</tr>
						<tr>
							<th>Resume</th>
							<td><a href="expert/resume/<?php echo $r['expert_resume']; ?>">Download Resume</a></td>
						</tr>
						<tr>
							<th>Designation</th>
							<td><?php echo $r['expert_designation']; ?></td>
						</tr>
						<tr>
							<th>Company</th>
							<td><?php echo $r['expert_company']; ?></td>
						</tr>
						<tr>
							<th>Residential Address</th>
							<td><?php echo $r['expert_location']; ?></td>
						</tr>
						<tr>
							<th>Contact No.</th>
							<td><?php echo $r['expert_location']; ?></td>
						</tr>
						<tr>
							<th>Qualification</th>
							<td><?php echo $r['expert_qualification']; ?></td>
						</tr>
						<tr>
							<th>Skills</th>
							<td><?php echo $r['expert_skills']; ?></td>
						</tr>
						<tr>
							<th>Work Experience</th>
							<td><?php echo $r['expert_work_experience']; ?></td>
						</tr>
						<tr>
							<th>Status</th>
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
						</tr>
						<tr>
							<th>Registered Time</th>
							<td><?php echo $r['time']; ?></td>
						</tr>
						
						<tr>
							<td colspan="2" align="center">
								<a href="manage_expert.php" class="btn btn-primary">Go Back To Previous Page</a>
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
