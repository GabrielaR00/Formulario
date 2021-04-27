<?php
  session_start();
  $varsesion=$_SESSION['usuario'];
  $varsesion=$_SESSION['foto'];
  $foto=$_SESSION['foto'];
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
						<img class="d-block rounded-circle mx-auto my-2" src="<?php echo $foto; ?>" width="110">
						<h5 class="mb-0 pt-1"> <?php echo $nombreus ?></h5>
					</div>
					<div class="d-lg-none px-4 pb-4 text-center">

						<a class="btn btn-primary px-5 mb-2 collapsed" href="#sidemenu" role="button" aria-controls="sidemenu" data-toggle="collapse" aria-expanded="false"> Menú</a>

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

					<?php

           				include "conexion.php";

			            $consulta1 = "SELECT*FROM proyectos WHERE proyectos.nombreest = '$nombreus'";
			            $resultado1 = mysqli_query($conn, $consulta1);


						if ($resultado1->num_rows>0)
					    {
					          $cont=0;

					            while ($row=$resultado1->fetch_assoc())
					            {  $cont++ ?>
					              <div class="contenedorgiant pt-2">
				                  <div id="accordion" class="myaccordion">
				                    <div class="card">
				                      <div class="card-header" id="heading<?php echo $cont ?>">
				                        <h5 class="mb-0">
				                          <button class="btn d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapse<?php echo $cont ?>" aria-expanded="true" aria-controls="collapse<?php echo $cont ?>">
				                                                      <?php echo $row["NombreDelProyecto"]  ?>
				                            <span class="fa-stack fa-fw ">
				                              <i class="fas fa-circle fa-stack-2x"></i>
				                              <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
				                            </span>
				                          </button>

				                        </h5>
				                      </div>

				                      <div id="collapse<?php echo $cont ?>" class="collapse" aria-labelledby="heading<?php echo $cont ?>" data-parent="#accordion">
				                        <div class="card-body">

				                            <ul class="list-unstyled">

				                              <li> Nombre estudiante:
				                                <span class="fw-medium text-nav ms-2"> <?php echo $row["nombreest"]  ?></span>
				                              </li>
				                              <li> Nombre proyecto:
				                                <span class="fw-medium text-nav ms-2"> <?php echo $row["NombreDelProyecto"]  ?></span>
				                              </li>
				                              <li> Tipo de proyecto:
				                                <span class="fw-medium text-nav ms-2"> <?php echo $row["Tipo"]  ?></span>
				                              </li>
				                              <li> Materia:
				                                <span class="fw-medium text-nav ms-2"> <?php echo $row["Materia"]  ?></span>
				                              </li>
				                            </ul>
				                            <h3 class="h5">Descripción</h3>
				                            <p> <?php echo $row["Descripcion"]  ?></p>
				                            <div>
				                              <img class="card-img" src="<?php echo $row["foto"]?>">
				                            </div>


				                        </div>
				                      </div>
				                    </div>
				                 </div>
								<?php
								}
						}
						else
						{?>
							<div class="py-2 p-md-3">
								<div class="d-sm-flex align-items-center justify-content-between pb-4 text-center "></div>
								<h1 class="h3 mb-2 text-nowrap"> No hay proyectos subidos</h1>
							</div>

					<?php
						}
					?>



				</div>

			</div>
		</div>

	</div>

	<script type="bootstrap.min.js"></script>

</body>
</html>
