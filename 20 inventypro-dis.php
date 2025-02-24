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

$compra = "SELECT * FROM producto_dis";
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="Tablainventario-emp.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Inventario de discos</title>
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
        <div class="table-title">Datos de su inventario</div>
        <div class="table-header">Id del producto</div>
        <div class="table-header">Nombre</div>
        <div class="table-header">Precio</div>
        <div class="table-header">Inventario</div>
        <div class="table-header">Descripción</div>
        <div class="table-header">Imagen</div>
        <?php $resultado = mysqli_query($conexion, $compra);
        while ($row=mysqli_fetch_assoc($resultado)){
        ?>
        <div class="table-item"><?php echo $row["id_produdis"];?></div>
        <div class="table-item"><?php echo $row["nombre_pdis"];?></div>
        <div class="table-item">$<?php echo number_format($row["precio_pdis"], 2, '.', '');?></div>
        <div class="table-item"><?php echo $row["inventario_pdis"];?></div>
        <div class="table-item"><?php echo $row["descripcion_pdis"];?></div>
        <div class="table-item"><img src="<?php echo $row['imagen_pdis']; ?>" alt="<?php echo $row['nombre_pdis']; ?>" class="imagen_car"></div>
        <?php } mysqli_free_result($resultado);?>
    </div>
   
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>