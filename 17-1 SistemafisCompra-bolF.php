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

    if (!isset($_SESSION['carrito11'])){
        header('location: 17-1 Sistemafis-Bol.php');
    }
    
    $arreglo = $_SESSION['carrito11'];

    $total = 0;
    for ($i=0;$i<count($arreglo);$i++){
        $total = $total + ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
    }
    
    $fecha = date ('Y-m-d h:m:s');
     
    
    $conexion -> query ("INSERT INTO ventasfis_bol(total_bol, fecha_bol, Usuario) VALUES ($total, '$fecha', '$usuario1')") or die ($conexion->error); 
    
    $id_vcafo = $conexion -> insert_id;

    for ($i=0;$i<count($arreglo);$i++){
        $conexion -> query ("INSERT INTO ventaspr_fisbol(id_vbol, id_prodbol, cantidad, precio_pbol, subtotal_bol) VALUES 
        ($id_vcafo, 
        ".$arreglo[$i]['Id'].",
        ".$arreglo[$i]['Cantidad'].",
        ".$arreglo[$i]['Precio'].",
        ".$arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'].")") or die ($conexion->error);
        $conexion -> query ("UPDATE producto_bol set inventario_pbol = inventario_pbol -".$arreglo[$i]['Cantidad']." WHERE 	id_prodbol =".$arreglo[$i]['Id'])  or die ($conexion->error);
    }
                                                                                        
unset($_SESSION['carrito11']);
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="compra-e.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script> 
<title>Gracias por su compra</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <a href="17-1%20Sistemafis-Bol.php"><img src="Logo-supsi.jpg" alt="" class="product__img1"></a>
        </div>
        <div class="cer-se">
            <a href="cerrses.php"><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
   <div class= "dos-colum2"> 
    <div class="colum-izq">
        <br><br><br><br>
        <table>
        <tr>
        <th class="tit-tab" colspan="2">Detalles del usuario que realiza la venta</th>
        </tr>
        <tr>
        <td class="encab-tab">Usuario</td>
        <td class="items-tab"><?php echo  $_SESSION['correo1']; ?></td>
        </tr>
        <tr>
        <td class="encab-tab">Id de usuario</td>
        <?php 
        $usuario = $_SESSION['correo1'];
        $consulta="SELECT * FROM usuario WHERE correo = '$usuario'";
        $resultado=mysqli_query($conexion, $consulta); 
        while ($consulta = mysqli_fetch_array($resultado)){
        ?>
        <td class="items-tab"><?php echo $consulta['id']; } ?></td>
        </tr>
        </table>
    </div>    
    <div class="colum-dere">
    <div class="icon-pal">
        <br><br><br><br><br><i class="fas fa-check-circle"></i><br><br>
    </div>
    <div class="text">
        <br><p class="text-grac">Compra realizada con éxito</p><br>
    </div>
    </div>
    </div>
    
    <center><button class="btn-re" onclick="window.location = '17-1 Sistemafis-Bol.php'">Regresar a la tienda</button></center>
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
    <?php
    mysqli_close($conexion);
    ?>
    
</body>
</html>