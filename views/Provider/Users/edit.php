
<?php
include_once("../../../vendor/autoload.php");
use App\Provider\User\User;
$obj = new User();
$value =$obj->setData($_GET)->company_info_show();
//
//print_r($value);
//die();

if(!empty($_SESSION['user_info'])){ ?>
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

                <!-- Advanced login -->
                <form action="update.php" method="POST" name="selectText">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="panel registration-form">
                                <div class="panel-body">
                                    <div class="content-group-lg">
                                            <span class="display-block" style="text-align:center;color:blue;font-size:15px">Edit Company Information</span>
                                        <hr/>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" name="company_name" value="<?php echo $value['company_name'];?>">
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Street Address</label>
                                                <input type="text" class="form-control" name="street" value="<?php echo $value['street'];?>">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                               <label>Country</label>
                                               <select class="form-control" name="country" value="<?php echo $value['country'];?>">
                                                    <option>Select Your Country</option>
                                                    <option>Bangladesh</option>
                                                    <option>India</option>
                                                    <option>Pakistan</option>
                                                </select>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>District</label>
                                                <select class="form-control" name="district" value="<?php echo $value['district'];?>">
                                                    <option>Select Your District</option>
                                                    <option>dhaka</option>
                                                    <option>kalkata</option>
                                                    <option>Islamabad</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                     <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                   <label>E-mail</label>
                                                   <input type="email" class="form-control" name="email"  value="<?php echo $value['email'];?>">
                                                <div class="form-control-feedback">
                                                    <i class="icon-mention text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Phone</label>
                                                <input type="number" class="form-control" name="phone"  value="<?php echo $value['phone'];?>">
                                                </div>
                                            </div>
                                        </div>
                                           <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                   <label>Contact Person</label>
                                                   <input type="text" class="form-control" name="contact_person"  value="<?php echo $value['contact_person'];?>">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" name="designation"  value="<?php echo $value['designation'];?>">
                                                </div>
                                            </div>
                                        </div>
                                           <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                   <label>Website Address</label>
                                                   <input type="text" class="form-control" name="website" value="<?php echo $value['website'];?>">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Company Business</label>
                                                <input type="text" class="form-control" name="company_business" value="<?php echo $value['company_business'];?>">
                                                <input type="hidden" name="id" value="<?php echo $value['id'];?>"/>
                                                </div>
                                            </div>
                                        </div>

                                    
                                    </div>
                                   
                                    <button type="submit" class="btn btn-success btn-block btn-lg">Update <i
                                    class="icon-circle-right2 position-right"></i></button><br/>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                </div>
                <!-- /page content -->

            </div>
            <!-- /page container -->
            <script>
                document.forms['selectText'].elements['country'].value="<?php echo $value['country'];?>";
                document.forms['selectText'].elements['district'].value="<?php echo $value['district'];?>";
            </script>

       

<?php
}else{
    header('location:login.php');
}
