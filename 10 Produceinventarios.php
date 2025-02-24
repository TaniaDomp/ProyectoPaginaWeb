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
<title>Productos e inventarios</title>
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
 
    <h1>Elija el área que desea consultar</h1><br>
    
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="comp1-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Librería</h2>
                <p>Libros</p>
                <a href="20%20inventypro-lib.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="datoventas3-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Librería</h2>
                <p>Discos</p>
                <a href="20%20inventypro-dis.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Tea-incom1.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Teatro</h2>
                <p>Boletos de proyecciones y obras</p>
                <a href="20%20inventypro-bol.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Usuario3-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Cafetería</h2>
                <p>Comida</p>
                <a href="20%20inventypro-caf.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>