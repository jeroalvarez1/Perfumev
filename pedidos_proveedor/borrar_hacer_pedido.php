<?php
    $num_pedido_proveedor=$_GET["num_pedido_proveedor"];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query1="SELECT estado FROM pedido_proveedor WHERE num_pedido_pro=$num_pedido_proveedor;";
    $consulta1=mysqli_query($conexion,$query1);
    $fila=mysqli_fetch_array($consulta1);
    $estado=$fila['estado'];
    switch ($estado){
        case 2:
            $estado=1;
            $query="UPDATE pedido_proveedor SET estado='".$estado."' WHERE num_pedido_pro=$num_pedido_proveedor;";
            $consulta=mysqli_query($conexion,$query);
            header("Location: http://localhost/pedidos_proveedor/hacer_pedido.php?est=pr#");
            exit; #modificar en pedidos proveedor la cantidad de pedidos en proceso
            break;
        case 3:
            $estado=2;
            $query="UPDATE pedido_proveedor SET estado='".$estado."' WHERE num_pedido_pro=$num_pedido_proveedor;";
            $consulta=mysqli_query($conexion,$query);
            header("Location: http://localhost/pedidos_proveedor/hacer_pedido.php?est=en#");
            exit; #modificar en pedidos proveedor la cantidad de pedidos en proceso
            break;
    }
?>