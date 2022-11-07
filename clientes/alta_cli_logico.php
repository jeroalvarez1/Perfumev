<?php
    $nombre_cliente=$_GET['nombre'];
    $apellido_cliente=$_GET['apellido'];
    $dni_cliente=$_GET['dni'];
    $estado_cliente=$_GET['estado'];
    $tipo_cliente=$_GET['tipo'];
    $domicilio_cliente=$_GET['domicilio'];
    $calificacion_cliente=$_GET['calificacion'];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query="insert into clientes (nombre_cliente, apellido_cliente, dni_cliente, estado_cliente, tipo_cliente, domicilio_cliente, punt_calidad_cliente) values ('".$nombre_cliente."', '".$apellido_cliente."', '".$dni_cliente."', '".$estado_cliente."','".$tipo_cliente."', '".$domicilio_cliente."', ".$calificacion_cliente.");";
    $consulta=mysqli_query($conexion,$query);
    header("Location: http://localhost/clientes/alta_cli.php?");
    exit;
?>