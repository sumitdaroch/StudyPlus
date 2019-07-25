<?php require 'header_files.php'; 
error_reporting('ERROR');
if(isset($_REQUEST['sub']))
{
	$a=$_REQUEST['utitle'];
	$b=$_FILES['upld']['name'];
	$c=$_REQUEST['uvdl'];
	$d=$_REQUEST['category'];
	$user="admin";
	
	$allowedExtsimg = array("jpg", "png", "JPG", "PNG", "jpeg");
	$extensionimg = end(explode(".", $b));
	
	
	$f=0; $flag=0;
	
	$z="select * from video where video_title='$a'";
	$chk=$conn->query($z);
	while($r=$chk->fetch_assoc())
	{
		$failure="video already exist!"; 
		$f=1;	
	}
	if($f==0)
	{
		foreach($allowedExtsimg as $arrimg)
		{
				if($arrimg==$extensionimg)
				{
					$q="insert into video(video_title,video_uploadcover,video_list,video_category,video_uploaded_by,time)values('$a','$b','$c','$d','$user',NOW())";
					if($conn->query($q))
					{
						move_uploaded_file($_FILES['upld']['tmp_name'],"video_cover/".$b);
						
						
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
                    <h1 class="page-header">Add video</h1>
                </div>
            </div>

            
                

            <!-- ... Your content goes here ... -->
			<p style="color:green"><?php echo $success; ?></p>
			<p style="color:red"><?php echo $failure; ?></p>
            <!-- ... Your content goes here ... -->
			
			<form name="add_video" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Tittle</label>
			<input type="text" name="utitle"class="form-control" required>
			</div>
			<div class="form-group">
			<label>Upload Cover</label>
			<input type="file" name="upld"class="form-control" required>
			</div>
			<div class="form-group">
			<label>Video Url</label>
			<input type="text"name="uvdl" class="form-control" required>
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
