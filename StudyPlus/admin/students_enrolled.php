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
						<th>Expert Name</th>
						<th>Students Enrolled</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Expert Name</th>
						<th>Students Enrolled</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$i=1; 
					$x1="select * from expert where expert_status='active'";
					$chk2=$conn->query($x1);
					while($r1=$chk2->fetch_assoc())
					{
						$exid=$r1['expert_id'];
						
					$q="select count(user_id) as tot from subscribe where status='subscribe' and expert_id='$exid'";
					$chk=$conn->query($q);
					//$num=$chk->num_rows();
					while($r=$chk->fetch_assoc())
					{	 
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $r1['expert_name']; ?></td>
						<td><?php echo $r['tot']." Students"; ?></td>
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
