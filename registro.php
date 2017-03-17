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
	</style>

</head>
<body>
	<h1>Registro</h1>
	<div class="boxlogin">
		<form action="" METHOD="POST" name="flogin" id="flogin" onSubmit="return validar(this)">
			<label for="">Nombre de usuario</label>
			<input type="text" name="nombre" id="username" class="form-control" placeholder="Escriba su nombre completo" onkeypress="return soloLetras(event)" onblur="limpia()" id="miInput" required>

			<label for="">Correo Electronico</label>
			<input type="email" name="correo" class="form-control" placeholder="Escriba su correo electronico" required>

			<label for="">Nickname</label>
			<input type="text" name="nickname" class="form-control" placeholder="Escriba su nickname" required >

			<label for="">Contraseña</label>
			<input type="password" name="pass" id="pass" class="form-control" placeholder="Escriba su contraseña" size="20" required>

			<label for="">Repita su contraseña</label>
			<input type="password" name="repass" id="repass" class="form-control" placeholder="Repita su contraseña" size="20" required>
			<br>
			<input type="submit" class="btn btn-success" id="btn" value="Ingresar">
		</form>
	</div>
	
	<?php 
		
		if ($_POST) {
						$nombre=$_POST['nombre'];
						$correo=$_POST['correo'];
						$nickname=$_POST['nickname'];
						$pass=$_POST['pass'];
						$repass=$_POST['repass'];			
				

						if ($nombre !="" && $correo !="" && $nickname !="" && $pass !="" && $repass !="") {
							$con=mysqli_connect('localhost','root','','proyectoagil');
							$query="INSERT INTO usuarios VALUES('','$nombre','$correo','$nickname','$pass','$repass')";
							$row=mysqli_query($con,$query);
							if ($row) {
								echo "<script>alert('exito');
								windows.location.replace(dashboard.php);
								</script>";
							}else{
								echo "<script>alert('no conect')</script>";
							}

						}
					}
	 ?>



	

   <script>
	function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}

	function limpia() {
    var val = document.getElementById("miInput").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("miInput").value = '';
    }
}

   </script>

   <script> 
 		function validar(f) {
			if(f.pass.value != "" && (f.pass.value == f.repass.value)){
			return true;
		}
			else{
			alert("Los Password no coinciden");
			return false;
			}

		}

   </script>

</body>
</html>