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
                                            <div class="col">
                                                <div class="row">
                                                    <div class="col text-center text-wrap fs-3 titulo rounded-pill altura">
                                                        <div>Gestor de Pedidos</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center rounded-pill back_blanco">
                                            <div class="col margen">
                                                <div class="row altura">
                                                    <div class="col flexible_center">
                                                        <form class="d-flex" method="GET" action="#">
                                                            <input class="form-control me-2" type="search" placeholder="Por codigo" aria-label="Search" value="" name="busqueda">
                                                            <button type="submit" class="btn btn-success">Buscar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                      <?php
                                        if ($_GET['alerta']==1){
                                          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
                                            echo '<strong>¡Revisar articulos!</strong> Usted bede revisar que los articulos del pedido sean los correctos.';
                                            echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                          echo'</div>';
                                        }
                                      ?>
                                    </div>
                                    <div class="col table-responsive ">
                                      <?php
                                          echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                            echo "<thead class='text-nowrap'>";  
                                              echo "<tr>";
                                                echo "<td>";
                                                  echo "Cliente";
                                                echo "</td>";
                                                echo "<td>";
                                                  echo "N° pedido";
                                                echo "</td>";
                                                echo "<td>";
                                                  echo "Fecha de salida";
                                                echo "</td>";
                                                echo "<td>";
                                                  echo "Ampliar";
                                                echo "</td>";
                                                echo "<td>";
                                                  echo "Confirmar";
                                                echo "</td>";                     
                                              echo "</tr>";
                                            echo "</thead>";
                                            $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                            $query4='SELECT `num_pedido`, `fecha_salida`, `estado_pedido`, `cod_cliente`, `num_cuenta_cobrar` FROM `pedido_cliente` WHERE estado_pedido=1;';
                                            $consulta4=mysqli_query($conexion,$query4);
                                            while($fila4 = mysqli_fetch_array($consulta4))
                                                {
                                                        echo '<form method="GET" action="confirmar_pedido_cli.php">';
                                                          echo "<tbody>";
                                                            echo "<tr>";
                                                              echo "<td>";
                                                                echo '<div class="mb-3">';
                                                                    $query3='SELECT `nombre_cliente`, `apellido_cliente` FROM `clientes` WHERE cod_cliente='.$fila4['cod_cliente'].';';
                                                                    $consulta3=mysqli_query($conexion,$query3);
                                                                    $fila3=mysqli_fetch_array($consulta3);
                                                                    echo '<input type="hidden" name="cod_cliente" value='.$fila4['cod_cliente'].'>';
                                                                    echo '<input class="form-control" type="text" value="'.$fila4['cod_cliente'].'_'.$fila3['nombre_cliente'].'-'.$fila3['apellido_cliente'].'" aria-label="Disabled input example" disabled readonly>';
                                                                echo '</div>';
                                                              echo "</td>";
                                                              echo "<td>";
                                                                echo '<div class="mb-3">';
                                                                    echo '<input type="hidden" name="num_pedido" value='.$fila4['num_pedido'].'>';
                                                                    echo '<input class="form-control" type="number" value='.$fila4['num_pedido'].' aria-label="Disabled input example" disabled readonly>';
                                                                echo '</div>';
                                                              echo "</td>";
                                                              echo "<td>";
                                                                echo '<div class="mb-3">';
                                                                  echo '<input type="hidden" name="fecha_salida" value="'.$fila4['fecha_salida'].'">';
                                                                  echo '<input class="form-control" type="date" value="'.$fila4['fecha_salida'].'" aria-label="Disabled input example" disabled readonly>';
                                                                echo '</div>';
                                                              echo "</td>";
                                                              echo "<td>";
                                                                echo '<a href="gestion_pedidos_art.php?num_pedido='.$fila4['num_pedido'].'"><button type="button" class="btn btn-outline-info">Ampliar</button></a>';
                                                              echo "</td>";
                                                              echo "<td>";
                                                                if ($_GET['confirmar']==1 AND $_GET['n_envio']==$fila4['num_pedido']){
                                                                  echo '<button type="submit" class="btn btn-success">Confirmar</button>';
                                                                } else{
                                                                  echo '<a href="gestion_pedidos.php?alerta=1"><button type="button" class="btn btn-success">Confirmar</button></a>';
                                                                }
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