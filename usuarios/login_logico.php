<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query='SELECT `usuario`, `rol`, `contraseña` FROM `sesiones` WHERE usuario="'.$usuario.'";';
    $consulta=mysqli_query($conexion,$query);
    $fila=mysqli_fetch_array($consulta);
    if ($fila['usuario']==$usuario) {
        if ($fila['contraseña']==$contraseña) {
            $acept=1;
        }
    }
    if ($acept==1) {
        if ($fila['rol']==1) {
            header("Location: http://localhost/index/");
            exit;
        }
        if ($fila['rol']==2) {
            header("Location: http://localhost/pedidos_cliente/index.php");
            exit;
        }
        if ($fila['rol']==3) {
            header("Location: http://localhost/pedidos_proveedor/hacer_pedido.php");
            exit;
        }
    } else{
        header("Location: http://localhost/usuarios/login.php?st=1");
        exit;
    }
    
    
    
?>