<?php
include("conex.php");
    session_start();
    
    $varsesion = $_SESSION['correo1'];

    if ($varsesion == null || $varsesion = ''){
        echo 'Usted no tiene autorización';
        die ();
    }
$usuario = "SELECT * FROM usuario";
?>

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="Datos-usu.css">
	<link rel="stylesheet" href="navsis-genin.css">
	<script src="https://kit.fontawesome.com/3c87869cd4.js" crossorigin="anonymous"></script>
<title>Datos del usuario</title>
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
 
    <h1>Registro de los usuarios</h1><br>
    
    <div class="container-tab">
        <div class="table-title">Datos del usuario</div>
        <div class="table-header">Correo</div>
        <div class="table-header">Contraseña</div>
        <?php $resultado = mysqli_query($conexion, $usuario);
        while ($row=mysqli_fetch_assoc($resultado)){
        ?>
        <div class="table-item"><?php echo $row["correo"];?></div>
        <div class="table-item"><?php echo $row["password"];?></div>
        <?php } mysqli_free_result($resultado);?>
    </div>
   
    <p class="copy">© 2021 Derechos reservados | Diseñado por Equipo 1</p>
    <div class="sep"></div><div class="sep"></div>
    
</body>
</html>