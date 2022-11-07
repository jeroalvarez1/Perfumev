<?php
$codigo=$_GET['codigo'];
$nombre=$_GET['nombre'];
$descripcion=$_GET['descripcion'];
if ($_GET['gramo']==""){
    $gramo=0;
} else {
    $gramo=$_GET['gramo'];
}

if ($_GET['mililitro']==""){
    $mililitro=0;
} else {
    $mililitro=$_GET['mililitro'];
}
$importe_compra=$_GET['importe_compra'];
$importe_venta=$_GET['importe_venta'];
$calidad=$_GET['calidad'];
$cant_min=$_GET['cant_min'];
$conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
$query='INSERT INTO `articulos_disponibles`(`cod_articulo`, `nombre_articulo`, `descripcion_articulo`, `gramo`, `mililitro`, `importe_compra`, `importe_venta`, `punt_calidad_articulo`, `cantidad_minima`) VALUES ("'.$codigo.'", "'.$nombre.'", "'.$descripcion.'", '.$gramo.', '.$mililitro.', '.$importe_compra.', '.$importe_venta.', '.$calidad.', '.$cant_min.');';
$consulta=mysqli_query($conexion,$query);
#alta en almacena
$cantidad=0;
$query1='INSERT INTO `almacena`(`cod_articulo`, `cantidad`) VALUES ("'.$codigo.'", '.$cantidad.');';
$consulta1=mysqli_query($conexion,$query1);
header("Location: http://localhost/articulos_disponibles/alta_articulos.php");
exit;

?>