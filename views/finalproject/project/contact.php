<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cvbank:-Contact</title>

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
        <script href="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="../../../assets/js/core/app.js"></script>
        <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/images/apple-icon-180x180.png">
    </head>

    <body>
        <!-- Page container -->
        <div class="page-container">

            <div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">
                    <!-- Content area -->
                    <div class="content">
                            <div class="icon-bar">
                    <a class="active" href="http://localhost/cvbank/index.php"><i class="fa fa-home">Cvbank</i></a> 
                    <a href="http://localhost/cvbank/index.php"><i class="fa fa-search">Home</i></a> 
                    <a href="http://localhost/cvbank/views/Provider/Users/login.php"><i class="fa fa-envelope">Job Provider</i></a> 
                    <a href="http://localhost/cvbank/views/finalproject/project/login.php"><i class="fa fa-globe">Job Seeker</i></a>
                    <a href="http://localhost/cvbank/views/finalproject/project/about_us.php"><i class="fa fa-trash">About Us</i></a> 
                    <a href="http://localhost/cvbank/views/finalproject/project/contact.php"><i class="fa fa-trash">Contact</i></a> 
                    </div>
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h3 class="panel-title"></h3>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li><a data-action="collapse"></a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="container">  
                                <?php
                                echo '<h3 style="color:green;" align="center">';
                                if (isset($_SESSION['message'])) {
                                    echo $_SESSION['message'];
                                    unset($_SESSION['message']);
                                }
                                echo'</h3>';
                                ?>
                                <?php
                                echo '<h3 style="color:red;" align="center">';
                                if (isset($_SESSION['failed'])) {
                                    echo $_SESSION['failed'];
                                    unset($_SESSION['failed']);
                                }
                                echo'</h3>';
                                ?>
                                <form action="contactStore.php" method="post">
                                    <h3>Quick Contact</h3>
                                    <fieldset>
                                        <span style="color:green;font-size: 15px;"> Dial </span><span style="color:red;font-size: 20px;">+8801771159966</span><span style="color:green;font-size: 15px;"> from any number.</span>
                                    </fieldset>
                                    <h2 style="color:blue">OR</h2>
                                    <h4>Contact us today, and get reply with in 24 hours!</h4>
                                    <fieldset>
                                        <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
                                    </fieldset>
                                    <fieldset>
                                        <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
                                    </fieldset>
                                    <fieldset>
                                        <input placeholder="Your Phone Number" name="phone" type="tel" tabindex="3" required>
                                    </fieldset>
                                    <fieldset>
                                        <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
                                    </fieldset>
                                    <fieldset>
                                        <button  type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="footer text-muted">
                                &copy; 2017. <a href="#">Code of Ethics</a>
                            </div>
                        </div>
                        <!-- /search field -->

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->

            </div>
            <!-- /page content -->

        </div>


