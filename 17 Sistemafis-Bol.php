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
    <link rel="stylesheet" href="sistema-cafo.css">
	<link rel="stylesheet" href="navsisgen.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Inicio boletos</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <a  href="7%20Inicio%20Gerencia%20y%20sistemas.php"><img src="Logo-supsi.jpg" alt="" class="product__img1"></a>
        </div>
        <div class="car">
            <a href="17%20Sistemafis-BolCar.php"><i class="fas fa-shopping-cart">   Ir a la venta</i></a>
        </div>
        <div class="cer-se">
            <a href="cerrses.php"><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
    <h1>Boletos</h1><br>
    
    <?php 
    include("conex.php");
    $resultado = $conexion->query("SELECT * FROM producto_bol where inventario_pbol > 0 order by id_prodbol ASC") or die($conexion->error);
    while ($fila = mysqli_fetch_array($resultado)){
        
    ?>
        <div class="container-tab">
        <div class="product">
            <a href = "17%20Sistemafis-BolCar.php?id=<?php echo $fila['id_prodbol']; ?>"><img src="<?php echo $fila['imagen_pbol']; ?>" alt="<?php echo $fila['nombre_pbol']; ?>" class="product__img"></a>
            <div class="product__description">
            <h3 class="product__title"><?php echo $fila['nombre_pbol']; ?></h3>
            <p class="product__price">$<?php echo $fila['precio_pbol']; ?></p>
            <center><a href="17%20Sistemafis-BolCar.php?id=<?php echo $fila['id_prodbol']; ?>" class="btn-bot2">Añadir</a></center>
            </div>
        </div>
        </div>
    <?php 
    }
    ?>
    
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>