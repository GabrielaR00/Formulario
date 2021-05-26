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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
        $contrasena=$_SESSION['contrasena'];

      }
      ?>
	<div class="container pb-4 mb-md-3 py-5">
		<div class="row">
			<div class="col-lg-4 mb-4 mb-lg-0"> <!-- side box -->
				<div class="bg-light rounded 3 shadow-lg">
					<div class="px-3 py-4 mb-1 text-center">
						<img class="d-block rounded-circle mx-auto my-2" src="<?php echo $foto; ?>" width="110">
						<h5 class="mb-0 pt-1 titulo"> <?php echo $nombreus; ?></h5>
					</div>
					<div class="d-lg-none px-4 pb-4 text-center">

						<a class="btn btn-primary px-5 mb-2 collapsed" href="#sidemenu" role="button" aria-controls="sidemenu" data-toggle="collapse" aria-expanded="false"> Menú</a>

					</div>
			        <div class="d-lg-block collapse pb-2" id="sidemenu">
			            <h3 class="d-block backspace fonts blackcolor mb-0 px-4 py-3"> Menú</h3>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top" href="adminproyecto.php">Edición proyectos</a>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top" href="editarinfocar.php">Edición de información</a>
			            <h3 class="backspace fonts blackcolor mb-0 px-4 py-3"> Configuración perfil</h3>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top activeadmin" href="perfiladmin.php">Perfil</a>
			            <a class="d-flex align-items-center nav-link-style px-5 py-3 border-top" href="cerrarsesion.php">Cerrar sesión </a>
			        </div>

				</div>

			</div>
			<div class="col-lg-8">
				<div class="d-flex flex-column h-100 bg-light rounded-3 shadow-lg p-4">
					<div class="py-2 p-md-3">
						<div class="d-sm-flex align-items-center justify-content-between pb-4 text-center text-sm-start"></div>
						<h1 class="h3 mb-2 text-nowrap titulo"> Perfil</h1>
					</div>
					<div class="backspace rounded-3 p-4 mb-4">
						<div class="d-block d-sm-flex align-items-center">
							<img class="d-block rounded-circle mx-auto my-2" src="<?php echo $foto;?>" width="110">
							<div class="ps-sm-3 text-center text-sm-start">
	                			<form action="actualizarperfiladmin.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="foto2">
								<div class="p mb-0 fonts blackcolor"> Subir foto JPG o PNG. Requerido 300 x 300. </div>
							</div>
						</div>
					</div>
					<div class="row">
              <div class="col-sm-6">
	                <div class="mb-3 pb-1">
	                  <label class="form-label px-0 fw-medium">Nombre y apellido</label>
	                  <input type="text" class="form-control" placeholder="Ingresa tu nombre y apellido" name="nombrenew" value="<?php echo $nombreus ?>">
	                </div>
              </div>
              <div class="col-sm-6">
	                <div class="mb-3 pb-1">
	                  <label class="form-label px-0 fw-medium">Correo</label>
	                  <input type="text" class="form-control" placeholder="Ingresa tu correo" name="correonew" value="<?php echo $correous ?>">
	                </div>
				         </div>
              <div class="col-sm-6">
                     <div class="mb-3 pb-1">
                       <label class="form-label px-0 fw-medium">Contraseña</label>
                       <input type="password" class="form-control" placeholder="Ingresa tu contraseña" name="contranew" value="<?php echo $contrasena ?>">
                     </div>
                 </div>
                 <div class="col-sm-6"></div>
				      <div class="col-sm-6 pt-3 ">
					<button class=" editaradmin shadow btn-md py-2" type="submit" name="btneditar">
							<i class="ai-refresh-cw me-2"></i>
							Editar Perfil
					</button>
				</div>
          </div>
            		</form>
            		<div class="backspace rounded-3 p-3 m-4 d-flex justify-content-around">
		              	<div>
		              		<i class="fa fa-exclamation-circle fa-3x" aria-hidden="true"></i>
		              	</div>

		              	<div class="p mb-0 fonts blackcolor">Querido usuario: <br>Al momento de actualizar la información, la sesión se va a cerrar automáticamente.
		              	</div>
		          	</div>
				</div>
			</div>
		</div>

	</div>

  </div>

	<script type="bootstrap.min.js"></script>
</body>
</html>
