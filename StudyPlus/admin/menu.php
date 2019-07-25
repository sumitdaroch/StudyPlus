<?php
session_start();
if($_SESSION==NULL)
{
	header("location:index.php");
}
?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Education +</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['a_name']; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="user_profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="change_pswd.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    
                    <li>
                        <a href="main.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Admin<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_admin.php">Add Admin</a>
                            </li>
                            <li>
     
	 <a href="manage_admin.php">Manage Admin</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_user.php">Add User</a>
                            </li>
                            <li>
                                <a href="manage_user.php">Manage User</a>
                            </li>
                        </ul>
                    </li>
					 
					 <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_category.php">Add Category</a>
                            </li>
                            <li>
                                <a href="manage_category.php">Manage Category</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Screenshot<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_screenshot.php">Add Screenshot</a>
                            </li>
                            <li>
                                <a href="manage_screenshot.php">Manage Screenshot</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Video<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_video.php">Add Video</a>
                            </li>
                            <li>
                                <a href="manage_video.php">Manage Video</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Tutorial<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_tutorial.php">Add Tutorial</a>
                            </li>
                            <li>
                                <a href="manage_tutorial.php">Manage Tutorial</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="manage_expert.php"><i class="fa fa-dashboard fa-fw"></i> Manage Expert</a>
                    </li>
					<li>
                        <a href="students_enrolled.php"><i class="fa fa-dashboard fa-fw"></i> Students Enrolled</a>
                    </li>
					<li>
                        <a href="manage_contact.php"><i class="fa fa-dashboard fa-fw"></i> Reviews</a>
                    </li>
					
					
                </ul>

            </div>
        </div>
    </nav>