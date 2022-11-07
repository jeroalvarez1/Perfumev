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
                                        <div class="row row-cols-1 ">
                                            <div class="col-12 text-center text-wrap fs-3 titulo rounded-pill altura">
                                                <div>Cuentas</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="row justify-content-center ">
                                            <div class="col margen">
                                                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 altura">
                                                    <div class="col"></div>
                                                    <div class="col flexible_center">
                                                            <input class="form-control" type="text" value="N° envio: <?php echo $_GET['num_envio'] ;?>" aria-label="Disabled input example" disabled readonly>
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
                                    <div class="col table-responsive ">
                                      <?php
                                          echo "<table class='justify-content-center text-center table table-success table-striped table-bordered'>";
                                            echo "<thead>";  
                                              echo "<tr>";
                                                echo "<td>";
                                                  echo "N° cuenta";
                                                echo "</td>";
                                                echo "<td>";
                                                  echo "Fecha de cierre";
                                                echo "</td>";
                                              echo "</tr>";
                                            echo "</thead>";
                                                $cod_proveedor=3;
                                                $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                                $query='SELECT num_cuenta_pagar, num_envio, pagado FROM cuentas_pagar WHERE num_envio='.$_GET['num_envio'].' ;';
                                                $consulta=mysqli_query($conexion,$query);
                                                while($fila = mysqli_fetch_array($consulta)){
                                                    ####################################
                                                    $num_envio=$fila['num_envio'];
                                                    $query1='SELECT  fecha_cierre FROM pedido_proveedor WHERE num_envio='.$num_envio.'';
                                                    $consulta1=mysqli_query($conexion,$query1);
                                                    $fila1=mysqli_fetch_array($consulta1);
                                                    ########################3
                  
                                                        echo '<form method="POST" action="subir_remito.php" enctype="multipart/form-data">';
                                                          echo "<tbody>";
                                                            echo "<tr>";
                                                              echo "<td>";
                                                                echo '<div class="mb-3">';
                                                                  echo '<input class="form-control" type="number" value='.$fila['num_cuenta_pagar'].' aria-label="Disabled input example" disabled readonly>';
                                                                echo '</div>';
                                                              echo "</td>";
                                                              echo "<td>";
                                                                echo '<div class="mb-3">';
                                                                  echo '<input class="form-control" type="date" value="'.$fila1['fecha_cierre'].'" aria-label="Disabled input example" disabled readonly>';
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