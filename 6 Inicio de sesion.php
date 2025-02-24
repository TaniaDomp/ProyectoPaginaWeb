<?php
include("conex.php");
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="InSes.css">
	<link rel="stylesheet" href="nav.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="slider.css" type="text/css">
<title>Inicio de sesión</title>
</head>
<body>
    <nav> 
    <ul class="menu">
    <li><a href="index.html">Inicio</a></li>
    <li><a href="2%20Lect%20y%20Act.html">Lectura y Actividades</a></li>
    <li><a href="3%20Informacion%20a%20la%20com.html">Información a la comunidad</a></li>
    <li><a href="4%20Produc%20y%20serv.html">Productos y servicios</a></li>
    <li><a href="5%20Mapa.html">Mapa</a></li>
    <li><a href="6%20Inicio%20de%20sesion.php">Ingresar</a></li>
    </ul>
    </nav>
    
    <div class= "dos-colum2"> 
    <div class="colum-izq">
        <h1 class="Tit-F"> REGISTRATE</h1>
        <form class="Formulario-ic" action="Insertar.php" method="post">
        <input type="text" name = "correo" id="correo-ic"  placeholder="  Ingrese su correo o usuario" class="text-2" required>
        <br>
        <input type="password" name="password"  placeholder="  Elija una contraseña" class="text-2" required>
        <br>
        <input type="submit" class="button button-block" placeholder="Agregar">
    </form>
    </div>    
    <div class="colum-dere">
       <h1 class="Tit-F"> INICIAR SESIÓN</h1>
        <form class="Formulario-is" action="Validar-1.php" method="post">
        <input type="text" name = "correo1"  placeholder="  Ingrese su correo  o usuario" class="text-2" required>
        <br>
        <input type="password" name="password1" placeholder="  Contraseña" class="text-2" required>
        <br>
        <input type="submit" class="button button-block" placeholder="Agregar">
    </form>
    </div>
    </div>
    
    
</body>
</html>