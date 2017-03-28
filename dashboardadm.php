<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Index</title>
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
  left: 330px;
  top: -25px;

}
table {
  position: absolute;
  color: #00c4c4;
  left: 220px;
  top: 60px;
  width: 500px;
}

table#tablay {
  position: absolute;
  color: #00c4c4;
  left: 50px;
  top: 60px;
  width: 500px;
}

table#tablau {
  position: absolute;
  color: #00c4c4;
  left: 130px;
  top: 60px;
  width: 500px;
}

h1 {
  text-align: center;
  color: gray;
}
    
#btn {
  position: absolute;
  left: 40%;
}

div.boxlogin {
  position: absolute;
  top: -20px;
  left: 200px;
  border-radius: 4px;
  margin: 50px auto;
  width: 380px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  background-color: rgba(40,40,40,0.5);
  color: white;
  box-shadow: 3px 3px white,

}

textarea {
  color: black;
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
    <li><img class="img1" src="imgs/capturau.PNG" alt=""><a href="#" id="consultaru">Usuarios
      </a></li>
    <li><img class="img1" src="imgs/capturau.PNG" alt=""><a href="#">Gestion Administradores</a>
      <ul>
        <li><img class="img1" src="imgs/capturac.PNG" alt=""><a href="#" id="consultar">Consultar</a></li>
        <li><img class="img1" src="imgs/capturag.PNG" alt=""><a href="#" id="add">Añadir</a></li>
      </ul>
    </li>
    <li><img class="img1" src="imgs/capturae.PNG" alt=""><a href="#">Gestion Productos</a>
      <ul>
        <li><img class="img1" src="imgs/capturac.PNG" alt=""><a href="#" id="consultara">Consultar</a></li>
        <li><img class="img1" src="imgs/capturag.PNG" alt=""><a href="#" id="adda">Añadir</a></li>
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
        <td>Direccion</td>
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
            <td>".$row['direccion']."</td>
            <td><a href='modificaradm.php?id=".$row['id']."'><span class='glyphicon glyphicon-pencil'></span></a>
           <td><a href='eliminaradm.php?id=".$row['id']."'><span class='glyphicon glyphicon-trash'></span></a></td>

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
      
  <h2 id="titulop">Productos</h2> 
  <table id="tablap" class="table table-striped">
      <tr>
        <td>Nombre</td>
        <td>Precio</td>
        <td>Cantidad</td>
        <td>Plataforma </td>
        <td></td>
        <td></td>
      </tr>
  
    <?php
      $con=mysqli_connect('localhost','root','','proyectoagil');
      $query=mysqli_query($con,"SELECT * FROM productos");
      while ($row=mysqli_fetch_array($query)) {
        echo "
          <tr>
            <td>".$row['nombre']."</td>
            <td>".$row['precio']."</td>
            <td>".$row['cantidad']."</td>
            <td>".$row['plataforma']."</td>
            <td><a href='modificarpro.php?id=".$row['id']."'><span class='glyphicon glyphicon-pencil'></span></a>
           <td><a href='eliminarpro.php?id=".$row['id']."'><span class='glyphicon glyphicon-trash'></span></a></td>

          </td>
        </tr>";
      }
    ?> 
    </table>

  <h2 id="tituloz">Añadir</h2> 
  <div id="prad" class="boxlogin">
     <form action="" METHOD="POST" name="flogin" id="flogin">
      <label for="">Nombre</label>
      <input type="text" name="nombre" id="" class="form-control" placeholder="Nombre producto" required>

      <label for="">Precio</label>
      <input type="text" name="precio" class="form-control" placeholder="Precio" required>

      <label for="">Cantidad</label>
      <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" required>
      
      <label for="">Plataforma</label>
      <textarea name="plataforma" id="" cols="50" rows="10"></textarea>

      <br>
      <input type="submit" name="addpro" class="btn btn-success" id="btn" value="Añadir">
    </form>
    
  </div>

  
  <h2 id="titulou">Usuarios</h2> 
  <table id="tablau" class="table table-striped">
      <tr>
        <td>Nombre</td>
        <td>Correo</td>
        <td>Nickname</td>
        <td>Contraseña </td>
        <td>RepContraseña </td>
      </tr>
  
    <?php
      $con=mysqli_connect('localhost','root','','proyectoagil');
      $query=mysqli_query($con,"SELECT * FROM usuarios");
      while ($row=mysqli_fetch_array($query)) {
        echo "
          <tr>
            <td>".$row['nombre']."</td>
            <td>".$row['correo']."</td>
            <td>".$row['nickname']."</td>
            <td>".$row['pass']."</td>
            <td>".$row['repass']."</td>
          </td>
        </tr>";
      }
    ?> 
    </table>




</section>
<script>
  var consultar = document.getElementById('consultar');
  var consultara = document.getElementById('consultara');
  var consultaru = document.getElementById('consultaru');
  var tabla = document.getElementById('tabla');
  var tablap = document.getElementById('tablap');
  var titulo = document.getElementById('titulo');
  var titulop = document.getElementById('titulop'); 
  var tituloz = document.getElementById('tituloz');  
  var add = document.getElementById('add');
  var adda = document.getElementById('adda');
  var frad = document.getElementById('frad');
  var titulox = document.getElementById('titulox');
  var prad = document.getElementById('prad');
  var tablau = document.getElementById('tablau');
  var titulou = document.getElementById('titulou');






  tabla.style.display = 'none';
  titulo.style.display = 'none';
  frad.style.display = 'none';
  titulox.style.display = 'none';
  tablap.style.display = 'none';
  titulop.style.display = 'none';
  tituloz.style.display = 'none';
  prad.style.display = 'none';
  tablau.style.display = 'none';
  titulou.style.display = 'none';


  consultar.onclick = function() {
    tabla.style.display = 'block';
    titulo.style.display = 'block';
    frad.style.display = 'none';
    titulox.style.display = 'none';
    tablap.style.display = 'none';
    titulop.style.display = 'none';
    prad.style.display = 'none';
    tituloz.style.display = 'none';
    tablau.style.display = 'none';
    titulou.style.display = 'none';


  }
  add.onclick = function() {
    tablap.style.display = 'none';
    tabla.style.display = 'none';
    titulo.style.display = 'none';
    titulop.style.display = 'none';
    prad.style.display = 'none';
    tituloz.style.display = 'none';
    tablau.style.display = 'none';
    titulou.style.display = 'none';
    frad.style.display = 'block';
    titulox.style.display = 'block';

  }

   consultara.onclick = function() {
    tabla.style.display = 'none';
    titulo.style.display = 'none';
    frad.style.display = 'none';
    prad.style.display = 'none';
    titulox.style.display = 'none';
    tituloz.style.display = 'none';
    tablau.style.display = 'none';
    titulou.style.display = 'none';
    tablap.style.display = 'block';
    titulop.style.display = 'block';

  }

   adda.onclick = function() {
    tablap.style.display = 'none';
    tabla.style.display = 'none';
    titulo.style.display = 'none';
    titulop.style.display = 'none';
    frad.style.display = 'none';
    titulox.style.display = 'none';
    tablau.style.display = 'none';
    titulou.style.display = 'none';
    prad.style.display = 'block';
    tituloz.style.display = 'block';
  }


   consultaru.onclick = function() {
    tabla.style.display = 'none';
    titulo.style.display = 'none';
    frad.style.display = 'none';
    titulox.style.display = 'none';
    tablap.style.display = 'none';
    titulop.style.display = 'none';
    prad.style.display = 'none';
    tituloz.style.display = 'none';
    tablau.style.display = 'block';
    titulou.style.display = 'block';


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
  <?php 
      if ($_POST) {
        if(isset($_POST['modadm'])) {
          require "modificaradm.php";
        }
    }
     ?>

<?php 
  if($_POST){
    if(isset($_POST['addpro'])){
      require "anadirpro.php";
    }
  }
 ?>
  <?php 
      if ($_POST) {
        if(isset($_POST['modpro'])) {
          require "modificarpro.php";
        }
    }
     ?>


</body>
</html>