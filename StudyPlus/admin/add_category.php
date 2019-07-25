

<?php require "header_files.php"; 
error_reporting('ERROR');
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['ucate'];
	
	$m=0;
	$z="select * from category where category_name='$a'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$failure="category_name Already Exist!!!";
		$m=1;
	}
	if($m==0)
	{
		$q="insert into category(category_name)values('$a')";
		if($conn->query($q))
		{
			$success="category inserted successfully";
		}
		else
		{
			$failure="Try Again";
		}
	}
}
?> 
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php require "menu.php"; ?> 

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Category</h1>
                </div>
            </div>
			 
			 
              <p style="color:green;"><?php echo $success;?></p>
			  <p style="color:red;"><?php echo $failure;?></p>
			
            <!-- ... Your content goes here ... -->
		
			<form name="add_category" method="post">
			<div class="form-group">
			<label>Catrgory Name</label>
			<input type="text" name="ucate"class="form-control" required>
			</div>
			<input type="submit" name="sub"class="btn btn-primary">
			
			</form>
        </div>
    </div>

</div>



</body>
</html>
