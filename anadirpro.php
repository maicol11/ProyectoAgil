<?php 
						$nombre=$_POST['nombre'];
						$precio=$_POST['precio'];
						$cantidad=$_POST['cantidad'];
						$plataforma=$_POST['plataforma'];
					

						if ($nombre !="" && $precio !="" && $cantidad !="" && $plataforma !="") {
							$con=mysqli_connect('localhost','root','','proyectoagil');
							$query="INSERT INTO productos VALUES('','$nombre','$precio','$cantidad','$plataforma')";
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