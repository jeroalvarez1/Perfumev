<?php
    $num_envio=$_GET['num_envio'];
    $cod_proveedor=$_GET['cod_proveedor'];
    $estado=4;
    $fecha_cierre=date('Y-m-d');
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query='UPDATE `pedido_proveedor` SET `fecha_cierre`="'.$fecha_cierre.'", `estado`='.$estado.' WHERE (estado=3) AND (num_envio='.$num_envio.') ;';
    $consulta=mysqli_query($conexion,$query);
    #CUENTAS PAGAR
    $pagado="no";
    $query1='INSERT INTO `cuentas_pagar`(`num_envio`, `pagado`) VALUES ('.$num_envio.', "'.$pagado.'")';
    $consulta1=mysqli_query($conexion,$query1);
    #ACTUALIZAR ALMACENA
    $query3='SELECT `cod_articulo`, `cantidad_pedido` FROM `pedido_proveedor` WHERE num_envio='.$num_envio.' ;';
    $consulta3=mysqli_query($conexion,$query3);
    while($fila3 = mysqli_fetch_array($consulta3)){
        $query2='UPDATE `almacena` SET `cantidad`='.$fila3['cantidad_pedido'].' WHERE cod_articulo="'.$fila3['cod_articulo'].'";';
        $consulta2=mysqli_query($conexion,$query2);
    }
    header("Location: http://localhost/pedidos_proveedor/gestion_envios.php");
    exit;
?>