
<?php
session_start();
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
            <script type="text/javascript" src="../../../assets/js/plugins/forms/selects/select2.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/forms/styling/uniform.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/ui/moment/moment.min.js"></script>
            <script type="text/javascript" src="../../../assets/js/plugins/pickers/daterangepicker.js"></script>

            <script type="text/javascript" src="../../../assets/js/core/app.js"></script>
            <script type="text/javascript" src="../../../assets/js/pages/dashboard.js"></script>
            <script type="text/javascript" src="../../../assets/js/pages/form_layouts.js"></script>
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
                    <!-- Content area -->
                        <div class="content">

                            <!-- Horizontal form options -->
                            <div class="row">
                                <div class="col-md-6">

                                    <!-- Basic layout-->
                                    <form action="postStore.php" method="POST" class="form-horizontal">
                                        <div class="panel panel-flat">
                                            <div class="panel-heading">
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
                                                <h5 class="panel-title"><a href="addPost.php">Add Job Post</a> || <a href="managePost.php">Manage Job</a></h5>
                                                <div class="heading-elements">
                                                    <ul class="icons-list">
                                                        <li><a data-action="collapse"></a></li>
                                                        <li><a data-action="reload"></a></li>
                                                        <li><a data-action="close"></a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="panel-body">
                                                     <div class="form-group">
                                                    <label class="col-lg-3 control-label">Job Category:</label>
                                                    <div class="col-lg-9">
                                                        <select class="select"  name="job_catagory" id="selectCatagory">
                                                                <optgroup>
                                                                    <option value="0"> Select Your Job Category</option>
                                                                    <option value="IT">IT</option>
                                                                    <option value="Garments">Garments</option>
                                                                    <option value="Bank">Bank</option>
                                                                </optgroup>

                                                            </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-lg-3 control-label">Job Title:</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" placeholder="Enter Job Title ..." name="job_title">
                                                    </div>
                                                </div>
                                                   <div class="form-group">
                                                    <label class="col-lg-3 control-label">Vacancies Required:</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" placeholder="Enter Vacancies Required ..."  name="vacancies">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Want to receive CV:</label>
                                                        <div class="col-lg-9">
                                                            <select class="select" name="cv_receive" id="selectCatagory">
                                                                <optgroup>
                                                                    <option value="0">Select receive CV</option>
                                                                    <option value="Online">Online</option>
                                                                    <option value="Offline">Offline</option>
                                                                    <option value="Both">Both</option>
                                                                </optgroup>

                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Application Deadline:</label>
                                                        <div class="col-lg-9">
                                                             <?php
                                                            echo '<select name="application_day" id="select">'.PHP_EOL;
                                                                    echo'<option>'.Day.'</option>';
                                                                    for ($day = 1; $day<= 31; $day++) {
                                                                    echo '<option value="'.$day.'">'.$day.'</option>'.PHP_EOL;
                                                                    }
                                                                    echo '</select>'.PHP_EOL;
                                                                
                                                                echo '<select name="application_month" id="select">'.PHP_EOL;
                                                                    echo'<option>'.Month.'</option>';
                                                                    for ($m = 1; $m <= 12; $m++) {
                                                                    echo '<option value="'.$m .'">'.date('M', mktime(0, 0, 0, $m)).'</option>'.PHP_EOL;
                                                                    }
                                                                    echo '</select>'.PHP_EOL;
                                                                // build Years menu
                                                                $past_year=1985;
                                                                $current=date('Y');
                                                                echo'<select id="select" name="application_year">'.PHP_EOL;
                                                                    echo'<option>'.Year.'</option>';
                                                                    for($i=$current;$i>=$past_year;$i--){
                                                                    echo'<option value="'.$i.'">'.$i.'</option>'.PHP_EOL;
                                                                    }
                                                                    echo '</select>'.PHP_EOL;
                                                                ?>
                                                        </div>
                                                    </div>
                                                      <div class="form-group">
                                                        <label class="col-lg-3 control-label">Age Range:</label>
                                                        <div class="col-lg-9">
                                                                <?php
                                                                //mini Age
                                                                echo '<select name="mini_age" id="selectAge">' . PHP_EOL;
                                                                echo'<option>' . Minimum . '</option>';
                                                                for ($mini_age = 18; $mini_age <= 60; $mini_age++) {
                                                                    echo '<option value="' . $mini_age . '">' . $mini_age . '</option>' . PHP_EOL;
                                                                }
                                                                echo '</select>' . PHP_EOL;
                                                                //max Age
                                                                echo '<select name="max_age" id="selectAge">' . PHP_EOL;
                                                                echo'<option>' . Maximum . '</option>';
                                                                for ($max_age = 19; $max_age <= 60; $max_age++) {
                                                                    echo '<option value="' . $max_age . '">' . $max_age . '</option>' . PHP_EOL;
                                                                }
                                                                echo '</select>' . PHP_EOL;
                                                                ?>
                                                            </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Gender:</label>
                                                        <div class="col-lg-9">
                                                            <label class="radio-inline">
                                                                <input type="radio" class="styled" name="gender" checked="checked">
                                                                Male
                                                            </label>

                                                            <label class="radio-inline">
                                                                <input type="radio" class="styled" name="gender">
                                                                Female
                                                            </label>
                                                              <label class="radio-inline">
                                                                <input type="radio" class="styled" name="gender">
                                                                Both
                                                            </label>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Job Type:</label>
                                                        <div class="col-lg-9">
                                                            <select class="select" name="job_type" id="selectAge">
                                                                <optgroup >

                                                                    <option value="Full Time">Full Time</option>
                                                                    <option value="Part Time">Part Time</option>
                                                                    <option value="Intership">Intership</option>

                                                                </optgroup>

                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Educational Qualification:</label>
                                                        <div class="col-lg-9">
                                                            <select class="select" name="edu_qulification" id="selectAge">
                                                                <optgroup >

                                                                    <option >Select Educational Qualification</option>
                                                                    <option value="Bsc">Bsc</option>
                                                                    <option value="A level">A level</option>
                                                                    <option value="BBA">BBA</option>
                                                                    <option value="BA(Hons)">BA(Hons)</option>

                                                                </optgroup>

                                                            </select>
                                                             in (subject name) 
                                                             <input type="text" placeholder="Enter Subject Name" name="subject_name" class="form-control" >
                                                        </div>
                                                    </div>
                                                  <div class="form-group">
                                                    <label class="col-lg-3 control-label">Professional Qualification:</label>
                                                    <div class="col-lg-9">
                                                        <textarea rows="5" cols="5" class="form-control" name="pro_qualification" placeholder="Enter your Professional/Technical Qualification"></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label">Job Level:</label>
                                                        <div class="col-lg-9">
                                                            <select class="select" name="job_level" id="selectCatagory">
                                                                <optgroup>
                                                                    <option>Select Job Level</option>
                                                                    <option value="None">None</option>
                                                                    <option value="Fresher">Fresher</option>
                                                                    <option value="Executive Level">Executive Level</option>
                                                                    <option value="Senior Management Level">Senior Management Level</option>
                                                                    <option value="CEO/COO/CTO Level">CEO/COO/CTO Level</option>
                                                                </optgroup>

                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                        <label class="col-lg-3 control-label"> Experience:</label>
                                                        <div class="col-lg-9">
                                                            <?php
                                                            //mini Age
                                                            echo '<select name="mini_experience" id="selectAge">' . PHP_EOL;
                                                            echo'<option>' . Mini . '</option>';
                                                            for ($mini_ex = 1; $mini_ex <= 25; $mini_ex++) {
                                                                echo '<option value="' . $mini_ex . '">' . $mini_ex . '</option>' . PHP_EOL;
                                                            }
                                                            echo '</select>' . PHP_EOL;
                                                            //max Age
                                                            echo '<select name="max_experience" id="selectAge">' . PHP_EOL;
                                                            echo'<option>' . Max . '</option>';
                                                            for ($max_ex = 1; $max_ex <= 30; $max_ex++) {
                                                                echo '<option value="' . $max_ex . '">' . $max_ex . '</option>' . PHP_EOL;
                                                            }
                                                            echo '</select>' . PHP_EOL;
                                                            ?> (ex.2-3 years)
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <label class="col-lg-3 control-label">Additional Job Requirements:</label>
                                                    <div class="col-lg-9">
                                                        <textarea rows="5" cols="5" class="form-control" name="additional_job" placeholder="Enter your Job Requirements"></textarea>
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                    <label class="col-lg-3 control-label">Job Responsibility:</label>
                                                    <div class="col-lg-9">
                                                        <textarea rows="5" cols="5" class="form-control" name="responsibility_job" placeholder="Enter your Job Responsibility"></textarea>
                                                    </div>
                                                </div>
                                                    <div class="form-group">
                                                    <label class="col-lg-3 control-label">Job Facility:</label>
                                                    <div class="col-lg-9">
                                                        <textarea rows="5" cols="5" class="form-control" name="facility_job" placeholder="Enter your Job Facility"></textarea>
                                                    </div>
                                                </div>
                                                 <div class="form-group">
                                                    <label class="col-lg-3 control-label">Job Location:</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" placeholder="Enter Job Location ..." name="job_location">
                                                    </div>
                                                </div>
                                                  <div class="form-group">
                                                    <label class="col-lg-3 control-label">Salary :</label>
                                                    <div class="col-lg-9">
                                                        <input type="text" class="form-control" id="input" placeholder="Enter Job Location ..." name="Salary">
                                                    </div>
                                                </div>

                                                <div class="text-right">
                                                     <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_info']['unique_id'];?>">
                                                    <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /basic layout -->

                                </div>


                            </div>
                                <!-- /vertical form options -->


                                <?php include("../inc/footer.php"); ?>

                                <?php
                            } else {
                                header('location:login.php');
                            }