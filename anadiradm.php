<?php 
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
?>