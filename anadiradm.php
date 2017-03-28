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
						$nimage = time();
						$path = $_FILES['image']['name'];
						$extension = pathinfo($path, PATHINFO_EXTENSION);
						$image = 'avatars/admin/'.$nimage.'.'.$extension;
						if ($nombre !="" && $apellido !="" && $edad !="" && $correo !="" && $cedula !="" && $ocupacion !="" && $telefono !="" && $direccion !="" && $contrasena !="" && $recontrasena !="" && $image !="") {
							$con=mysqli_connect('localhost','root','','proyectoagil');
							move_uploaded_file($_FILES['image']['tmp_name'] , $image);
							$query="INSERT INTO administrador VALUES('','$nombre','$apellido','$edad','$correo','$cedula','$ocupacion','$telefono','$direccion','$contrasena','$recontrasena', '$image')";
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