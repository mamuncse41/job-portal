<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\service\service;
$service_obj=new service();
$service_obj->setService($_GET);
$data=$service_obj->service();
if(!empty($_SESSION['user_info'])){
?>
<!DOCTYPE html>
<html lang="en">
<title>Services</title>
<?php include_once("header.php");?>
<body>
<!-- Main navbar -->
<div class="navbar navbar-inverse ">
    <!--    <div class="navbar navbar-inverse navbar-fixed-top ">-->

    <div class="navbar-header ">
      <a class="navbar-brand" href="../dashboard.php">Cvbank</a>
            <a class="navbar-brand" href="#">JOBS</a>
            <a class="navbar-brand" href="#">TRAINING</a>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">


            <li class="dropdown">

            </li>
        </ul>

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
            </li>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="<?php echo "../settings/images/".$_SESSION['user_setting']['featured_img']?>"class="img-circle img-sm" alt="">
                    <span><?php echo  $_SESSION['user_info']['username'];?></span>
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
                                        <a href="../settings/settings.php?id=<?php echo  $_SESSION['user_info']['unique_id'];?>"><i class="icon-cog3  spinner"></i></a>

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
                                    <li><a href="../about/facts.php">Fatcs</a></li>
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
                                <a href="#"><i class="icon-insert-template"></i> <span>SERVICES</span></a>
                                <ul>
                                    <li><a href="service.php">MY Services</a></li>
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
                                    <li><a href="../skill/skill.php">Add Skill</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-task"></i> <span>PUBLICATION</span></a>
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
                                    <li><a href="../portfolio/portfollio.php">Media grid</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-cog3"></i> <span>SETTINGS</span></a>
                                <ul>
                                    <li><a href="../settings/settings.php">Profile Setting</a></li>
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
                <h2>Service.</h2>
                <ul class="nav nav-tabs"></ul>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home"> View Service</a></li>
                    <li><a data-toggle="tab" href="#menu1"> Service Add </a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="container">
                            <p>Service Information..</p>
                            <div class="table table-bordered" >
                                <table class="table" style="border: 1px solid #eee8d5"  >
                                    <thead>
                                    <tr class="info">
                                        <th>Title</th>
                                        <th>Full Name</th>
                                        <th>Description</th>
                                        <th>Adress</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $serial=1;
                                    foreach ($data as $key=>$value){
                                        ?>
                                        <tr>

                                            <td ><?php echo $serial++; ?></td>
                                            <td ><?php echo $value['title']; ?></td>
                                            <td ><?php echo $value['description']; ?></td>
                                            <td ><img src="<?php echo "service_img/".$value['img']; ?>" width="60px" height="80px"/></td>
                                            <td width="160px">
                                                <a href="service_edit.php?id=<?php echo $value['id']; ?>"><input type="submit" value="Edit" class="btn btn-info"></a>
                                                <a href="delete_service.php?id=<?php echo $value['id'];?>"> <input type="submit" value="delete"  class="btn btn-danger"/></a>
                                            </td>

                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <form  action="service_store.php" method="post" enctype="multipart/form-data" style="width: 500px;align-items: center">

                            <div class="form-group">
                                <label for="text">Enter Service Title :</label>
                                <input type="text" name="title" class="form-control" id="number" placeholder="Enter Service Title">
                            </div>
                            <div class="form-group">
                                <label for="text">Enter Service Description :</label>
                                <textarea type="text" name="description" class="form-control" id="number" placeholder="Enter Service Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="text">Insert Image Use browes button..</label>
                                <input type="file" name="image">
                            </div>
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_info']['unique_id'];?>">

                            <button type="submit" class="btn btn-success">Submit</button>

                        </form>

                    </div>
                    </form>
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
    <?php
}else{
    header('location:../index.php');
}