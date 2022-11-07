<?php
    $cod_admin=0;
    $receptor=$_GET['cod_proveedor'];
    $asunto=$_GET['asunto'];
    $mensaje=$_GET['mensaje'];
    $estado=0;
    $respuesta=0;
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query='INSERT INTO `mensaje_pro`(`emisor`, `receptor`, `asunto`, `mensaje`, `estado`, `respuesta`) VALUES ('.$cod_admin.', '.$receptor.', "'.$asunto.'", "'.$mensaje.'", '.$estado.', '.$respuesta.')';
    $consulta=mysqli_query($conexion,$query);
    echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
?>