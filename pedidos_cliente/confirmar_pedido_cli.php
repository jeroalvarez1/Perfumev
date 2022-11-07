<?php
    $num_pedido=$_GET['num_pedido'];
    $cod_cliente=$_GET['cod_cliente'];
    $estado=2;
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query='UPDATE `pedido_cliente` SET `estado_pedido`='.$estado.', `num_cuenta_cobrar`='.$num_pedido.' WHERE num_pedido='.$num_pedido.';';
    $consulta=mysqli_query($conexion,$query);
    #IMPORTE
    $query2='SELECT `n`, `cod_articulo`, `cantidad`, `num_pedido` FROM `articulo_pedido_cli` WHERE num_pedido='.$num_pedido.';';
    $consulta2=mysqli_query($conexion,$query2);
    while($fila2 = mysqli_fetch_array($consulta2)){
        $query3='SELECT `importe_venta` FROM `articulos_disponibles` WHERE cod_articulo="'.$fila2['cod_articulo'].'";';
        $consulta3=mysqli_query($conexion,$query3);
        $fila3=mysqli_fetch_array($consulta3);
        $importe_total=$importe_total+($fila2['cantidad']*$fila3['importe_venta']);
        #Actualizar almacena
        $query5='SELECT `cod_articulo`, `cantidad` FROM `almacena` WHERE cod_articulo="'.$fila2['cod_articulo'].'";';
        $consulta5=mysqli_query($conexion,$query5);
        $fila5=mysqli_fetch_array($consulta5);

        $cantidad=$fila5['cantidad']-$fila2['cantidad'];
        
        $query4='UPDATE `almacena` SET `cantidad`='.$cantidad.' WHERE cod_articulo="'.$fila2['cod_articulo'].'";';
        $consulta4=mysqli_query($conexion,$query4);
    }
    
    #CUENTAS PAGAR
    $pagado="no";
    $query1='INSERT INTO `cuentas_cobrar`(`num_cuenta`, `importe_total`, `pagado`) VALUES ('.$num_pedido.', '.$importe_total.', "'.$pagado.'")';
    $consulta1=mysqli_query($conexion,$query1);


    header("Location: http://localhost/pedidos_cliente/gestion_pedidos.php");
    exit;
?>