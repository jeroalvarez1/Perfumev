
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
  <div class="principal">
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
                            <li><a class="dropdown-item" href="clientes.php">Clientes</a></li>
                            <li><a class="dropdown-item" href="../proveedores/proveedores.php">Proveedores</a></li>
                            <li><a class="dropdown-item" href="#">Articulos disponibles</a></li>
                            <li><a class="dropdown-item" href="#">Cuetas por cobrar</a></li>
                            <li><a class="dropdown-item" href="#">Cuentas por pagar</a></li>
                            <li><a class="dropdown-item" href="#">Pedidos de la semana</a></li>
                           <!-- <li><hr class="dropdown-divider"></li>-->
                          </ul>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sub secciones
                          </a>
                          <ul class="dropdown-menu bg-light p-2 text-white " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="../pedidos_proveedor/gestion_envios.php">Gestor de pedidos</a></li>
                            <li><a class="dropdown-item" href="../pedidos_proveedor/pedidos_proveedor.php">Hacer pedido</a></li>
                        </li>
                        <!--<li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>-->
                      </ul>
                      <!--<form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>-->
                    </div>
          </div>
        </nav>      
        <article class="articulo container border border-5">
          <div class="container-fluid barra_alta">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 justify-content-center margen">
              <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2">
                <div class="col text-center text-wrap fs-4 titulo rounded-pill altura lh-sm">
                  <div>Pedidos proveedor</div>
                </div>
                <div class="col alin_centro">
                  <?php
                        #-------------------------------
                       /* $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                        $query='SELECT cod_articulo, articulos_disponibles.nombre_articulo, cantidad_minima FROM articulos_disponibles;';
                        $consulta=mysqli_query($conexion,$query);
                          while($fila = mysqli_fetch_array($consulta)){
                            echo '<form method="GET" action="">';
                              $codigo=$fila['cod_articulo'];
                              echo '<input type="hidden" name="codigo" value="'.$codigo.'">';
                            echo '</form>';}
                        #--------------------------------
                        $query1='SELECT SUM(cantidad) FROM almacena WHERE cod_articulo= LIKE cod_articulo;';
                        $consulta1=mysqli_query($conexion,$query1);*/
                  ?>
                </div>
                <div class="col">
  
                </div>
              </div>
              <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 margen">
                <div class="col selector-partes-2 altura rounded-pill ">
                  <div class="row justify-content-center">
                    <div class="col-9">
                      <form class="d-flex" method="GET" action="#">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busqueda">
                        <button type="submit" class="btn btn-success">Buscar</button>
                      </form>
                    </div>
                    <div class="col-2 flexible_end">
                      <form method="GET" action="alta_cli.php">
                        <button type="submit" class="btn btn-primary">Alta</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              <div class="col-sm-12 table-responsive pri_tabla">
                <?php
                    /*conexion*/
                    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                    echo "<table class='tabla table table-success table-striped table-bordered border-primary border border-5'>";
                      echo "<thead class='text-nowrap'>";  
                        echo "<tr>";
                          echo "<td>";
                            echo "Articulo";
                          echo "</td>";
                          echo "<td>";
                            echo "Nombre";
                          echo "</td>";
                          echo "<td>";
                            echo "Importe de compra/u";
                          echo "</td>";
                          echo "<td>";
                            echo "Proveedor";
                          echo "</td>";
                          echo "<td>";
                            echo "Cantidad/p";
                          echo "</td>";
                          echo "<td>";
                            echo "Cantidad/a";
                          echo "</td>";
                          echo "<td>";
                            echo "Fecha de entrada";
                          echo "</td>";
                          echo "<td>";
                            echo "En cola";
                          echo "</td>";
                          echo "<td>";
                            echo "Confirmar";
                          echo "</td>";                       
                        echo "</tr>";
                      echo "</thead>";
                      $busqueda=$_GET['busqueda'];
                      $query='SELECT cod_articulo, nombre_articulo, descripcion_articulo, gramo, mililitro, importe_compra, importe_venta, punt_calidad_articulo, cantidad_minima FROM articulos_disponibles WHERE (nombre_articulo LIKE "%'.$busqueda.'%") OR (cod_articulo LIKE "%'.$busqueda.'%");';
                      $consulta=mysqli_query($conexion,$query);
                      while($fila = mysqli_fetch_array($consulta)){
                        $codigo=$fila['cod_articulo'];
                        $cantidad_m=$fila['cantidad_minima'];
                        $cantidad_p=$cantidad_m*4;
                        #----------------------
                        $query5='SELECT SUM(cantidad) FROM almacena WHERE cod_articulo = "'.$codigo.'";';
                        $consulta5=mysqli_query($conexion,$query5);
                        $fila5=mysqli_fetch_array($consulta5);
                        $cantidad_total=$fila5[0];
                        #----------------------
                        $query2='SELECT num_pedido_pro FROM almacena WHERE cod_articulo = "'.$fila['cod_articulo'].'";';
                        $consulta2=mysqli_query($conexion,$query2);
                        $fila2=mysqli_fetch_array($consulta2);
                        $num_pedido_pro_al = $fila2['num_pedido_pro'];
                        #----------------------
                        $query3='SELECT cod_proveedor, fecha_entrada, estado FROM pedido_proveedor WHERE num_pedido_pro = "'.$num_pedido_pro_al.'";';
                        $consulta3=mysqli_query($conexion,$query3);
                        $fila3=mysqli_fetch_array($consulta3);
                        $cod_pro=$fila3['cod_proveedor'];
                        $fecha_pe=$fila3['fecha_entrada'];
                        $estado=$fila3['estado'];
                        #------------------------------
                        #query que diga que si la cantidad de catidad/p <> 0 no hacer nada else si hacer
                        if (($cantidad_total<=$cantidad_m)AND($estado<1)){
                            echo '<form method="GET" action="alta_pedidos_pro.php">';
                              echo "<tbody>";
                                echo "<tr>";
                                  echo "<td>";
                                    echo '<div class="mb-3">';
                                      echo '<input type="hidden" name="cod_articulo" value="'.$codigo.'">';
                                      echo '<input class="form-control" type="text" value="'.$codigo.'" name="cod_articulo" aria-label="Disabled input example" disabled readonly>';
                                    echo '</div>';
                                  echo "</td>";
                                  echo "<td>";
                                    echo '<div class="mb-3">';
                                      echo '<input class="form-control" type="text" value="'.$fila['nombre_articulo'].'" name="nombe_art" aria-label="Disabled input example" disabled readonly>';
                                    echo '</div>';
                                  echo "</td>";
                                  echo "<td>";
                                    echo '<div class="mb-3">';
                                      echo '<input class="form-control" type="text" value="'.$fila['importe_compra'].'" name="importe_compra" aria-label="Disabled input example">';
                                    echo '</div>';
                                  echo "</td>";
                                  echo "<td>";
                                    #----------------------------------------
                                    $query4='SELECT cod_proveedor, nombre_proveedor, apellido_proveedor FROM proveedor WHERE cod_proveedor = "'.$cod_pro.'";';
                                    $consulta4=mysqli_query($conexion,$query4);
                                    $fila4=mysqli_fetch_array($consulta4);
                                    $nombre_pro_pri=$fila4['nombre_proveedor'];
                                    $apellido_pro_pri=$fila4['apellido_proveedor'];
                                    $cod_pro_p_pri=$fila4['cod_proveedor'];
                                    #----------------------------------------
                                    $query6='SELECT cod_proveedor, nombre_proveedor, apellido_proveedor FROM proveedor;';
                                    $consulta6=mysqli_query($conexion,$query6);
                                    echo '<select class="form-select" aria-label="Disabled input example" name="cod_pro">';
                                      echo '<option value="'.$cod_pro_pri.'">'.$cod_pro_p_pri.'-'.$apellido_pro_pri.' '.$nombre_pro_pri.'</option>';
                                      while($fila6 = mysqli_fetch_array($consulta6)){
                                        $nombre_pro=$fila6['nombre_proveedor'];
                                        $apellido_pro=$fila6['apellido_proveedor'];
                                        $cod_pro_p=$fila6['cod_proveedor'];
                                        echo '<option value="'.$cod_pro_p.'">'.$cod_pro_p.'-'.$apellido_pro.'-'.$nombre_pro.'</option>';
                                      }
                                    echo '</select>';
                                  echo "</td>";
                                  echo "<td>";
                                    echo '<div class="mb-3">';
                                      echo '<input class="form-control" type="number" value="'.$cantidad_p.'" name="cantidad_p" aria-label="Disabled input example">';
                                    echo '</div>';
                                  echo "</td>";
                                  echo "<td>";
                                    echo '<div class="mb-3">';
                                      echo '<input class="form-control" type="number" value="'.$cantidad_total.'" name="cantidad_a" aria-label="Disabled input example" disabled readonly>';
                                    echo '</div>';
                                  echo "</td>";
                                  echo "<td>";
                                    echo '<div class="mb-3">';
                                      echo '<input class="form-control" type="date" value="" name="fecha_pe" aria-label="Disabled input example">';
                                    echo '</div>';
                                  echo "</td>";
                                  echo '<input type="hidden" name="estado" value="1">';
                                  echo "<td>";
                                    $query11='SELECT COUNT(cod_articulo) FROM pedido_proveedor WHERE (cod_articulo = "'.$codigo.'") AND (estado=1) OR (estado=2) OR (estado=3);';
                                    $consulta11=mysqli_query($conexion,$query11);
                                    $fila11=mysqli_fetch_array($consulta11);
                                    echo '<input class="form-control" type="number" value="'.$fila11[0].'" aria-label="Disabled input example" disabled readonly>';
                                  echo "</td>";
                                  echo "<td>";
                                    echo '<button type="submit" class="btn btn-success">Confirmar</button>';
                                  echo "</td>";
                                echo "</tr>";
                              echo "</tbody>";
                            echo '</form>';
                          }
                        #resolver con bases de datos
                        #envia variables a pedidos_proveedor
                        #$contador= $contador+1 ;
                        #session_start();
                        #$_SESSION['pedido'][$contador] = array($fila['cod_articulo'], $resultado);
                        
                      }
                    echo "</table>";
                      #var_dump($_SESSION['pedido'])
                ?>
              </div>
          </div>
        </article>
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>