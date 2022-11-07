<?php
    #MODIFICAR ARTICULOS DE PEDIDO DE CLIENTE
    $n=$_GET['n'];
    $cod_articulo=$_GET['cod_articulo'];
    $num_pedido=$_GET['num_pedido'];
    $cantidad=$_GET['cantidad'];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query='UPDATE `articulo_pedido_cli` SET `cantidad`='.$cantidad.' WHERE n='.$n.';';
    $consulta=mysqli_query($conexion,$query);
    header("Location: http://localhost/pedidos_cliente/index.php?n_pedido=".$num_pedido."&tipo=mo&limpiar=1#");
    exit;
?>