<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap.min.css" / >
   	<link rel="stylesheet" type="text/css" href="estilos.css">

   	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <title>Registro</title>
  </head>
  <body class="bg-dark">
    <section>
    	<div class="row g-0">
    		<div class="col-lg-7 d-none d-lg-block">
    			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class=" carousel-item active back min-vh-100 ">

				    </div>
				    <div class=" carousel-item back2 min-vh-100 ">

				    </div>
				  </div>
				  <a class="carousel-control-prev"  href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </a>
				  <a class="carousel-control-next"  href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </a>
				</div>

    		</div>
    		<div class="col-lg-5 d-flex flex-column align-items-end min-vh-100 ">
    			<div class="px-lg-5 pt-lg-4 pb-lg-3 p-4  w-100 mb-auto">

    			</div>
    			<div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center " >

    				<h1  > Bienvenido </h1>

    				<form class="Formulario" action="Registro.php" method="POST">

    				  <div class="input-contenedor">
					    <label for="exampleInputName" class="form-label ">Nombre y apellido</label>
					    <input type="name" class="form-control " placeholder="Ingresa tu nombre y apellido" name="nombre"  >
					  </div>
					  <div class="input-contenedor">
					    <label for="exampleInputEmail1" class="form-label ">Email </label>
					    <input type="email" class="form-control " placeholder="Ingresa tu email" name="correo" >

					  </div>
					  <div class="input-contenedor">
					    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
					    <input type="password" class="form-control mb-2" placeholder="Ingresa tu contraseña" name="contraseña" >
					    <a href="a" class="links text-muted">¿Has olvidado tu contraseña?</a>
					  </div>
					  <button type="submit" class="btn btn-primary">Registrate</button>
					</form>

	    		</div>

	    			<div class="nocuenta px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mb-auto">

	    			<p>¿Ya tienes una cuenta? </p> <a class="regis text-light" href="Login.php">  Inicia Sesión </a>

    			</div>

    			<?php

					if (isset($_POST['nombre']))
					{
						$nombre=$_POST['nombre'];
						$correo=$_POST['correo'];
						$contraseña=$_POST['contraseña'];

						$campos=array();

						if ($nombre=="") {
								array_push($campos, "El campo nombre no puede estar vacio");
						}
						if($correo=="" || strpos($correo, "@unimilitar.edu.co") ===false)
						{
								array_push($campos, "Ingrese un correo electrónico válido: @unimilitar.edu.co");
						}
						if($contraseña =="" || strlen($contraseña)<8)
						{
								array_push($campos, "El campo de contraseña no puede estar vacio. Debe tener minino 8 caracteres");
						}
						if(count($campos)>0)
						{
								echo"<div class='error mb-auto'>";
									for ($i=0; $i<count($campos); $i++)
									{
											echo "<li> * ".  $campos[$i] ;
									}
								"</div>";
						}
						else
						{
								echo "<div class='correcto mb-auto'> Registro Exitoso";

								    $conex = mysqli_connect("localhost","root","","formulario");

								      $nombre = $_POST['nombre'];
								      $correo = $_POST['correo'];
								      $contraseña = $_POST['contraseña'];
								      $consulta = "INSERT INTO datosformulario(nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
								      $resultado = mysqli_query($conex, $consulta);

						}
					}
						echo "</div>";

				?>
    		</div>

    	</div>


    </section>


    <script type="bootstrap.bundle.min.js"></script>



    </body>
</html>
