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

$compra = "SELECT * FROM entregas_cafo WHERE Usuario = '$usuario1'";
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="Tablascompra-usuario.css">
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
 
    <h1>Datos generales</h1><br>
    
    <div class="container-tab">
        <div class="table-title">Datos de sus compras</div>
        <div class="table-header">Id de la entrega</div>
        <div class="table-header">Id de producto</div>
        <div class="table-header">Cantidad</div>
        <div class="table-header">Total</div>
        <div class="table-header">Fecha de la compra</div>
        <?php $resultado = mysqli_query($conexion, $compra);
        while ($row=mysqli_fetch_assoc($resultado)){
        ?>
        <div class="table-item"><?php echo $row["id_entregcafo"];?></div>
        <div class="table-item"><?php echo $row["id_productocafo"];?></div>
        <div class="table-item"><?php echo $row["cantidad"];?></div>
        <div class="table-item">$<?php echo number_format($row["total_cafo"], 2, '.', '');?></div>
        <div class="table-item"><?php echo $row["fecha_cafo"];?></div>
        <?php } mysqli_free_result($resultado);?>
    </div>
   
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>