<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<style>
		body{
			background: url(imgs/registro.png)no-repeat;
			background-size: cover;
		}
		h1 {
			text-align: center;
			color: white;
		}
		
		#btn {
			position: absolute;
			left: 40%;
		}

		.boxlogin {
			border-radius: 4px;
			position
			margin: 50px auto;
			width: 380px;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			background-color: rgba(20,20,20,0.5);
			color: white;

		}
	</style>

</head>
<body>
	<h1>Registro</h1>
	<div class="boxlogin">
		<form action="" METHOD="POST" name="flogin" id="flogin">
			<label for="">Nombre</label>
			<input type="text" name="nombre" id="username" class="form-control" placeholder="Escriba su nombre">

			<label for="">Apellido</label>
			<input type="text" name="apellido" class="form-control" placeholder="Escriba su apellido">

			<label for="">Edad</label>
			<input type="number" name="edad" class="form-control" placeholder="Escriba su edad">
			
			<label for="">Correo ELectronico</label>
			<input type="email" name="correo" class="form-control" placeholder="Escriba su correo electronico">

			<label for="">Cedula</label>
			<input type="text" name="cedula" id="pass" class="form-control" placeholder="Escriba el numero de su cedula">

			<label for="">Ocupacion</label>
			<input type="text" name="ocupacion" id="repass" class="form-control" placeholder="Ocupacion">

			<label for="">Telefono</label>
			<input type="number" name="telefono" id="repass" class="form-control" placeholder="Escriba su telefono">

			<label for="">Direccion</label>
			<input type="text" name="direccion" id="repass" class="form-control" placeholder="Direccion">

			<label for="">Contraseña</label>
			<input type="password" name="contrasena" id="repass" class="form-control" placeholder="Repita su contraseña">
			
			<label for="">Repita su contraseña</label>
			<input type="password" name="recontrasena" id="repass" class="form-control" placeholder="Repita su contraseña">


			<br>
			<input type="submit" class="btn btn-success" id="btn" value="Ingresar">
		</form>
	</div>

	<?php 
		if ($_POST) {
						$nombre=$_POST['nombre'];
						$apellido=$_POST['apellido'];
						$edad=$_POST['edad'];
						$correo=$_POST['correo'];
						$cedula=$_POST['cedula'];			
						$ocupacion=$_POST['ocupacion'];
						$telefono=$_POST['telefono'];
						$direccion=$_POST['direccion'];
						$contrasena=$_POST['contrasena'];
						$recontrasena=$_POST['recontrasena'];			

						if ($nombre !="" && $apellido !="" && $edad !="" && $correo !="" && $cedula !="" && $ocupacion !="" && $telefono !="" && $direccion !="" && $contrasena !="" && $recontrasena !="") {
							$con=mysqli_connect('localhost','root','','proyectoagil');
							$query="INSERT INTO administrador VALUES('','$nombre','$apellido','$edad','$correo','$cedula','$ocupacion','$telefono','$direccion','$contrasena','$recontrasena')";
							$row=mysqli_query($con,$query);
							if ($row) {
								echo "<script>alert('exito');
								windows.location.replace(dashboardadm.php);
								</script>";
							}else{
								echo "<script>alert('no conect')</script>";
							}

						}
					}
	 ?>

	
</body>
</html>