<?php
session_start();
if($_SESSION==NULL)
{
	header("location:index.php");
}
?>

<script type="text/javascript">
function f1(vtitle,vlist,vid)
{
	$(document).ready(function()
	{
		$("#signinform").modal("show");
		$('.modal-title').html(vtitle);
		$('#videoframe').attr("src","https://www.youtube.com/embed/"+vlist);
	
		$.get("download_video.php",{"vid":vid},function(status){
				//location.reload();
				//alert("Status: " + status);
		});
	});
}
		
		
</script>







<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="detail">
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> Hi, <?php echo $_SESSION['u_name']; ?></li>
						</ul>
					</div>
					<div class="indicate">
						<ul class="nav navbar-nav navbar-right">
						<li><a href="view_profile.php">View Profile</a></li>
						<li><a href="setting.php">Setting</a></li>
						<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.html">Studies <span>Plus</span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li><a href="experts.php"><span data-hover="Subscribe Expert">Subscribe Expert</span></a></li>
									<li><a href="myexpert.php"><span data-hover="my expert">My Expert</span></a></li>
									
									
									
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>