<?php
    session_start();
    include("conex.php");
    
    $varsesion = $_SESSION['correo1'];

    if ($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización';
        die ();
    }

    if (!isset($_SESSION['carrito10'])){
        header('location: 17 SistemaVonline-Bol.php');
    }
    
    $arreglo = $_SESSION['carrito10'];
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="compra-fin.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Compra final</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <a href="17%20SistemaVonline-Bol.php"><img src="Logo-supsi.jpg" alt="" class="product__img1"></a>
        </div>
        <div class="cer-se">
            <a href="cerrses.php"><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
    <div class= "dos-colum2"> 
    <div class="colum-izq">
        <table>
        <tr>
        <th class="tit-tab" colspan="2">Detalles de la orden</th>
        </tr>
        <tr>
        <td class="encab-tab">Usuario o correo</td>
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
        <div class="container-tab1">
        <div class="table-title">Su orden</div>
        <div class="table-header">Producto</div>
        <div class="table-header">Total</div>
        </div>
        <?php 
        $total = 0;
        for ($i=0;$i<count($arreglo);$i++){
        $total = $total + ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
        
        ?>
        <div class="container-tab">
        <div class="table-item"><?php echo $arreglo[$i]['Nombre']; ?></div>
        <div class="table-item">$<?php echo number_format($arreglo[$i]['Precio'], 2, '.', ''); ?></div>
        </div>
        <?php } ?>
        <div class="dos-colum">
        <div class="colum-izq">
        <p class="tot">Total:</p>
    
    </div>
    <div class="colum-dere">
        <p class="comp-to">$<?php echo number_format($total, 2, '.', ''); ?></p>
    </div>
        </div>
    </div>
    </div>
    <center><button class="btn-re" onclick="window.location = '17 SistemaVonlineCompra-boloF.php'"> Realizar compra</button></center>

    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>

</body>
</html>