<?php
session_start();
$arreglo = $_SESSION['carrito4'];
for($i=0;$i<count($arreglo);$i++){
		if($arreglo[$i]['Id'] != $_POST['id']) {
			$arregloNuevo[]= array(
				'Id'=>$arreglo[$i]['Id'],
				'Nombre'=>$arreglo[$i]['Nombre'],
				'Precio'=>$arreglo[$i]['Precio'],
				'Imagen'=>$arreglo[$i]['Imagen'],
				'Cantidad'=>$arreglo[$i]['Cantidad'],
			);
		}
}
if (isset($arregloNuevo)) {
	$_SESSION['carrito4'] = $arregloNuevo;
} else{
	unset($_SESSION['carrito4']);
}
?>