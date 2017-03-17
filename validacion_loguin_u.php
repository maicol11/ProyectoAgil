<?php 
			$nickname = $_POST['nickname'];
			$pass = $_POST['pass'];
 			$sql = "SELECT nombre FROM usuarios WHERE nickname = '$nickname' AND pass = '$pass'";
			$query = mysqli_query($con, $sql);
 			if(mysqli_num_rows($query) > 0){
 				$row = mysqli_fetch_array($query);
 				$_SESSION['nombre'] = $row['nombre']." ".$row['nickname']; 		
 				header("location: dashboard.html");		
 			}else {
 				echo "<script>
 					alert('Email o Contraseña Incorrectos');
 				</script>";
			}
 ?>