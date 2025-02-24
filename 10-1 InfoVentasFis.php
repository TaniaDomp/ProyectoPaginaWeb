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
<title>Info ventas fisicas</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <img src="Logo-supsi.jpg" alt="" class="product__img1">
        </div>
        <div class="cer-se">
            <a href="cerrses.php"><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
    <h1>Elija el área de que desea realizar</h1><br>
    
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="sis1-ven.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Librería</h2>
                <p>Venta de libros</p>
                <a href="21%20infovent-libf.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="discos2-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Librería</h2>
                <p>Venta de discos</p>
                <a href="21%20infovent-disf.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="sis2-ven.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Teatro</h2>
                <p>Venta de los boletos de proyecciones y obras</p>
                <a href="21%20infovent-bolf.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="sis3-ven.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Cafetería</h2>
                <p>Venta de comida</p>
                <a href="21%20infovent-caff.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>