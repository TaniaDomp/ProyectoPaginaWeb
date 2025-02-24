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
<title>Datos de las compras</title>
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
 
    <h1>Revisa la información de tus compras</h1><br>
    
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="datoventas1-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Cafeteria</h2>
                <p>Consulta tu historial de compras</p>
                <a href="14%20SistemaVonline-datcafo.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="datoventas2-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Libros</h2>
                <p>Consulta tu historial de compras</p>
                <a href="15%20SistemaVonline-datlibo.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="datoventas3-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Discos</h2>
                <p>Consulta tu historial de compras</p>
                <a href="16%20SistemaVonline-datdiso.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="datoventas4-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Boletos</h2>
                <p>Consulta tu historial de compras</p>
                <a href="17%20SistemaVonline-datbolo.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>