<?php require 'header_files.php'; ?>
<body>
<script>
$('document').ready(function(){
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
                    <h1 class="page-header">App Rating &amp; Reviews</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table id="manageadmin" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Rating</th>
						<th>Reviews</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Rating</th>
						<th>Reviews</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$i=1;
					$did=$_SESSION['d_id'];
					$q="select * from add_app where upload_by='$did'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{	
						$aid=$r['app_id']; $aname=$r['app_name'];
						$dd=0;
						$x1="select * from app_rating where app_id='$aid' and status='like'";
						$chk2=$conn->query($x1);
						$row=$chk2->num_rows;
						$xr="select * from reviews where app_id='$aid'";
						$chk1r=$conn->query($xr);
						$rowr=$chk1r->num_rows;
							
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $aname; ?></td>
						<td><?php echo  $row." likes"; ?></td>
						<td><a href="reviews.php?aid=<?php echo $aid; ?>"><?php echo $rowr." reviews"; ?></a></td>
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
