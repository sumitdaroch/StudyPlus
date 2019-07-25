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
                    <h1 class="page-header">My Profile</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table class="table">
				<?php
				
				$id=$_SESSION['e_id']; 
				if($id=="")
				{
					echo "<script>alert('Invalid ID'); window.location='manage_expert.php';</script>";
				}
				else
				{
					$q="select * from expert where expert_id='$id'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
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
							<th>Designation</th>
							<td><?php echo $r['expert_designation']; ?></td>
						</tr>
						<tr>
							<th>Company</th>
							<td><?php echo $r['expert_company']; ?></td>
						</tr>
						<tr>
							<th>Location</th>
							<td><?php echo $r['expert_location']; ?></td>
						</tr>
						<tr>
							<th>Phone</th>
							<td><?php echo $r['expert_phone']; ?></td>
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
							<th>Work_Experience</th>
							<td><?php echo $r['expert_work_experience']; ?></td>
						</tr>
						<tr>
							<th>Resume</th>
							<td><?php echo $r['expert_resume']; ?></td>
						</tr>
						<tr>
							<th>Image</th>
							<td><?php echo $r['expert_image']; ?></td>
						</tr>
						
						<tr>
							<th>Registered Time</th>
							<td><?php echo $r['time']; ?></td>
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
