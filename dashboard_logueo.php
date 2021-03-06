<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Index</title>
<?php session_start(); ?>

<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="icon" href="imgs/ff.jpg">
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
  color: #fff;
}


</style>
<?php 
  $con = mysqli_connect('localhost','root','','proyectoagil');
      if(mysqli_connect_errno()){
        echo "No se pudo conectar a la BD".mysqli_error();
      }

 ?>
</head>
<body>
<header>
  <img class="logo" src="imgs/logo.PNG" alt="">
  <h1>JCMM GAMES</h1>
</header>
<nav class="vertical">
  <ul>
    <li><img class="img1" src="imgs/Captura.PNG" alt=""><a href=""><?php echo $_SESSION['nombre'];?></a></li>
    <li><img class="img1" src="imgs/capturah.PNG" alt=""><a href="#">Catalogo de venta</a>
      <ul>
        <li><a href="catalogo_ventas.html">Todos los juegos</a></li>
        <li><a href="cv_ubisoft.html">Ubisoft</a></li>
        <li><a href="cv_ea.html">Electronic Arts</a></li>
        <li><a href="cv_capcom.html">Capcom</a></li>
      </ul>
    </li>
    <li><img class="img1" src="imgs/capturaf.PNG" alt=""><a href="cerrar_sesion.php">Cerrar Sesion</a>
    </li>
  </ul>
</nav>

<section>
  <h2>Ultimos juegos</h2>
  <article id="se" class="owl-carousel owl-theme">
    <img src="imgs/hzd.jpg" alt="">
    <img src="imgs/ff.jpg" alt="">
    <img src="imgs/na.jpg" alt="">
    <img src="imgs/m3.jpg" alt="">
    <img src="imgs/re7.jpg" alt="">
    <img src="imgs/rs.jpg" alt="">
    <img src="imgs/se4.jpg" alt="">
</article>
</section>
<script src="js/jquery-3.1.1.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.owl-carousel').owlCarousel({
        autoplay: 100,
          loop:true,
          margin:10,
          items: 1
    });
  });
  </script>
</body>
</html>


