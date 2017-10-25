
<?php
include_once("../../../vendor/autoload.php");
use App\Provider\jobPost\jobPost;
$obj = new jobPost();
$obj->setData($_GET);
$value =$obj->show_post();
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

                   
           <div class="box round first grid" style='width: 500px;align-items:center;'>
               <h2><a id="post" href="addPost.php" title="Edit Post">Add More || </a><a id="post2" href="managePost.php" title="Manage Post">Manage Post</a></h2>
            <div class="block">
                <table class="data display datatable" id="example" border="1">
               
                    <tr>
                        <th width="150px">ID</th>
                        <th><?php echo $value['id'];?></th>
                    </tr>
                    <tr>
                        <th>Job Catagory </th>
                        <th><?php echo $value['job_catagory'];?></th>
                    </tr>
                    <tr>
                        <th>Job Title</th>
                        <th><?php echo $value['job_title'];?></th>
                    </tr>
                    <tr>
                        <th> Vacancies</th>
                      <th><?php echo $value['vacancies'];?></th>
                    </tr>
                    <tr>
                        <th>Cv Receive</th>
                      <th><?php echo $value['cv_receive'];?></th>
                    </tr>
                       <tr>
                        <th>Application Deadline</th>
                        <th><?php echo $value['application_day'];?>/<?php echo $value['application_month'];?>/<?php echo $value['application_year'];?></th>
                    </tr>
                     <tr>
                        <th>Age Range</th>
                        <th><?php echo $value['id'];?></th>
                    </tr>
                     <tr>
                        <th>Gender</th>
                        <th>Gender: <?php echo $value['gender'];?></th>
                    </tr>
                     <tr>
                        <th>Age</th>
                        <th>Minimum Age: <?php echo $value['mini_age'];?> Maximum Age: <?php echo $value['max_age'];?></th>
                    </tr>
                     <tr>
                        <th>Job Type</th>
                        <th><?php echo $value['job_type'];?></th>
                    </tr>
                     <tr>
                        <th>Educational Qualification </th>
                        <th><?php echo $value['edu_qulification'];?> in <?php echo $value['subject_name'];?></th>
                    </tr>
                     <tr>
                        <th>Professional/Technical Qualification </th>
                        <th><?php echo $value['pro_qualification'];?></th>
                    </tr>
                     <tr>
                        <th>Job Level</th>
                        <th><?php echo $value['job_level'];?></th>
                    </tr>
                     <tr>
                        <th>Experience Area </th>
                        <th>Mini Experience: <?php echo $value['mini_experience'];?> || Max Experience: <?php echo $value['max_experience'];?></th>
                    </tr>
                     <tr>
                        <th>Additional Job Requirements </th>
                        <th><?php echo $value['additional_job'];?></th>
                    </tr>
                     <tr>
                        <th>Job Responsibility </th>
                        <th><?php echo $value['responsibility_job'];?></th>
                    </tr>
                     <tr>
                        <th>Job Facility </th>
                        <th><?php echo $value['facility_job'];?></th>
                    </tr>
                     <tr>
                        <th>Job Location</th>
                        <th><?php echo $value['job_location'];?></th>
                    </tr>
                     <tr>
                        <th>Salary</th>
                        <th><?php echo $value['Salary'];?></th>
                    </tr>
                    
                    
               
                </table>
            </div>
        </div>


        <!-- Footer -->
  <?php include("../inc/footer.php"); ?>

<?php
}else{
    header('location:login.php');
}

