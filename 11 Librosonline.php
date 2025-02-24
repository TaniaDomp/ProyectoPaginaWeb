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
<title>Libros online</title>
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
 
    <h1>Descarga tus libros gratis</h1><br>
    
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Libonline1-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Internet archive</h2>
                <p>Con más de 900 libros para descargar</p>
                <a href="https://archive.org/index.php" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Libonline2-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Freeditorial</h2>
                <p>Todas las descargas son gratuitas e ilimitadas</p>
                <a href="https://freeditorial.com/es" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Libonline3-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Biblioteca virtual universal</h2>
                <p>Con más de 900 libros para descargar</p>
                <a href="https://biblioteca.org.ar/" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Libonline4-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Project Gutenberg</h2>
                <p>Ofrece más de 57,000 libros virtuales</p>
                <a href="https://www.gutenberg.org/" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Libonline5-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Libroteca</h2>
                <p>Con un total de 54,103 libros en PDF</p>
                <a href="http://www.libroteca.net/" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Libonline6-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>bubok</h2>
                <p>Puedes encontrar libros de diversos temas</p>
                <a href="https://www.bubok.es/" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>
    <div class="Colum">
        <div class="container">
            <div class="colum-img">
                <img src="Libonline7-sis.jpg" alt="" class="product__img">
            </div>
            <div class="colum-tex">
                <h2>Ebiblioteca</h2>
                <p>Con más de 135,944 libros gratuitos en PDF</p>
                <a href="https://ebiblioteca.org/" class="btn-bot2">Vamos ahora</a>
            </div>
        </div>
    </div>    
    
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>