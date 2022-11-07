<?php
    #MODIFICAR FECHA DEL PEDIDO DEL CLIENTE
    $num_pedido1=$_GET['num_pedido1'];
    $fecha=$_GET['fecha'];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query1='UPDATE pedido_cliente SET fecha_salida="'.$fecha.'" WHERE num_pedido='.$num_pedido1.';';
    $consulta1=mysqli_query($conexion,$query1);
    header("Location: http://localhost/pedidos_cliente/index.php?n_pedido=1&tipo=mo&limpiar=1#");
    exit;    
?>