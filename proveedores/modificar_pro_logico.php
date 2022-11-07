<?php
    $cod_proveedor=$_GET["cod_proveedor"];
    $nombre_proveedor=$_GET['nombre'];
    $apellido_proveedor=$_GET['apellido'];
    $dni_proveedor=$_GET['dni'];
    $estado_proveedor=$_GET['estado'];
    $tipo_proveedor=$_GET['tipo'];
    $domicilio_proveedor=$_GET['domicilio'];
    $calificacion_proveedor=$_GET['calificacion'];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query="UPDATE `proveedor` SET `cod_proveedor`=".$cod_proveedor.",`nombre_proveedor`='".$nombre_proveedor."',`apellido_proveedor`='".$apellido_proveedor."',`dni_proveedor`='".$dni_proveedor."',`estado_proveedor`='".$estado_proveedor."',`tipo_proveedor`='".$tipo_proveedor."',`domicilio_proveedor`='".$domicilio_proveedor."',`punt_calidad_proveedor`=".$calificacion_proveedor." WHERE cod_proveedor=$cod_proveedor;";
    $consulta=mysqli_query($conexion,$query);
    header("Location: http://localhost/proveedores/proveedores.php");
    exit;
?>
