<?php
$codigo=$_GET['cod_articulo'];
$conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
$query='DELETE FROM `articulos_disponibles` WHERE cod_articulo="'.$codigo.'";';
$consulta=mysqli_query($conexion,$query);
#borrar almacena
$query1='DELETE FROM `almacena` WHERE cod_articulo="'.$codigo.'";';
$consulta1=mysqli_query($conexion,$query1);
header("Location: http://localhost/articulos_disponibles/articulos_disponiles.php");
exit;

?>