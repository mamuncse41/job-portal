<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cvbank:-Login Page</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body class="bg-slate-800">

	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
					<form action="login.php" method="post">
						<div class="panel panel-body login-form">
							<div class="text-center">
                                    <?php
                                    echo '<h3 style="color:green;" align="center">';
                                    if(isset( $_SESSION['message'])){
                                        echo  $_SESSION['message'];
                                        unset( $_SESSION['message']);
                                    }
                                    echo'</h3>';
                                    ?>
                                    <?php
                                    echo '<h3 style="color:red;" align="center">';
                                    if(isset( $_SESSION['failed'])){
                                        echo  $_SESSION['failed'];
                                        unset( $_SESSION['failed']);
                                    }
                                    echo'</h3>';
                                    ?>
								<div class="icon-object border-warning-400 text-warning-400"><i class="icon-people"></i></div>
								<h4 class="content-group-lg">Login to your account <small class="display-block">Enter your credentials</small></h4>

                            </div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control"name="username" placeholder="Enter Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" name="password" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">

									</div>


								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
							<a href="registration.php" class="btn bg-slate btn-block content-group">Register</a>
						</div>
					</form>
					<!-- /advanced login -->

					<!-- Footer -->
					<div class="footer text-white">
                        &copy; 2017. <a href="#">WEB APPS DEVELOPERS</a> by <a href="#" target="_blank">Code of Ethics</a>
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
