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
	<link rel="stylesheet" href="Sistema%20emp.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="slider.css" type="text/css">
<title>Inicio del sistema</title>
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
    
    <link rel="stylesheet" href="nav%20sis.css">
    
    <br><br><h1>Bienvenido a TEGODE: <?php echo $_SESSION['correo1']?></h1><br><br>
    
    <section class="des-ec33"> 
    <div class="container-flex3">
        <div class="colum-3 colum33">
            <img src="Usuario1-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Compre sus libros</h3>
            <center><a href="15%20SistemaVonline-libo.php" class="btn-bot2">¡Vamos ahora!</a></center>
            </div>
        </div>
        <div class="colum-3 colum33">
            <img src="Usuario2-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Elija sus discos</h3>
            <center><a href="16%20SistemaVonline-Dis.php" class="btn-bot2">¡Vamos ahora!</a></center>
            </div>
        </div>
        <div class="colum-3 colum33">
            <img src="Usuario3-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Productos de cafeteria</h3>
            <center><a href="14%20SistemaVonline-Cafet.php" class="btn-bot2">¡Vamos ahora!</a></center>
            </div>
        </div>
    </div>
    </section>
    <section class="des-ec33"> 
    <div class="container-flex3">
        <div class="colum-3 colum33">
            <img src="Usuario4-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Compre sus boletos</h3>
            <center><a href="17%20SistemaVonline-Bol.php" class="btn-bot2">¡Vamos ahora!</a></center>
            </div>
        </div>
        <div class="colum-3 colum33">
            <img src="Usuario5-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Encuentre libros online</h3>
            <center><a href="11%20Librosonline.php" class="btn-bot2">¡Vamos ahora!</a></center>
            </div>
        </div>
        <div class="colum-3 colum33">
            <img src="Usuario6-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Consulte sus compras</h3>
            <center><a href="18%20ConsultadatosUsu.php" class="btn-bot2">¡Vamos ahora!</a></center>
            </div>
        </div>
    </div>
    </section>    

    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>