
    <?php
    $estado=$_GET['estado'];
    $num_envio1=$_GET['num_envio1'];
    $fecha_entrada=$_GET['fecha_entrada'];

    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query="UPDATE pedido_proveedor SET num_envio='".$num_envio1."', fecha_entrada='".$fecha_entrada."' WHERE num_envio=0 AND estado=3;";
    $consulta=mysqli_query($conexion,$query);
    
    $num_envio=$_GET['num_envio'];
    $cod_proveedor=$_GET['cod_proveedor'];
    $query2='INSERT INTO cuenta (num_envio, cod_proveedor) VALUES ("'.$num_envio.'", "'.$cod_proveedor.'");';
    $consulta2=mysqli_query($conexion,$query2);
    header("Location: http://localhost/pedidos_proveedor/hacer_pedido.php?est=en#");
    exit;
?>