<?php
    session_start();
    include("conex.php");
    
    $varsesion = $_SESSION['correo1'];
    $array = array ($varsesion);
    $usuario1 = implode (",", $array);
    
        if ($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización';
        die ();
    }

    if (!isset($_SESSION['carrito4'])){
        header('location: 15 SistemaVonline-libo.php');
    }
    
    $arreglo = $_SESSION['carrito4'];

    $total = 0;
    for ($i=0;$i<count($arreglo);$i++){
        $total = $total + ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
    }
    
    $fecha = date ('Y-m-d h:m:s');
     
    
    $conexion -> query ("INSERT INTO ventas_libo(total_libo, fecha_libo, Usuario) VALUES ($total, '$fecha', '$usuario1')") or die ($conexion->error); 
    
    for ($i=0;$i<count($arreglo);$i++){
    $conexion -> query ("INSERT INTO entregas_libo(id_prodlib, cantidad, total_libo, fecha_libo, Usuario) VALUES (
    ".$arreglo[$i]['Id'].",
    ".$arreglo[$i]['Cantidad'].",
    $total, 
    '$fecha', 
    '$usuario1')") or die ($conexion->error);
    }
    
    $id_vlibo = $conexion -> insert_id;

    for ($i=0;$i<count($arreglo);$i++){
        $conexion -> query ("INSERT INTO productos_ventlibo(id_vlibo, id_prodlib, cantidad, precio_plib, subtotal_lib) VALUES 
        ($id_vlibo, 
        ".$arreglo[$i]['Id'].",
        ".$arreglo[$i]['Cantidad'].",
        ".$arreglo[$i]['Precio'].",
        ".$arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'].")") or die ($conexion->error);
        $conexion -> query ("UPDATE producto_lib set inventario_plib = inventario_plib -".$arreglo[$i]['Cantidad']." WHERE id_prodlib =".$arreglo[$i]['Id'])  or die ($conexion->error);
    }
                                                                                        
unset($_SESSION['carrito4']);
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="gracias.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script> 
<title>Gracias por su compra</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <a href="15%20SistemaVonline-libo.php"><img src="Logo-supsi.jpg" alt="" class="product__img1"></a>
        </div>
        <div class="cer-se">
            <a href="cerrses.php"><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
    <div class="icon-pal">
        <i class="fas fa-check-circle"></i>
    </div>
    <div class="text">
        <p class="text-grac">Gracias por su compra</p>
        <p class="text-prim">Le recordamos que el pago se realiza al momento de recoger el producto</p>
        <p class="text-prim">Puede ir a recoger su producto en un periodo de entre una a dos horas</p>
    </div>
    <center><button class="btn-re" onclick="window.location = '15 SistemaVonline-libo.php'">Regresar a la tienda</button></center>

    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
    <?php
    mysqli_close($conexion);
    ?>
    
</body>
</html>