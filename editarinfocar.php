<?php
  session_start();
  $varsesion=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mi cuenta</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="bootstrap.min.css" / >
	<link rel="stylesheet" type="text/css" href="perfilestilos03.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=KoHo:wght@600;700&display=swap" rel="stylesheet">

</head>
<body class="fondoadmin">
	<header >
		<?php include 'navsesionadmin.html'; ?>
	</header>
	<?php

      if ($varsesion=true) {

        $nombreus=$_SESSION['usuario'];
        $correous=$_SESSION['correo'];
        $foto=$_SESSION['foto'];

      }
      ?>
	<div class="container pb-4 mb-md-3 py-5">
		<div class="row">
			<div class="col-lg-4 mb-4 mb-lg-0"> <!-- side box -->
				<div class="bg-light rounded 3 shadow-lg">
					<div class="px-3 py-4 mb-1 text-center">
						<img class="d-block rounded-circle mx-auto my-2" src="<?php echo $foto; ?>" width="110">
						<h5 class="mb-0 pt-1 titulo"> <?php echo $nombreus ?></h5>
					</div>
					<div class="d-lg-none px-4 pb-4 text-center">

						<a class="btn btn-primary px-5 mb-2 collapsed" href="#sidemenu" role="button" aria-controls="sidemenu" data-toggle="collapse" aria-expanded="false"> Menú</a>

					</div>
			        <div class="d-lg-block collapse pb-2" id="sidemenu">
			            <h3 class="d-block backspace fonts blackcolor mb-0 px-4 py-3"> Menú</h3>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top" href="adminproyecto.php">Edición proyectos</a>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top activeadmin" href="editarinfocar.php">Información Carrera </a>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top" href="editarinfomate.php">Información Materias </a>
			            <h3 class="backspace fonts blackcolor mb-0 px-4 py-3"> Configuración perfil</h3>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top " href="perfiladmin.php">Perfil</a>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top" href="cerrarsesion.php">Cerrar sesión </a>
			        </div>

				</div>

			</div>
			<div class="col-lg-8"> <!-- box grande -->
				<div class="d-flex flex-column h-100 bg-light rounded-3 shadow-lg p-4">

			          <?php
			          $var = true;
			           include 'info.php';
			           ?>

				</div>

			</div>
		</div>

	</div>

  </div>

	<script type="bootstrap.min.js"></script>
</body>
</html>
