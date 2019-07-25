<?php require "header_files.php"; ?>
<script language="javascript">
document.oncontextmenu = context_menu;
 
function context_menu(e) {
    if (!e) var e = window.event;
    var eTarget = (window.event) ? e.srcElement : e.target;
 
    if (eTarget.nodeName == "IMG") {
        //context menu attempt on top of an image element
        return false;
    }
}
</script>
</head>
<body>
	<!--header-->
		<?php require "header_afterlogin.php"; ?>
	<!--header-->
		
<!--Projects-->
		<div class="content">
			<div class="projects-agile">
				<div class="container">
					<h2 class="tittle">Our Screenshot</h2>
						<div class="portfolio_grid_w3lss">
							
						<!--- Loop Start -->
							<?php
							error_reporting('ERROR');
		                    $eid=$_GET['z']; $vd=0;
					$q="select * from screenshot where screenshot_uploaded_by='$eid'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
							<div class="col-md-4 w3agile_Projects_grid" style="margin-top:10px" >
								<div class="w3agile_Projects_image">
									<a class="sb" href="#" >
										<figure>
											<IMG src="admin/screenshot_cover/<?php echo $r['screenshot_uploadcover'];?>" alt=""  height="250" width="385px"/>
											<figcaption>
												<h4><?php echo $r['screenshot_title'];?></h4>
									<p>
										<a href="screenshot_rating.php?eid=<?php echo $eid;?>&sid=<?php echo $r['screenshot_id'];?>&st=like">
											<i class="glyphicon glyphicon glyphicon-thumbs-up"style="color:#FF961C; font-size:25px;" aria-hidden="true"></i> </a>
											
										<a href="screenshot_rating.php?eid=<?php echo $eid;?>&sid=<?php echo $r['screenshot_id'];?>&st=dislike">
											<i class="glyphicon glyphicon glyphicon glyphicon-thumbs-down" aria-hidden="true" style="color:#FF961C; font-size:25px;"></i>
										</a>
								
											<span style="color:#FF961C; font-size:25px;">
											<?php
											$sid=$r['screenshot_id']; 
											$st="like"; 
											$q1="select * from sreenshot_rating where status='$st'and screenshot_id='$sid'";
											$check=$conn->query($q1);
											$num=$check->num_rows;
											echo $num."likes";?>
									</span>
										<br>
										<a class="btn btn-success btn-xs active">
										<?php
										$fd=0;
										$a1="select * from screenshot_download where screenshot_id='$sid'";
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
										<a href="download_screeenshot.php?sid=<?php echo $r['screenshot_id']; ?>&sfile=<?php echo $r['screenshot_uploadcover']; ?>" class="btn btn-warning active btn-xs">View Screenshot</a>
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
						echo "<h2>No Screenshot Found !!!</h2>";
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
