<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\service\service;
$hobbies_obj=new service();
$hobbies_obj->setService($_GET);
$data=$hobbies_obj->service_edit();
?>
<!DOCTYPE html>
<html lang="en">
<title>Hobbies</title>
<?php include_once("header.php");?>
<body>
<!-- Main navbar -->
<div class="navbar navbar-inverse ">
    <!--    <div class="navbar navbar-inverse navbar-fixed-top ">-->

    <div class="navbar-header ">
        <a class="navbar-brand" href="../dashboard.php"><img src="../assets/images/codebreaker.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown language-switch">

                <ul class="dropdown-menu">
                    <li><a class="deutsch"><img src="../assets/images/flags/de.png" alt=""> Deutsch</a></li>
                    <li><a class="ukrainian"><img src="../assets/images/flags/ua.png" alt=""> Українська</a></li>
                    <li><a class="english"><img src="../assets/images/flags/gb.png" alt=""> English</a></li>
                    <li><a class="espana"><img src="../assets/images/flags/es.png" alt=""> España</a></li>
                    <li><a class="russian"><img src="../assets/images/flags/ru.png" alt=""> Русский</a></li>
                </ul>
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo "../settings/images/".$_SESSION['user_setting']['featured_img']?>" class="img-circle img-sm" alt="">
                    <span><?php echo  $_SESSION['user_info']['email'];?></span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                    <li><a href="../logout.php"><i class="icon-switch2"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
<!--</div>-->

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="<?php echo "../settings/images/".$_SESSION['user_setting']['featured_img']?>" class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold"><?php echo  $_SESSION['user_info']['username'];?></span>
                                <div class="text-size-mini text-muted">
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="../settings/settings.php"><i class="icon-cog3  spinner"></i></a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                            <li>
                                <a href="#"><i class="icon-home4"></i> <span>About</span></a>
                                <ul>
                                    <li><a href="../about/about.php">About</a></li>
                                    <li><a href="../about/hobbies.php">Hobbies</a></li>
                                    <li><a href="#">Fatcs</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-magazine"></i> <span>RESUME</span></a>
                                <ul>
                                    <li><a href="../resume/education.php" id="layout1">Add Education</a></li>
                                    <li><a href="../resume/exprience.php" id="layout2">Add Exprience</a></li>
                                    <li><a href="../resume/award.php" id="layout3">Add Award</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-insert-template"></i> <span>SERVICE</span></a>
                                <ul>
                                    <li><a href="service.php">My Service</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-cash3"></i> <span>TEACHING</span></a>
                                <ul>
                                    <li><a href="../teaching/teaching.php">Add Teaching</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-spinner11 spinner"></i> <span> SKILLS</span></a>
                                <ul>
                                    <li><a href="colors_primary.html">Primary palette</a></li>
                                    <li><a href="colors_danger.html">Danger palette</a></li>
                                    <li><a href="colors_success.html">Success palette</a></li>
                                    <li><a href="colors_warning.html">Warning palette</a></li>
                                    <li><a href="colors_info.html">Info palette</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-task"></i> <span>WORKS</span></a>
                                <ul>
                                    <li><a href="../publication/blog.php">Blog</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-comments"></i> <span>CONTACT</span></a>
                                <ul>
                                    <li><a href="colors_primary.html">Primary palette</a></li>
                                    <li><a href="colors_danger.html">Danger palette</a></li>
                                    <li><a href="colors_success.html">Success palette</a></li>
                                    <li><a href="colors_warning.html">Warning palette</a></li>
                                    <li><a href="colors_info.html">Info palette</a></li>

                                </ul>
                            </li>

                            <!-- Data visualization -->


                            <li>
                                <a href="#"><i class="icon-images2"></i> <span>GALLERY</span></a>
                                <ul>
                                    <li><a href="../portfolio/portfollio.php">Portfollio</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-cog3"></i> <span>SETTINGS</span></a>
                                <ul>
                                    <li><a href="../settings/settings.php">Profile Setting</a></li>
                                    <li><a href="#">Media with titles</a></li>
                                    <li><a href="#">Media with description</a></li>
                                    <li><a href="#">Media library</a></li>
                                </ul>
                            </li>

                            <!-- /page kits -->

                        </ul>
                    </div>
                </div>
                <!-- /main navigation -->

            </div>
        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header">


                <div class="breadcrumb-line">
                    <ul class="breadcrumb">
                        <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

                        <li><a href="../dashboard.php"><i class="icon-home2 position-left"></i> Home</a></li>
                        <!--							<li class="active">Dashboard</li>-->
                    </ul>


                </div>
            </div>
            <!-- /page header -->
            <h3 align="center" style="color: green;font-family: 'Berlin Sans FB Demi'">
                <?php if(isset( $_SESSION['message'])){
                    echo  $_SESSION['message'];
                    unset( $_SESSION['message']);
                }?>
            </h3>
            <h3 align="center" style="color: red;font-family: 'Berlin Sans FB Demi'">
                <?php if(isset( $_SESSION['failed'])){
                    echo  $_SESSION['failed'];
                    unset( $_SESSION['failed']);
                }?>
            </h3>
            <!----Boot Streep----->
            <!-- Content area -->
            <div class="container">
                <a href="service.php" class="btn btn-default btn-xs" data-toggle="tooltip" title="Back To List !">Back</a>
                <h2>Edit Service</h2>
                <ul class="nav nav-tabs"></ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <form  action="update_service.php" method="POST" enctype="multipart/form-data" style="width: 500px;align-items: center">

                            <div class="form-group">
                                <label for="text">Edit Service Title :</label>
                                <input type="text" name="title" value="<?php echo $data['title'];?>" class="form-control" id="number" placeholder="Enter Hobbies Title">
                            </div>
                            <div class="form-group">
                                <label for="text">Edit Service Description :</label>
                                <textarea type="text" name="description"  class="form-control" id="text" ><?php echo $data['description']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="text">Edit Your Picture use brows button.. :</label>
                                <input type="file" name="image">
                            </div>
                            <input type="hidden"name="id"value="<?php echo $data['id']; ?>"/>

                            <input type="submit" name="Update" value="Update" class="btn btn-success"/>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!----Boot Streep----->

    </div>
    <!-- /content area -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>
