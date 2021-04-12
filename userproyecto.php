<?php
  session_start();
  $varsesion=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mis Proyectos</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link rel="stylesheet" href="bootstrap.min.css" / >
	<link rel="stylesheet" type="text/css" href="perfilestilo.css">

	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<?php include 'navsesion.html'; ?>
	</header>

	<?php
      
      if ($varsesion=true) {
        
        $nombreus=$_SESSION['usuario'];
        $correous=$_SESSION['correo'];          
       
      }
      ?>

	<div class="container pb-4 mb-md-3 py-5">
		<div class="row">
			<div class="col-lg-4 mb-4 mb-lg-0"> <!-- lateral box -->
				<div class="bg-light rounded 3 shadow-lg">
					<div class="px-3 py-4 mb-1 text-center">
						<img class="d-block rounded-circle mx-auto my-2" src="./Assests/user.png" width="110">
						<h5 class="mb-0 pt-1"> <?php echo $nombreus ?></h5>						
					</div>
					<div class="d-lg-block collapse pb-2" id="sidemenu">
						<h3 class="d-block backspace fonts blackcolor mb-0 px-4 py-3"> Menú</h3>
						<a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="userproyecto.php">Mis proyectos</a>
						<h3 class="backspace fonts blackcolor mb-0 px-4 py-3"> Configuración perfil</h3>
						<a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="perfiluser.php">Perfil</a>
						<a class="d-flex align-items-center nav-link-style px-4 py-3 border-top" href="cerrarsesion.php">Cerrar sesión
							<!-- <i class="ai fs-lg opacity-60 me-2"></i> -->
														
						</a>
					</div>
					
				</div>
				
			</div>
			<div class="col-lg-8"> <!-- box grande -->
				<div class="d-flex flex-column h-100 bg-light rounded-3 shadow-lg p-4">

					
					<div class="py-2 p-md-3">
						<div class="d-sm-flex align-items-center justify-content-between pb-4 text-center "></div>
						<h1 class="h3 mb-2 text-nowrap"> No hay proyectos subidos</h1>						
					</div>


					<div class="backspace rounded-3 p-4 mb-4">
						<div class="d-block d-sm-flex align-items-center">							
							<div class="ps-sm-3 text-center text-sm-start">
								<div class="p mb-0 fonts blackcolor pb-3"> <h5> Comparte tus proyectos con nosotros </h5> </div>
								<form method="POST" action="Input.php">

									<button class="btn btn-primary shadow btn-sm mb-2" type="submit"  >
										<i class="ai-refresh-cw me-2"></i>
										Subir Proyecto									
									</button>								

								</form>
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