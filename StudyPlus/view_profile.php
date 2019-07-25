<?php require "header_files.php"; ?>
</head>
<body>
	<?php require "header_afterlogin.php"; ?>
		<div class="banner-w3agile">
			<div class="container">
				<h3><a href="index.html">Home</a> / <span>View Profile</span></h3>
			</div>
		</div>
       <!--content-->
		<div class="content">
			<!--typography-page -->
				<div class="typo-w3">
					<div class="container">
						<h2 class="tittle">View Profile</h2>
						<div class="grid_3 grid_4">
							<div class="bs-example">
								<table class="table">
								<?php
				
				               $id=$_SESSION['u_id']; 
				               if($id=="")
				           {
					     echo "<script>alert('Invalid ID');</script>";
				}
				else
				{
					$q="select * from user where user_id='$id'";
					$chk=$conn->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
				
								<tr>
							<th>Name</th>
							<td><?php echo $r['user_name']; ?></td>
						</tr>
						<tr>
							<th>LastName</th>
							<td><?php echo $r['user_lastname']; ?></td>
						</tr>
						<tr>
							<th>Email</th>
							<td><?php echo $r['user_email']; ?></td>
						</tr>
                      <?php
					}
				}
				?>
	
						
									
								</table>
							</div>
						</div>					
					</div>
				</div>
			<!-- //typography-page -->

		</div>
		<!--content-->

		
		<!---copy--->
			<?php require "footer.php"; ?>	
			<!---copy--->


				
</body>
</html>
