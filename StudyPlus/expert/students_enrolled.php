<?php require 'header_files.php'; ?>
<body>

<script>
$("document").ready(function(){
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
                    <h1 class="page-header">Total Students Enrolled</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table id="manageadmin" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Student Name</th>
						<th>Email ID</th>
						<th>Enrolling Date</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Student Name</th>
						<th>Email ID</th>
						<th>Enrolling Date</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$i=1;
					$id=$_SESSION['e_id'];
					$q="select * from subscribe where expert_id='$id' and status='subscribe' ORDER BY id Desc";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{	
						$uid=$r['user_id']; 
						$x1="select * from user where user_id='$uid'";
						$chk2=$conn->query($x1);
						while($r1=$chk2->fetch_assoc())
						{
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $r1['user_name']." ".$r1['user_lastname']; ?></td>
						<td><?php echo $r1['user_email']; ?></td>
						<td><?php echo $r['enrolling_date']; ?></td>
					</tr>
					
					<?php
						}
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
