<?php
    $cod_cliente=$_GET["cod_cliente"];
    $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
    $query="SELECT `cod_cliente`, `nombre_cliente`, `apellido_cliente`, `dni_cliente`, `estado_cliente`, `tipo_cliente`, `domicilio_cliente`, `punt_calidad_cliente` FROM `clientes` WHERE cod_cliente = $cod_cliente";
    $consulta=mysqli_query($conexion,$query);#mysqli_query ejecuta la query
    $fila = mysqli_fetch_array($consulta); #trae de $consulta la primer fila y la guarda en fila siempre y cuando alla datos
    $nombre = $fila['nombre_cliente'];
    $apellido = $fila['apellido_cliente'];
    $dni = $fila['dni_cliente'];
    $estado = $fila['estado_cliente'];
    $tipo = $fila['tipo_cliente'];
    $domicilio = $fila['domicilio_cliente'];
    $calificacion = $fila['punt_calidad_cliente'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    <link href="../style/estilos.css" rel="stylesheet" type="text/css">
    <link href="../index/index.php" rel="stylesheet" type="text/css">
    <link href="alta_cli.php" rel="stylesheet" type="text/css">
    <link href="modificar_cli.php" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&family=Varela+Round&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

</head>
<body>
<div>
   <nav>

   </nav>
   <article>
            <div class="container row_rows">
                <div class="container heigth">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 justify-content-center align-items-center heigth">
                        <div class="col-11 heigth-84">
                            <div class="row alta border border-info rounded justify-content-center align-items-center heigth">
                                <form class="col-11 heigth-84" method="GET" action="modificar_cli_logico.php">
                                    <div class="row row_1 justify-content-center margen-bajo"> 
                                        <div class="col titulo_alta_p rounded">Modificar</div>
                                    </div>
                                    <div class="row row_1"> 
                                        <div class="col flexible_center">
                                            <div class="form-floating width">
                                                <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="nombre" value="<?php echo $nombre; ?>">
                                                <label for="floatingInputGrid">Nombre</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row_1 justify-content-center "> 
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="apellido" value="<?php echo $apellido; ?>">
                                                <label for="floatingInputGrid">Apellido</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_1 justify-content-center "> 
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="dni" value="<?php echo $dni; ?>">
                                                <label for="floatingInputGrid">DNI</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_1 justify-content-center "> 
                                        <div class="col">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="estado" value="<?php echo $estado; ?>">
                                                    <?php
                                                        if ($estado == 'activo')  {
                                                          echo  '<option value="activo">Activo</option>';
                                                          echo  '<option value="inactivo">Inactivo</option>';
                                                        } else{
                                                          echo  '<option value="inactivo">Inactivo</option>';
                                                          echo  '<option value="activo">Activo</option>';
                                                        }
                                                    ?>
                                                </select>
                                                <label for="floatingSelectGrid">Estado</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_1 justify-content-center "> 
                                        <div class="col">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="tipo" value="<?php echo $tipo; ?>">
                                                    <?php
                                                        if ($tipo == 'mayorista')  {
                                                          echo  '<option value="mayorista">Mayorista</option>';
                                                          echo  '<option value="minorista">Minorista</option>';
                                                        } else{
                                                          echo  '<option value="minorista">Minorista</option>';
                                                          echo  '<option value="mayorista">Mayorista</option>';
                                                        }
                                                    ?>
                                                </select>
                                                <label for="floatingSelectGrid">Tipo</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_1 justify-content-center "> 
                                        <div class="col">
                                            <div class="form-floating">
                                              <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="domicilio" value="<?php echo $domicilio; ?>">
                                              <label for="floatingInputGrid">Domicilio</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_1 justify-content-center"> 
                                        <div class="col-8">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="calificacion" value="<?php echo $calificacion; ?>">
                                                <label for="floatingInputGrid">Calificacion</label>
                                            </div>
                                        </div>
                                        <div class="col-4 flexible_end">
                                            <a class="btn btn-large btn-primary fs-3" href="#">
                                                <i class="icon-circle-arrow-up "></i> Alta
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   </article>
</div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>