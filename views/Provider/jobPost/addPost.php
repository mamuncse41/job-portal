
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
                   
            <div class="block"  style="margin-left:100px">
               
        
                <form action="postStore.php" method="POST">
                <table class="form" id="table_post">
                  
                    <tr>
                        <td>
                            <label>Job Category:</label><br/>
                        </td>
                        <td>
                            <select name="job_catagory" id="selectCatagory">
                                <option value="0"> Select Your Job Category</option>
                                <option value="IT">IT</option>
                                <option value="Garments">Garments</option>
                                <option value="Bank">Bank</option>
                  
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Job Title:</label><br/>
                        </td>
                        <td>
                            <input type="text" placeholder="Enter Job Title ..." id="input" name="job_title">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Vacancies Required:</label><br/>
                        </td>
                        <td>
                            <input type="text" placeholder="Enter Vacancies Required ..." id="input"  name="vacancies">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label> Want to receive CV:</label>
                        </td>
                        <td>
                            <select name="cv_receive" id="selectCatagory">
                                <option value="Online">Online</option>
                                <option value="Offline">Offline</option>
                                <option value="Both">Both</option>
                            </select>
                        </td>
                    </tr><br/>
                    <tr>
                        <td>
                            <label>Application Deadline: </label>
                        </td>
                        <td>
                            <?php
                             // build days menu
                                echo '<select name="application_day" id="select">'.PHP_EOL;
                                echo'<option>'.Day.'</option>';
                                for ($day = 1; $day<= 31; $day++) {
                                    echo '<option value="'.$day.'">'.$day.'</option>'.PHP_EOL;
                                }
                                echo '</select>' . PHP_EOL;
                                // build months menu
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
                        </td>
                    </tr><br/>
                    <tr>
                    <tr>
                        <td>
                            <label> Age Range:</label>
                        </td>
                        <td>
                                <?php
                                //mini Age
                            echo '<select name="mini_age" id="selectAge">' . PHP_EOL;
                                    echo'<option>' .Minimum. '</option>';
                                    for ($mini_age = 18; $mini_age <= 60; $mini_age++) {
                                        echo '<option value="' . $mini_age . '">' . $mini_age . '</option>' . PHP_EOL;
                                    }
                                    echo '</select>' . PHP_EOL;
                                    //max Age
                                     echo '<select name="max_age" id="selectAge">' . PHP_EOL;
                                    echo'<option>'.Maximum.'</option>';
                                    for ($max_age = 19; $max_age <= 60; $max_age++) {
                                        echo '<option value="'.$max_age .'">'.$max_age .'</option>' . PHP_EOL;
                                    }
                                    echo '</select>' . PHP_EOL;
                                    ?>
                           </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Gender:</label>
                        </td>
                        <td>
                            <select name="gender" id="selectAge">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Both">Both</option>
                            </select>
                        </td>
                    </tr>
                     <tr>
                        <td>
                            <label>Job Type:</label>
                        </td>
                        <td>
                            <select name="job_type" id="selectAge">
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Intership">Intership</option>
                            </select>
                        </td>
                    </tr>
                           <tr>
                        <td>
                            <label>Educational Qualification :</label>
                        </td>
                        <td>
                            <select name="edu_qulification" id="selectAge">
                                 <option >Select</option>
                                <option value="Bsc">Bsc</option>
                                <option value="A level">A level</option>
                                <option value="BBA">BBA</option>
                                 <option value="BA(Hons)">BA(Hons)</option>
                            </select>
                            in (subject name) <input type="text" placeholder="Enter Subject Name" name="subject_name" id="inputMin" >
                            
                        </td>
                 
                    </tr>
                         <tr>
                        <td>
                            <label>Professional/Technical Qualification:</label><br/>
                        </td>
                        <td>
                            <textarea cols="40" name="pro_qualification"></textarea>
                        </td>
                    </tr>
                      <tr>
                        <td>
                            <label>Job Level:</label>
                        </td>
                        <td>
                            <select name="job_level" id="selectCatagory">
                                     <option>Select Job Level</option>
                                    <option value="None">None</option>
                                    <option value="Fresher">Fresher</option>
                                    <option value="Executive Level">Executive Level</option>
                                    <option value="Senior Management Level">Senior Management Level</option>
                                    <option value="CEO/COO/CTO Level">CEO/COO/CTO Level</option>
                            </select>
                        </td>
                    </tr>
                       <tr>
                        <td>
                            <label> Experience :</label>
                        </td>
                        <td>
                                <?php
                                //mini Age
                            echo '<select name="mini_experience" id="selectAge">'.PHP_EOL;
                                    echo'<option>'.Mini.'</option>';
                                    for ($mini_ex = 1; $mini_ex <=25; $mini_ex++) {
                                        echo '<option value="'.$mini_ex .'">'.$mini_ex .'</option>' . PHP_EOL;
                                    }
                                    echo '</select>'.PHP_EOL;
                                    //max Age
                                     echo '<select name="max_experience" id="selectAge">'.PHP_EOL;
                                    echo'<option>'.Max.'</option>';
                                    for ($max_ex = 1; $max_ex <= 30; $max_ex++) {
                                        echo '<option value="'.$max_ex .'">'.$max_ex .'</option>'.PHP_EOL;
                                    }
                                    echo '</select>' . PHP_EOL;
                                    ?> (ex.2-3 years)
                      
                           </td>
                    </tr>
                      <tr>
                        <td>
                            <label>Additional Job Requirements:</label><br/>
                        </td>
                        <td>
                            <textarea cols="40" name="additional_job"></textarea>
                        </td>
                    </tr>
                      <tr>
                        <td>
                            <label>Job Responsibility:</label><br/>
                        </td>
                        <td>
                            <textarea cols="40" name="responsibility_job"></textarea>
                        </td>
                    </tr>
                      <tr>
                        <td>
                            <label>Job Facility:</label><br/>
                        </td>
                        <td>
                            <textarea cols="40" name="facility_job"></textarea>
                        </td>
                    </tr>
                        <tr>
                        <td>
                            <label>Job Location:</label>
                        </td>
                        <td>
                            <select name="job_location" id="selectAge">
                                <option value="National">National</option>
                                <option value="International">International</option>
                            </select>
                        </td>
                    </tr>
                       <tr>
                        <td>
                            <label>Salary :</label><br/>
                        </td>
                        <td>
                            <input type="text" id="input"  name="Salary">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_info']['unique_id'];?>">
                            <input type="submit" Value="Save"/><input type="reset" value="Clean">
                        </td>
                    </tr>
                </table>
            </form>
                 
        </div>
               
                </div>
                <!-- /page content -->

            </div>
            <!-- /page container -->

    <?php include("../inc/footer.php"); ?>

<?php
}else{
    header('location:login.php');
}