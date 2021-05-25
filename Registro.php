<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="bootstrap.min.css" / >
   	<link rel="stylesheet" type="text/css" href="estilos1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <div class=" carousel-item back3 min-vh-100 ">

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
    		<div class="col-lg-5 d-flex flex-column align-items-end min-vh-auto ">
    			<div class="px-lg-5 pt-lg-4 pb-lg-3 p-4  w-100 mb-auto">
                    <div class="pt-lg-4 pb-lg-3">
                      <a href="index.php"><i class="fa fa-arrow-circle-left" style="font-size:45px;" aria-hidden="true"></i></a>
                    </div>
    			</div>
    			<div class="px-lg-5 py-lg-2 p-4 w-100 align-self-center " >

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
					    <input type="password" class="form-control mb-2" placeholder="Ingresa tu contraseña" name="contrasena" >

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
						$contrasena=$_POST['contrasena'];

						$campos=array();

						if ($nombre=="") {
								array_push($campos, "El campo nombre no puede estar vacio");
						}
						if($correo=="" || strpos($correo, "@unimilitar.edu.co") ===false)
						{
								array_push($campos, "Ingrese un correo electrónico válido: @unimilitar.edu.co");
						}
						if($contrasena =="" || strlen($contrasena)<8)
						{
								array_push($campos, "El campo de contraseña no puede estar vacio. Debe tener minino 8 caracteres");
						}

            include "conexion.php";

            $consulta1 = "SELECT*FROM usuarios WHERE usuarios.correo = $correo";
            $resultado1 = mysqli_query($conn, $consulta1);

            if ($consulta1=true) {
              echo "<div class='correcto mb-auto'> Este correo ya se encuentra registrado.";
                echo "<div class='correcto mb-auto'> Porfavor Ingrese un correo diferente";
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
              //CONXION
            else {
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $contrasena = $_POST['contrasena'];
                $consulta = "INSERT INTO usuarios(nombre, correo, fotoperfil, contrasena) VALUES ('$nombre', '$correo','', '$contrasena')";
                $resultado = mysqli_query($conn, $consulta);
                echo "<div class='correcto mb-auto'> Registro Exitoso";

                $consulta4= "SELECT usuarios.id as idusu FROM usuarios WHERE usuarios.nombre = '$nombre'";
                $resul4 = mysqli_query($conn, $consulta4);
                $resultfinal = mysqli_fetch_array($resul4);
                $idusu = $resultfinal['idusu'];
                $consulta5= "SELECT usuarios.nombre as nombredatabase FROM usuarios WHERE usuarios.id = '$idusu'";
                $resul5 = mysqli_query($conn, $consulta5);
                $resultfinal2 = mysqli_fetch_array($resul5);
                $nombredatabase = $resultfinal2['nombredatabase'];
                $consulta5= "SELECT usuarios.correo as correodatabase FROM usuarios WHERE usuarios.id = '$idusu'";
                $resul5 = mysqli_query($conn, $consulta5);
                $resultfinal3 = mysqli_fetch_array($resul5);
                $correodatabase = $resultfinal3['correodatabase'];
                $consulta6= "SELECT usuarios.fotoperfil as foto FROM usuarios WHERE usuarios.id = '$idusu'";
                $resul6 = mysqli_query($conn, $consulta6);
                $resultfinal6 = mysqli_fetch_array($resul6);
                $foto = $resultfinal6['foto'];
                $consulta7= "SELECT usuarios.contrasena as contrasena FROM usuarios WHERE usuarios.id = '$idusu'";
                $resul7 = mysqli_query($conn, $consulta7);
                $resultfinal7 = mysqli_fetch_array($resul7);
                $contrasenausuario = $resultfinal7['contrasena'];

                $idadmin=1;

                session_start();
                $_SESSION['rol_id']=$idadmin;
                $_SESSION['idusu']=$idusu;
                $_SESSION['usuario']=$nombredatabase;
                $_SESSION['correo']=$correodatabase;
                $_SESSION['foto']=$foto;
                $_SESSION['contrasena']=$contrasenausuario;


                header('location: index.php');
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
