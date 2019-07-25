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
					<h2 class="tittle">Our Videos</h2>
						<div class="portfolio_grid_w3lss">
							
						<!--- Loop Start -->
							<?php
							error_reporting('ERROR');
		                    $eid=$_GET['z']; $vd=0;
					$q="select * from video where video_uploaded_by='$eid'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
						$_SESSION['vid']=$r['video_id'];
				?>
							<div class="col-md-4 w3agile_Projects_grid" style="margin-top:10px" >
								<div class="w3agile_Projects_image">
									<a class="sb" href="#" >
										<figure>
											<IMG src="admin/video_cover/<?php echo $r['video_uploadcover'];?>" alt=""  height="250" width="385px"/>
											<figcaption>
												<h4><?php echo $r['video_title'];?></h4>
									<p>
										<a href="video_rating.php?eid=<?php echo $eid;?>&vid=<?php echo $r['video_id'];?>&st=like">
											<i class="glyphicon glyphicon glyphicon-thumbs-up"style="color:#FF961C; font-size:25px;" aria-hidden="true"></i> </a>
											
										<a href="video_rating.php?eid=<?php echo $eid;?>&vid=<?php echo $r['video_id'];?>&st=dislike">
											<i class="glyphicon glyphicon glyphicon glyphicon-thumbs-down" aria-hidden="true" style="color:#FF961C; font-size:25px;"></i>
										</a>
								
											<span style="color:#FF961C; font-size:25px;">
											<?php
											$vid=$r['video_id']; 
											$st="like"; 
											$q1="select * from video_rating where status='$st'and video_id='$vid'";
											$check=$conn->query($q1);
											$num=$check->num_rows;
											echo $num."likes";?>
									</span>
										<br>
										<a class="btn btn-success btn-xs active">
										<?php
										$fd=0;
										$a1="select * from video_download where video_id='$vid'";
										$chk12=$conn->query($a1);
										while($rq=$chk12->fetch_assoc())
										{
											echo $rq['download']." Views"; $fd=1;
										}
										if($fd==0)
										{
											echo "0 Views";
										}
										?>
										
										</a>
									
										<input type="hidden" name="vid" value="<?php echo $r['video_title'];?>">
										<input type="hidden" name="vlist" value="<?php echo $r['video_list'];?>">
										<button class="btn btn-warning active btn-xs" onclick="f1('<?php echo $r['video_title'];?>','<?php echo $r['video_list'];?>','<?php echo $r['video_id'];?>')" name="view" >View Video</button>
									
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
						echo "<h2>No Videos Found !!!</h2>";
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

<!--- signin modal -->		
<div id="signinform" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
		<!-- content goes here -->	
	<iframe id="videoframe" width="560" height="315" src="https://www.youtube.com/embed/<?php echo $b; ?>" frameborder="0" allowfullscreen></iframe>	 
		<!-- content end here -->
      </div>
    
    </div>
  </div>
</div>	
<!--- signin modal end -->
				
</body>
</html>
