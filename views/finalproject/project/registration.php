<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>

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
<body>
	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><img src="assets/images/codebreaker.png" alt="Logo"></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

	</div>
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
					<form action="store.php" method="post">
						<div class="panel panel-body login-form">
							<div class="text-center">
                                <h4 style="color: red">
                                    <?php if(isset( $_SESSION['failed'])){
                                        echo  $_SESSION['failed'];
                                        unset($_SESSION['failed']);}
                                    ?>
                                </h4>
								<h1 class="content-group">Create account <small class="display-block">All fields are required</small></h1>
							</div>
							<div class="content-divider text-muted form-group"><span>Your credentials</span></div>
							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="username" placeholder="User Name" >

								<div class="form-control-feedback">
									<i class="icon-user-check text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" name="password" placeholder="Create password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
								</div>
							</div>

							<div class="content-divider text-muted form-group"><span>Your privacy</span></div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="email" placeholder="Your email">
								<div class="form-control-feedback">
									<i class="icon-mention text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="repeat_email" placeholder="Repeat email">
								<div class="form-control-feedback">
									<i class="icon-mention text-muted"></i>
								</div>
							</div>
							<button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
						</div>
					</form>
					<!-- /advanced login -->

					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2017. <a href="#">WEB APPS DEVELOPERS</a> by <a href="#" target="_blank">CODE BREAKERS</a>
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
