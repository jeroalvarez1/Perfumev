<?php
    $num_pedido_pro=$_GET['num_pedido_pro'];
    $cod_proveedor=$_GET['cod_proveedor'];
    $cod_articulo=$_GET['cod_articulo'];
    $fecha_entrada=$_GET['fecha_entrada'];
    $cantidad_pedido=$_GET['cantidad'];
    $estado=$_GET['estado'];
    switch ($estado){
        case 2:
            $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
            $query="UPDATE `pedido_proveedor` SET `num_pedido_pro`=".$num_pedido_pro.",`cod_proveedor`=".$cod_proveedor.",`fecha_entrada`='".$fecha_entrada."',`cod_articulo`='".$cod_articulo."',`cantidad_pedido`=".$cantidad_pedido.",`estado`=".$estado." WHERE `num_pedido_pro`=".$num_pedido_pro.";";
            $consulta=mysqli_query($conexion,$query);
            header("Location: http://localhost/pedidos_proveedor/hacer_pedido.php?est=pe#");
            exit;
            break;
        case 3:
            $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
            $query="UPDATE `pedido_proveedor` SET `num_pedido_pro`=".$num_pedido_pro.",`cod_proveedor`=".$cod_proveedor.",`fecha_entrada`='".$fecha_entrada."',`cod_articulo`='".$cod_articulo."',`cantidad_pedido`=".$cantidad_pedido.",`estado`=".$estado." WHERE `num_pedido_pro`=".$num_pedido_pro.";";
            $consulta=mysqli_query($conexion,$query);
            header("Location: http://localhost/pedidos_proveedor/hacer_pedido.php?est=pr#");
            exit;
            break;
    }
?>