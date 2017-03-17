<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Index</title>
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
  left: 280px;

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
      left: 40%;
    }

    .boxlogin {
      position: absolute;
      top: 10px;
      left: 150px;
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
<header>
  <img class="logo" src="imgs/logo.PNG" alt="">
  <h1>JCMM GAMES</h1>
</header>
<nav class="vertical">
  <ul>
    <li><img class="img1" src="imgs/capturau.PNG" alt=""><a href="#" >Usuarios
      </a></li>
    <li><img class="img1" src="imgs/capturau.PNG" alt=""><a href="#">Gestion Administradores</a>
      <ul>
        <li><img class="img1" src="imgs/capturac.PNG" alt=""><a href="#" id="consultar">Consultar</a></li>
        <li><img class="img1" src="imgs/capturag.PNG" alt=""><a href="#" id="add">Añadir</a></li>
      </ul>
    </li>
     <li><img class="img1" src="imgs/capturar.PNG" alt=""><a href="#">Gestion Catalogos</a>
      <ul>
        <li><img class="img1" src="imgs/capturac.PNG" alt=""><a href="#">Consultar</a></li>
        <li><img class="img1" src="imgs/capturag.PNG" alt=""><a href="#">Añadir</a></li>
      </ul>
    </li>
     <li><img class="img1" src="imgs/capturae.PNG" alt=""><a href="#">Gestion Productos</a>
      <ul>

        <li><img class="img1" src="imgs/capturac.PNG" alt=""><a href="#">Consultar</a></li>
        <li><img class="img1" src="imgs/capturag.PNG" alt=""><a href="#">Añadir</a></li>
      </ul>
    </li>
    <li><img class="img1" src="imgs/capturaf.PNG" alt=""><a href="cerrar_sesion.php">Cerrar Sesion</a>
    </li>
  </ul>
</nav>
<section>

  <h2 id="titulo">Administradores</h2> 
  <table id="tabla" class="table table-striped">
      <tr>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Edad</td>
        <td>Correo </td>
        <td>Cedula</td>
        <td>Ocupacion</td>
        <td>Telefono</td>
        <td></td>
        <td></td>
      </tr>
  
    <?php
      $con=mysqli_connect('localhost','root','','proyectoagil');
      $query=mysqli_query($con,"SELECT * FROM administrador");
      while ($row=mysqli_fetch_array($query)) {
        echo "
          <tr>
            <td>".$row['nombre']."</td>
            <td>".$row['apellido']."</td>
            <td>".$row['edad']."</td>
            <td>".$row['correo']."</td>
            <td>".$row['cedula']."</td>
            <td>".$row['ocupacion']."</td>
            <td>".$row['telefono']."</td>
            <td><a href='ConsultarAdm1.php?id=".$row['id']."'><span class='glyphicon glyphicon-pencil'></span></a>
           <td><a href='ModificarAdm.php?id=".$row['id']."'><span class='glyphicon glyphicon-trash'></span></a></td>

          </td>
        </tr>";
      }
    ?> 
    </table>
    <h2 id="titulox">Registro</h2>
    <div id="frad" class="boxlogin">
     <form action="" METHOD="POST" name="flogin" id="flogin">
      <label for="">Nombre</label>
      <input type="text" name="nombre" id="username" class="form-control" placeholder="Escriba su nombre" onkeypress="return soloLetras(event)" required>

      <label for="">Apellido</label>
      <input type="text" name="apellido" class="form-control" placeholder="Escriba su apellido" onkeypress="return soloLetras(event)" required>

      <label for="">Edad</label>
      <input type="number" name="edad" class="form-control" placeholder="Escriba su edad" required>
      
      <label for="">Correo ELectronico</label>
      <input type="email" name="correo" class="form-control" placeholder="Escriba su correo electronico" required>

      <label for="">Cedula</label>
      <input type="number" name="cedula" class="form-control" placeholder="Escriba el numero de su cedula">

      <label for="">Ocupacion</label>
      <input type="text" name="ocupacion" class="form-control" placeholder="Ocupacion" onkeypress="return soloLetras(event)" required>

      <label for="">Telefono</label>
      <input type="number" name="telefono"  class="form-control" placeholder="Escriba su telefono" required>

      <label for="">Direccion</label>
      <input type="text" name="direccion" class="form-control" placeholder="Direccion" required>

      <label for="">Contraseña</label>
      <input type="password" name="contrasena" id="pass" class="form-control" placeholder="Repita su contraseña" required>
      
      <label for="">Repita su contraseña</label>
      <input type="password" name="recontrasena" id="repass" class="form-control" placeholder="Repita su contraseña" required>


      <br>
      <input type="submit" name="addadm" class="btn btn-success" id="btn" value="Ingresar">
    </form>

  </div>
</section>
<script>
  var consultar = document.getElementById('consultar');
  var tabla = document.getElementById('tabla');
  var titulo = document.getElementById('titulo');
  var add = document.getElementById('add');
  var frad = document.getElementById('frad');
  var titulox = document.getElementById('titulox');





  tabla.style.display = 'none';
  titulo.style.display = 'none';
  frad.style.display = 'none';
  titulox.style.display = 'none';



  consultar.onclick = function() {
    tabla.style.display = 'block';
    titulo.style.display = 'block';
    frad.style.display = 'none';
    titulox.style.display = 'none';



  }
  add.onclick = function() {
    tabla.style.display = 'none';
    titulo.style.display = 'none';
    frad.style.display = 'block';
    titulox.style.display = 'block';

  }

</script>

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
<?php 
  if($_POST){
    if(isset($_POST['addadm'])){
      require "anadiradm.php";
    }
  }
 ?>


</body>
</html>