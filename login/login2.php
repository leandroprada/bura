<?php
 session_start();

require 'dbconn.inc.php';
$password = $_POST['password'];

	//TO Verify if the username box contains a username or an email
	$arroba = "@";
	$useroremail = $_POST['username'];
	 	// Test if string contains the word 
		if(strpos($useroremail, $arroba) !== false){
			$email = $_POST['username'];
		} else{
			$username = $_POST['username'];
		}

//Sample mysql sentence: SELECT name FROM users WHERE (username = "lprada" OR email = NULL);
	$queryn1 = "SELECT name FROM users WHERE (username = ";
	$queryn2 = '"'.$username.'"';	
	$queryn3 = ' OR email = ';	
	$queryn4 = '"'.$email.'");';	
	
	$queryn = $queryn1.$queryn2.$queryn3.$queryn4;
	echo $queryn;
	$resultn = mysqli_query($conn,$queryn);
	$rown = mysqli_fetch_row($resultn);
	$name = $rown[0];
  


	// This query below first gets the list of courses for that username, then queries the table courses, using that id
	$queryc1 = "SELECT course FROM users WHERE (username=";
	$queryc2 = '"'.$username.'"';	
	$queryc3 = ' OR email = ';	
	$queryc4 = '"'.$email.'");';	
	
	$queryc = $queryc1.$queryc2.$queryc3.$queryc4;
	$resultc = mysqli_query($conn,$queryc);
	$rowc = mysqli_fetch_row($resultc);
	$courses = $rowc[0];
	
	


//Here we perform the login
$stmt = mysqli_stmt_init($conn);
$sql = "SELECT email FROM users WHERE email=? OR username=?";
 if (!mysqli_stmt_prepare($stmt, $sql)){
	  header("Location: login.php?error=wrongusername");
	  echo "Cannot access database";
	  exit();
	  }
	  else {
		  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
		  
		  mysqli_stmt_bind_param ($stmt, "ss", $email, $username);
		  mysqli_stmt_execute($stmt);
		  mysqli_stmt_store_result($stmt);
		  $resultCheck = mysqli_stmt_num_rows($stmt);
		  if ($resultCheck >= 1) { 
				$_SESSION['login'] = "validated";
				$_SESSION['email'] = $email;
				$_SESSION['name'] = $name;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['courses'] = $courses;
				
			   header("Location: ../resources.php?userlogon=true");
		  }
		  else {
			  header("Location: ../index.php?error=sqlcouldnotexecute");
		  }

	  }
	  


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bura STCHR Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="signup.php" method="post">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
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
						<input class="input100" type="password" name="pass" >
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
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name ="signup-submit">
							Login
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
