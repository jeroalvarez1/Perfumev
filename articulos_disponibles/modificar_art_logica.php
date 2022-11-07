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
$query='UPDATE `articulos_disponibles` SET `cod_articulo`="'.$codigo.'",`nombre_articulo`="'.$nombre.'",`descripcion_articulo`="'.$descripcion.'",`gramo`='.$gramo.',`mililitro`='.$mililitro.',`importe_compra`='.$importe_compra.',`importe_venta`='.$importe_venta.',`punt_calidad_articulo`='.$calidad.',`cantidad_minima`='.$cant_min.' WHERE cod_articulo="'.$codigo.'";';
$consulta=mysqli_query($conexion,$query);
header("Location: http://localhost/articulos_disponibles/articulos_disponiles.php");
exit;

?>