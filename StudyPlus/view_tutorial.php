<?php require "header_files.php"; ?>
</head>
<body>
	<!--header-->
		<?php require "header_afterlogin.php"; ?>
	<!--header-->
		
<!--Projects-->
		<div class="content">
			<div class="projects-agile">
				<div class="container">
					<h2 class="tittle">Our Tutorials</h2>
						<div class="portfolio_grid_w3lss">
							
						<!--- Loop Start -->
							<?php
							error_reporting('ERROR');
		                    $eid=$_GET['z']; $vd=0;
					$q="select * from tutorial where tutorial_uploaded_by='$eid'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
							<div class="col-md-4 w3agile_Projects_grid" style="margin-top:10px" >
								<div class="w3agile_Projects_image">
									<a class="sb" href="#" >
										<figure>
											<img src="admin/upload_cover/<?php echo $r['tutorial_uploadcover'];?>" alt=""  height="250" width="385px"/>
											<figcaption>
												<h4><?php echo $r['tutorial_title'];?></h4>
									<p>
										<a href="tutorial_rating.php?eid=<?php echo $eid; ?>&tid=<?php echo $r['tutorial_id'];?>&st=like">
											<i class="glyphicon glyphicon glyphicon-thumbs-up" style="color:#FF961C; font-size:25px;" aria-hidden="true"></i> </a>
											
										<a href="tutorial_rating.php?eid=<?php echo $eid; ?>&tid=<?php echo $r['tutorial_id'];?>&st=dislike">
											<i class="glyphicon glyphicon glyphicon glyphicon-thumbs-down" aria-hidden="true" style="color:#FF961C; font-size:25px;"></i>
										</a>
								
											<span style="color:#FF961C; font-size:25px;">
											<?php
											$tid=$r['tutorial_id']; 
											$st="like"; 
											$q1="select * from tutorial_rating where status='$st'and tutorial_id='$tid'";
											$check=$conn->query($q1);
											$num=$check->num_rows;
											echo $num."likes";?>
									</span>
										<br>
										<a class="btn btn-success btn-xs active">
										<?php
										$fd=0;
										$a1="select * from tutorial_download where tutorial_id='$tid'";
										$chk12=$conn->query($a1);
										while($rq=$chk12->fetch_assoc())
										{
											echo $rq['download']." Downloads"; $fd=1;
										}
										if($fd==0)
										{
											echo "0 Downloads";
										}
										?>
										
										</a>
										<a href="download_tutorial.php?tid=<?php echo $r['tutorial_id']; ?>&tfile=<?php echo $r['tutorial_uploadtutorial']; ?>" class="btn btn-warning active btn-xs">View Tutorial</a>
									</p>
											</figcaption>
										</figure>
									</a>
								</div>
							</div>
							
							<?php
							$vd=1;
					}
					if($vd==0)
					{
						echo "<h2>No Tutorial Found !!!</h2>";
					}
					?>
							
						<!--- Loop end -->	
					    
					<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>
		<!--Projects-->

		
		<!---copy--->
			<?php require "footer.php"; ?>	
			<!---copy--->


				
</body>
</html>
