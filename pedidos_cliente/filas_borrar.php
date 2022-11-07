<?php
    #borrar fila de tabla temporal
    $cod_articulo=$_GET['cod_articulo1'];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query='DELETE FROM articulo_pedido_cli_temp WHERE cod_articulo="'.$cod_articulo.'";';
    $consulta=mysqli_query($conexion,$query);
    header("Location: http://localhost/pedidos_cliente/");
    exit;
?>