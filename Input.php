<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Envia Tu Trabajo</title>

	<link rel="stylesheet" href="bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="inputestilo.css">


	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body class="bg-dark ">
	<div>
		<?php include 'navsesion.html'; ?>
	</div>
	<div class="col align-self-start p-5"></div>
	<div class="contenedor col-6 d-flex flex-column p-2 mb-auto align-self-center">
		<h1 class="titulo" > Formulario de envio </h1>

		<form  action="input.php" method="POST" enctype="multipart/form-data">
			<div class="input-contenedor   ">
				<label for="exampleInputName" class="form-label ">Nombre del proyecto </label>
				<input type="name" class="form-control  " name="NombreP" >
			</div>
			<div class="input-contenedor">				
				<label for="exampleInputName" class="form-label ">Tipo </label>
				<div class="select-box ">
					<select class=" select px-lg-2 py-lg-2" name="tipo">
						<option>Seleccione una materia </option>
						<option>Animación 2D </option>
					    <option>Animación 3D</option>
					    <option>Arte analógico </option>
					    <option>Arte digital o</option>	
					    <option>Open GL </option>
					    <option>Página web </option>
						<option>Programa </option>
					    <option>Simulación </option>	    
					 	<option>Videojuego </option>		    
					    
					</select>
				</div>				

			</div >
			<div class="input-contenedor">
				<label for="exampleInputName" class="form-label ">Materia para la que se realizó el proyecto </label>
				<div class="select-box ">
					<select  class=" select px-lg-2 py-lg-2" name="materia">
						<option>Seleccione una materia </option>
						<option>Animación 2D </option>
					    <option>Animación 3D y dinámicas </option>
					    <option>Audio y video </option>
					    <option>Aplicaciones 3D </option>
					    <option>Computación gráfica </option>
					    <option>Diseño I</option>
					    <option>Diseño II</option>
					    <option>Diseño III</option>
					    <option>Dibujo </option>
					    <option>Expresión Gráfica </option>
					    <option>Gestión empresarial </option>
					    <option>Gestión integral de proyectos </option>
					    <option>Historia del arte </option>
					    <option>Ingeniera de Software </option>
					    <option>Integración multimedia </option>
					    <option>Inteligencia articial </option>
					    <option>Introducción a la computación gráfica </option>
					    <option>Introducción a la ingeniería </option>
					    <option>Metodologia de la investigación </option>
					    <option>Modelado 3D </option>
					    <option>Procesamiento de señales </option>
					    <option>Procesamiento de imagenes </option>
					    <option>Programacion I</option>
					    <option>Programacion II</option>
					    <option>Programacion III</option>
					   	<option>Render </option>
					  	<option>Taller digital de diseño </option>
					    <option>Tecnologias de la internet </option>
					    <option>Simulación </option>

					</select>

				</div>
			</div>
			<div  class="input-contenedor" row="3">
				<label for="exampleInputName" class="form-label ">Breve descripcíón </label>
				<textarea  name="descrip" placeholder="Escriba una breve descripción de su proyecto"></textarea>

			</div>

			    <div class="invoiceBox">
			      <label for="file">
			        <div class="boxFile" data-text="Seleccionar archivo">
			          Seleccionar archivo
			        </div>
			      </label>
			      <input id="file" name="archivo" size="6000" type="file" >
			    </div>

			<div class="botones ">
				<input type="reset" class="btn btn-primary  " value="Reestablecer" name="reestablecer" >
				<input type="submit" class="btn btn-primary " value="Enviar" name="envio">
				<div></div>
				

			</div>

	<?php
			include "conexion.php";
			$nombreest=$_SESSION['usuario'];
			if (isset($_POST['envio']))
			{
				$nombrep = $_POST['NombreP'];
				$tipo = $_POST['tipo'];
				$materia = $_POST['materia'];
				$descripcion = $_POST['descrip'];
				$archivo=$_FILES['archivo']['tmp_name'];
				$consulta = "INSERT INTO proyectos(NombreDelProyecto, Tipo, Materia, Descripcion, Archivo, nombreest) VALUES ('$nombrep', '$tipo', '$materia','$descripcion','$archivo','$nombreest')";
				$resultado = mysqli_query($conn, $consulta);
				if ($resultado)
				{
					echo "</div>";
					echo "Proyecto Enviado";
				}
				else
				{
					echo "</div>";
					echo "Proyecto NO Enviado";
				}
			}
			 ?>

		</form>

	</div>

	<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
	
</body>
</html>
