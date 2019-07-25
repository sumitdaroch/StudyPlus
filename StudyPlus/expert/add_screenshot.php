<?php require 'header_files.php'; 
error_reporting('ERROR');
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['utitle'];
	$b=$_FILES['upld']['name'];
	$d=$_REQUEST['category'];
	session_start();
	$user=$_SESSION['e_id'];
	
	$allowedExtsimg = array("jpg", "png", "JPG", "PNG", "jpeg");
	$extensionimg = end(explode(".", $b));
	
	
	$f=0; $flag=0;
	
	 $z="select * from screenshot where screenshot_title='$a'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$failure="screenshot already exist!"; 
		$f=1;	
	}
	if($f==0)
	{
		foreach($allowedExtsimg as $arrimg)
		{
				if($arrimg==$extensionimg)
				{
					$q="insert into screenshot(screenshot_title,screenshot_uploadcover,screenshot_category,screenshot_uploaded_by,time)values('$a','$b','$c','$user',NOW())";
					if($conn->query($q))
					{
						move_uploaded_file($_FILES['upld']['tmp_name'],"../admin/screenshot_cover/".$b);
						
						
						$success="added successfully";
					}
					else 
					{
						$failure="try again";
					}
				}
				
			}
		}
}
?>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php require 'menu.php'; ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Screenshot</h1>
                </div>
            </div>
             <!-- ... Your content goes here ... -->
			<p style="color:green"><?php echo $success; ?></p>
			<p style="color:red"><?php echo $failure; ?></p>
			
            <form name="add_screenshot" method="post" enctype="multipart/form-data">

			<div class="form-group">
			<label>Tittle</label>
			<input type="text"name="utitle" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Upload Cover</label>
			<input type="file" name="upld" class="form-control" required>
			</div>
			<div class="form-group">
			<label>Category</label>
			<select name="category" id="sel" class="form-control" required>
			<?php
			$q="select * from category";
			$chk=$conn->query($q);
			while($r=$chk->fetch_assoc())
			{
				?>
				<option value="<?php echo $r['category_name'];?>">
				<?php echo $r['category_name'];?>
				</option>
				<?php
			}
			?>
			</select>
			
			</div>
			<input type="submit"name="sub" class="btn btn-primary">
			
			</form>
        </div>
    </div>

</div>



</body>
</html>
