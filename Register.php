<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body>
	<div class="background">
		<form class="Formulario" action="Register.php" method="POST">

			<h1> Registrate </h1>

			<?php
                if (isset($_POST['nombre'])) {
                    $nombre=$_POST['nombre'];
                    $correo=$_POST['correo'];
                    $contraseña=$_POST['contraseña'];

                    $campos=array();

                    if ($nombre=="") {
                        array_push($campos, "El campo Nombre no puede estar vacio");
                    }
                    if($correo=="" || strpos($correo, "@") ===false)
                    {
                        array_push($campos, "Ingrese un correo electrónico válido");
                    }
                    if($contraseña =="" || strlen($contraseña)<8)
                    {
                        array_push($campos, "El campo de contraseña no puede estar vacio. Debe tener minino 8 caracteres");
                    }
                    if(count($campos)>0)
                    {
                        echo"<div class='error'>";
                            for ($i=0; $i<count($campos); $i++)
														{
                                echo "<li>".$campos[$i]."</div>";
														}
                    }
                    else
                    {
                        echo "<div class='correcto'> Registro Exitoso";
                    }
									}
										echo "</div>";

										?>

			<div class="contenedor">

				<div class="input-contenedor">
					<img class="icon" src="Assests/user.png" alt="user">
					<input type="text" placeholder="Nombre" name="nombre">
				</div>

				<div class="input-contenedor">
					<img class="icon" src="Assests/correo-electronico.png" alt="correo-electronico">
					<input type="text" placeholder="Correo Electrónico" name="correo">
				</div>

				<div class="input-contenedor">
					<img class="icon" src="Assests/llave.png" alt="llave">
					<input type="password" placeholder="Contraseña" name="contraseña">
				</div>

				<input class="button" type="submit" value="Registrate">
				<p>Al registrarte aceptas nuestras condiciones de uso y política de privacidad.</p>
				<p> ¿Ya tienes cuenta? <a class="link" href="Login.html"> Iniciar Sesion. </a></p>

				<?php

				if(isset($_POST['submited']))
				{
						$conex = mysqli_connect("localhost","root","","formulario");
						if (!$conex) {
							echo "Fallo la conexion ";
						}
						else {
							echo "Se conectó correctamente";
						}
						$consulta = "INSERT INTO datosformulario(nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
						$resultado = mysqli_query($conex, $consulta);

						if (!$resultado) {
							echo "Registro Fallido";
						}
						else {
							echo "Registro Exitoso";
						}
				}

				 ?>

			</div>
		</form>
	</div>

</body>
</html>
