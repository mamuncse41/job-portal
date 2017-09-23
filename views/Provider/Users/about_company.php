
<?php
include_once("../../../vendor/autoload.php");
use App\Provider\User\User;
$obj = new User();
$data =$obj->setData($_GET)->company_info_show();
//print_r($data);
//die();
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
                    <table id="about-company">
                     
                        <tr>
                            <th ><?php echo $data['company_name'];?> <span class="company_type">Account Type: General</span> </th>
                          
                        </tr>
                        <tr>
                            <th><?php echo $data['street'];?> <span class="account_type">Online Job Posting: Active</span></th>
                        </tr>
                        <tr>
                            <th><?php echo $data['email'];?> <span class="email_type">Database Access: Inactive</span></th>
                        </tr>
                    </table>
                  
                </div>
                <!-- /page content -->

            </div>
            <!-- /page container -->

         <?php include("../inc/footer.php"); ?>

<?php
}else{
    header('location:login.php');
}

