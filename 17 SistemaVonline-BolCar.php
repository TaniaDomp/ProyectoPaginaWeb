<?php
    session_start();
    include("conex.php");

    error_reporting(0);

    $varsesion = $_SESSION['correo1'];

    if ($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización';
        die ();
    }
    if (isset($_SESSION['carrito10'])){
        if (isset($_GET['id'])){
             $arreglo = $_SESSION['carrito10'];
             $encontro = false;
            $numero = 0;
            for ($i=0;$i<count($arreglo);$i++){
                if ($arreglo[$i]['Id'] == $_GET['id']){
                    $encontro = true;
                    $numero = $i;
                }
            }
            if ($encontro == true){
                $arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
                $_SESSION['carrito10']=$arreglo;
                header("location: 17 SistemaVonline-BolCar.php");
            }
            else{
                $nombre="";
                $precio="";
                $imagen="";
                $resultado=$conexion->query("SELECT * FROM producto_bol WHERE id_prodbol=".$_GET['id']) or die ($conexion->error);
                $fila = mysqli_fetch_row($resultado);
                $nombre = $fila[1];
                $precio = $fila[2];
                $imagen = $fila[3];
                $arreglonuevo = array(
                    'Id'=> $_GET['id'],
                    'Nombre'=> $nombre,
                    'Precio'=> $precio,
                    'Imagen'=> $imagen,
                    'Cantidad'=> 1
                    );
                array_push($arreglo, $arreglonuevo);
                $_SESSION['carrito10']=$arreglo;
                header("location: 17 SistemaVonline-BolCar.php");
            }
        }
    }
    else{
    if (isset($_GET['id'])){
        $nombre="";
        $precio="";
        $imagen="";
        $resultado=$conexion->query("SELECT * FROM producto_bol WHERE id_prodbol =".$_GET['id']) or die ($conexion->error);
        $fila = mysqli_fetch_row($resultado);
        $nombre = $fila[1];
        $precio = $fila[2];
        $imagen = $fila[3];
        $arreglo[] = array(
            'Id'=> $_GET['id'],
            'Nombre'=> $nombre,
            'Precio'=> $precio,
            'Imagen'=> $imagen,
            'Cantidad'=> 1
        );
        $_SESSION['carrito10'] = $arreglo;
        header("location: 17 SistemaVonline-BolCar.php");
    }
    }
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="carrito-dis.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Mi carrito</title>
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
 
    <h1>Mi carrito</h1><br>
    
     <div class="container-tab1">
        <div class="table-title">Lista de compras</div>
        <div class="table-header">Imagen</div>
        <div class="table-header">Producto</div>
        <div class="table-header">Precio</div>
        <div class="table-header">Cantidad</div>
        <div class="table-header">Total</div>
        <div class="table-header">Quitar</div>
        </div>
    
    <?php 
    $total = 0;
    if ($_SESSION['carrito10']){
        $arregloCar = $_SESSION['carrito10'];
        for ($i=0; $i<count($arregloCar); $i++){
            $total = $total + ($arregloCar[$i]['Precio']*$arregloCar[$i]['Cantidad']);
            
    ?>
    
        <div class="container-tab">
        <div class="table-item"><img src="<?php echo $arregloCar[$i]['Imagen']; ?>" alt="<?php echo $arregloCar[$i]['Nombre']; ?>" class="imagen_car"></div>
        <div class="table-item"><?php echo $arregloCar[$i]['Nombre']; ?></div>
        <div class="table-item">$<?php echo number_format($arregloCar[$i]['Precio'], 2, '.', ''); ?></div>
        <div class="table-item">
        <input type="number" class="conta txtCantidad" value="<?php echo $arregloCar[$i]['Cantidad']; ?>" id="valor<?php echo $arregloCar[$i]['Id'];?>" 
        data-precio = "<?php echo $arregloCar[$i]['Precio']; ?>"
        data-id = "<?php echo $arregloCar[$i]['Id']; ?>"
        disabled>
        </div>
        <div class="table-item cant<?php echo $arregloCar[$i]['Id'];?>"> $<?php echo number_format($arregloCar[$i]['Precio']*$arregloCar[$i]['Cantidad'], 2, '.', ''); ?></div>
        <div class="table-item"><a href="#" class="btn-quitar btneliminar" data-id="<?php echo $arregloCar[$i]['Id']; ?>">x</a></div>
        
    </div>
   <?php 
        }
        } ?>
        
    <div class= "tres-colum"> 
    <div class="colum-izq">
        <p class="tot">Total:</p>
    </div>
    <div class="colum-cen">
        <p class="comp-to">$<?php echo number_format($total, 2, '.', ''); ?></p>
    </div>
    <div class="colum-dere">
        <button class="btn-re" onclick="window.location = '17 SistemaVonlineCompra-bolo.php'">Realizar compra</button>
    </div>
    </div>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>    
    <script>
    $(document).ready(function(){
    $(".btneliminar").click(function(event){
        event.preventDefault();
        var id = $(this).data('id');
        var boton = $(this);
        $.ajax({
            method: 'POST',
            url: 'eliminarCarrito10.php',
            data:{
                id: id
        }
        }).done(function(respuesta){
            boton.parent('div').parent('div').remove();
            location.reload();
        });
    });
        $(".txtCantidad").keyup(function(){
            var cantidad = $(this).val();
            var precio = $(this).data('precio');
            var id = $(this).data('id');
            var multi = parseFloat(cantidad)*parseFloat(precio);
            $(".cant"+id).text("$"+multi);
        });
});
    </script>
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>