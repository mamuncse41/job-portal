
<?php
include_once("../../../vendor/autoload.php");
use App\Provider\jobPost\jobPost;
$obj = new jobPost();
$obj->setData($_GET);
$value =$obj->show();
if(!empty($_SESSION['user_info'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Cvbank:-Dashboard</title>

            <!-- Global stylesheets -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
            <link href="../../../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
            <link href="../../../assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="../../../assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
            <link href="../../../assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
            <link href="../../../assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="../style.css" type="text/css">
            <!-- /global stylesheets -->

            <!-- Core JS files -->
            <script type="text/javascript" src="../../../assets/js/plugins/loaders/pace.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/core/libraries/jquery.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/core/libraries/bootstrap.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/loaders/blockui.min.js"></script>
            <!-- /core JS files -->

            <!-- Theme JS files -->
            <script type="text/javascript" src="../../../assets/js/plugins/visualization/d3/d3.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/forms/styling/switchery.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/forms/styling/uniform.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/ui/moment/moment.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/pickers/daterangepicker.js"></script>

            <script type="text/javascript" src="../../../assets/js/core/app.js"></script>
            <script type="text/javascript" src="../../../assets/js/pages/dashboard.js"></script>
            <!-- /theme JS files -->

        </head>

        <body>

            <!-- Main navbar -->
          <?php include("../inc/header.php"); ?>
            <!-- /main navbar -->


            <!-- Page container -->
            <div class="page-container">

                <!-- Page content -->
                <div class="page-content">

                    <!-- Main sidebar -->
                     <?php include("../inc/sideBar.php"); ?>
                    <!-- /main sidebar -->


                    <!-- Main content -->
                        <?php include("../inc/mainContent.php"); ?>
                    <!-- /main content -->
 <h2>
            <?php
            echo '<h2 style="color:#006400; font-size:20px; text-align:center;">';
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            echo '</h2>';
            echo '<h2 style="color:red; font-size:20px; text-align:center;">';
            if (isset($_SESSION['fail'])) {
                echo $_SESSION['fail'];
                unset($_SESSION['fail']);
            }
            echo '<h2>';
            ?>
        </h2>
                   
           <div class="box round first grid" style='width: 500px;align-items:center;'>
               <h2></a><a id="post" href="addPost.php">Add More</a> </h2>
            <div class="block">
                <table class="data display datatable" id="example" border="1">
                    <thead>
                    <tr>
                        <th width="5">ID</th>
                        <th width="20">Job Catagory </th>
                        <th width="30">Job Title</th>
                        <th width="5"> Vacancies</th>
                        <th width="10">Application Deadline</th>
                         <th width="200">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $i=1;
                    foreach ($value as $data){ ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['job_catagory'];?></td>
                            <td><?php echo $data['job_title'];?></td>
                            <td><?php echo $data['vacancies'];?></td>
                            <td> <?php echo $data['application_day'];?>/<?php echo $data['application_month'];?>/<?php echo $data['application_year'];?>
                            <td>
                               <a href="post_view.php?id=<?php echo $data['id'];?>"><input type="submit" value="View" class="btn btn-success"></a>
                               <a href="edit_post.php?id=<?php echo $data['id'];?>"><input type="submit" value="Edit" class="btn btn-info"></a>
                             <a onclick="return confirm('Are you sure to Delete!!')"; href="delete.php?id=<?php echo $data['id'];?>"> <input type="submit" value="Delete"  class="btn btn-danger"/></></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- Footer -->
  <?php include("../inc/footer.php"); ?>

<?php
}else{
    header('location:login.php');
}