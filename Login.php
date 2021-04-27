<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="bootstrap.min.css" / >
   	<link rel="stylesheet" type="text/css" href="estilos.css">

   	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <title>Login</title>
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

    				<form class="Formulario" action="Login.php" method="POST">


					  <div class="input-contenedor">
					    <label for="exampleInputEmail1" class="form-label ">Email </label>
					    <input type="email" class="form-control " placeholder="Ingresa tu email" name="correo" >

					  </div>
					  <div class="input-contenedor">
					    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
					    <input type="password" class="form-control mb-2" placeholder="Ingresa tu contraseña" name="contraseña" >
					  </div>

					  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>

					</form>
	    		</div>
	    			<div class="nocuenta px-lg-5 pt-lg-3 pb-lg-4 p-4 w-100 mb-auto">
	    			<p>¿No tienes una cuenta? </p> <a class="regis text-light" href="Registro.php">  Registrate </a>
    			</div>

    			<?php

					if (isset($_POST['correo']))
					{
						$correo=$_POST['correo'];
						$contraseña=$_POST['contraseña'];

						$campos=array();

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
								      include "conexion.php";
                      //Validacion//
                      $consulta="SELECT*FROM usuarios where correo='$correo' and contraseña='$contraseña'";
                      $resultado=mysqli_query($conn,$consulta);
                      $filas=mysqli_num_rows($resultado);
                      $rol="SELECT*FROM admins where correo='$correo' and contraseña='$contraseña'";
                      $resultado2=mysqli_query($conn,$rol);
                      $filas2=mysqli_num_rows($resultado2);
                      $consulus="SELECT usuarios.nombre FROM usuarios where correo = '$correo'";
                      $resultado3 = $conn->query($consulus);
                      $consulus="SELECT usuarios.nombre FROM usuarios where correo = '$correo'";
                      $resultado3 = $conn->query($consulus);
                      $consuladmin="SELECT admins.nombre FROM admins where correo = '$correo'";
                      $resultado4 = $conn->query($consuladmin);
                     if ($filas)
                     {
                       $idadmin=1;

                       $consulta4= "SELECT usuarios.id as idusu FROM usuarios WHERE usuarios.correo = '$correo'";
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
                        $row=$resultado3->fetch_assoc();
                        $nombreusuario=$row["nombre"];

                        session_start();
                        $_SESSION['rol_id']=$idadmin;
                        $_SESSION['usuario']=$nombredatabase;
                        $_SESSION['idusu']=$idusu;
                        $_SESSION['correo']=$correodatabase;
                        $_SESSION['foto']=$foto;

                        header('location: Casa.php');
                      }
                     else if ($filas2)
                      {

                          $idadmin=2;

                          $consulta4= "SELECT admins.id as idusu FROM admins WHERE admins.correo = '$correo'";
                          $resul4 = mysqli_query($conn, $consulta4);
                          $resultfinal = mysqli_fetch_array($resul4);
                          $idusu = $resultfinal['idusu'];
                          $consulta5= "SELECT admins.nombre as nombredatabase FROM admins WHERE admins.id = '$idusu'";
                          $resul5 = mysqli_query($conn, $consulta5);
                          $resultfinal2 = mysqli_fetch_array($resul5);
                          $nombredatabase = $resultfinal2['nombredatabase'];
                          $consulta5= "SELECT admins.correo as correodatabase FROM admins WHERE admins.id = '$idusu'";
                          $resul5 = mysqli_query($conn, $consulta5);
                          $resultfinal3 = mysqli_fetch_array($resul5);
                          $correodatabase = $resultfinal3['correodatabase'];
                          $consulta6= "SELECT admins.fotoperfil as foto FROM admins WHERE admins.id = '$idusu'";
                          $resul6 = mysqli_query($conn, $consulta6);
                          $resultfinal6 = mysqli_fetch_array($resul6);
                          $foto = $resultfinal6['foto'];

                          session_start();
                          $_SESSION['rol_id']=$idadmin;
                          $_SESSION['usuario']=$nombredatabase;
                          $_SESSION['idusu']=$idusu;
                          $_SESSION['correo']=$correodatabase;
                          $_SESSION['foto']=$foto;

                          header('location: Casa.php');
                      }
                     else
                     {
                       echo "<div class='correcto mb-auto'> Correo o Contraseña Incorrecta";
                     }
                      mysqli_free_result($resultado);
                      mysqli_free_result($resultado2);
                      mysqli_close($conn);
						}
					}
						echo "</div>";
				?>

    		</div>

    	</div>


    </section>
    <link rel="stylesheet" href="bootstrap.min.js" / >


    <script type="bootstrap.min.js"></script>


    </body>
</html>
