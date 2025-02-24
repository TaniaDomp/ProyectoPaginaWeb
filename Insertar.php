<?php
include("conex.php");

$correo = $_POST["correo"];
$password=$_POST["password"];

$re = $conexion-> query ("SELECT correo FROM usuario where correo ='$correo'") or die ($conexion->error);
if (mysqli_num_rows($re)>0){
    echo "<script>alert('El usuario ya existe'); window.location='/Z Cafebreria/6 Inicio de sesion.php'</script>";
}
else{
$insertar = "INSERT INTO usuario(correo, password) VALUES ('$correo', '$password')";

$resultado = mysqli_query($conexion, $insertar);

if ($resultado){
    echo "<script>alert('Su registro fue exitoso'); window.location='/Z Cafebreria/6 Inicio de sesion.php'</script>";
}
else{
    echo "<script>alert('Hubo un error en el registro'); window.history.go(-1);</script>";
}
    }