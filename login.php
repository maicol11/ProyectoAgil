<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<?php session_start(); ?>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style>
		body{
		background: url(imgs/login.jpg);
		}
		h1 {
			text-align: center;
			color: white;
		}
		
		#btn, #btn2{
			position: absolute;
			left: 47%;
		}
		.boxlogin {
			border-radius: 4px;
			margin: 50px auto;
			width: 380px;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			background-color: rgba(20,20,20,0.5);
			color: white;
		}
		#adm, #back{
			position: relative;
			left: 790px;
			bottom: 40px;
		}
		#btn {
			position: absolute;
			left: 50%;
		}
		#btn1 {
     		 position: absolute;
      		left: 42%;
   		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<button class="btn btn-success" id="adm">Loguearse como admin</button>
	<button class="btn btn-warning" id="back">Loguearse como user</button>
	<div class="jumbotron boxlogin">
		<form action="" METHOD="POST" name="flogin" id="flogin">
			<label for="">Nombre de usuario:</label>
			<input type="text" name="nickname" id="username" class="form-control">
			<label for="">Contraseña:</label>
			<input type="password" name="pass" id="password" class="form-control">
			<br>
			<input type="submit" name="validacionuser" class="btn btn-success" id="btn" value="Ingresar">
			<input type="button" onclick=" location.href='dashboard.html'" class="btn btn-info" id="btn1" value="Regresar" /> 
		</form>
	</div>
	<div>
		<div class="boxlogin" id="formadmin">
			<h1>Login Administrador</h1>
			<form action="" METHOD="POST" name="flogin" id="flogin">
			<label for="">Correo:</label>
			<input type="text" name="correo" id="email" class="form-control">
			<label for="">Contraseña:</label>
			<input type="password" name="contrasena" id="password" class="form-control">
			<br>
			<input type="submit" name="validacionadm" class="btn btn-success" id="btn2" value="Ingresar">
		</form>
		</div>
	</div>
	<script>
		var adm = document.getElementById('adm');
		var flogin = document.getElementById('flogin');
		var formadmin = document.getElementById('formadmin');
		var formuser = document.getElementById('formuser');
		var back = document.getElementById('back');

		back.style.display = 'none'
		formadmin.style.display = 'none'

		adm.onclick = function(){
			flogin.style.display = 'none';
			formadmin.style.display = 'block';
			adm.style.display = 'none';
			back.style.display = 'block';
		}
		back.onclick = function() {
			formadmin.style.display = 'none';
			flogin.style.display = 'block';
			adm.style.display = 'block';
			back.style.display = 'none';
		}
	</script>
	<?php 
		if($_POST){
			$con = mysqli_connect('localhost','root','','proyectoagil');
			if(mysqli_connect_errno()){
				echo "No se pudo conectar a la BD".mysqli_error();
			}
			if(isset($_POST['validacionuser'])){
				require "validacion_loguin_u.php";
			}
			if(isset($_POST['validacionadm'])){
				require "validacion_loguin_a.php";
			}
 		}
	 ?>
</body>
</html>