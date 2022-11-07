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
    <?php
        $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
        $query='SELECT `num_mensaje`, `emisor`, `receptor`, `asunto`, `mensaje`, `estado`, `estado` FROM `mensaje_pro` WHERE num_mensaje='.$_GET['num_mensaje'].';';
        $consulta=mysqli_query($conexion,$query);
        $fila=mysqli_fetch_array($consulta);
    ?>
    <div class="">
        <div class="separador-1 "></div> 
        <article class="container">
            <div class="container-fluid">
                <div class="row row-cols-1">
                    <div class="col"><div class="separador-1 "></div></div>
                    <div class="col fondo-gris border border-2">
                        <form action="inconveniente_pro_envio.php" method="GET" class="row row-cols-1">
                            <div class="col"><div class="separador-1 "></div></div>
                            <div class="col">
                                <input class="form-control" type="text" value="Para perfumev" aria-label="Disabled input example" disabled readonly>
                                <input type="hidden" name="num_envio" value="<?php echo $fila['num_mensaje'];?>">
                                <input type="hidden" name="cod_proveedor" value="<?php echo $fila['receptor'];?>">
                            </div>
                            <div class="col"><div class="separador-1 "></div></div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Asunto</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Escribe un asunto" name="asunto">
                                </div> 
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Escribe un mensaje" rows="3" name="mensaje"></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                            <div class="col"><div class="separador-1 "></div></div>
                        </form>
                    </div>
                </div>
                <div class="col"><div class="separador-1 "></div></div>
            </div>
        </article>
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
