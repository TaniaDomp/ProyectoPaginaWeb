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
<title>Inicio discos</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <a href="9%20Usuarios%20sistema.php"><img src="Logo-supsi.jpg" alt="" class="product__img1"></a>
        </div>
        <div class="car">
            <a href="16%20SistemaVonline-DisCar.php"><i class="fas fa-shopping-cart">  Ir a carrito</i></a>
        </div>
        <div class="cer-se">
            <a href="cerrses.php"><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
    <h1>Discos</h1><br>
    
    <?php 
    include("conex.php");
    $resultado = $conexion->query("SELECT * FROM producto_dis where inventario_pdis > 0 order by id_produdis ASC") or die($conexion->error);
    while ($fila = mysqli_fetch_array($resultado)){
        
    ?>
        <div class="container-tab">
        <div class="product">
            <a href = "16%20SistemaVonline-Dis1.php?id=<?php echo $fila['id_produdis']; ?>"><img src="<?php echo $fila['imagen_pdis']; ?>" alt="<?php echo $fila['nombre_pdis']; ?>" class="product__img"></a>
            <div class="product__description">
            <h3 class="product__title"><?php echo $fila['nombre_pdis']; ?></h3>
            <p class="product__price">$<?php echo $fila['precio_pdis']; ?></p>
            <center><a href="16%20SistemaVonline-Dis1.php?id=<?php echo $fila['id_produdis']; ?>" class="btn-bot2">Comprar</a></center>
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