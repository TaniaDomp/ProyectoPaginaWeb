<?php
$conexion = mysqli_connect ("localhost", "root", "", "inicio_sis");
mysqli_set_charset($conexion, "utf8");

if ($conexion->connect_error){
        die("No se pudo conectar");
    }
