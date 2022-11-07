<?php
    #CONEXION
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    #ALTA DE PEDIDO 
    $num_pedido=$_GET['num_pedido'];
    $fecha=$_GET['fecha'];
    $estado=$_GET['estado'];
    $cod_cliente=$_GET['cod_cliente'];
    $cuenta_cobrar=0;
    $query2='INSERT INTO pedido_cliente (num_pedido, fecha_salida, estado_pedido, cod_cliente, num_cuenta_cobrar) VALUES ('.$num_pedido.', "'.$fecha.'", '.$estado.', '.$cod_cliente.', '.$cuenta_cobrar.') ;';
    $consulta2=mysqli_query($conexion,$query2);

    #ALTA AL PEDIDO
    $limpiar=$_GET['limpiar'];
    if ($limpiar==1){
        $query5='SELECT cod_articulo, cantidad FROM articulo_pedido_cli_temp;';
        $consulta5=mysqli_query($conexion,$query5);
        while($fila5 = mysqli_fetch_array($consulta5)){
            $codigo5=$fila5['cod_articulo'];
            $cantidad5=$fila5['cantidad'];

            $query8='SELECT COUNT(n) FROM articulo_pedido_cli;';
            $consulta8=mysqli_query($conexion,$query8);
            $fila8=mysqli_fetch_array($consulta8);
            $n=$fila8[0]+1;
            echo $n;
            $query6='INSERT INTO `articulo_pedido_cli`(`n`, `cod_articulo`, `cantidad`, `num_pedido`) VALUES ('.$n.', "'.$codigo5.'", '.$cantidad5.', '.$num_pedido.');';
            $consulta6=mysqli_query($conexion,$query6);
            $query7='DELETE FROM articulo_pedido_cli_temp WHERE cod_articulo="'.$codigo5.'";';
            $consulta7=mysqli_query($conexion,$query7);
        }
    }

    #LIMPIAR TABLA


    #REVISION ALTA ARTICULO DE PEDIDO TEMPORAL
    $cod_articulo=$_GET['cod_articulo'];
    $cantidad=$_GET['cantidad'];

    $query3='SELECT cod_articulo, cantidad FROM articulo_pedido_cli_temp'; 
    $consulta3=mysqli_query($conexion,$query3);
    while($fila3 = mysqli_fetch_array($consulta3)){
            $cod=$fila3['cod_articulo'];
            $cant=$fila3['cantidad'];
        if ($cod_articulo==$cod){
            $query4='UPDATE articulo_pedido_cli_temp SET cantidad=("'.$cant.'" + "'.$cantidad.'") WHERE cod_articulo="'.$cod_articulo.'";';
            $consulta4=mysqli_query($conexion,$query4);};
    };
    #ALTA DE PEDIDO TEMPORAL
    $query='INSERT INTO articulo_pedido_cli_temp (cod_articulo, cantidad) VALUES ("'.$cod_articulo.'", "'.$cantidad.'") ;';
    $consulta=mysqli_query($conexion,$query);
    header("Location: http://localhost/pedidos_cliente/");
    exit;
?>
<!--para hacer pedidos primero los articulos almacenarlos en una tabla temporal, para luego darles de alta con el boton confirmar