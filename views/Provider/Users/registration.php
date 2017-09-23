<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code of Ethics.Registration</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
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
    <script type="text/javascript" src="../../../assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="../../../assets/js/core/app.js"></script>
    <script type="text/javascript" src="../../../assets/js/pages/login.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">
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
                <form action="store.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="panel registration-form">
                                <div class="panel-body">
                                    <div class="text-center">
                                        <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
                                        <h5 class="content-group-lg">Create account <small class="display-block">All fields are required</small></h5>
                                    </div>
                                    <div class="content-group-lg">
                                            <span class="display-block" style="text-align:center;color:blue;font-size:15px">Job Provider Login Information</span>
                                        <hr/>
                                    </div>

                                    <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" name="full_name" placeholder="enter your Full Name">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-check text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                 <label>User Name</label>
                                                 <input type="text" class="form-control" name="user_name" placeholder="Enter Your User Name">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-check text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                  <label>Password</label>
                                                  <input type="password" class="form-control" name="password" placeholder="Create password">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                  <label>Re-Password</label>
                                                  <input type="password" class="form-control" name="re_password" placeholder="Repeat password">
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="content-group-lg">
                                            <span class="display-block" style="text-align:center;color:blue;font-size:15px">Company Details</span>
                                        <hr/>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" name="company_name" placeholder="Company Name">
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Street Address</label>
                                                <input type="text" class="form-control" name="street" placeholder="Enter Your Company Street Address">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                               <label>Country</label>
                                               <select class="form-control" name="country">
                                                    <option>Select Your Country</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                </select>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>District</label>
                                                <select class="form-control" name="district">
                                                    <option>Select Your District</option>
                                                    <option value="dhaka">dhaka</option>
                                                    <option value="kalkata">kalkata</option>
                                                    <option value="Islamabad">Islamabad</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                     <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                   <label>E-mail</label>
                                                   <input type="email" class="form-control" name="email" placeholder="Enter Your email">
                                                <div class="form-control-feedback">
                                                    <i class="icon-mention text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Phone</label>
                                                <input type="number" class="form-control" name="phone" placeholder="Enter Your Phone number">
                                                </div>
                                            </div>
                                        </div>
                                           <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                   <label>Contact Person</label>
                                                   <input type="text" class="form-control" name="contact_person" placeholder="Contact Person">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Designation</label>
                                                <input type="text" class="form-control" name="designation" placeholder="Enter Your Designation">
                                                </div>
                                            </div>
                                        </div>
                                           <div class="row">
                                          <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                   <label>Website Address</label>
                                                   <input type="url" class="form-control" name="website" placeholder="Your Web Site starts with http://">
                                             
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <label>Company Business</label>
                                                <input type="text" class="form-control" name="company_business" placeholder="Enter Your Company Business">
                                                </div>
                                            </div>
                                        </div>

                                    
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                               Read Pricing Policy & Terms and Condition 
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" class="styled">
                                                Accept <a href="#">terms of service</a>
                                            </label>
                                        </div>
                                    </div>
                           
                                    <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i
                                    class="icon-circle-right2 position-right"></i></button><br/>

                                    <div class="content-divider text-muted form-group"></div>
                                    <a href="login.php" class="btn btn-default btn-block content-group">Sign
                            In</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /registration form -->

                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2017. <a href="#">Code of Ethics</a>
                </div>
                <!-- /footer -->

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


