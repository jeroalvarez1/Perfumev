<?php
    $cod_admin=0;
    $emisor=$_GET['cod_proveedor'];
    $asunto=$_GET['asunto'];
    $mensaje=$_GET['mensaje'];
    $estado=0;
    $num_envio=$_GET['num_envio'];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query='INSERT INTO `mensaje_pro`(`emisor`, `receptor`, `asunto`, `mensaje`, `estado`, `respuesta`) VALUES ('.$emisor.', '.$cod_admin.', "'.$asunto.'", "'.$mensaje.'", '.$estado.', '.$num_envio.')';
    $consulta=mysqli_query($conexion,$query);
    echo "<script languaje='javascript' type='text/javascript'>window.close();</script>";
?>