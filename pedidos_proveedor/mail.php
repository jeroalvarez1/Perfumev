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
<body>
    <div class="">
        <div class="separador-1 "></div> 
        <article class="container">
            <div class="container-fluid">
                <div class="row row-cols-1">
                    <div class="col"><div class="separador-1 "></div></div>
                    <div class="col ">
                        <div class="row row-cols-1">
                            <div class="col fondo-blanco border border-dark border-2 rounded-3">
                                <div class="row row-cols1 align-items-center altura3">
                                    <div class="col-9">
                                        <div class=" text-start fs-1 letra_bebas">
                                            <div>Bandeja de entrada</div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div><img src="../img/mail.png" class="imgen" alt="..."></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col"><div class="separador-3"></div></div>
                            <div class="col fondo-blanco border border-dark border-2 rounded-3">
                                <div class="row row-cols-1 justify-content-center">
                                    <?php
                                        $conexion=mysqli_connect('localhost','root','Jero2002?','perfumev03');
                                        $query='SELECT `num_mensaje`, `emisor`, `receptor`, `asunto`, `mensaje`, `estado` FROM `mensaje_pro` WHERE receptor=0;';
                                        $consulta=mysqli_query($conexion,$query);
                                        while($fila = mysqli_fetch_array($consulta)){
                                            echo '<div class="col">';
                                                echo '<div class="mb-1">';

                                                echo '</div>';
                                            echo '</div>';  
                                            echo '<div class="col">';
                                                echo '<div class="mb-1">';
                                                    $asunto=$fila['asunto'];
                                                    $num_mensaje=$fila['num_mensaje'];
                                                    echo '<a href="mail_mensaje.php?num_mensaje='.$num_mensaje.'"><button type="button" class="btn btn-light bt text-start border border-dark"><b>Asunto: </b>'.$asunto.'</button></a>';
                                                echo '</div>';
                                            echo '</div>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col"><div class="separador-1 "></div></div>
            </div>
        </article>
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>