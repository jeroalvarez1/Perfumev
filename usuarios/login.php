<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
	<div>
		<?php
			if ($_GET['st']==1) {
				echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">';
					echo '<strong>¡Usuario o contraseña incorecta!</strong> Vuelve a intentar ingresar. Si no puede informe el problema a nuestro correo electronico <b>jeroalvarez1@gmail.com</b></a>.';
					echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
			  	echo'</div>';
			};
		?>
	</div>
    <div class="global-container">
    	<div class="card login-form">
    	<div class="card-body">
    		<h3 class="card-title text-center">Ingresar</h3>
    		<div class="card-text">
    			<!--
    			<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
    			<form action="login_logico.php" method="post">
    				<!-- to error: add class "has-danger" -->
    				<div class="form-group">
    					<label for="exampleInputEmail1">Nombre de usuario</label>
    					<input type="text" name="usuario" class="form-control form-control-sm" aria-describedby="emailHelp">
    				</div>
    				<div class="form-group">
    					<label for="exampleInputPassword1">Contraseña</label>
    					<input type="password" name="contraseña" class="form-control form-control-sm" id="exampleInputPassword1">
    				</div>
    				<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
    			</form>
    		</div>
    	</div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>
