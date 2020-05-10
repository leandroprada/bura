<?php
 session_start();
$_SESSION['username'] = $_POST['username'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login - STCHR</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-signin-client_id" content="284081199467-mgtl5u240434m5odbp1n5guaivthgsuq.apps.googleusercontent.com">
<!--===============================================================================================-->
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="./css/util.css">
	<link rel="stylesheet" type="text/css" href="./css/loginmain.css">
<!--===============================================================================================-->
</head>
<body>

<header id="slider-area">
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
        <div class="container">
		<ul>
          <li><a class="navbar-brand" href="../index.php"><img src="../img/stc2.png" alt="" style="height:1.5em"></a></li>
		</ul>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.php#services">Servicios</a>
              </li>
             <!--  <li class="nav-item">
                <a class="nav-link page-scroll" href="#features">Features</a>
              </li>     -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.php#portfolios">Cursos</a>
              </li>
            <!--   <li class="nav-item">
                <a class="nav-link page-scroll" href="#pricing">Pricing</a>
              </li>  -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.php#team">El Equipo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="../novedades.php">Novedades</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link page-scroll" href="../postulate.php">Postulate</a>
              </li>
             <!--  <li class="nav-item">
                <a class="nav-link page-scroll" href="#blog">Blog</a>
              </li>  -->
              <li class="nav-item">
                <a class="nav-link page-scroll" href="../index.php#contactenos">Contacto</a>
              </li>
			
			
			
			</ul>
		  </div>
        </div>

	  </nav>
</header>




	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="login2.php" method="post">
					<span class="login100-form-title p-b-32">
						Login - <?php
																	 if (($_SESSION['login']) != "validated") {
																	 echo '<span style="font-size:0.5em; color:"red""> Por favor ingresá tus datos</span>';}

																	?>
					</span>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								¿Olvidaste tu contrase&ntilde;a?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name ="signup-submit">
							Ingresar
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	

</body>
</html>
