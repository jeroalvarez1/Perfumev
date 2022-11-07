<?php
    $nombre_proveedor=$_GET['nombre'];
    $apellido_proveedor=$_GET['apellido'];
    $dni_proveedor=$_GET['dni'];
    $estado_proveedor=$_GET['estado'];
    $tipo_proveedor=$_GET['tipo'];
    $domicilio_proveedor=$_GET['domicilio'];
    $calificacion_proveedor=$_GET['calificacion'];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query="insert into proveedor (nombre_proveedor, apellido_proveedor, dni_proveedor, estado_proveedor, tipo_proveedor, domicilio_proveedor, punt_calidad_proveedor) values ('".$nombre_proveedor."', '".$apellido_proveedor."', '".$dni_proveedor."', '".$estado_proveedor."','".$tipo_proveedor."', '".$domicilio_proveedor."', ".$calificacion_proveedor.");";
    $consulta=mysqli_query($conexion,$query);
    header("Location: http://localhost/proveedores/alta_pro.php?");
    exit;
?>