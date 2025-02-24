<?php
include("conex.php");

session_start();

$usuario=$_POST['correo1'];
$contraseña=$_POST['password1'];

$_SESSION['correo1']=$usuario;

$consulta="SELECT * FROM usuario WHERE correo = '$usuario' and password = '$contraseña'";

$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0 and $_SESSION['correo1']=='Gerencia'){ 
     header("location:7 Inicio Gerencia y sistemas.php");
}
else if ($filas>0 and $_SESSION['correo1']=='Sistemas'){ 
     header("location:7 Inicio Gerencia y sistemas.php");
}
else if ($filas>0 and $_SESSION['correo1']=='RecursosHum'){ 
     header("location:8 RH y ventas.php");
}
else if ($filas>0 and $_SESSION['correo1']=='Ventas'){ 
     header("location:8 RH y ventas.php");
}
else if ($filas>0){
    header("location:9 Usuarios sistema.php");
}
else{    
    echo "<script>alert('Error, compruebe sus datos'); window.location='/Z Cafebreria/6 Inicio de sesion.php'</script>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);