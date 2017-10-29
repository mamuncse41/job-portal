<?php
include_once ("../../../../vendor/autoload.php");
use App\finalproject\jobs\jobs;
$job_views = new jobs();
$job_views->setData($_GET);
$data = $job_views->show_job();
//print_r($values);
//die();
if (!empty($_SESSION['user_info'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Cvbank:-job Online Apply</title>

            <!-- Global stylesheets -->
            <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
            <link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
            <link href="../assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="../assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
            <link href="../assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
            <link href="../assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="../../../Provider/style.css" type="text/css">
            <!-- /global stylesheets -->

            <!-- Core JS files -->
            <script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
            <script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
            <script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
            <script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
            <!-- /core JS files -->

            <!-- Theme JS files -->
            <script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
            <script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
            <script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
            <script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
            <script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
            <script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
            <script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>

            <script type="text/javascript" src="../assets/js/core/app.js"></script>
            <script type="text/javascript" src="../assets/js/pages/dashboard.js"></script>
            <!-- /theme JS files -->

        </head>

        <body>

            <!-- Main navbar -->
            <div class="navbar navbar-inverse">
                <div class="navbar navbar-inverse navbar-fixed-top ">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="../dashboard.php">Cvbank</a>
                        <a class="navbar-brand" href="job_view.php">JOBS</a>
                        <a class="navbar-brand" href="#">TRAINING</a>
                        <ul class="nav navbar-nav visible-xs-block">
                            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
                        </ul>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-mobile">
                        <ul class="nav navbar-nav">


                            <li class="dropdown">

                                <div class="dropdown-menu dropdown-content">
                                    <div class="dropdown-content-heading">
                                        <ul class="icons-list">
                                            <li><a href="#"><i class="icon-sync"></i></a></li>
                                        </ul>
                                    </div>

                                    <ul class="media-list dropdown-content-body width-350">
                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
                                            </div>

                                            <div class="media-body">
                                                Add full font overrides for popovers and tooltips
                                                <div class="media-annotation">36 minutes ago</div>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
                                            </div>

                                            <div class="media-body">
                                                <a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
                                                <div class="media-annotation">2 hours ago</div>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
                                            </div>

                                            <div class="media-body">
                                                <a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
                                                <div class="media-annotation">Dec 18, 18:36</div>
                                            </div>
                                        </li>

                                        <li class="media">
                                            <div class="media-left">
                                                <a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
                                            </div>

                                            <div class="media-body">
                                                Have Carousel ignore keyboard events
                                                <div class="media-annotation">Dec 12, 05:46</div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="dropdown-content-footer">
                                        <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">


                            <li class="dropdown dropdown-user">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo "settings/images/" . $_SESSION['user_setting']['featured_img'] ?>" class="img-circle img-sm" alt="">
                                    <span><?php echo $_SESSION['user_info']['username']; ?></span>
                                    <i class="caret"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="dashboard.php"><i class="icon-user-plus"></i> My profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                                    <li><a href="logout.php"><i class="icon-switch2"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /main navbar -->


            <!-- Page container -->
            <div class="page-container">

                <!-- Page content -->
                <div class="page-content">

                    <!-- Main sidebar -->
                 
                    <!-- /main sidebar -->


                    <!-- Main content -->
                    <div class="content-wrapper">

                        <!-- Page header -->
                        <div class="page-header">


                            <div class="breadcrumb-line">
                                <ul class="breadcrumb">
                                    <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

                                    <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home</a></li>
                                    <!--							<li class="active">Dashboard</li>-->
                                </ul>

                                <ul class="breadcrumb-elements">
                                    <!--						-->
                                </ul>
                            </div>
                        </div>
                        <!-- /page header -->

                        <!-- Content area -->
                        <div class="content">

                            <!-- Dashboard content -->
                            <div class="row">
                            </div>
                            <!-- /dashboard content -->
                            <div class="row">
                                <div class="col-lg-8">

                                    <!-- Marketing campaigns -->
                                    <!--                            <div class="panel panel-flat">-->
                                    <!--                                <div class="panel-heading">-->
                                    <!--                                    <h6 class="panel-title">Marketing campaigns</h6>-->
                                    <!--                                    <div class="heading-elements">-->
                                    <!--                                        <span class="label bg-success heading-text">28 active</span>-->
                                    <!--                                        <ul class="icons-list">-->
                                    <!--                                            <li class="dropdown">-->
                                    <!--                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>-->
                                    <!--                                                <ul class="dropdown-menu dropdown-menu-right">-->
                                    <!--                                                    <li><a href="#"><i class="icon-sync"></i> Update data</a></li>-->
                                    <!--                                                    <li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>-->
                                    <!--                                                    <li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>-->
                                    <!--                                                    <li class="divider"></li>-->
                                    <!--                                                    <li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </li>-->
                                    <!--                                        </ul>-->
                                    <!--                                    </div>-->
                                    <!--                                </div>-->
                                    <!---->
                                    <!--                                <div class="table-responsive">-->
                                    <!--                                    <table class="table table-lg text-nowrap">-->
                                    <!--                                        <tbody>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <td class="col-md-5">-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div id="campaigns-donut"></div>-->
                                    <!--                                                </div>-->
                                    <!---->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <h5 class="text-semibold no-margin">38,289 <small class="text-success text-size-base"><i class="icon-arrow-up12"></i> (+16.2%)</small></h5>-->
                                    <!--                                                    <ul class="list-inline list-inline-condensed no-margin">-->
                                    <!--                                                        <li>-->
                                    <!--                                                            <span class="status-mark border-success"></span>-->
                                    <!--                                                        </li>-->
                                    <!--                                                        <li>-->
                                    <!--                                                            <span class="text-muted">May 12, 12:30 am</span>-->
                                    <!--                                                        </li>-->
                                    <!--                                                    </ul>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!---->
                                    <!--                                            <td class="col-md-5">-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div id="campaign-status-pie"></div>-->
                                    <!--                                                </div>-->
                                    <!---->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <h5 class="text-semibold no-margin">2,458 <small class="text-danger text-size-base"><i class="icon-arrow-down12"></i> (- 4.9%)</small></h5>-->
                                    <!--                                                    <ul class="list-inline list-inline-condensed no-margin">-->
                                    <!--                                                        <li>-->
                                    <!--                                                            <span class="status-mark border-danger"></span>-->
                                    <!--                                                        </li>-->
                                    <!--                                                        <li>-->
                                    <!--                                                            <span class="text-muted">Jun 4, 4:00 am</span>-->
                                    <!--                                                        </li>-->
                                    <!--                                                    </ul>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!---->
                                    <!--                                            <td class="text-right col-md-2">-->
                                    <!--                                                <a href="#" class="btn bg-indigo-300"><i class="icon-statistics position-left"></i> View report</a>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        </tbody>-->
                                    <!--                                    </table>-->
                                    <!--                                </div>-->
                                    <!---->
                                    <!--                                <div class="table-responsive">-->
                                    <!--                                    <table class="table text-nowrap">-->
                                    <!--                                        <thead>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <th>Campaign</th>-->
                                    <!--                                            <th class="col-md-2">Client</th>-->
                                    <!--                                            <th class="col-md-2">Changes</th>-->
                                    <!--                                            <th class="col-md-2">Budget</th>-->
                                    <!--                                            <th class="col-md-2">Status</th>-->
                                    <!--                                            <th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>-->
                                    <!--                                        </tr>-->
                                    <!--                                        </thead>-->
                                    <!--                                        <tbody>-->
                                    <!--                                        <tr class="active border-double">-->
                                    <!--                                            <td colspan="5">Today</td>-->
                                    <!--                                            <td class="text-right">-->
                                    <!--                                                <span class="progress-meter" id="today-progress" data-progress="30"></span>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <td>-->
                                    <!--                                                <div class="media-left media-middle">-->
                                    <!--                                                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div class=""><a href="#" class="text-default text-semibold">Facebook</a></div>-->
                                    <!--                                                    <div class="text-muted text-size-small">-->
                                    <!--                                                        <span class="status-mark border-blue position-left"></span>-->
                                    <!--                                                        02:00 - 03:00-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!--                                            <td><span class="text-muted">Mintlime</span></td>-->
                                    <!--                                            <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>-->
                                    <!--                                            <td><h6 class="text-semibold">$5,489</h6></td>-->
                                    <!--                                            <td><span class="label bg-blue">Active</span></td>-->
                                    <!--                                            <td class="text-center">-->
                                    <!--                                                <ul class="icons-list">-->
                                    <!--                                                    <li class="dropdown">-->
                                    <!--                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>-->
                                    <!--                                                        <ul class="dropdown-menu dropdown-menu-right">-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>-->
                                    <!--                                                            <li class="divider"></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-gear"></i> Settings</a></li>-->
                                    <!--                                                        </ul>-->
                                    <!--                                                    </li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <td>-->
                                    <!--                                                <div class="media-left media-middle">-->
                                    <!--                                                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div class=""><a href="#" class="text-default text-semibold">Youtube videos</a></div>-->
                                    <!--                                                    <div class="text-muted text-size-small">-->
                                    <!--                                                        <span class="status-mark border-danger position-left"></span>-->
                                    <!--                                                        13:00 - 14:00-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!--                                            <td><span class="text-muted">CDsoft</span></td>-->
                                    <!--                                            <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 3.12%</span></td>-->
                                    <!--                                            <td><h6 class="text-semibold">$2,592</h6></td>-->
                                    <!--                                            <td><span class="label bg-danger">Closed</span></td>-->
                                    <!--                                            <td class="text-center">-->
                                    <!--                                                <ul class="icons-list">-->
                                    <!--                                                    <li class="dropdown">-->
                                    <!--                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>-->
                                    <!--                                                        <ul class="dropdown-menu dropdown-menu-right">-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>-->
                                    <!--                                                            <li class="divider"></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-gear"></i> Settings</a></li>-->
                                    <!--                                                        </ul>-->
                                    <!--                                                    </li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <td>-->
                                    <!--                                                <div class="media-left media-middle">-->
                                    <!--                                                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div class=""><a href="#" class="text-default text-semibold">Spotify ads</a></div>-->
                                    <!--                                                    <div class="text-muted text-size-small">-->
                                    <!--                                                        <span class="status-mark border-grey-400 position-left"></span>-->
                                    <!--                                                        10:00 - 11:00-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!--                                            <td><span class="text-muted">Diligence</span></td>-->
                                    <!--                                            <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 8.02%</span></td>-->
                                    <!--                                            <td><h6 class="text-semibold">$1,268</h6></td>-->
                                    <!--                                            <td><span class="label bg-grey-400">Hold</span></td>-->
                                    <!--                                            <td class="text-center">-->
                                    <!--                                                <ul class="icons-list">-->
                                    <!--                                                    <li class="dropdown">-->
                                    <!--                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>-->
                                    <!--                                                        <ul class="dropdown-menu dropdown-menu-right">-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>-->
                                    <!--                                                            <li class="divider"></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-gear"></i> Settings</a></li>-->
                                    <!--                                                        </ul>-->
                                    <!--                                                    </li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <td>-->
                                    <!--                                                <div class="media-left media-middle">-->
                                    <!--                                                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div class=""><a href="#" class="text-default text-semibold">Twitter ads</a></div>-->
                                    <!--                                                    <div class="text-muted text-size-small">-->
                                    <!--                                                        <span class="status-mark border-grey-400 position-left"></span>-->
                                    <!--                                                        04:00 - 05:00-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!--                                            <td><span class="text-muted">Deluxe</span></td>-->
                                    <!--                                            <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.78%</span></td>-->
                                    <!--                                            <td><h6 class="text-semibold">$7,467</h6></td>-->
                                    <!--                                            <td><span class="label bg-grey-400">Hold</span></td>-->
                                    <!--                                            <td class="text-center">-->
                                    <!--                                                <ul class="icons-list">-->
                                    <!--                                                    <li class="dropdown">-->
                                    <!--                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>-->
                                    <!--                                                        <ul class="dropdown-menu dropdown-menu-right">-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>-->
                                    <!--                                                            <li class="divider"></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-gear"></i> Settings</a></li>-->
                                    <!--                                                        </ul>-->
                                    <!--                                                    </li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!---->
                                    <!--                                        <tr class="active border-double">-->
                                    <!--                                            <td colspan="5">Yesterday</td>-->
                                    <!--                                            <td class="text-right">-->
                                    <!--                                                <span class="progress-meter" id="yesterday-progress" data-progress="65"></span>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <td>-->
                                    <!--                                                <div class="media-left media-middle">-->
                                    <!--                                                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div class=""><a href="#" class="text-default text-semibold">Bing campaign</a></div>-->
                                    <!--                                                    <div class="text-muted text-size-small">-->
                                    <!--                                                        <span class="status-mark border-success position-left"></span>-->
                                    <!--                                                        15:00 - 16:00-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!--                                            <td><span class="text-muted">Metrics</span></td>-->
                                    <!--                                            <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 5.78%</span></td>-->
                                    <!--                                            <td><h6 class="text-semibold">$970</h6></td>-->
                                    <!--                                            <td><span class="label bg-success-400">Pending</span></td>-->
                                    <!--                                            <td class="text-center">-->
                                    <!--                                                <ul class="icons-list">-->
                                    <!--                                                    <li class="dropup">-->
                                    <!--                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>-->
                                    <!--                                                        <ul class="dropdown-menu dropdown-menu-right">-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>-->
                                    <!--                                                            <li class="divider"></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-gear"></i> Settings</a></li>-->
                                    <!--                                                        </ul>-->
                                    <!--                                                    </li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <td>-->
                                    <!--                                                <div class="media-left media-middle">-->
                                    <!--                                                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div class=""><a href="#" class="text-default text-semibold">Amazon ads</a></div>-->
                                    <!--                                                    <div class="text-muted text-size-small">-->
                                    <!--                                                        <span class="status-mark border-danger position-left"></span>-->
                                    <!--                                                        18:00 - 19:00-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!--                                            <td><span class="text-muted">Blueish</span></td>-->
                                    <!--                                            <td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 6.79%</span></td>-->
                                    <!--                                            <td><h6 class="text-semibold">$1,540</h6></td>-->
                                    <!--                                            <td><span class="label bg-blue">Active</span></td>-->
                                    <!--                                            <td class="text-center">-->
                                    <!--                                                <ul class="icons-list">-->
                                    <!--                                                    <li class="dropup">-->
                                    <!--                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>-->
                                    <!--                                                        <ul class="dropdown-menu dropdown-menu-right">-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>-->
                                    <!--                                                            <li class="divider"></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-gear"></i> Settings</a></li>-->
                                    <!--                                                        </ul>-->
                                    <!--                                                    </li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        <tr>-->
                                    <!--                                            <td>-->
                                    <!--                                                <div class="media-left media-middle">-->
                                    <!--                                                    <a href="#"><img src="assets/images/placeholder.jpg" class="img-circle img-xs" alt=""></a>-->
                                    <!--                                                </div>-->
                                    <!--                                                <div class="media-left">-->
                                    <!--                                                    <div class=""><a href="#" class="text-default text-semibold">Dribbble ads</a></div>-->
                                    <!--                                                    <div class="text-muted text-size-small">-->
                                    <!--                                                        <span class="status-mark border-blue position-left"></span>-->
                                    <!--                                                        20:00 - 21:00-->
                                    <!--                                                    </div>-->
                                    <!--                                                </div>-->
                                    <!--                                            </td>-->
                                    <!--                                            <td><span class="text-muted">Teamable</span></td>-->
                                    <!--                                            <td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> 9.83%</span></td>-->
                                    <!--                                            <td><h6 class="text-semibold">$8,350</h6></td>-->
                                    <!--                                            <td><span class="label bg-danger">Closed</span></td>-->
                                    <!--                                            <td class="text-center">-->
                                    <!--                                                <ul class="icons-list">-->
                                    <!--                                                    <li class="dropup">-->
                                    <!--                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>-->
                                    <!--                                                        <ul class="dropdown-menu dropdown-menu-right">-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>-->
                                    <!--                                                            <li class="divider"></li>-->
                                    <!--                                                            <li><a href="#"><i class="icon-gear"></i> Settings</a></li>-->
                                    <!--                                                        </ul>-->
                                    <!--                                                    </li>-->
                                    <!--                                                </ul>-->
                                    <!--                                            </td>-->
                                    <!--                                        </tr>-->
                                    <!--                                        </tbody>-->
                                    <!--                                    </table>-->
                                    <!--                                </div>-->
                                    <!--                            </div>-->
                                    <!-- /marketing campaigns -->


                                    <!-- Quick stats boxes -->

                                    <!-- /quick stats boxes -->


                                    <!-- Support tickets -->
                                    <div class="panel panel-flat" style="margin-left:10%;padding-left:10px">



                                        <!-- Description lists -->
                                        <h2 class="content-group text-info">
                                          Cvbank.COM ONLINE APPLICATION FORM
                                            
                                        </h2>

                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                    <h6 class="no-margin text-semibold" style="color:brown; font-size:20px; background:gray;text-align: center">Online Application</h6>
                                                  
                                                        <div class="#">
                                                            <form>
                                                                <table style="color:green; font-size:20px;">
                                                                <tr>
                                                                    <td style="padding-left:20px">Account Name:</td><td><span style="color:blue;font-size:16px"><?php echo $_SESSION['user_info']['username']; ?></span></td>
                                                                </tr>
                                                                   <tr>
                                                                       <td style="padding-left:20px">Company Name:</td><td><span style="color:blue;font-size:16px"><?php echo $data['company_name']; ?></span></td>
                                                                </tr>
                                                                  <tr>
                                                                      <td style="padding-left:20px">Position Applied: </td><td><span style="color:blue;font-size:16px"><?php echo $data['job_title']; ?></span></td>
                                                                </tr>
                                                                  <tr>
                                                                      <td style="padding-left:20px">Your Expected Salary:</td><td><input type="number" name="#" id="input"/></td>
                                                                </tr>
                                                                   <tr >
                                                                       <td style="padding-left:200px;padding-top:7px;"><input type="submit" name="#" value="Apply" class="btn bg-indigo-700" ></td>
                                                                </tr>
                                                                 
                                                            </table> 
                                                            </form>
                                                        </div>
                                              
                                            </div>



                                            <!-- /description lists -->
                                        </div>
                                      


                                    </div>
                                    <!-- /support tickets -->




                                </div>

                               
                            </div>

                            <!-- Footer -->
                            <div class="footer text-muted">
                                &copy; 2017 <a href="#">Web App devloper</a> by <a href="" target="_blank">Code of Ethics</a>
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
    <?php
}else{
    header('location:index.php');
}




