<?php 
    include("conex.php");
    if(isset($_GET['id'])){
        $resultado = $conexion->query("SELECT * FROM producto_bol WHERE id_prodbol =".$_GET['id']) or die ($conexion->error);
    }
else{
        header("location:17 SistemaVonline-Bol.php");
    }
    if (mysqli_num_rows($resultado)>0){
        $fila = mysqli_fetch_row($resultado);
    }
    else{
        header("location:17 SistemaVonline-Bol.php");
    } 
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
    <link rel="stylesheet" href="forma-pcafo.css">
	<link rel="stylesheet" href="navsisgen.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Boletos</title>
</head>
<body>
    
    <nav> 
    <div class="menu-sis">
        <div class="img-lo">
            <a href="17%20SistemaVonline-Bol.php"><img src="Logo-supsi.jpg" alt="" class="product__img1"></a>
        </div>
        <div class="car">
            <a href="17%20SistemaVonline-BolCar.php"><i class="fas fa-shopping-cart">  Ir a carrito</i></a>
        </div>
        <div class="cer-se">
            <a href="cerrses.php"><i class="far fa-user-circle">   Cerrar sesión</i></a>
        </div>
    </div>
    </nav>
 
    <div class= "dos-colum2"> 
    <div class="colum-izq">
        <h2><?php echo $fila[1]; ?></h2><br>
        <p><?php echo $fila[5]; ?></p>
        <p class="product__price">$<?php echo $fila[2]; ?></p>
        </div>
    <div class="colum-dere">
        <center><img src="<?php echo $fila[3]; ?>" alt="<?php echo $fila[1]; ?>" width="520" height="356"></center>
    </div>
    </div>
    
    <a href="17%20SistemaVonline-BolCar.php?id=<?php echo $fila[0]; ?>" class="btn-bot">Añadir a carrito</a>
    
    <script src="elimcar.js"></script>
        
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div>
    
</body>
</html>