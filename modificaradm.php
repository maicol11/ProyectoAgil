<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<style>
		*{
  padding:0;margin:0;
}
body{
  font:16px/1 sans-serif
  background-color: #fff;
  background-image: url(imgs/index.jpg);
}
header{
  background-color: rgba(20,20,20,0.5);
  padding: 5px;
}
img.logo {
  width: 50px;
  height: 50px;
  position: absolute;
  left: 530px;
  top: 15px;
}
h1{
  text-align: center;
  color: gray;
 
}
nav.vertical{
  position:relative;

  background-color: rgba(20,20,20,0.5);
}
nav{
  height: 800px;
  width: 300px;
}

nav.vertical ul{
  list-style: none;
}

nav.vertical li{
  position:relative;
}

nav.vertical a{
  display:block;
  color:#eee;
  text-decoration:none;
  padding:10px 15px;
  transition:0.2s;
}

nav.vertical li:hover > a{
  background:#778;
}


nav.vertical ul ul{
  background:rgba(0,0,0,0.1);
  padding-left:20px;
  transition: max-height 0.2s ease-out;
  max-height:0;
  overflow:hidden;
}

nav.vertical li:hover > ul{
  max-height:500px;
  transition: max-height 0.25s ease-in;
}


img.img1{
  width: 22px;
  height: 22px;
  position: absolute;
  top: 10px;
  left: 250px;
}

section {
  position: absolute;
  left: 350px;
  top: 120px;
  text-align: center;
}
article#se{
 
  width: 800px;
  height: 500px;
 
}
article#se img{
  width: 800px;
  height: 400px;
}
h2{
  position: absolute;
  color: #fff;
  left: 615px;

}
table {
  position: absolute;
  color: #00c4c4;
  left: 50px;
  top: 60px;
  width: 500px;
}

    h1 {
      text-align: center;
      color: white;
    }
    
    #btn {
      position: absolute;
      left: 25%;
    }
     #btn1 {
      position: absolute;
      left: 50%;
    }

    .boxlogin {
      position: absolute;
      top: 10px;
      left: 500px;
      border-radius: 4px;
      margin: 50px auto;
      width: 380px;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      background-color: rgba(40,40,40,0.5);
      color: white;
      box-shadow: 3px 3px white,
    }
	</style>
</head>
<body>
	<?php 
			$con = mysqli_connect('localhost','root','','proyectoagil');
			if (mysqli_connect_errno()) {
				echo "No se pudo conectar a la BD".mysqli_error();
			}

			$id=$_GET['id'];
			
			$query = mysqli_query($con, "SELECT * FROM administrador WHERE id = '$id'");
			$row=mysqli_fetch_array($query);
 	?>
	<h2 id="titulox2">Modificar</h2>
    <div id="frmod" class="boxlogin">
     <form action="" METHOD="POST" name="flogin" id="flogin" enctype="multipart/form-data">
      <label for="">Nombre</label>
      <input type="text" name="nombre" value="<?php echo $row["nombre"]; ?>" id="username" class="form-control" placeholder="Escriba su nombre" onkeypress="return soloLetras(event)" required>

      <label for="">Apellido</label>
      <input type="text" name="apellido" value="<?php echo $row["apellido"]; ?>" class="form-control" placeholder="Escriba su apellido" onkeypress="return soloLetras(event)" required>

      <label for="">Edad</label>
      <input type="number" name="edad" value="<?php echo $row["edad"]; ?>" class="form-control" placeholder="Escriba su edad" required>
      
      <label for="">Correo ELectronico</label>
      <input type="email" name="correo" value="<?php echo $row["correo"]; ?>" class="form-control" placeholder="Escriba su correo electronico" required>

      <label for="">Cedula</label>
      <input type="number" name="cedula" value="<?php echo $row["cedula"]; ?>" class="form-control" placeholder="Escriba el numero de su cedula">

      <label for="">Ocupacion</label>
      <input type="text" name="ocupacion" value="<?php echo $row["ocupacion"]; ?>" class="form-control" placeholder="Ocupacion" onkeypress="return soloLetras(event)" required>

      <label for="">Telefono</label>
      <input type="number" name="telefono" value="<?php echo $row["telefono"]; ?>" class="form-control" placeholder="Escriba su telefono" required>

      <label for="">Direccion</label>
      <input type="text" name="direccion" value="<?php echo $row["direccion"]; ?>" class="form-control" placeholder="Direccion" required>

      <label for="">Contraseña</label>
      <input type="text" name="contrasena" value="<?php echo $row["contrasena"]; ?>" id="pass" class="form-control" placeholder="Repita su contraseña" required>
      
      <label for="">Repita su contraseña</label>
      <input type="text" name="recontrasena" value="<?php echo $row["recontrasena"]; ?>" id="repass" class="form-control" placeholder="Repita su contraseña" required>
      <img id="avatar" src="<?=$row['image']?>">
      <input type="file" id="upload" name="image" accept="image/*">
      <br>
      <input type="submit" name="modadm" class="btn btn-success" id="btn" value="Modificar">
      
    </form>
      <input type="button" onclick=" location.href='dashboardadm.php'" class="btn btn-info" id="btn1" value="Regresar" /> 
	
  </div>
</body>
</html>
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
            $nimage    = time();
            $path      = $_FILES['image']['name'];
            $extension = pathinfo($path, PATHINFO_EXTENSION);		
            $image     = 'avatars/admin/'.$nimage.'.'.$extension;

						if ($nombre !="" && $apellido !="" && $edad !="" && $correo !="" && $cedula !="" && $ocupacion !="" && $telefono !="" && $direccion !="" && $contrasena !="" && $recontrasena !="" && $image !="") {
							$con=mysqli_connect('localhost','root','','proyectoagil');
              move_uploaded_file($_FILES['image']['tmp_name'] , $image);
							$query="UPDATE administrador SET nombre='$nombre', apellido='$apellido', edad='$edad', correo='$correo', cedula='$cedula', ocupacion='$ocupacion', telefono='$telefono', direccion='$direccion', contrasena='$contrasena', recontrasena='$recontrasena',image='$image' WHERE id='$id'";
							$row=mysqli_query($con,$query);
							if ($row) {
								echo "<script>alert('exito');
								windows.location.replace('dashboardadm.php');
								</script>";
							}else{
								echo "<script>alert('no conect')</script>";
							}

					}
	}
 ?>