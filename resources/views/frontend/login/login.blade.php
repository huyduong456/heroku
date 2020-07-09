<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>
	<base href="{{ asset('backend') }}/">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">


    <!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/frontend/asset/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/vendor/animate/animate.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="/frontend/asset/css/util.css">
        <link rel="stylesheet" type="text/css" href="/frontend/asset/css/main.css">


</head>

<body>

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#1488ef;">
		<div class="container-fluid">
			<div class="navbar-header">

				<a href="/"><h3 align="center" style="color: #fff"><b>Job Board</b></h3></a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	{{-- <div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<a href="index.html" class="btn btn-primary">Đăng nhập</a>
							<a href="/newaccount" class="btn btn-primary" style="margin-left: 25px">Đăng ký</a>

						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
    </div><!-- /.row --> --}}
    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-30 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						LOGIN SYSTEM
					</span>

					<div class="p-b-9">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>

					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Password
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn m-t-17">
						<a href="{{ URL::to('/login/facebook/facebook') }}" class="btn-face m-b-20">
							<i class="fa fa-facebook-official"></i>
							 Login with Facebook
						</a>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>



    <!--===============================================================================================-->
	<script src="/frontend/asset/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="/frontend/asset/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="/frontend/asset/vendor/bootstrap/js/popper.js"></script>
        <script src="/frontend/asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="/frontend/asset/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="/frontend/asset/vendor/daterangepicker/moment.min.js"></script>
        <script src="/frontend/asset/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="/frontend/asset/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
        <script src="/frontend/asset/js/main.js"></script>


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		! function ($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function () {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
