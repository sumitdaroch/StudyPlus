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
                    <h1 class="page-header">Total Downloads &amp; Rating</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<table id="manageadmin" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Total Downloads</th>
						<th>Overall Rating</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Total Downloads</th>
						<th>Overall Rating</th>
					</tr>
				</tfoot>
				<tbody>
					<?php
					$i=1;
					$id=$_SESSION['e_id'];
					$q="select * from screenshot where screenshot_uploaded_by='$id'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{	
						$tid=$r['screenshot_id']; $tname=$r['screenshot_title'];
						$dd=0;
						$x1="select * from screenshot_download where screenshot_id='$tid'";
						$chk2=$conn->query($x1);
						while($r1=$chk2->fetch_assoc())
						{
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $tname; ?></td>
						<td><?php echo $r1['download']; ?></td>
						
						<th>
						<?php
						$x1="select * from sreenshot_rating where screenshot_id='$tid' and status='like'";
						$chk2=$conn->query($x1);
						$row=$chk2->num_rows;
						echo $row." likes";
						?>
						</th>
					</tr>
					<?php
						$dd=1;
					} 
					if($dd==0)
					{
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $tname; ?></td>
						<td><?php echo "0"; ?></td>
						
						<td><?php
						$x1="select * from sreenshot_rating where screenshot_id='$tid' and status='like'";
						$chk2=$conn->query($x1);
						$row=$chk2->num_rows;
						echo $row." likes";
						?></td>
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
