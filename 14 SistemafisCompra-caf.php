<?php
    session_start();
    include("conex.php");
    
    $varsesion = $_SESSION['correo1'];

    if ($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización';
        die ();
    }

    if (!isset($_SESSION['carrito1'])){
        header('location: 14 Sistemafis-Cafet.php');
    }
    
    $arreglo = $_SESSION['carrito1'];

    $total = 0;
        for ($i=0;$i<count($arreglo);$i++){
        $total = $total + ($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad']);
        }
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="compra-f.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Compra final</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <a href="14%20Sistemafis-Cafet.php"><img src="Logo-supsi.jpg" alt="" class="product__img1"></a>
        </div>
        <div class="cer-se">
            <a href="cerrses.php"><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
    <div class= "dos-colum2"> 
    <div class="colum-izq">
        <h1 class="Tit-F">Cálculo del pago</h1>
        <center><input type="text" name = "compra" id="compra" value="<?php echo $total;?>" class="text-2" disabled></center>
        <br>
        <center><input type="text" name="pago" id="pago"  placeholder="  Ingrese el pago" class="text-2" required></center>
        <br>
        <center><input type="text" name="cambio" id="cambio"  placeholder="Cambio" class="text-2"></center>
        <br>
        <center><button class="btn-calci" onclick="cambio()">Realizar el cálculo</button></center>
    </div>    
    <div class="colum-dere">  
        <div class="container-tab1">
        <div class="table-title">Orden</div>
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
    <br><br><center><button class="btn-re" onclick="window.location = '14 SistemafisCompra-cafF.php'"> Realizar compra</button></center>

    <script>
    function cambio(){
    var com = Number(document.getElementById('compra').value);
    var pag = Number(document.getElementById('pago').value);
    
    var cam = pag - com;
    
    document.getElementById('cambio').value = cam;
}
    </script>
    
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>

</body>
</html>