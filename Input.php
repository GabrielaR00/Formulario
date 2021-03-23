<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Envia Tu Trabajo</title>

	<link rel="stylesheet" type="text/css" href="InputCSS.css">

	<link rel="stylesheet" href="bootstrap.min.css" >

	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body class="bg-dark ">
	<div class="col align-self-start p-5"></div>
	<div class="contenedor col-lg-6 d-flex flex-column p-2 mb-auto ">
		<h1 class="titulo" > Formulario envio </h1>

		<form  action="input.php" method="POST" enctype="multipart/form-data">
			<div class="input-contenedor d-flex flex-md-row justify-content-between ">
				<label for="exampleInputName" class="form-label ">Nombre del proyecto </label>
				<input type="name" class="form-control " name="NombreP" >
			</div>
			<div class="input-contenedor">
				<label for="exampleInputName" class="form-label ">Tipo </label>
				<input type="tipo" class="form-control " name="Tipo" >
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
			<div  class="input-contenedor">
				<label for="exampleInputName" class="form-label ">Breve descripcíón </label>
				<textarea  name="descrip" placeholder="Escriba una breve descripción de su proyecto"></textarea>

			</div>
			<div class="input-contenedor">

				<input type="file" name="archivo"/>
			</div>
			<div class="input-contenedor">
				<input type="submit" value="Envio" >
				<input type="reset" value="Reestablecer" >
			</div>
			<?php

			$conex = mysqli_connect("localhost","root","","formulario");

				$nombrep = $_POST['NombreP'];
				$tipo = $_POST['Tipo'];
				$materia = $_POST['materia'];
				$descripcion = $_POST['descrip'];
				$archivo=$_FILES['archivo']["tmp_name"];
				$consulta = "INSERT INTO proyectos(NombreDelProyecto, Tipo, Materia, Descripcion, Archivo) VALUES ('$nombrep', '$tipo', '$materia','$descripcion','$archivo')";
				$resultado = mysqli_query($conex, $consulta);
				if ($resultado)
				{
					echo "si";
				}
				else {
					echo "no";
				}

			 ?>

		</form>

	</div>

	<!-- <script type="text/javascript" src="./js/bootstrap.min.js"></script> -->

	<script type="text/javascript" src="bootstrap.bundle.min.js"></script>


</body>
</html>
