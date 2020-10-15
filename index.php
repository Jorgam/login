<!DOCTYPE html>
<html lang="en">
<head>
	<title>SOMOS NESAGAVIRIA-LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form action="procesos/validarlogin.php" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						LOGING APP
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Usuario requerido">
						<span class="label-input100">Usuario</span>
						<input class="input100" type="text" name="username" placeholder="Escribe tu Usuario...">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Contraseña requerida">
						<span class="label-input100">Contraseña</span>
						<input class="input100" type="password" name="pass" placeholder="Escribe tu Contraseña...">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Olvido su Contraseña?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								INICIAR SESIÓN
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Visitanos en nuestras redes...
						</span>
					</div>

					<div class="flex-c-m">
						<a href="https://www.facebook.com/nesagaviria/?__tn__=%2Cd%2CP-R&eid=ARBU_za1bnrGNn55U1zs12zTvYCn0yALxeh4VQq34uMSa-FSzpGBSL87JGVYCOQiA6BQjpTahl1sz1cB" target="_blank" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://www.instagram.com/nesagaviria/?hl=es-la" target="_blank" class="login100-social-item bg2">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="https://www.youtube.com/channel/UC7Z-CsbBHC31bgVvKQiUVdA" target="_blank" class="login100-social-item bg3">
							<i class="fa fa-youtube-play"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-50">
						<span class="txt1 p-b-17">
							Solicitar registro
						</span>

						<a href="registro.php" class="txt2">
							soy Nesagaviria
						</a>
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