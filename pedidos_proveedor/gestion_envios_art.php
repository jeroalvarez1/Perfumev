<!DOCTYPE html> <!--$_REQUEST captura las variables sin importar cual es POST o GET-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    <link href="../style/estilos.css" rel="stylesheet" type="text/css">
    <link href="../index/index.php" rel="stylesheet" type="text/css">
    <link href="alta_art.php" rel="stylesheet" type="text/css">
    <link href="modificar_art.php" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
</head>
<body>
  <div class="principal ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-2 text-white bg-opacity-75">
          <div class="container-fluid">
                    <a class="navbar-brand" href="../index/index.php">Perfumev</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="../index/index.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Secciones
                          </a>
                          <ul class="dropdown-menu bg-light p-2 text-white " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../clientes/clientes.php">Clientes</a></li>
                            <li><a class="dropdown-item" href="../proveedores/proveedores.php">Proveedores</a></li>
                            <li><a class="dropdown-item" href="../articulos_disponibles/articulos_disponiles.php">Articulos disponibles</a></li>
                            <li><a class="dropdown-item" href="../pedidos_proveedor/gestion_envios.php">Pedidos del proveedor</a></li>
                            <li><a class="dropdown-item" href="../pedidos_cliente/gestion_pedidos.php">Pedidos de cliente</a></li>
                            <!--<li><a class="dropdown-item" href="#">Cuetas por cobrar</a></li>
                            <li><a class="dropdown-item" href="#">Cuentas por pagar</a></li>
                            <li><a class="dropdown-item" href="#">Pedidos de la semana</a></li>-->
                           <!-- <li><hr class="dropdown-divider"></li>-->
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sub secciones
                          </a>
                          <ul class="dropdown-menu bg-light p-2 text-white " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../pedidos_proveedor/gestion_envios.php">Gestor de pedidos</a></li>
                        </li>
                      </ul>
                    </div>
          </div>
        </nav>     
        <div class="separador-1 "></div> 
        <article class="container border border-5 fondo_azul">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col">
                        <div class="row row-cols-1">
                            <div class="col">
                                <div class="separador-1 "></div>
                            </div>
                            <div class="col">
                                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
                                    <div class="col">
                                        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
                                            <div class="col text-center text-wrap fs-3 titulo rounded-pill altura">
                                                <div>Gestor de envios</div>
                                            </div>
                                            <div class="col"></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="separador-1"></div>
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-1 back_blanco border-primary border border-5">
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <div class="row row-cols-1">
                                    <div class="col">
                                        <div class="separador-1"></div>
                                    </div>
                                    <div class="col">
                                        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 align-items-center justify-content-start">
                                            <div class="col">
                                                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                                                    <div class="col">
                                                        <div class="mb-3">
                                                            <input class="form-control" type="text" value="N° envio <?php echo $_GET['num_envio'];?>" aria-label="Disabled input example" disabled readonly>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="row row-cols-2">
                                                            <div class="col">
                                                                <form action="gestion_envios.php" method="GET">
                                                                    <input type="hidden" name="confirmar" value='1'>
                                                                    <input type="hidden" name="n_envio" value='<?php echo $_GET['num_envio'];?>'>
                                                                    <button type="submit" class="btn btn-success">Confirmar</button>
                                                                </form>    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 align-items-center justify-content-end">
                                                    <div class="col"></div>
                                                    <div class="col"></div>
                                                    <div class="col"></div>
                                                    <div class="col">
                                                        <div class="mb-3">      
                                                            <a href="inconveniente.php?num_envio=<?php echo $_GET['num_envio']; ?>" target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=400'); return false;"><img src="../img/sms.png" class="imgen" alt="..."></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                                                <?php
                                                    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                    $query2='SELECT num_pedido_pro, cod_articulo, cantidad_pedido FROM pedido_proveedor WHERE num_envio='.$_GET['num_envio'].';';
                                                    $consulta2=mysqli_query($conexion,$query2);
                                                    while($fila2 = mysqli_fetch_array($consulta2)){
                                                        $query3='SELECT num_pedido_pro, cod_articulo, cantidad_pedido FROM pedido_proveedor_copia WHERE num_pedido_pro='.$fila2['num_pedido_pro'].';';
                                                        $consulta3=mysqli_query($conexion,$query3);
                                                        $fila3=mysqli_fetch_array($consulta3);
                                                            if ($fila2['cantidad_pedido']!=$fila3['cantidad_pedido']){
                                                                echo '<div class="col">';
                                                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                                                        echo '<strong>¡Alerta!</strong> Usted pidio '.$fila3['cantidad_pedido'].' de '.$fila2['cod_articulo'].', y llegaron '.$fila2['cantidad_pedido'].'';
                                                                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                                                    echo'</div>';
                                                                echo '</div>';
                                                            }
                                                    }
                                                ?>
                                        </div>   
                                    </div>
                                    <div class="col table-responsive ">
                                        <?php
                                            echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                            echo "<thead>";  
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo "Articulo";
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo "Cantidad";
                                                    echo "</td>";                      
                                                echo "</tr>";
                                            echo "</thead>";
                                                $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                $query='SELECT cod_articulo, cantidad_pedido FROM pedido_proveedor WHERE num_envio='.$_GET['num_envio'].';';
                                                $consulta=mysqli_query($conexion,$query);
                                                while($fila = mysqli_fetch_array($consulta)){
                                                        echo '<form method="GET" action="#">';
                                                            echo "<tbody>";
                                                                echo "<tr>";
                                                                    echo "<td>";
                                                                        $query1='SELECT nombre_articulo FROM articulos_disponibles WHERE cod_articulo="'.$fila['cod_articulo'].'" ;';
                                                                        $consulta1=mysqli_query($conexion,$query1);
                                                                        $fila1=mysqli_fetch_array($consulta1);
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input type="hidden" name="cod_articulo" value="'.$fila['cod_articulo'].'">';
                                                                            echo '<input class="form-control" type="text" value="'.$fila['cod_articulo'].'_'.$fila1['nombre_articulo'].'" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input type="hidden" name="cantidad_pedido" value='.$fila['cantidad_pedido'].'>';
                                                                            echo '<input class="form-control" type="number" value='.$fila['cantidad_pedido'].' aria-label="Disabled input example" disabled readonly>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                echo "</tr>";
                                                            echo "</tbody>";
                                                        echo '</form>';
                                                }
                                            echo "</table>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="separador-1"></div>
                    </div>
                </div>
            </div>    
        </article>
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>