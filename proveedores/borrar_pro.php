<?php
    $eliminar=$_GET["cod_proveedor"]; #SE UTILIZA COMILLAS DOBLES CUANDO DENTRO DE UN STRIG PHP HAY VARIABLES INCLUIDAS Y COMILLAS SIMPLES CUANDO NO LO HAY
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query="DELETE FROM `proveedor` WHERE `cod_proveedor` = $eliminar";
    $consulta=mysqli_query($conexion,$query);
    header("Location: http://localhost/proveedores/proveedores.php");
    exit;
?>