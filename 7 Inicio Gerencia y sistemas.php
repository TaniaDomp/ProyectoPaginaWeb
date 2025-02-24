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
<title>Gerencia y sistemas</title>
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
    
    <br><h1>Bienvenido al sistema de TEGODE: <?php echo $_SESSION['correo1']?></h1>
    <h2>Área de gerencia y sistemas</h2><br>
    
    <section class="des-ec33"> 
    <div class="container-flex3">
        <div class="colum-3 colum33">
            <img src="Gerencia1-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Ventas</h3>
            <p class="product__price">Ingresa a la sección de ventas físicas</p>
            <center><a href="10%20Ventas%20fisicas.php" class="btn-bot2">Ir a la sección</a></center>
            </div>
        </div>
        <div class="colum-3 colum33">
            <img src="Gerencia2-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Ventas online</h3>
            <p class="product__price">Revisa los pedidos pendientes</p>
            <center><a href="12%20Ventas%20online-em.php" class="btn-bot2">Ir a la sección</a></center>
            </div>
        </div>
        <div class="colum-3 colum33">
            <img src="Gerencia3-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Productos e inventarios</h3>
            <p class="product__price">Consulte el estatus de los productos e inventarios</p>
            <center><a href="10%20Produceinventarios.php" class="btn-bot2">Ir a la sección</a></center>
            </div>
        </div>
    </div>
    </section>
    
    <section class="des-ec33"> 
    <div class="container-flex3">
        <div class="colum-3 colum33">
            <img src="Gerencia4-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Información de las ventas</h3>
            <p class="product__price">Consulte la información de las ventas realizadas</p>
            <center><a href="10%20InfoVentas.php" class="btn-bot2">Ir a la sección</a></center>
            </div>
        </div>
        <div class="colum-3 colum33">
            <img src="Gerencia5-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Encuentre libros online</h3>
            <p class="product__price">Vaya a las páginas y encuentre diversidad de libros</p>
            <center><a href="11%20Librosonline.php" class="btn-bot2">Vamos ahora</a></center>
            </div>
        </div>
        <div class="colum-3 colum33">
            <img src="Gerencia6-sis.jpg" alt="" class="product__img">
            <div class="product__description">
            <br><h3 class="product__title">Información de los usuarios</h3>
            <p class="product__price">Consulte el estatus de los usuarios registrados</p>
            <center><a href="13%20Datos%20usuarios.php" class="btn-bot2">Ir a la sección</a></center>
            </div>
        </div>
    </div>
    </section>

    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>