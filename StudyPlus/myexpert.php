<?php require "header_files.php"; ?>
</head>
<body>
	<!--header-->
		<?php require "header_afterlogin.php"; ?>
	<!--header-->
		
		<!--content-->
		<div class="content">
			
			
			
						<!--staff--->
				<div class="staff-w3l">
					<div class="container">
						<h3 class="tittle">Our Staff</h3>
						<div class="staff-grids">
							
							
						<!--- Loop Start -->	
<?php
$main=0;
$umail=$_SESSION['u_id'];
$q1="select * from subscribe where user_id='$umail' and status='subscribe'";
$chk1=$conn->query($q1);
while($r1=$chk1->fetch_assoc())
{
	$exid=$r1['expert_id'];
    $status="active";

	$q="select * from expert where expert_status='$status' and expert_id='$exid'";
	$chk=$conn->query($q);
	while($r=$chk->fetch_assoc())
	{
		$eid=$r['expert_id'];
		$uid=$_SESSION['u_id'];
?>
				
                          
							<div class="col-md-6 staff-grid" style="margin-top:10px;">
								<div class="staff-left">
									<img src="admin/expert/image/<?php echo $r['expert_image'];?>"  width="280px" height="280px" alt="/">
								</div>
								<div class="staff-right">
									<h4>
									<?php echo $r['expert_name'];?>
<?php
$flag=0;
$x1="select * from subscribe where expert_id='$eid' and user_id='$uid' and status='subscribe'";
$chk2=$conn->query($x1);
while($r2=$chk2->fetch_assoc())
{
?>								
	<a href="<?php echo "subscribe.php?eid=$eid&amp;status=unsubscribe"; ?>">
		<span style="float:right;"><i class="glyphicon glyphicon-heart" style="color:green;"></i></span>
	</a>
<?php
$flag=1;
}
if($flag==0)
{
?>
	<a href="<?php echo "subscribe.php?eid=$eid&amp;status=subscribe"; ?>">
		<span style="float:right;"><i class="glyphicon glyphicon-heart" style="color:red;"></i></span>
	</a>
<?php } ?>
	
									</h4>
									<ul>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Skills:<?php echo $r['expert_skills'];?></li>
										<li><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>Experience:<?php echo $r['expert_work_experience'];?></li>
										<li>
										<button class="btn btn-success btn-xs"><?php
								$q3="select * from subscribe where expert_id='$eid' and status='subscribe'";
								$chk3=$conn->query($q3);
								$num=$chk3->num_rows;
								echo $num." Students Enrolled";
								?> </button>
										</li>
										<li>
										<a href="expert_rating.php? eid=<?php echo $r['expert_id'];?>&st=like">
											<i class="glyphicon glyphicon glyphicon-thumbs-up" aria-hidden="true"></i> </a>
											
										<a href="expert_rating.php? eid=<?php echo $r['expert_id'];?>&st=dislike">
											<i class="glyphicon glyphicon glyphicon glyphicon-thumbs-down" aria-hidden="true"></i>
										</a>
										<?php
											$eid=$r['expert_id']; 
											$st="like"; 
											$q1="select * from expert_rating where status='$st'and expert_id='$eid'";
											$check=$conn->query($q1);
											$num=$check->num_rows;
											echo $num."likes";?></li>
									</ul>
									<div class="social-icons">
										<a href="category.php?z=<?php echo $r['expert_id'];?>"
										class="btn btn-warning">View Tutorials</a>
										
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<?php
	}$main=1;}
if($main==0)
{
	echo "<h2>No Expert Subscribed By You !!!</h2>";
}

                            ?>					    
							
						<!--- Loop end -->		
							
							
							
							<div class="clearfix"></div>
						</div>
						
					</div>
				</div>
				<!--staff--->
		</div>	
		<!--content-->
		
		<!---copy--->
			<?php require "footer.php"; ?>	
			<!---copy--->


				
</body>
</html>
