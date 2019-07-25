<?php require 'header_files.php'; 
error_reporting('ERROR');
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['utitle'];
	$b=$_FILES['upld']['name'];
	$c=$_FILES['utut']['name'];
	$d=$_REQUEST['category'];
	session_start();
	$user=$_SESSION['e_id'];
	
	$allowedExtsimg = array("jpg", "png", "JPG", "PNG", "jpeg");
	$extensionimg = end(explode(".", $b));
	$allowedExtspdf = array("docx", "ppt", "pdf", "doc");
	$extensionpdf = end(explode(".", $c));
	
	$f=0; $flag=0;
	
	$z="select * from tutorial where tutorial_title='$a'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$failure="Tutorial already exist!"; 
		$f=1;	
	}
	if($f==0)
	{
		foreach($allowedExtsimg as $arrimg)
		{
			foreach($allowedExtspdf as $arrpdf)
			{
				if(($arrimg==$extensionimg)&&($arrpdf==$extensionpdf))
				{
					$q="insert into tutorial(tutorial_title,tutorial_uploadcover,tutorial_uploadtutorial,tutorial_category,tutorial_uploaded_by,time)values('$a','$b','$c','$d','$user',NOW())";
					if($conn->query($q))
					{
						move_uploaded_file($_FILES['upld']['tmp_name'],"../admin/upload_cover/".$b);

						move_uploaded_file($_FILES['utut']['tmp_name'],"../admin/upload_tutorial/".$c);
						
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
                    <h1 class="page-header">Add Tutorial</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			<p style="color:green"><?php echo $success; ?></p>
			<p style="color:red"><?php echo $failure; ?></p>
			
			<form enctype="multipart/form-data" method="post" class="form-group">
			
			<div class="form-group">
			<label>Tittle</label>
			<input type="text" name="utitle"class="form-control" required>
			</div>
			<div class="form-group">
			<label>Upload Cover</label>
			<input type="file" name="upld"class="form-control" required>
			</div>
			<div class="form-group">
			<label>Upload Tutorial</label>
			<input type="file"name="utut" class="form-control" required>
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
			<input type="submit" name="sub"class="btn btn-primary">
			</form>
        </div>
    </div>

</div>



</body>
</html>
