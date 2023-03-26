<?php 
	$auth = 0;
  include "db.php"; 
  include "auth.php"; 

	if(isset($_POST['pseudo']) && isset($_POST['pass'])){

		$_SESSION['pseudoConnexion'] = $_POST['pseudo'];
		$_SESSION['passConnexion'] = $_POST['pass'];
		
		$pass = sha1($_POST['pass']);
		$pseu = $_POST['pseudo'];
		$select = $connexion->query("SELECT * FROM student WHERE (Pseudo = '$pseu' AND Pwd = '$pass')");
		if($select->rowCount() > 0 ){
			$_SESSION['auth']=$select->fetch();
			header('Location:acceuil.php');	
	}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../Img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../bootstrap/util.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../Img/img.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Student's Login
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="pseudo" placeholder="Pseudo">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>


					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="../bootstrap/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../bootstrap/vendor/bootstrap/js/popper.js"></script>
	<script src="../bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../bootstrap/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../bootstrap/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../bootstrap/js/main.js"></script>

</body>
</html>