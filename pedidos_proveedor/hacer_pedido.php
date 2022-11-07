<!DOCTYPE html>
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
        <article class="container">
            <div class="row">
                <div class="col-12">
                    <div class="articulo container border border-5">
                        <div class="container-fluid barra_alta">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 justify-content-center">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
                                                        <div class="col text-center text-wrap fs-1 titulo rounded-pill altura">
                                                            <div>Pedidos</div>
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row justify-content-center rounded-pill back_blanco">
                                                <div class="col-10">
                                                    <div class="row margen">
                                                        <div class="col-12 altura ">
                                                            <div class="row justify-content-center alturap flexible_center">
                                                                <div class="col-auto table-responsive ">
                                                                    <table class="">
                                                                        <thead class="">
                                                                            <tr class="">
                                                                                <td>
                                                                                    <form method="GET" action="#">
                                                                                        <input type="hidden" name="est" value="pe">
                                                                                        <button type="submit" class="btn btn-info btn-md">Pedido</button>
                                                                                    </form>
                                                                                </td>
                                                                                <td>
                                                                                    <form method="GET" action="#">
                                                                                        <input type="hidden" name="est" value="pr">
                                                                                        <button type="submit" class="btn btn-warning btn-md">Proceso</button>
                                                                                    </form>
                                                                                </td>
                                                                                <td>
                                                                                    <form method="GET" action="#">
                                                                                        <input type="hidden" name="est" value="en">
                                                                                        <button type="submit" class="btn btn-secondary btn-md">Envio</button>
                                                                                    </form>
                                                                                </td>
                                                                                <td>
                                                                                    <form method="GET" action="#">
                                                                                        <input type="hidden" name="est" value="ce">
                                                                                        <button type="submit" class="btn btn-danger btn-md">Cerrado</button>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>      
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
                        <div class="container-fluid">
                            <div class="row row-cols-1 back_blanco border-primary border border-5">
                                    <?php
                                        $est=$_GET['est'];
                                        switch ($est){
                                            case "":
                                                echo '<div class="col-12">';
                                                    echo "<div class='row text-start text-wrap fs-1 titulo'>";
                                                        echo "<div class='col-12 alinear'>Pedido</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                                $cod_proveedor=3; #esto esta remplazando a la sesion.
                                                $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                $query9='SELECT `num_mensaje`, `emisor`, `receptor`, `asunto`, `mensaje`, `estado` FROM `mensaje_pro` WHERE estado=0  AND receptor='.$cod_proveedor.'';
                                                $consulta9=mysqli_query($conexion,$query9);
                                                while($fila9 = mysqli_fetch_array($consulta9)){
                                                    $c=$c+1;
                                                }
                                                echo '<div class="col"><div class="separador-1"></div></div>';
                                                echo '<div class="col-12">';
                                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                                    ?>
                                                        <a href="mensaje_pro.php?cod_proveedor=<?php echo $cod_proveedor; ?>" target="_blank" onClick="window.open(this.href, this.target, 'width=400,height=300'); return false;" class="alert-link">Mensajes</a>. de Perfumev.
                                                    <?php
                                                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="col-12 table-responsive">';                                                 
                                                    echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                        echo "<thead class='text-nowrap'>";  
                                                            echo "<tr>";
                                                                echo "<td>";
                                                                    echo "Pedido";
                                                                echo "</td>";
                                                                echo "<td>";
                                                                    echo "Articulo";
                                                                echo "</td>";
                                                                echo "<td>";
                                                                    echo "Nombre";
                                                                echo "</td>";
                                                                echo "<td>";
                                                                    echo "Cantidad";
                                                                echo "</td>";
                                                                echo "<td>";
                                                                    echo "Importe de articulo/u";
                                                                echo "</td>";
                                                                echo "<td>";
                                                                    echo "Importe de articulo/total";
                                                                echo "</td>";
                                                                echo "<td>";
                                                                    echo "Fecha de entrada";
                                                                echo "</td>";
                                                                echo "<td>";
                                                                    echo "Confirmar";
                                                                echo "</td>";
                                                            echo "</tr>";
                                                        echo "</thead>";
                                                        $query='SELECT `num_pedido_pro`, `cod_proveedor`, `fecha_entrada`, `cod_articulo`, `cantidad_pedido`, `importe_compra`, `estado` FROM `pedido_proveedor` WHERE ((estado=1) AND (cod_proveedor= "'.$cod_proveedor.'"));';
                                                        $consulta=mysqli_query($conexion,$query);
                                                        #$fila=mysqli_fetch_array($consulta);
                                                        while($fila = mysqli_fetch_array($consulta)){
                                                            echo "<form method='GET' action='alta_hacer_pedido.php'>";
                                                                echo "<tbody>";    
                                                                echo "<tr>";
                                                                    echo '<input type="hidden" name="cod_proveedor" value="'.$fila['cod_proveedor'].'">';
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input type="hidden" name="num_pedido_pro" value="'.$fila['num_pedido_pro'].'">';
                                                                            echo '<input class="form-control" type="number" value="'.$fila['num_pedido_pro'].'" name="num_pedido_pro" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input type="hidden" name="cod_articulo" value="'.$fila['cod_articulo'].'">';
                                                                            echo '<input class="form-control" type="text" value="'.$fila['cod_articulo'].'" name="cod_articulo" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                    $query2='SELECT nombre_articulo FROM articulos_disponibles WHERE cod_articulo="'.$fila['cod_articulo'].'";';
                                                                    $consulta2=mysqli_query($conexion,$query2);
                                                                    $fila2=mysqli_fetch_array($consulta2);
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input type="hidden" name="nombre" value="'.$fila2['nombre_articulo'].'">';
                                                                            echo '<input class="form-control" type="text" value="'.$fila2['nombre_articulo'].'" name="nombre" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input class="form-control" type="number" value="'.$fila['cantidad_pedido'].'" name="cantidad" aria-label="Disabled input example">';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            $importe_total=$fila['importe_compra']*$fila['cantidad_pedido'];
                                                                            echo '<input class="form-control" type="text" value="$ '.$fila['importe_compra'].'" aria-label="Disabled input example" disabled readonly>';
                                                                            echo '<input type="hidden" name="importe_compra" value='.$fila['importe_compra'].'>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input class="form-control" type="text" value="$ '.$importe_total.'" aria-label="Disabled input example" disabled readonly>';
                                                                            echo '<input type="hidden" name="importe_compra-t" value='.$importe_total.'>';    
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input class="form-control" type="date" value="'.$fila['fecha_entrada'].'" aria-label="Disabled input example"  disabled readonly>';
                                                                            echo '<input type="hidden" name="fecha_entrada" value="'.$fila['fecha_entrada'].'">';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                        echo '<input type="hidden" name="estado" value="2">';
                                                                    echo "<td>";
                                                                        echo '<button type="submit" class="btn btn-success">Confirmar</button>';
                                                                    echo "</td>";
                                                                echo "</tr>";
                                                                echo "</tbody>";
                                                            echo "</form>";
                                                        }
                                                    echo "</table>";
                                                echo '</div>';    
                                                break;
                                            case "pe":
                                                echo '<div class="col-12">';
                                                    echo "<div class='row text-start text-wrap fs-1 titulo'>";
                                                        echo "<div class='col-12 alinear'>Pedido</div>";
                                                    echo "</div>";
                                                echo '</div>';
                                                $cod_proveedor=3; #esto esta remplazando a la sesion.
                                                $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                $query9='SELECT `num_mensaje`, `emisor`, `receptor`, `asunto`, `mensaje`, `estado` FROM `mensaje_pro` WHERE estado=0  AND receptor='.$cod_proveedor.'';
                                                $consulta9=mysqli_query($conexion,$query9);
                                                while($fila9 = mysqli_fetch_array($consulta9)){
                                                    $c=$c+1;
                                                }
                                                echo '<div class="col"><div class="separador-1"></div></div>';
                                                echo '<div class="col-12">';
                                                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
                                                        echo '<a href="mensaje_pro.php?cod_proveedor='.$cod_proveedor.'" class="alert-link">Mensajes</a>. de Perfumev.';
                                                        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                                    echo '</div>';
                                                echo '</div>';
                                                echo '<div class="col-12 table-responsive">';   
                                                    echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                        echo "<thead class='text-nowrap'>";  
                                                            echo "<tr>";
                                                            echo "<td>";
                                                                echo "Pedido";
                                                            echo "</td>";
                                                            echo "<td>";
                                                                echo "Articulo";
                                                            echo "</td>";
                                                            echo "<td>";
                                                                echo "Nombre";
                                                            echo "</td>";
                                                            echo "<td>";
                                                                echo "Cantidad";
                                                            echo "</td>";
                                                            echo "<td>";
                                                                echo "Importe de articulo/u";
                                                            echo "</td>";
                                                            echo "<td>";
                                                                echo "Importe de articulo/total";
                                                            echo "</td>";
                                                            echo "<td>";
                                                                echo "Fecha de entrada";
                                                            echo "</td>";
                                                            echo "<td>";
                                                                echo "Confirmar";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                        echo "</thead>";
                                                        $cod_proveedor=3; #esto esta remplazando a la sesion.
                                                        $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                        $query='SELECT `num_pedido_pro`, `cod_proveedor`, `fecha_entrada`, `cod_articulo`, `cantidad_pedido`, `importe_compra`, `estado` FROM `pedido_proveedor` WHERE ((estado=1) AND (cod_proveedor= "'.$cod_proveedor.'"));';
                                                        $consulta=mysqli_query($conexion,$query);
                                                        #$fila=mysqli_fetch_array($consulta);
                                                        while($fila = mysqli_fetch_array($consulta)){
                                                            echo "<form method='GET' action='alta_hacer_pedido.php'>";
                                                                echo "<tbody>";    
                                                                echo "<tr>";
                                                                    echo '<input type="hidden" name="cod_proveedor" value="'.$fila['cod_proveedor'].'">';
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input type="hidden" name="num_pedido_pro" value="'.$fila['num_pedido_pro'].'">';
                                                                            echo '<input class="form-control" type="number" value="'.$fila['num_pedido_pro'].'" name="num_pedido_pro" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input type="hidden" name="cod_articulo" value="'.$fila['cod_articulo'].'">';
                                                                            echo '<input class="form-control" type="text" value="'.$fila['cod_articulo'].'" name="cod_articulo" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                    $query2='SELECT nombre_articulo FROM articulos_disponibles WHERE cod_articulo="'.$fila['cod_articulo'].'";';
                                                                    $consulta2=mysqli_query($conexion,$query2);
                                                                    $fila2=mysqli_fetch_array($consulta2);
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input type="hidden" name="nombre" value="'.$fila2['nombre_articulo'].'">';
                                                                            echo '<input class="form-control" type="text" value="'.$fila2['nombre_articulo'].'" name="" aria-label="Disabled input example" disabled readonly>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input class="form-control" type="number" value="'.$fila['cantidad_pedido'].'" name="cantidad" aria-label="Disabled input example">';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            $importe_total=$fila['importe_compra']*$fila['cantidad_pedido'];
                                                                            echo '<input class="form-control" type="text" value="$ '.$fila['importe_compra'].'" aria-label="Disabled input example" disabled readonly>';
                                                                            echo '<input type="hidden" name="importe_compra" value='.$fila['importe_compra'].'>';
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input class="form-control" type="text" value="$ '.$importe_total.'" aria-label="Disabled input example" disabled readonly>';
                                                                            echo '<input type="hidden" name="importe_compra-t" value='.$importe_total.'>';    
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo '<div class="mb-3">';
                                                                            echo '<input class="form-control" type="date" value="'.$fila['fecha_entrada'].'" aria-label="Disabled input example" disabled readonly>';
                                                                            echo '<input type="hidden" name="fecha_entrada" value="'.$fila['fecha_entrada'].'">';    
                                                                        echo '</div>';
                                                                    echo "</td>";
                                                                        echo '<input type="hidden" name="estado" value="2">';
                                                                    echo "<td>";
                                                                        echo '<button type="submit" class="btn btn-success">Confirmar</button>';
                                                                    echo "</td>";
                                                                echo "</tr>";
                                                                echo "</tbody>";
                                                            echo "</form>";
                                                        }
                                                    echo "</table>";
                                                echo '</div>';
                                                break;
                                                case "pr":
                                                        echo '<div class="col-12">';
                                                            echo "<div class='row text-start text-wrap fs-1 titulo'>";
                                                                echo "<div class='col-12 alinear'>Proceso</div>";
                                                            echo "</div>";
                                                        echo '</div>';
                                                        echo '<div class="col-12 table-responsive">';
                                                            echo '<div class="separador-1 "></div>';   
                                                            echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                                echo "<thead class='text-nowrap'>";  
                                                                    echo "<tr>";
                                                                        echo "<td>";
                                                                            echo "Pedido";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Articulo";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Nombre";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Cantidad";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Importe de articulo/u";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Importe de articulo/total";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Fecha de entrada";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Confirmar";
                                                                        echo "</td>";
                                                                        echo "<td>";
                                                                            echo "Borrar";
                                                                        echo "</td>";
                                                                    echo "</tr>";
                                                                echo "</thead>";
                                                                $cod_proveedor=3; #esto esta remplazando a la sesion.
                                                                $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                                $query='SELECT `num_pedido_pro`, `cod_proveedor`, `fecha_entrada`, `cod_articulo`, `cantidad_pedido`, `importe_compra`, `estado` FROM `pedido_proveedor` WHERE ((estado=2) AND (cod_proveedor="'.$cod_proveedor.'"));';
                                                                $consulta=mysqli_query($conexion,$query);
                                                                #$fila=mysqli_fetch_array($consulta);
                                                                while($fila = mysqli_fetch_array($consulta)){
                                                                    echo "<form method='GET' action='alta_hacer_pedido.php'>";
                                                                        echo "<tbody>";    
                                                                        echo "<tr>";
                                                                            echo '<input type="hidden" name="cod_proveedor" value="'.$fila['cod_proveedor'].'">';
                                                                            echo "<td>";
                                                                                echo '<div class="mb-3">';
                                                                                    echo '<input type="hidden" name="num_pedido_pro" value="'.$fila['num_pedido_pro'].'">';
                                                                                    echo '<input class="form-control" type="number" value="'.$fila['num_pedido_pro'].'" name="num_pedido_pro" aria-label="Disabled input example" disabled readonly>';
                                                                                echo '</div>';
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo '<div class="mb-3">';
                                                                                    echo '<input type="hidden" name="cod_articulo" value="'.$fila['cod_articulo'].'">';
                                                                                    echo '<input class="form-control" type="text" value="'.$fila['cod_articulo'].'" name="cod_articulo" aria-label="Disabled input example" disabled readonly>';
                                                                                echo '</div>';
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                            $query2='SELECT nombre_articulo FROM articulos_disponibles WHERE cod_articulo="'.$fila['cod_articulo'].'";';
                                                                            $consulta2=mysqli_query($conexion,$query2);
                                                                            $fila2=mysqli_fetch_array($consulta2);
                                                                                echo '<div class="mb-3">';
                                                                                    echo '<input type="hidden" name="nombre" value="'.$fila2['nombre_articulo'].'">';
                                                                                    echo '<input class="form-control" type="text" value="'.$fila2['nombre_articulo'].'" name="" aria-label="Disabled input example" disabled readonly>';
                                                                                echo '</div>';
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo '<div class="mb-3">';
                                                                                    echo '<input class="form-control" type="number" value="'.$fila['cantidad_pedido'].'" name="cantidad" aria-label="Disabled input example">';
                                                                                echo '</div>';
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo '<div class="mb-3">';
                                                                                    $importe_total=$fila['importe_compra']*$fila['cantidad_pedido'];
                                                                                    echo '<input class="form-control" type="text" value="$ '.$fila['importe_compra'].'" aria-label="Disabled input example" disabled readonly>';
                                                                                    echo '<input type="hidden" name="importe_compra" value='.$fila['importe_compra'].'>';
                                                                                echo '</div>';
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo '<div class="mb-3">';
                                                                                    echo '<input class="form-control" type="text" value="$ '.$importe_total.'" aria-label="Disabled input example" disabled readonly>';
                                                                                    echo '<input type="hidden" name="importe_compra-t" value='.$importe_total.'>';    
                                                                                echo '</div>';
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo '<div class="mb-3">';
                                                                                    echo '<input class="form-control" type="date" value="'.$fila['fecha_entrada'].'" aria-label="Disabled input example" disabled readonly>';
                                                                                    echo '<input type="hidden" name="fecha_entrada" value="'.$fila['fecha_entrada'].'">';
                                                                                echo '</div>';
                                                                            echo "</td>";
                                                                                echo '<input type="hidden" name="estado" value="3">';
                                                                            echo "<td>";
                                                                                echo '<button type="submit" class="btn btn-success">Confirmar</button>';
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo '<a href="borrar_hacer_pedido.php?num_pedido_proveedor='.$fila['num_pedido_pro'].'"><button type="button" class="btn btn-danger">Borrar</button></a>';
                                                                            echo "</td>";
                                                                        echo "</tr>";
                                                                        echo "</tbody>";
                                                                    echo "</form>";
                                                                }
                                                            echo "</table>";
                                                        echo '</div>';    
                                                break;
                                                case "en":
                                                    $cod_proveedor=3; #esto esta remplazando a la sesion.
                                                    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                    $query='SELECT `num_pedido_pro`, `cod_proveedor`, `fecha_entrada`, `cod_articulo`, `cantidad_pedido`, `importe_compra`, `estado` FROM `pedido_proveedor` WHERE (num_envio=0 AND (estado=3) AND (cod_proveedor="'.$cod_proveedor.'"));';
                                                    $consulta=mysqli_query($conexion,$query);
                                                    #$fila=mysqli_fetch_array($consulta);
                                                    echo '<div class="col-12">';
                                                        echo "<form method='GET' action='alta_logico_envio.php'>";
                                                            echo "<row>";
                                                                echo '<div class="col-12">';
                                                                    echo "<div class='row row-cols-md-1 row-cols-lg-2 text-start text-wrap fs-1 titulo '>";
                                                                        echo "<div class='col-12'>";
                                                                            echo '<div class="row align-items-center">';
                                                                                echo '<div class="col-4">';
                                                                                    echo '<div>Envio</div>';
                                                                                echo '</div>';
                                                                                echo '<div class="col">';

                                                                                echo '</div>';
                                                                            echo '</div>';
                                                                        echo "</div>";
                                                                        echo '<div class="col-12">';
                                                                            echo "<div class='row row-cols-sm-1 row-cols-md-2 alinear'>";
                                                                                $query8='SELECT COUNT(num_envio) FROM cuenta';
                                                                                $consulta8=mysqli_query($conexion,$query8);
                                                                                $fila8=mysqli_fetch_array($consulta8);
                                                                                $num_envio=$fila8[0]+1;
                                                                                $query7='SELECT `fecha_entrada` FROM `pedido_proveedor` WHERE (num_envio=0 AND (estado=3) AND (cod_proveedor="'.$cod_proveedor.'"));';
                                                                                $consulta7=mysqli_query($conexion,$query7);
                                                                                $fila7=mysqli_fetch_array($consulta7);
                                                                                echo '<div class="col-12 alinear"><input class="form-control" type="date" value="'.$fila7[0].'" name="fecha_entrada" aria-label="Disabled input example"></div>';
                                                                                echo '<input type="hidden" name="num_envio" value="'.$num_envio.'">';
                                                                                echo '<input type="hidden" name="cod_proveedor" value="'.$cod_proveedor.'">'; 
                                                                                echo '<div class=col-12>'; 
                                                                                    echo '<div class="row row-cols-2">';
                                                                                        echo '<div class="col-6"><input class="form-control" type="text" value="Envio n° '.$num_envio.'" aria-label="Disabled input example" disabled readonly></div>';
                                                                                        echo "<div class='col-6 alinear'><button type='submit' class='btn btn-success'>Confirmar</button></div>";
                                                                                    echo '</div>';
                                                                                echo '</div>';
                                                                            echo "</div>";
                                                                        echo '</div>';
                                                                    echo "</div>";
                                                                echo '</div>';
                                                                echo '<div class="col-12 table-responsive">';   
                                                                    echo '<div class="separador-1 "></div>';
                                                                    echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                                        echo "<thead class='text-nowrap'>";  
                                                                            echo "<tr>";
                                                                            echo "<td>";
                                                                                echo "Pedido";
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo "Articulo";
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo "Nombre";
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo "Cantidad";
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo "Importe de articulo/total";
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo "Fecha de entrada";
                                                                            echo "</td>";
                                                                            echo "<td>";
                                                                                echo "Borrar";
                                                                            echo "</td>";
                                                                            echo "</tr>";
                                                                        echo "</thead>";
                                                                        while($fila = mysqli_fetch_array($consulta)){
                                                                            echo "<form method='GET' action='alta_hacer_pedido.php'>";
                                                                                echo "<tbody>";    
                                                                                echo "<tr>";
                                                                                    echo '<input type="hidden" name="cod_proveedor" value="'.$fila['cod_proveedor'].'">';
                                                                                    echo "<td>";
                                                                                        echo '<div class="mb-3">';
                                                                                            echo '<input type="hidden" name="num_pedido_pro" value="'.$fila['num_pedido_pro'].'">';
                                                                                            echo '<input class="form-control" type="number" value="'.$fila['num_pedido_pro'].'" name="num_pedido_pro" aria-label="Disabled input example" disabled readonly>';
                                                                                        echo '</div>';
                                                                                    echo "</td>";
                                                                                    echo "<td>";
                                                                                        echo '<div class="mb-3">';
                                                                                            echo '<input type="hidden" name="cod_articulo" value="'.$fila['cod_articulo'].'">';
                                                                                            echo '<input class="form-control" type="text" value="'.$fila['cod_articulo'].'" name="cod_articulo" aria-label="Disabled input example" disabled readonly>';
                                                                                        echo '</div>';
                                                                                    echo "</td>";
                                                                                    echo "<td>";
                                                                                    $query2='SELECT nombre_articulo FROM articulos_disponibles WHERE cod_articulo="'.$fila['cod_articulo'].'";';
                                                                                    $consulta2=mysqli_query($conexion,$query2);
                                                                                    $fila2=mysqli_fetch_array($consulta2);
                                                                                        echo '<div class="mb-3">';
                                                                                            echo '<input type="hidden" name="nombre" value="'.$fila2['nombre_articulo'].'">';
                                                                                            echo '<input class="form-control" type="text" value="'.$fila2['nombre_articulo'].'" name="" aria-label="Disabled input example" disabled readonly>';
                                                                                        echo '</div>';
                                                                                    echo "</td>";
                                                                                    echo "<td>";
                                                                                        echo '<div class="mb-3">';
                                                                                            echo '<input class="form-control" type="number" value="'.$fila['cantidad_pedido'].'" name="cantidad" aria-label="Disabled input example" disabled readonly>';
                                                                                        echo '</div>';
                                                                                    echo "</td>";
                                                                                    echo "<td>";
                                                                                        echo '<div class="mb-3">';
                                                                                            $importe_total_a=$fila['importe_compra']*$fila['cantidad_pedido'];
                                                                                            $importe_total_envio=$importe_total_envio+$importe_total_a;
                                                                                            echo '<input class="form-control" type="text" value="$ '.$importe_total_a.'" aria-label="Disabled input example" disabled readonly>';
                                                                                            echo '<input type="hidden" name="importe_compra-t" value='.$importe_total_a.'>';    
                                                                                        echo '</div>';
                                                                                    echo "</td>";
                                                                                    echo "<td>";
                                                                                        echo '<div class="mb-3">';
                                                                                            echo '<input class="form-control" type="date" value="'.$fila['fecha_entrada'].'" name="fecha_entrada" aria-label="Disabled input example" disabled readonly>';
                                                                                        echo '</div>';
                                                                                    echo "</td>";
                                                                                    echo "<td>";
                                                                                        echo '<input type="hidden" name="num_envio1" value="'.$num_envio.'">';
                                                                                        echo '<a href="borrar_hacer_pedido.php?num_pedido_proveedor='.$fila['num_pedido_pro'].'"><button type="button" class="btn btn-danger">Borrar</button></a>';
                                                                                    echo "</td>";
                                                                                echo "</tr>";    
                                                                                echo "</tbody>";
                                                                            echo "</form>";
                                                                        }
                                                                    echo "</table>";
                                                                echo '</div>';
                                                                echo '<div class="col">';
                                                                    echo '<div class="row align-items-center justify-content-start ">';
                                                                    $query14='SELECT `importe_compra` FROM `pedido_proveedor` WHERE (num_envio=0 AND (estado=3) AND (cod_proveedor="'.$cod_proveedor.'"));';
                                                                    $consulta14=mysqli_query($conexion,$query14);
                                                                        echo '<div class="col">';
                                                                            echo '<div class="input-group">';
                                                                                echo '<span class="input-group-text" id="inputGroup-sizing-default"><b>Importe de envio</b></span>';
                                                                                echo '<input type="text" value="$ '.$importe_total_envio.'" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled readonly>';
                                                                            echo '</div>';
                                                                        echo '</div>';
                                                                    echo '</div>';
                                                                echo '</div>';   
                                                                echo '<div class="col"><div class="separador-1 "></div></div>';
                                                            echo "</div>";
                                                        echo "</form>"; 
                                                    echo "</div>";
                                                break;

                                                case "ce":
                                                    echo '<div class="col-12">';
                                                        echo "<div class='row text-start text-wrap fs-1 titulo'>";
                                                            echo "<div class='col-12 alinear'>Cerrado</div>";
                                                        echo "</div>";
                                                    echo '</div>';  
                                                    echo '<div class="col-12 table-responsive">';   
                                                        echo '<div class="separador-1 "></div>'; 
                                                        echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                                            echo "<thead class='text-nowrap'>";  
                                                                echo "<tr>";
                                                                    echo "<td>";
                                                                        echo "N° envio";
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo "Articulos";
                                                                    echo "<td>";
                                                                        echo "Fecha de entrada";
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo "Fecha de cierre";
                                                                    echo "</td>";
                                                                    echo "<td>";
                                                                        echo "Factura";
                                                                    echo "</td>";
                                                                echo "</tr>";
                                                            echo "</thead>";
                                                            $cod_proveedor=3;
                                                            $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                            $query='SELECT cuenta.num_envio FROM cuenta, pedido_proveedor WHERE cuenta.cod_proveedor='.$cod_proveedor.' AND cuenta.num_envio=(SELECT pedido_proveedor.num_envio WHERE estado=4)';
                                                            $consulta=mysqli_query($conexion,$query);
                                                                while($fila = mysqli_fetch_array($consulta)){
                                                                    if ($num_envio!=$fila['num_envio']){
                                                                        $num_envio=$fila['num_envio'];
                                                                        ####################################
                                                                        $query1='SELECT fecha_entrada, fecha_cierre FROM pedido_proveedor WHERE num_envio='.$num_envio.'';
                                                                        $consulta1=mysqli_query($conexion,$query1);
                                                                        $fila1=mysqli_fetch_array($consulta1);
                                                                            echo "<form method='GET' action='cuenta_pagar.php'>";
                                                                                echo "<tbody>";    
                                                                                    echo "<tr>";
                                                                                        echo "<td>";
                                                                                            echo '<div class="mb-3">';
                                                                                                echo '<input class="form-control" type="number" value="'.$fila['num_envio'].'"aria-label="Disabled input example" disabled readonly>';
                                                                                                echo '<input type="hidden" value='.$fila['num_envio'].' name="num_envio">';
                                                                                            echo '</div>';
                                                                                        echo "</td>";
                                                                                        echo "<td>";
                                                                                            echo '<div class="mb-3">';
                                                                                                echo '<a href="hacer_cerrado_ampliar.php?num_envio='.$num_envio.'"><button type="button" class="btn btn-info">Ampliar</button></a>';
                                                                                            echo '</div>';
                                                                                        echo "</td>";
                                                                                        echo "<td>";
                                                                                            echo '<div class="mb-3">';
                                                                                                echo '<input class="form-control" type="date" value="'.$fila1['fecha_entrada'].'" name="fecha_entrada" aria-label="Disabled input example" disabled readonly>';
                                                                                            echo '</div>';
                                                                                        echo "</td>";
                                                                                        echo "<td>";
                                                                                            echo '<div class="mb-3">';
                                                                                                echo '<input class="form-control" type="date" value="'.$fila1['fecha_cierre'].'" name="fecha_cierre" aria-label="Disabled input example" Disabled input example" disabled readonly>';
                                                                                            echo '</div>';
                                                                                        echo "</td>";
                                                                                        echo "<td>";
                                                                                            echo '<button type="submit" class="btn btn-light border border-1 border-dark ">Cuenta</button>';
                                                                                        echo "</td>";
                                                                                    echo "</tr>";
                                                                                echo "</tbody>";
                                                                            echo "</form>";
                                                                        }
                                                                }
                                                        echo "</table>";
                                                    echo '</div>';    
                                                    break;

                                        }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>