<?php
    $codigo_pro=$_GET['cod_pro'];
    $fecha_entrada=$_GET['fecha_pe'];
    $fecha_cierre="2000-02-20";
    $cod_articulo=$_GET['cod_articulo'];
    $cantidad_pedido=$_GET['cantidad_p'];
    $importe_compra=$_GET['importe_compra'];
    $estado=$_GET['estado'];
    $num_envio=0;
    #pedidos pro
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query="INSERT INTO pedido_proveedor (cod_proveedor, fecha_entrada, fecha_cierre, cod_articulo, cantidad_pedido, importe_compra, estado, num_envio) values (".$codigo_pro.", '".$fecha_entrada."', '".$fecha_cierre."', '".$cod_articulo."', ".$cantidad_pedido.", ".$importe_compra.", ".$estado.",".$num_envio.");";
    $consulta=mysqli_query($conexion,$query);
    #copia pedidos pro
    $query1="INSERT INTO pedido_proveedor_copia (cod_proveedor, fecha_entrada, fecha_cierre, cod_articulo, cantidad_pedido, importe_compra, estado, num_envio) values (".$codigo_pro.", '".$fecha_entrada."', '".$fecha_cierre."', '".$cod_articulo."', ".$cantidad_pedido.", ".$importe_compra.", ".$estado.",".$num_envio.");";
    $consulta1=mysqli_query($conexion,$query1);
    
    header("Location: http://localhost/pedidos_proveedor/pedidos_proveedor.php");
    exit;
?>