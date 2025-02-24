<?php
include("conex.php");
 session_start();
    
$varsesion = $_SESSION['correo1'];
$array = array ($varsesion);
$usuario1 = implode (",", $array);

    if ($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización';
        die ();
    }

$compra = "SELECT * FROM ventasfis_caf";
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="Tablaventas-emp.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Ventas de boletos</title>
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
 
    <h1>Datos de los productos</h1><br>
    
    <div class="container-tab">
        <div class="table-title">Datos de la venta</div>
        <div class="table-header">Id de la venta</div>
        <div class="table-header">Total</div>
        <div class="table-header">Fecha</div>
        <div class="table-header">Usuario</div>
        <?php $resultado = mysqli_query($conexion, $compra);
        while ($row=mysqli_fetch_assoc($resultado)){
        ?>
        <div class="table-item"><?php echo $row["id_vcaf"];?></div>
        <div class="table-item">$<?php echo number_format($row["total_caf"], 2, '.', '');?></div>
        <div class="table-item"><?php echo $row["fecha_caf"];?></div>
        <div class="table-item"><?php echo $row["Usuario"];?></div>
        <?php } mysqli_free_result($resultado);?>
    </div>
   
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>