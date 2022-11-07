<!DOCTYPE html> <!--$_REQUEST captura las variables sin importar cual es POST o GET-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    <link href="../style/estilos.css" rel="stylesheet" type="text/css">
    <link href="../index/index.php" rel="stylesheet" type="text/css">
    <link href="alta_cli.php" rel="stylesheet" type="text/css">
    <link href="modificar_cli.php" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,900&family=Varela+Round&display=swap" rel="stylesheet"> 
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
        <article>
        <div class="container row_rows">
                <div class="container heigth">
                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 justify-content-center align-items-center heigth">
                        <div class="col-11 heigth-84">
                            <div class="row alta border border-info rounded-3 justify-content-center align-items-center heigth">
                                <form class="col-11 heigth-84" method="GET" action="alta_cli_logico.php">
                                    <input type="hidden" name="cod_cliente" value="">
                                    <div class="row row_1 justify-content-center margen-bajo"> 
                                        <div class="col titulo_alta_p rounded fs-1">Dar de alta</div>
                                    </div>
                                    <div class="row row_1"> 
                                        <div class="col">
                                            <div class="form-floating width">
                                                <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="nombre" value="">
                                                <label for="floatingInputGrid">Nombre</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row_1 justify-content-center "> 
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="apellido" value="">
                                                <label for="floatingInputGrid">Apellido</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_1 justify-content-center "> 
                                        <div class="col">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="dni" value="">
                                                <label for="floatingInputGrid">DNI</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_1 justify-content-center "> 
                                        <div class="col">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="estado" value="">
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
                                                <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="tipo" value="">
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
                                              <input type="text" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="domicilio" value="">
                                              <label for="floatingInputGrid">Domicilio</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row_1 justify-content-center"> 
                                        <div class="col-8">
                                            <div class="form-floating">
                                                <input type="number" class="form-control" id="floatingInputGrid" placeholder="name@example.com" name="calificacion" value="">
                                                <label for="floatingInputGrid">Calificacion</label>
                                            </div>
                                        </div>
                                        <div class="col-4 flexible_end heigth-80">
                                          <button type="submit" class="btn btn-primary btn-lg fs-4 heigth">Listo</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
