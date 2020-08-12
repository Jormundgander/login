<!DOCTYPE html>
<html>
<head lang="en">
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Views/assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="Views/assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="Views/assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
</head>
<body>

	<div class="row mt-5">
		<div class="col-md-12 col-sm-12">
			<form method="POST" class="mx-auto w-50 p-1">
				<h3 class="text-center mt-5 mb-3 font-weight-bold">Iniciar sesión</h3>
				<div class="d-flex justify-content-center">
					<img src="Views/assets/img/login.svg" class="w-25 img-fluid">
				</div>
				<div class="authMessage"></div>
				<div class="form-group w-50 mx-auto">
					<span>Usuario</span>
					<input type="text" name="user" class="form-control username">
				</div>
				<div class="form-group w-50 mx-auto">
					<span>Contraseña</span>
					<input type="password" name="pass" class="form-control pass">
				</div>
				<a href="#">
					<p class="text-center font-weight-bold">Deseo registrarme</p>
				</a>
				<a href="#">
					<p class="text-center font-weight-bold">He olvidado mis datos</p>
				</a>
				<div class="d-flex justify-content-center">
					<input type="button" name="btnLogin" value="Ingresar" class="btnCustomized mb-5">
				</div>
			</form>
		</div>
	</div>


	<script src="Views/assets/js/jquery.js"></script>
	<script src="Views/assets/js/bootstrap.min.js"></script>
	<script src="Views/assets/js/login.js"></script>

</body>
</html>