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
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
</head>
<body class="">
        <?php
            $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
            $query='SELECT `num_mensaje`, `emisor`, `receptor`, `asunto`, `mensaje`, `estado` FROM `mensaje_pro` WHERE num_mensaje='.$_GET['num_mensaje'].';';
            $consulta=mysqli_query($conexion,$query);
            $fila=mysqli_fetch_array($consulta);
        ?>
        <article class="container">
            <div class="container-fluid">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="separador-2"></div>
                    </div>
                    <div class="col fondo-blanco border border-dark border-2 rounded-3">
                        <div class="row row-cols-1">
                            <div class="col border-bottom border-dark border-2">
                                    <div class='row text-wrap fs-1 letra_bebas'>
                                        <div class='col'>
                                            <div class="row">
                                                <div class="col-10">
                                                    <div>Mensaje de Perfumev</div>
                                                </div>
                                                <div class="col-2">
                                                    <a href="inconveniente_pro.php?num_mensaje=<?php echo $fila['num_mensaje']; ?>" target="_blank" onClick="window.open(this.href, this.target, 'width=600,height=400'); return false;"><img src="../img/rta.png" class="imgen-1" alt="..."></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col">
                                <div class="row row-cols-1 justify-content-center">
                                    <div class="col">
                                        <div class="row row-cols-1">
                                            <div class="col">
                                                <div><b>Asunto: </b><?php echo $fila['asunto']; ?></div> 
                                            </div>
                                            <div class="col">
                                                <div><b>Mensaje: </b><?php echo $fila['mensaje'] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>