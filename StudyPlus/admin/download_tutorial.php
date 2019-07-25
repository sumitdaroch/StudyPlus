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
					$q="select * from tutorial";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{	
						$tid=$r['tutorial_id']; $tname=$r['tutorial_title'];
						$dd=0;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $tname; ?></td>
						<td>
						<?php 
							$x1="select * from tutorial_download where tutorial_id='$tid'";
							$chk2=$conn->query($x1);
							while($r1=$chk2->fetch_assoc())
							{
								echo $r1['download'];	$dd=1;						
							}
							if($dd==0)
							{
								echo "0";
							}
						?>
						</td>
						<td>
						<?php
						$x1="select * from tutorial_rating where tutorial_id='$tid' and status='like'";
						$chk2=$conn->query($x1);
						$row=$chk2->num_rows;
						echo $row." likes";
						?>
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
