<?php 
			$correo = $_POST['correo'];
			$contrasena = $_POST['contrasena'];
 			$sql = "SELECT nombre FROM administrador WHERE correo = '$correo' AND contrasena = '$contrasena'";
			$query = mysqli_query($con, $sql);
 			if(mysqli_num_rows($query) > 0){
 				$row = mysqli_fetch_array($query);
 				$_SESSION['nombre'] = $row['nombre']; 		
 				header("location: dashboardadm.php");		
 			}else {
 				echo "<script>
 					alert('Email o Contraseña Incorrectos');
 				</script>";
			}
 ?>