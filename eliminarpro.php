<?php 
	$con = mysqli_connect('localhost','root','','proyectoagil');

	$id = $_GET['id'];
	$del = mysqli_query($con, "DELETE FROM productos WHERE id=$id");
	if($del){
		echo "<script>
			alert('Registro eliminado con exito...')
			window.location.replace('dashboardadm.php');</script>";
	}else{
		echo "No se pudo eliminar";
	}
 ?>
