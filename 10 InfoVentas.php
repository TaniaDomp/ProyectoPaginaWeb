<?php
    session_start();
    
    $varsesion = $_SESSION['correo1'];

    if ($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización';
        die ();
    }
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="Libros%20online.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Info de las ventas</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <img src="Logo-supsi.jpg" alt="" class="product__img1">
        </div>
        <div class="cer-se">
            <a href=""><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
    <h1>Elija el área de chequeo</h1><br>
    
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="infoventfis-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Ventas físicas</h2>
                <p>Revise las ventas realizadas dentro del establecimiento</p>
                <a href="10-1%20InfoVentasFis.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="infoventon-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Ventas online</h2>
                <p>Revise las ventas realizadas vía online</p>
                <a href="10-1%20InfoVentasOn.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>