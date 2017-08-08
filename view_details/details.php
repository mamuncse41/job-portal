<?php
include_once ("../vendor/autoload.php");
use App\finalproject\details\details;
$details_obj=new details();
$details_obj->setData($_GET);
$data1=$details_obj->profile_setting();
$user_log=$details_obj->user_log();
$about=$details_obj->about();
$hobbies=$details_obj->hobbies();
$facts=$details_obj->facts();
$education=$details_obj->education();
$experience=$details_obj->experience();
$awards=$details_obj->awards();
$publication=$details_obj->publication();
$services=$details_obj->services();
$teaching=$details_obj->teaching();
$skills=$details_obj->skills();
$portfolios=$details_obj->portfolios();

//echo "<pre>";
//print_r($portfolios);
//die();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Code | Breakers</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- CSS | STYLE -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/linecons.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/colors/green.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- CSS | Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,400,300,500,600' rel='stylesheet' type='text/css'>

    <noscript>
        <style>
        @media screen and (max-width: 755px) {
            .hs-content-scroller {
                overflow: visible;
            }
        }
        </style>
    </noscript>
</head>

<body>
    <!-- Page preloader -->
    <div id="page-loader">
        <canvas id="demo-canvas"></canvas>
    </div>
    <!-- container -->
    <div id="hs-container" class="hs-container">

        <!-- Sidebar-->
        <div class="aside1">
            <a class="contact-button"><i class="fa fa-paper-plane"></i></a>
            <a class="download-button"><i class="fa fa-cloud-download"></i></a>
            <div class="aside-content"><span class="part1">Code</span><span class="part2">Breakers</span>
            </div>
        </div>
        <aside class="hs-menu" id="hs-menu">
            <!-- <canvas id="demo-canvas"></canvas> -->

            <!-- Profil Image-->
            <div class="hs-headline">
                <a id="my-link" href="#my-panel"><i class="fa fa-bars"></i></a>
                <a href="#" class="download"><i class="fa fa-cloud-download"></i></a>
                <div class="img-wrap">
                    <img src="<?php echo "../views/finalproject/project/settings/images/".$_SESSION['user_setting']['featured_img'];?>" alt="" width="150" height="150" />
                </div>
                <div class="profile_info">
                    <h1><?php echo $data1['fullname'];?></h1>
                    <h4><?php echo $data1['title'];?></h4>
                    <h6><span class="fa fa-location-arrow"></span>&nbsp;&nbsp;</h6>
                </div>
                <div style="clear:both"></div>
            </div>
            <div class="separator-aside"></div>
            <!-- End Profil Image-->

            <!-- menu -->
            <nav>
                <a href="#section1"><span class="menu_name">ABOUT</span><span class="fa fa-home"></span> </a>
                <a href="#section2"><span class="menu_name">RESUME</span><span class="fa fa-newspaper-o"></span> </a>
                <a href="#section3"><span class="menu_name">PUBLICATIONS</span><span class="fa fa-pencil"></span> </a>
                <a href="#section4"><span class="menu_name">SERVICES</span><span class="fa fa-flask"></span> </a>
                <a href="#section5"><span class="menu_name">TEACHING</span><span class="fa fa-book"></span> </a>
                <a href="#section6"><span class="menu_name">SKILLS</span><span class="fa fa-diamond"></span> </a>
                <a href="#section7"><span class="menu_name">WORKS</span><span class="fa fa-archive"></span> </a>
                <a href="#section8"><span class="menu_name">CONTACT</span><span class="fa fa-paper-plane"></span> </a>
            </nav>
            <!-- end menu-->
            <!-- social icons -->
            <div class="aside-footer">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa fa-github"></i></a>
            </div>
            <!-- end social icons -->
        </aside>
        <!-- End sidebar -->

        <!-- Go To Top Button -->
        <a href="#hs-menu" class="hs-totop-link"><i class="fa fa-chevron-up"></i></a>
        <!-- End Go To Top Button -->

        <!-- hs-content-scroller -->
        <div class="hs-content-scroller">
            <!-- Header -->
            <div id="header_container">
                <div id="header">
                    <div><a class="home"><i class="fa fa-home"></i></a>
                    </div>
                    <div><a href="" class="previous-page arrow"><i class="fa fa-angle-left"></i></a>
                    </div>
                    <div><a href="" class="next-page arrow"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- News scroll -->
                    <div class="news-scroll">
                        <span><i class="fa fa-line-chart"></i>RECENT ACTIVITY : </span>
                        <ul id="marquee" class="marquee">
                            <li>
                                <?php echo $data1['description'];?>
                            </li>

                        </ul>
                    </div>
                    <!-- End News scroll -->
                </div>
            </div>
            <!-- End Header -->

            <!-- hs-content-wrapper -->
            <div class="hs-content-wrapper">
                <!-- About section -->
                <article class="hs-content about-section" id="section1">
                    <span class="sec-icon fa fa-home"></span>
                    <div class="hs-inner">
                        <span class="before-title">.01</span>
                        <h2>ABOUT</h2>
                        <span class="content-title">PERSONAL DETAILS</span>
                        <div class="aboutInfo-contanier">
                            <div class="about-card">
                                <div class="face2 card-face">
                                    <div id="cd-google-map">
                                        <div id="google-container"></div>
                                        <div id="cd-zoom-in"></div>
                                        <div id="cd-zoom-out"></div>
                                        <address>8690 Paul Street, San fransico</address>
                                        <div class="back-cover" data-card-back="data-card-back"><i class="fa fa-long-arrow-left"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="face1 card-face">
                                    <div class="about-cover card-face">
                                        <a class="map-location" data-card-front="data-card-front"><img src="images/map-icon.png" alt="">
                                        </a>
                                        <div class="about-details">
                                            <div><span class="fa fa-inbox"></span><span class="detail"><?php echo $user_log['email'];?></span>
                                            </div>
                                            <div><span class="fa fa-phone"></span><span class="detail"><?php echo $about['phone'];?></span>
                                            </div>
                                        </div>

                                        <div class="cover-content-wrapper">
                                            <span class="about-description">Hello. I am a<span class="rw-words">
                                                <span><strong>Designer</strong></span>
                                            <span><strong>Services</strong></span>
                                            <span><strong>Programmer</strong></span>
                                            <span><strong>Dreamer</strong></span>
                                            <span><strong>Leader</strong></span>
                                            </span>
                                            <p><?php echo $data1['description'];?></p>
                                            </span>
                                            <span class="status">
                                            <span class="fa fa-circle"></span>
                                            <span class="text">Available as <strong>freelance</strong></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="more-details">
                                <div class="tabbable tabs-vertical tabs-left">
                                    <ul id="myTab" class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#bio" data-toggle="tab">Bio</a>
                                        </li>
                                        <li>
                                            <a href="#hobbies" data-toggle="tab">Hobbies</a>
                                        </li>
                                        <li>
                                            <a href="#facts" data-toggle="tab">Facts</a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">

                                        <div class="tab-pane fade in active" id="bio">
                                            <h3>BIO</h3>
                                            <h4>ABOUT ME</h4>
                                            <p><?php echo $about['bio'];?></p>

                                        </div>
                                        <div class="tab-pane fade" id="hobbies">
                                            <h3>HOBBIES</h3>
                                            <h4>INTERESTS</h4>
                                            <div class="hobbie-wrapper row">

                                                <div class="hobbie-img col-md-3"> <i class=""></i>
                                                </div>
                                                <div class="hobbie-description col-md-9">

                                                    <p>  </p>
                                                </div>
                                                <div style="clear:both;"></div>

                                            </div>
                                            <?php
                                            foreach ($hobbies as $key=>$value)   {?>
                                            <div class="hobbie-wrapper row">
                                                <div class="hobbie-icon col-md-3"><img src="<?php echo "../views/finalproject/project/about/hobbies_img/".$value['img'];?>" width="60px"height="80px"/><i class=""></i>
                                                </div>
                                                <div class="hobbie-description col-md-9">

                                                    <p><?php echo $value['description'] ?></p>
                                                </div>
                                            </div>

                                            <?php } ?>
                                        </div>
                                        <div class="tab-pane fade" id="facts">
                                            <h3>FACTS</h3>
                                            <h4>NUMBERS ABOUT ME</h4>
                                            <?php
                                            foreach ($facts as $key=>$value)   {?>
                                            <div class="facts-wrapper col-md-6">
                                                <div class="facts-icon"><img src="<?php echo "../views/finalproject/project/about/fact_img/".$value['img'];?>" width="60px"height="80px"/><i class=""></i>
                                                </div>
                                                <div class="facts-number"><?php echo $value['no_of_items'];?></div>
                                                <div class="facts-description"><?php echo $value['title']; ?></div>
                                            </div>
                                            <div style="clear:both;"></div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </article>
                <!-- End About Section -->

                <!-- Resume Section -->
                <article class="hs-content resume-section" id="section2">
                    <span class="sec-icon fa fa-newspaper-o"></span>
                    <div class="hs-inner">
                        <span class="before-title">.02</span>
                        <h2>RESUME</h2>
                        <!-- Resume Wrapper -->
                        <div class="resume-wrapper">
                            <ul class="resume">
                                <!-- Resume timeline -->
                                <li class="time-label">
                                    <span class="content-title">EDUCATION</span>
                                </li>
                                <?php
                                foreach ($education as $key=>$values){
                                    ?>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-graduation-cap"></span>
                                        <div class="resume-date">

                                            <span><?php echo $values['course_duration']; ?></span>
<!--                                            <div class="separator"></div>-->
<!--                                            <span>2010</span>-->
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i><?php echo $values['education_board']; ?></span>
                                        <h3 class="timeline-header"><?php echo $values['title']; ?></h3>
                                        <div class="timeline-body">
                                              <h4>  Institute/University : <?php echo $values['institute']; ?></h4>
                                            <span>Main Subject : <?php echo $values['main_subject']; ?></span><br>
                                                <span>Passing Year : <?php echo $values['passing_year']; ?></span><br>
                                                    <span>Result : <?php echo $values['result']; ?></span>

                                        </div>
                                    </div>
                                </li>
                                <?php  }
                                ?>
                                <li class="time-label">
                                    <span class="content-title">ACADEMIC AND PROFESSIONAL POSITIONS</span>
                                </li>
                                <?php
                                foreach ($experience as $key=>$values){
                                ?>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-university"></span>
                                        <div class="resume-date">
                                            <span></span>
                                            <div class="separator"></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker">
                                            </i><?php echo $values['company_location']; ?></span>
                                        <h3 class="timeline-header"><?php echo $values['designation']; ?></h3>
                                        <div class="timeline-body">
                                            <h4>Company Nname : <?php echo $values['company_name']; ?></h4><br>
                                            <span>Start Date : <?php echo $values['start_date']; ?></span><br>
                                            <span>End Date : <?php echo $values['end_date']; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>

                                <li class="time-label">
                                    <span class="content-title">HONORS AND AWARDS</span>
                                </li>
                                <?php
                                foreach ($awards as $key=>$values){
                                ?>
                                <li>
                                    <div class="resume-tag">
                                        <span class="fa fa-star-o"></span>
                                        <div class="resume-date">
                                            <span></span>
                                            <div class="separator"></div>
                                            <span></span>
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <span class="timeline-location"><i class="fa fa-map-marker"></i> <?php echo $values['location']; ?></span>
                                        <h3 class="timeline-header"><?php echo $values['title']; ?></h3>
                                        <div class="timeline-body">
                                            <h4>Organization : <?php echo $values['organization']; ?></h4><br>
                                            <span>Description : <?php echo $values['description']; ?></span>
                                            <span>Year : <?php echo $values['year']; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php }?>
                                <!-- End Resume timeline -->
                            </ul>
                        </div>
                        <!-- End Resume Wrapper -->
                    </div>
                </article>
                <!-- End Resume Section-->

                <!-- Publication Section -->
                <article class="hs-content publication-section" id="section3">
                    <span class="sec-icon fa fa-pencil"></span>
                    <div class="hs-inner">
                        <span class="before-title">.03</span>
                        <h2>PUBLICATIONS</h2>
                        <!-- Filter/Sort Menu -->
                        <span class="content-title">PUBLICATIONS LIST</span>

                        <!-- End Filter/Sort Menu -->

                        <!-- publication wrapper -->
                        <div id="mygrid">
                            <!-- publication item -->
                            <div class="publication_item" data-groups='["all","CONFERENCES"]' data-date-publication="2007-12-01">
                                <?php
                                $serial=1;
                                foreach ($publication as $key=>$values){
                                ?>
                                <div class="media">
                                    <a href=".publication-detail1" class="ex-link open_popup" data-effect="mfp-zoom-out"><i class="fa fa-plus-square-o"></i></a>

                                    <div class="date pull-left">
                                        <span class="day"></span>
                                        <span class="month"></span>
                                        <span class="year"><h2><?php echo $serial++; ?></h2></span>
                                    </div>
                                    <div class="media-body">
                                        <h3><?php echo $values['title'] ?></h3>
                                        <h4><?php echo $values['categories'] ?></h4>
                                        <span class="publication_description"><?php echo $values['description'] ?></span> </div>
                                    <hr style="margin:8px auto">
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- End Publication Wrapper -->
                    </div>
                    <div class="clear"></div>
                </article>
                <!-- End Publication Section -->

                <!-- Research Section -->
                <article class="hs-content research-section" id="section4">
                    <span class="sec-icon fa fa-flask"></span>
                    <div class="hs-inner">
                        <span class="before-title">.04</span>
                        <h2>SERVICES</h2>
                        <div class="team_wrapper">

                        </div>
                        <span class="content-title">SERVICE PROJECTS</span>
                        <div class="slide-wrapper">
                            <nav>
                                <a class="fa fa-angle-left" id="btn-prev"></a>
                                <a class="fa fa-angle-right" id="btn-next"></a>

                            </nav>
                            <div class="slider-details">
                                <span class="slide-counter"></span>
                                <span class="slide-date"><i class="li_calendar"></i></span>
                            </div>
                            <?php
                            $serial=1;
                            foreach ($services as $key=>$values){
                            ?>
                            <div class="slide active" data-date="2017/2018">
                                <div class="slide-header">
                                    <h3><?php echo $values ['title'];?></h3>
                                    <h4>DESCRIPTION OF THE PROJECT</h4>
                                </div>
                                <div class="slide-content">
                                    <img src="<?php echo "../views/finalproject/project/service/service_img/".$values ['img'];?>" width="425px" height="150px"/>
                                    <p><?php echo $values ['description'];?></p>
                                </div>
                            </div>

                            <?php } ?>
                        </div>

                    </div>
                </article>
                <!-- End Research Section -->

                <!-- Teaching Section -->
                <article class="hs-content teaching-section" id="section5">
                    <span class="sec-icon fa fa-book"></span>
                    <div class="hs-inner">
                        <span class="before-title">.05</span>
                        <h2>TEACHING</h2>
                        <div class="teaching-wrapper">
                            <ul class="teaching">
                                <li class="time-label">
                                    <span class="content-title">TEACHING HISTORY</span>
                                </li>
                                <?php
                                foreach ($teaching as $key=>$values){
                                ?>
                                <li>
                                    <div class="teaching-tag">
                                        <span class="fa fa-suitcase"></span>
                                        <div class="teaching-date">
                                            <span><h3><?php echo $values['id']?></h3></span>

                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><?php echo $values['title']?></h3>
                                        <div class="timeline-body">
                                            <h4><?php echo $values['institute']?></h4>
                                            <span><?php echo $values['description']?></span>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </article>
                <!-- End Teaching Section -->

                <!-- Skills Section -->

                <article class="hs-content skills-section" id="section6">


                    <span class="sec-icon fa fa-diamond"></span>
                    <div class="hs-inner">
                        <h2>SKILLS</h2>
                        <?php
                        foreach ($skills as $key=>$values){
                        ?>
                        <span class="before-title">.06</span>
                        <span class="content-title"><?php echo $values['title']?></span>
                        <div class="skolls">
                            <span class="skill-description"><h4>Description:</h4><?php echo $values['description']?></span><br><br>
                            <div class="bar-main-container">
                                <div class="wrap">
                                    <div class="bar-percentage" data-percentage="60"></div>
                                    <span class="skill-detail"><i class="fa fa-bar-chart"></i><?php echo $values['level']?></span><span class="skill-detail"><i class="fa fa-binoculars"></i>EXPERIENCE :<?php echo $values['experience']?></span>
                                    <div class="bar-container">
                                        <div class="bar"></div>
                                    </div>
                                    <span class="label"><?php echo $values['experience']?></span><span class="label">Asp</span><span class="label"><?php echo $values['experience_area']?></span>
                                    <div style="clear:both;"></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>

                </article>

                <!-- End Skills Section -->

                <!-- Works Section -->
                <article class="hs-content works-section" id="section7">
                    <span class="sec-icon fa fa-archive"></span>
                    <div class="hs-inner">
                        <span class="before-title">.07</span>
                        <h2>WORKS</h2>
                        <div class="portfolio">
                            <!-- Portfolio Item -->
                            <?php
                            foreach ($portfolios as $key=>$values){
                            ?>
                            <figure class="effect-milo">
                                <img src="<?php echo "../views/finalproject/project/portfolio/protfollio_img/".$values['img'];?>" alt="img11" width="282" height="222" />
                                <figcaption>
                                    <span class="label"><?php echo $values['title'];?></span>
                                    <div class="portfolio_button">
                                        <h3><?php echo $values['title'];?></h3>
                                        <a href=".work1" class="open_popup" data-effect="mfp-zoom-out">
                                            <i class="hovicon effect-9 sub-b"><i class="fa fa-search"></i></i>
                                        </a>
                                    </div>
                                    <div class="mfp-hide mfp-with-anim work_desc work1">
                                        <div class="col-md-6">
                                            <div class="image_work">
                                                <img src="<?php echo "../views/finalproject/project/portfolio/protfollio_img/".$values['img'];?>" alt="img" width="560" height="420">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="project_content">
                                                <h2 class="project_title"><?php echo $values['title'];?></h2>
                                                <p class="project_desc"> <?php echo $values['description'];?></p>
                                                    <br>
                                                    <br><?php echo $values['category'];?></p>
                                            </div>
                                        </div>
                                        <a class="ext_link" href="#"><i class="fa fa-external-link"></i></a>
                                        <div style="clear:both"></div>
                                    </div>
                                </figcaption>
                            </figure>
                            <?php } ?>
                            <!-- End Portfolio Item -->


                        </div>
                        <!-- End Portfolio Wrapper -->
                    </div>
                </article>
                <!-- End Works Section -->

                <!-- Contact Section -->
                <article class="hs-content contact-section" id="section8">
                    <span class="sec-icon fa fa-paper-plane"></span>
                    <div class="hs-inner">
                        <span class="before-title">.08</span>
                        <h2>CONTACT</h2>
                        <div class="contact_info">
                            <h3>Get in touch</h3>
                            <hr>
                            <h5>We are waiting to assist you</h5>
                            <h6>Simply use the form below to get in touch</h6>

                            <hr>
                        </div>
                        <!-- Contact Form -->
                        <fieldset id="contact_form">
                            <div id="result"></div>
                            <form action="contruct.php" method="post">
                            <input type="text" name="name" id="name" placeholder="NAME" />
                            <input type="email" name="email" id="email" placeholder="EMAIL" />
                            <textarea name="message" id="message" placeholder="MESSAGE"></textarea>
                            <span class="submit_btn" id="submit_btn">SEND MESSAGE</span>
                            </form>
                        </fieldset>
                        <!-- End Contact Form -->
                    </div>
                </article>
                <!-- End Contact Section -->
            </div>
            <!-- End hs-content-wrapper -->
        </div>
        <!-- End hs-content-scroller -->
    </div>
    <!-- End container -->
    <div id="my-panel">
    </div>

    <!-- PLUGIN SCRIPTS -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/default.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/watch.js"></script>
    <script type="text/javascript" src="js/layout.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <!-- END PLUGIN SCRIPTS -->
</body>

</html>
