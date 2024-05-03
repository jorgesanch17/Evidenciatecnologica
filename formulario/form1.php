<?php
$nombre = $_POST["prueba"];
$pr1 = $_POST["prueba2"];
$pr2 = $_POST["prueba3"];
$precios = array('precioJava'=>25.50, 'precioPHP'=>50.00);
echo ('<h1>Bienvenido(a) al sistema '.$nombre.' </h1><br>'.$pr1.' libros de JavaScript a 25.50 seria: '.$precios['precioJava']*$pr1.'<br>'.
		$pr2.' libros de PHP a 50.00 seria: '.$precios['precioPHP']*$pr2.'<br> total de la compra: '.($precios['precioJava']*$pr1+$precios['precioPHP']*$pr2));
?>