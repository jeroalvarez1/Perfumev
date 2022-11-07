<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumev</title>
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    <link href="../style/estilos.css" rel="stylesheet" type="text/css">
    <link href="../index/index.php" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <div class="principal">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-2 text-white bg-opacity-75">
          <div class="container-fluid">
                <a class="navbar-brand" href="#">Perfumev</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                  </ul>
                </div>
          </div>
        </nav>
        <div class="separador-1 "></div>  
        <article class="container alinear">
                <div class="row anchura">
                    <div class="col-12 separador-1 "></div>
                    <div class="col-12 back_blanco-2 border-2 border-top border-end border-start border-dark">
                        <div class="row row-cols-2 alinear">
                            <div class="col-6">
                                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
                                    <div class="col-12 text-center text-wrap fs-1 titulo altura"><div>Clientes</div></div>
                                    <div class="col-12"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row justify-content-center">
                                    <div class="col"></div>
                                    <div class="col alinear">
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Pedidos
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <?php
                                                        $ha="ha";
                                                        $mo="mo";
                                                        $ce="ce";

                                                        echo '<li><a href="index.php?tipo='.$ha.'" class="dropdown-item">Hacer</a></li>';
                                                        echo '<li><a href="index.php?tipo='.$mo.'" class="dropdown-item">Modificar</a></li>';
                                                        echo '<li><a href="index.php?tipo='.$ce.'" class="dropdown-item">Cerrados</a></li>';
                                                    ?>    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="col-12 border-2 border-bottom border-end border-start border-dark">
                        <?php
                            $tipo=$_GET['tipo'];
                            switch($tipo){
                                case $_GET['']:
                                    echo '<div class="row">';
                                        echo '<div class="col">';
                                            echo '<div class="row row-cols-2">';
                                                echo '<div class="col-12">';
                                                    echo "<div class='row text-wrap fs-1 pedido_cli'>";
                                                        echo "<div class='col-12 altura alinear'>";
                                                            echo "<div>Hacer pedido</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12">';
                                                    echo "<div class='row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 back_blanco-3 align-items-center justify-content-center'>";
                                                        echo '<div class="col-12 alinear">';
                                                            echo '<form action="filas.php" method="GET">';
                                                                echo '<div class="row row-cols-3 altura align-items-center justify-content-center ">';
                                                                    echo '<div class="col">';
                                                                        $cod_cliente=3;
                                                                        echo '<input type="hidden" name="cod_cliente" value="'.$cod_cliente.'">';
                                                                        $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                                        $query='SELECT COUNT(num_pedido) FROM pedido_cliente ;';
                                                                        $consulta=mysqli_query($conexion,$query);
                                                                        $fila=mysqli_fetch_array($consulta);
                                                                        $num_pedido=$fila[0]+1;
                                                                        echo '<input class="form-control" type="text" value="Envio n° '.$num_pedido.'" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '<input type="hidden" name="num_pedido" value='.$num_pedido.'>';
                                                                        echo '<input type="hidden" name="estado" value="1">';
                                                                    echo '</div>';
                                                                    echo '<div class="col">';
                                                                        echo '<input class="form-control" type="date" value="" placeholder="Fecha de entrada" name="fecha" aria-label="Disabled input example">';
                                                                    echo '</div>';
                                                                    echo '<div class="col">';
                                                                        echo '<input type="hidden" name="limpiar" value="1">';
                                                                        echo "<button type='submit' class='btn btn-sm btn btn-success'>Confirmar</button>";
                                                                    echo '</div>';
                                                                echo "</div>";
                                                            echo '</form>';
                                                        echo "</div>";
                                                        echo '<div class="col-12"></div>';
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12 back_blanco-3">';
                                                    echo '<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">';
                                                        echo '<div class="col-12 table-responsive">';
                                                            #echo '<div class="separador-1 "></div>';
                                                            echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                                echo "<thead class='text-nowrap'>";
                                                                    echo "<tr>";
                                                                        echo "<td>";
                                                                            echo "Articulo";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Cantidad";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Aceptar";
                                                                        echo "</td>";
                                                                    echo "</tr>";
                                                                echo "</thead>";
                                                                $query1='SELECT cod_articulo, nombre_articulo FROM articulos_disponibles ;';
                                                                $consulta1=mysqli_query($conexion,$query1);
                                                                #$fila1=mysqli_fetch_array($consulta1);
                                                                while($fila1 = mysqli_fetch_array($consulta1)){
                                                                    echo '<form action="filas.php" method="GET">';
                                                                        echo "<tbody>";
                                                                            echo "<tr>";
                                                                                echo "<td>";
                                                                                    $cod_articulo=$fila1['cod_articulo'];
                                                                                    $nombre_atr=$fila1['nombre_articulo'];
                                                                                    echo '<input type="hidden" name="cod_articulo" value="'.$cod_articulo.'">';
                                                                                    echo '<input class="form-control" type="text" value="'.$cod_articulo.'_'.$nombre_atr.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input class="form-control" type="number" name="cantidad" value="10" placeholder="Cantidad" aria-label="Disabled input example">';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo "<button type='submit' class='btn btn-secondary'>Continuar</button>";
                                                                                echo "</td>";
                                                                            echo "</tr>";
                                                                        echo "</tbody>";
                                                                    echo '</form>';
                                                                }
                                                            echo "</table>";
                                                        echo "</div>";
                                                        echo '<div class="col-12 table-responsive">';
                                                            #echo '<div class="separador-1 "></div>';
                                                            echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                                echo "<thead class='text-nowrap'>";
                                                                    echo "<tr>";
                                                                        echo "<td>";
                                                                            echo "Articulo";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Cantidad";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Borrar";
                                                                        echo "</td>";
                                                                    echo "</tr>";
                                                                echo "</thead>";
                                                                $query2='SELECT cod_articulo, cantidad FROM articulo_pedido_cli_temp ;';
                                                                $consulta2=mysqli_query($conexion,$query2);
                                                                while($fila2 = mysqli_fetch_array($consulta2)){
                                                                    echo '<form action="filas_borrar.php" method="GET">';
                                                                        echo "<tbody>";
                                                                            echo "<tr>";
                                                                                $cod_articulo1=$fila2['cod_articulo'];
                                                                                $cantidad=$fila2['cantidad'];
                                                                                $query3='SELECT nombre_articulo FROM articulos_disponibles WHERE ("'.$cod_articulo1.'"= cod_articulo);';
                                                                                $consulta3=mysqli_query($conexion,$query3);
                                                                                $fila3=mysqli_fetch_array($consulta3);
                                                                                $nombre_atr1=$fila3[0];    
                                                                                echo "<td>";
                                                                                    echo '<input type="hidden" name="cod_articulo1" value="'.$cod_articulo1.'">';
                                                                                    echo '<input class="form-control" type="text" value="'.$cod_articulo1.'_'.$nombre_atr1.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input class="form-control" type="number" name="cantidad" value="'.$cantidad.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo "<button type='submit' class='btn btn-danger'>Borrar</button>";
                                                                                echo "</td>";
                                                                            echo "</tr>";
                                                                        echo "</tbody>";
                                                                    echo '</form>';
                                                                }
                                                            echo "</table>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';

                                    echo '</div>';
                                    break;
                                case "ha":
                                    echo '<div class="row">';
                                        echo '<div class="col">';
                                            echo '<div class="row row-cols-2">';
                                                echo '<div class="col-12">';
                                                    echo "<div class='row text-wrap fs-1 pedido_cli'>";
                                                        echo "<div class='col-12 altura alinear'>";
                                                            echo "<div>Hacer pedido</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12">';
                                                    echo "<div class='row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 back_blanco-3 align-items-center justify-content-center'>";
                                                        echo '<div class="col-12 alinear">';
                                                            echo '<form action="filas.php" method="GET">';
                                                                echo '<div class="row row-cols-3 altura align-items-center justify-content-center ">';
                                                                    echo '<div class="col">';
                                                                        $cod_cliente=3;
                                                                        echo '<input type="hidden" name="cod_cliente" value="'.$cod_cliente.'">';
                                                                        $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                                        $query='SELECT COUNT(num_pedido) FROM pedido_cliente ;';
                                                                        $consulta=mysqli_query($conexion,$query);
                                                                        $fila=mysqli_fetch_array($consulta);
                                                                        $num_pedido=$fila[0]+1;
                                                                        echo '<input class="form-control" type="text" value="Envio n° '.$num_pedido.'" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '<input type="hidden" name="num_pedido" value='.$num_pedido.'>';
                                                                        echo '<input type="hidden" name="estado" value="1">';
                                                                    echo '</div>';
                                                                    echo '<div class="col">';
                                                                        echo '<input class="form-control" type="date" value="" placeholder="Fecha de entrada" name="fecha" aria-label="Disabled input example">';
                                                                    echo '</div>';
                                                                    echo '<div class="col">';
                                                                        echo '<input type="hidden" name="limpiar" value="1">';
                                                                        echo "<button type='submit' class='btn btn-sm btn btn-success'>Confirmar</button>";
                                                                    echo '</div>';
                                                                echo "</div>";
                                                            echo '</form>';
                                                        echo "</div>";
                                                        echo '<div class="col-12"></div>';
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12 back_blanco-3">';
                                                    echo '<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">';
                                                        echo '<div class="col-12 table-responsive">';
                                                            #echo '<div class="separador-1 "></div>';
                                                            echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                                echo "<thead class='text-nowrap'>";
                                                                    echo "<tr>";
                                                                        echo "<td>";
                                                                            echo "Articulo";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Cantidad";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Stock";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Aceptar";
                                                                        echo "</td>";
                                                                    echo "</tr>";
                                                                echo "</thead>";
                                                                $query1='SELECT cod_articulo, nombre_articulo FROM articulos_disponibles ;';
                                                                $consulta1=mysqli_query($conexion,$query1);
                                                                #$fila1=mysqli_fetch_array($consulta1);
                                                                while($fila1 = mysqli_fetch_array($consulta1)){
                                                                    echo '<form action="filas.php" method="GET">';
                                                                        echo "<tbody>";
                                                                            echo "<tr>";
                                                                                echo "<td>";
                                                                                    $cod_articulo=$fila1['cod_articulo'];
                                                                                    $nombre_atr=$fila1['nombre_articulo'];
                                                                                    echo '<input type="hidden" name="cod_articulo" value="'.$cod_articulo.'">';
                                                                                    echo '<input class="form-control" type="text" value="'.$cod_articulo.'_'.$nombre_atr.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input class="form-control" type="number" name="cantidad" value="10" placeholder="Cantidad" aria-label="Disabled input example">';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input class="form-control" type="text" name="stock" value="Stock" placeholder="Stock" aria-label="Disabled input example" disabled readonly>';
                                                                                    #hacer no hay stock
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo "<button type='submit' class='btn btn-secondary'>Continuar</button>";
                                                                                echo "</td>";
                                                                            echo "</tr>";
                                                                        echo "</tbody>";
                                                                    echo '</form>';
                                                                }
                                                            echo "</table>";
                                                        echo "</div>";
                                                        echo '<div class="col-12 table-responsive">';
                                                            #echo '<div class="separador-1 "></div>';
                                                            echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                                echo "<thead class='text-nowrap'>";
                                                                    echo "<tr>";
                                                                        echo "<td>";
                                                                            echo "Articulo";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Cantidad";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Borrar";
                                                                        echo "</td>";
                                                                    echo "</tr>";
                                                                echo "</thead>";
                                                                $query2='SELECT cod_articulo, cantidad FROM articulo_pedido_cli_temp ;';
                                                                $consulta2=mysqli_query($conexion,$query2);
                                                                while($fila2 = mysqli_fetch_array($consulta2)){
                                                                    echo '<form action="filas_borrar.php" method="GET">';
                                                                        echo "<tbody>";
                                                                            echo "<tr>";
                                                                                $cod_articulo1=$fila2['cod_articulo'];
                                                                                $cantidad=$fila2['cantidad'];
                                                                                $query3='SELECT nombre_articulo FROM articulos_disponibles WHERE ("'.$cod_articulo1.'"= cod_articulo);';
                                                                                $consulta3=mysqli_query($conexion,$query3);
                                                                                $fila3=mysqli_fetch_array($consulta3);
                                                                                $nombre_atr1=$fila3[0];    
                                                                                echo "<td>";
                                                                                    echo '<input type="hidden" name="cod_articulo1" value="'.$cod_articulo1.'">';
                                                                                    echo '<input class="form-control" type="text" value="'.$cod_articulo1.'_'.$nombre_atr1.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input class="form-control" type="number" name="cantidad" value="'.$cantidad.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo "<button type='submit' class='btn btn-danger'>Borrar</button>";
                                                                                echo "</td>";
                                                                            echo "</tr>";
                                                                        echo "</tbody>";
                                                                    echo '</form>';
                                                                }
                                                            echo "</table>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';

                                    echo '</div>';

                                    break;
                                case "mo":
                                    $cod_cliente=3;
                                    echo '<div class="row">';
                                        echo '<div class="col">';
                                            echo '<div class="row row-cols-2">';
                                                echo '<div class="col-12">';
                                                    echo "<div class='row text-wrap fs-1 pedido_cli'>";
                                                        echo "<div class='col-12 altura alinear'>";
                                                            echo "<div>Modificar</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12">';
                                                    echo "<div class='row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 back_blanco-3 align-items-center justify-content-center'>";
                                                            echo '<div class="col-12">';
                                                                echo '<form action="#" method="GET">';
                                                                    echo '<div class="row row-cols-2 altura align-items-center justify-content-start ">';
                                                                        echo '<div class="col">';
                                                                            echo '<div class="row row row-cols-2 align-items-center justify-content-center">';
                                                                                echo '<div class="col">';
                                                                                    $cod_cliente=3;
                                                                                    echo '<select class="form-select" name="n_pedido" value='.$_GET['n_pedido'].' placeholder="N° pedido" aria-label="Default select example">';
                                                                                        echo '<option selected>Pedido '.$_GET['n_pedido'].'</option>';
                                                                                        $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                                                        $query4='SELECT `num_pedido`, `fecha_salida`, `estado_pedido`, `cod_cliente`, `num_cuenta_cobrar` FROM `pedido_cliente` WHERE cod_cliente='.$cod_cliente.' AND estado_pedido=1;';
                                                                                        $consulta4=mysqli_query($conexion,$query4);
                                                                                        while($fila4 = mysqli_fetch_array($consulta4)){
                                                                                            $ped=$fila4['num_pedido'];
                                                                                            echo '<option value='.$ped.'>'.$ped.'</option>';};
                                                                                    echo '</select>';
                                                                                echo '</div>';
                                                                                echo '<div class="col">';
                                                                                    echo '<input type="hidden" name="tipo" value="mo">';
                                                                                    echo '<input type="hidden" name="limpiar" value="1">';
                                                                                    echo "<button type='submit' class='btn btn-sm btn btn-success'>Confirmar</button>";
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="col">';
                                                                        echo '</div>';
                                                                    echo "</div>";
                                                                echo '</form>';
                                                            echo "</div>";
                                                        if ($_GET['n_pedido']!=0):
                                                            $query6='SELECT num_pedido, fecha_salida FROM pedido_cliente WHERE num_pedido='.$_GET['n_pedido'].';';
                                                            $consulta6=mysqli_query($conexion,$query6);
                                                            $fila6=mysqli_fetch_array($consulta6);
                                                            echo '<form action="modificar_pedido_cli.php" method="get"  class="col-12">';
                                                                echo '<div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 align-items-center justify-content-start">';
                                                                    echo '<div class="col"></div>';
                                                                    echo '<div class="col">';
                                                                        echo'<div class="row">';
                                                                            echo '<div class="col-12">';
                                                                                echo '<div class="row align-items-center justify-content-start">';
                                                                                    echo '<div class="col-7">';
                                                                                        echo '<input class="form-control" type="date" value="'.$fila6['fecha_salida'].'" placeholder="Fecha de entrada" name="fecha" aria-label="Disabled input example">';
                                                                                    echo '</div>';    
                                                                                    echo '<div class="col-5">';
                                                                                        echo '<input type="hidden" name="num_pedido1" value='.$fila6['num_pedido'].'>';
                                                                                        echo "<button type='submit' class='btn btn-sm btn btn-success'>Confirmar</button>";
                                                                                    echo '</div>';        
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                    echo'</div>';
                                                                echo '</div>';
                                                            echo '</form>';
                                                        else:
                                                            echo '<div class="col-12"></div>';
                                                        endif;
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12 back_blanco-3">';
                                                    echo '<div class="row row-cols-1 row-cols-sm-1 row-cols-md-1">';
                                                        echo '<div class="col-12 table-responsive">';
                                                            echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                                echo "<thead class='text-nowrap'>";
                                                                    echo "<tr>";
                                                                        echo "<td>";
                                                                            echo "Articulo";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Cantidad";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Modificar";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Borrar";
                                                                        echo "</td>";
                                                                    echo "</tr>";
                                                                echo "</thead>";
                                                                #$query1='SELECT articulo_pedido_cli.cod_articulo, articulo_pedido_cli.cantidad, articulo_pedido_cli.num_pedido FROM articulo_pedido_cli, pedido_cliente WHERE ((SELECT pedido_cliente.num_pedido WHERE pedido_cliente.estado=1 AND pedido_cliente.cod_cliente="'.$cod_cliente.'")=(articulo_pedido_cli.num_pedido)) ;';
                                                                $query1='SELECT n, cod_articulo, cantidad, num_pedido FROM articulo_pedido_cli WHERE num_pedido='.$_GET['n_pedido'].' ;';
                                                                $consulta1=mysqli_query($conexion,$query1);
                                                                while($fila1 = mysqli_fetch_array($consulta1)){
                                                                    echo '<form action="modificar_art.php" method="GET">';
                                                                        echo "<tbody>";
                                                                            echo "<tr>";
                                                                                echo "<td>";
                                                                                    $cod_articulo=$fila1['cod_articulo'];
                                                                                    $query5='SELECT nombre_articulo FROM articulos_disponibles WHERE "'.$cod_articulo.'"=cod_articulo;';
                                                                                    $consulta5=mysqli_query($conexion,$query5);
                                                                                    $fila5=mysqli_fetch_array($consulta5);
                                                                                    $nombre_atr=$fila5['nombre_articulo'];
                                                                                    echo '<input type="hidden" name="cod_articulo" value="'.$cod_articulo.'">';
                                                                                    echo '<input class="form-control" type="text" value="'.$cod_articulo.'_'.$nombre_atr.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input class="form-control" type="number" name="cantidad" value='.$fila1['cantidad'].' placeholder="Cantidad" aria-label="Disabled input example">';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input type="hidden" name="n" value='.$fila1['n'].'>';
                                                                                    echo '<input type="hidden" name="num_pedido" value='.$fila1['num_pedido'].'>';
                                                                                    echo "<button type='submit' class='btn btn-warning'>Modificar</button>";
                                                                                    #hacer no hay stock
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo "<button type='' class='btn btn-danger'>Borrar</button>";

                                                                                echo "</td>";
                                                                            echo "</tr>";
                                                                        echo "</tbody>";
                                                                    echo '</form>';
                                                                }
                                                                echo $_GET['cantidad'];
                                                            echo "</table>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';

                                    echo '</div>';

                                    break;
                                case "ce":
                                    $cod_cliente=3;
                                    echo '<div class="row">';
                                        echo '<div class="col">';
                                            echo '<div class="row row-cols-2">';
                                                echo '<div class="col-12">';
                                                    echo "<div class='row text-wrap fs-1 pedido_cli'>";
                                                        echo "<div class='col-12 altura alinear'>";
                                                            echo "<div>Cerrados</div>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12">';
                                                    echo "<div class='row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 back_blanco-3 align-items-center justify-content-center'>";
                                                            echo '<div class="col-12">';
                                                                echo '<form action="#" method="GET">';
                                                                    echo '<div class="row row-cols-2 altura align-items-center justify-content-start ">';
                                                                        echo '<div class="col">';
                                                                            echo '<div class="row row row-cols-2 align-items-center justify-content-center">';
                                                                                echo '<div class="col">';
                                                                                    $cod_cliente=3;
                                                                                    echo '<select class="form-select" name="n_pedido" value='.$_GET['n_pedido'].' placeholder="N° pedido" aria-label="Default select example">';
                                                                                        echo '<option selected>Pedido '.$_GET['n_pedido'].'</option>';
                                                                                        $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                                                        $query4='SELECT `num_pedido`, `fecha_salida`, `estado_pedido`, `cod_cliente`, `num_cuenta_cobrar` FROM `pedido_cliente` WHERE cod_cliente='.$cod_cliente.' AND estado_pedido=2;';
                                                                                        $consulta4=mysqli_query($conexion,$query4);
                                                                                        while($fila4 = mysqli_fetch_array($consulta4)){
                                                                                            $ped=$fila4['num_pedido'];
                                                                                            echo '<option value='.$ped.'>'.$ped.'</option>';};
                                                                                    echo '</select>';
                                                                                echo '</div>';
                                                                                echo '<div class="col">';
                                                                                    echo '<input type="hidden" name="tipo" value="ce">';
                                                                                    echo '<input type="hidden" name="limpiar" value="1">';
                                                                                    echo "<button type='submit' class='btn btn-sm btn btn-success'>Confirmar</button>";
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                        echo '<div class="col">';
                                                                        echo '</div>';
                                                                    echo "</div>";
                                                                echo '</form>';
                                                            echo "</div>";
                                                        if ($_GET['n_pedido']!=0):
                                                            $query6='SELECT num_pedido, fecha_salida FROM pedido_cliente WHERE num_pedido='.$_GET['n_pedido'].';';
                                                            $consulta6=mysqli_query($conexion,$query6);
                                                            $fila6=mysqli_fetch_array($consulta6);
                                                            echo '<div class="col-12">';
                                                                echo '<div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1 align-items-center justify-content-center">';
                                                                    echo '<div class="col">';
                                                                        echo'<div class="row">';
                                                                            echo '<div class="col-12">';
                                                                                echo '<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 align-items-center justify-content-start">';
                                                                                    echo '<div class="col text-wrap fs-5 bebas">'; 
                                                                                        $query7='SELECT nombre_cliente, apellido_cliente FROM `clientes` WHERE cod_cliente='.$cod_cliente.' ;';
                                                                                        $consulta7=mysqli_query($conexion,$query7);
                                                                                        $fila7=mysqli_fetch_array($consulta7);
                                                                                        echo "Pedido de: ".$fila7['nombre_cliente']." ".$fila7['apellido_cliente'];
                                                                                    echo '</div>';
                                                                                    echo '<div class="col">';
                                                                                        echo '<input class="form-control" type="date" value="'.$fila6['fecha_salida'].'" placeholder="Fecha de entrada" name="fecha" aria-label="Disabled input example" disabled readonly>';
                                                                                    echo '</div>';        
                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                    echo'</div>';
                                                                echo '</div>';
                                                            echo '</div>';
                                                        else:
                                                            echo '<div class="col-12"></div>';
                                                        endif;
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12 back_blanco-3">';
                                                    echo '<div class="row row-cols-1 row-cols-sm-1 row-cols-md-1">';
                                                        echo '<div class="col-12 table-responsive">';
                                                            echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                                echo "<thead class='text-nowrap'>";
                                                                    echo "<tr>";
                                                                        echo "<td>";
                                                                            echo "Articulo";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Cantidad";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Importe/u";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Importe/t";
                                                                        echo "</td>";
                                                                    echo "</tr>";
                                                                echo "</thead>";
                                                                #$query1='SELECT articulo_pedido_cli.cod_articulo, articulo_pedido_cli.cantidad, articulo_pedido_cli.num_pedido FROM articulo_pedido_cli, pedido_cliente WHERE ((SELECT pedido_cliente.num_pedido WHERE pedido_cliente.estado=1 AND pedido_cliente.cod_cliente="'.$cod_cliente.'")=(articulo_pedido_cli.num_pedido)) ;';
                                                                $query1='SELECT n, cod_articulo, cantidad, num_pedido FROM articulo_pedido_cli WHERE num_pedido='.$_GET['n_pedido'].' ;';
                                                                $consulta1=mysqli_query($conexion,$query1);
                                                                while($fila1 = mysqli_fetch_array($consulta1)){
                                                                    echo '<div>';
                                                                        echo "<tbody>";
                                                                            echo "<tr>";
                                                                                echo "<td>";
                                                                                    $cod_articulo=$fila1['cod_articulo'];
                                                                                    $query5='SELECT nombre_articulo, importe_venta FROM articulos_disponibles WHERE "'.$cod_articulo.'"=cod_articulo;';
                                                                                    $consulta5=mysqli_query($conexion,$query5);
                                                                                    $fila5=mysqli_fetch_array($consulta5);
                                                                                    $nombre_atr=$fila5['nombre_articulo'];
                                                                                    echo '<input type="hidden" name="cod_articulo" value="'.$cod_articulo.'">';
                                                                                    echo '<input class="form-control" type="text" value="'.$cod_articulo.'_'.$nombre_atr.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input class="form-control" type="number" name="cantidad" value='.$fila1['cantidad'].' placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    echo '<input class="form-control" type="text" value="$ '.$fila5['importe_venta'].'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                                echo "<td>";
                                                                                    $importe_total=$fila1['cantidad']*$fila5['importe_venta'];
                                                                                    $importe_total_envio=$importe_total_envio+$importe_total;
                                                                                    echo '<input class="form-control" type="text" value="$ '.$importe_total.'" placeholder="Cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                echo "</td>";
                                                                            echo "</tr>";
                                                                        echo "</tbody>";
                                                                    echo '</div>';
                                                                }
                                                                echo $_GET['cantidad'];
                                                            echo "</table>";
                                                        echo "</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                                echo '<div class="col-12 back_blanco-3">';
                                                    echo '<div class="row row-cols-1 align-items-center justify-content-start ">';
                                                        echo '<div class="col">';
                                                            echo '<div class="input-group">';
                                                                echo '<span class="input-group-text" id="inputGroup-sizing-default"><b>Total del pedido</b></span>';
                                                                echo '<input type="text" value="$ '.$importe_total_envio.'" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled readonly>';
                                                            echo '</div>';
                                                        echo '</div>';
                                                        echo '<div class="col"><div class="separador-1 "></div></div>';
                                                    echo '</div>';
                                                echo '</div>'; 
                                            echo '</div>';
                                        echo '</div>';

                                    echo '</div>';

                                    break;
                            }
                        ?>
                    </div>
                    <div class="col-12 separador-1"></div>
                </div>
        </article>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>