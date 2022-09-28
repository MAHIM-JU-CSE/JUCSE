<?php 
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: index.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN Panel</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min1.css" />
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="../css/font-awesome.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="header-admin">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-2">
                        <a href="post.php"><img class="logo" src="../images/logo.svg"></a>
                       
                    </div>
                    <!-- /LOGO -->
                      <!-- LOG-Out -->
                    <div class="col-md-offset-9  col-md-3">
                   <span style="color:#167ed5; font-size:20px"><b><?php echo $_SESSION['username'] ?></b></span>  <a style="text-decoration:none!important; font-size:15px" href="logout.php" class="admin-logout" >- logout</a>
                    </div>
                    <!-- /LOG-Out -->
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <!-- Menu Bar -->
        <div id="admin-menubar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       <span style="text-align: center;">
						   <ul class="admin-menu">
								<li>
									<a href="post.php">Post</a>
								</li>


                                <?php if($_SESSION['user_role'] == '1'){ ?>

								<li>
									<a href="category.php">Category</a>
								</li>
								<li>
									<a href="users.php">Users</a>
								</li>
            

                                <?php } ?>
                                <li>
									<a href="gallery.php">Gallery</a>
								</li>
                                <li>
									<a href="contactinfo.php">Contact Info</a>
								</li>

							</ul>
                       </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Menu Bar -->
