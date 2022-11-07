<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="../style/style.css" rel="stylesheet" type="text/css">
    <link href="../clientes/clientes.php" rel="stylesheet" type="text/css">
    <link href="../proveedores/proveedores.php" rel="stylesheet" type="text/css">
    <link href="../articulos_disponibles/articulos_disponibles.php" rel="stylesheet" type="text/css">
</head>
<body>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Secciones</a>
            <ul class="dropdown-menu bg-light p-2 text-white" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="../clientes/clientes.php">Clientes</a></li>
              <li><a class="dropdown-item" href="../proveedores/proveedores.php">Proveedores</a></li>
              <li><a class="dropdown-item" href="../articulos_disponibles/articulos_disponiles.php">Articulos disponibles</a></li>
              <li><a class="dropdown-item" href="../pedidos_proveedor/gestion_envios.php">Pedidos del proveedor</a></li>
              <li><a class="dropdown-item" href="../pedidos_cliente/gestion_pedidos.php">Pedidos de cliente</a></li>
              <!--<li><a class="dropdown-item" href="#">Cuetas por cobrar</a></li>
              <li><a class="dropdown-item" href="#">Cuentas por pagar</a></li>
              <li><a class="dropdown-item" href="#">Pedidos de la semana</a></li>-->
            </ul>
          </li>
    </div>
  </nav>       
  <article>
    <div class="articulo_caja container-fluid">
      <div class="parte container-fluid">
        <div class="secciones">
          <div class="card " aria-hidden="true">
            <img src="../img/clientes.gif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span>
                </h5>
              <a href="../clientes/clientes.php" tabindex="-1" class="btn btn-primary col-8">Ir</a>
            </div>
          </div>
        </div>
        <div class="secciones">  
          <div class="card" aria-hidden="true">
            <img src="../img/proveedores.gif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
              </h5>
              <a href="../proveedores/proveedores.php" tabindex="-1" class="btn btn-primary col-8">Ir</a>
            </div>
          </div>
        </div>
        <div class="secciones">  
          <div class="card" aria-hidden="true">
            <img src="../img/articulos_disponibles.gif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
              </h5>
              <a href="../articulos_disponibles/articulos_disponiles.php" tabindex="-1" class="btn btn-primary col-8">Ir</a>
            </div>
          </div>
        </div>
      </div>
    <!--  <div class="parte container-fluid">
        <div class="secciones">  
          <div class="card" aria-hidden="true">
            <img src="../img/cuentas_por_cobrar.gif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
              </h5>
              <a href="../clientes/clientes.php" tabindex="-1" class="btn btn-primary col-8">Ir</a>
            </div>
          </div>
        </div>
        <div class="secciones">  
          <div class="card" aria-hidden="true">
            <img src="../img/cuentas_por_pagar.gif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
              </h5>
              <a href="../clientes/clientes.php" tabindex="-1" class="btn btn-primary col-8">Ir</a>
            </div>
          </div>
        </div>
        <div class="secciones">  
          <div class="card" aria-hidden="true">
            <img src="../img/pedidos_de_la_semana.gif" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
              <h5 class="card-title placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
              </h5>
              <a href="../clientes/clientes.php" tabindex="-1" class="btn btn-primary col-8">Ir</a>
            </div>
          </div>
        </div>
      </div>
    </div>  -->
  </article>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!--<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home" aria-hidden="true"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart" aria-hidden="true"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users" aria-hidden="true"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2" aria-hidden="true"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers" aria-hidden="true"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>-->
  </body>
</html>