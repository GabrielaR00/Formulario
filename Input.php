<?php
session_start();
$varsesion=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Envia Tu Trabajo</title>

	<link rel="stylesheet" href="bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="estilosinput.css">


	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

</head>
<body class="fondo bg"  >
	<div>
		<?php include 'navsesion.html'; ?>
	</div>

	<div class="col align-self-start p-4 "></div>
	<div class="backtexto col-6 d-flex flex-column p-5 mb-auto align-self-center">
		<div class="contenedor m-2">
			<h1 class="titulo pb-2" > Formulario de envio </h1>
			<div>
				<h3 class="py-2"> Indicaciones:</h3>
				<p class="parrafo  pb-4">Con este formulario puedes enviar los proyectos que hayas realizado en la carrera y que desees compartir con nosotros. Te pedimos que hagas uso de un vocabulario adecuado y profesional al momento de ingresar tu información. Al momento de subir el archivo seguir las instrucciones indicadas y al llenar el espacio de la breve descripción explicar de que se trata el proyecto y un poco de su desarrollo, sin exceder los 300 caracteres con espacios. </p>
			</div>

			<form  action="subirproyecto.php" method="POST" enctype="multipart/form-data">
				<div class="input-contenedor   ">
					<label for="exampleInputName" class="form-label ">Nombre del proyecto </label>

					<input type="name" class="form-control  " name="NombreP" >
				</div>
				<div class="input-contenedor">
					<label for="exampleInputName" class="form-label ">Tipo </label>
					<div class="select-box ">
						<select class=" selectpicker  px-lg-2 py-lg-2" data-width="fit" name="tipo">
								<option>Seleccione el tipo de proyecto</option>
								<option>Animación 2D </option>
							    <option>Animación 3D</option>
							    <option>Arte analógico </option>
							    <option>Arte digital </option>
							    <option>Bibliotecas 3D </option>
							   	<option>Modelado 3D </option>							    
							    <option>Página web </option>
								<option>Programa </option>
								<option>Prototipo </option>
						   		<option>Simulación </option>
							 	<option>Videojuego </option>							 	
						</select>
					</div>

				</div >
				<div class="input-contenedor">
					<label for="exampleInputName" class="form-label ">Materia para la que se realizó el proyecto </label>
					<div class="select-box ">
						<select  class="selectpicker  px-lg-2 py-lg-2" data-width="fit" name="materia">
							<option>Seleccione una materia </option>
							<optgroup label="Materias">
								<option>Animación 2D </option>
							    <option>Animación 3D y dinámicas </option>
							    <option>Audio y video </option>
							    <option>Aplicaciones 3D </option>
							    <option>Computación gráfica </option>
							    <option>Diseño I,II y III </option>
							    <option>Dibujo </option>
							    <option>Expresión Gráfica </option>
							    <option>Gestión empresarial </option>
							    <option>Gestión integral de proyectos </option>
							    <option>Historia del arte </option>
							    <option>Ingeniera de Software </option>
							    <option>Integración multimedia </option>
							    <option>Inteligencia artificial </option>
							    <option>Introducción a la computación gráfica </option>
							    <option>Introducción a la ingeniería </option>							   
							    <option>Modelado 3D </option>
							    <option>Procesamiento de señales </option>
							    <option>Procesamiento de imagenes </option>
							    <option>Programación I, II y III</option>
							   	<option>Render </option>
							  	<option>Taller digital de diseño </option>
							    <option>Tecnologias de la internet </option>
							    <option>Simulación </option>
							</optgroup>
						    <optgroup label="Electivas">
							    <option>Animación de objetos y personajes </option>
							    <option>Base de datos </option>
							    <option>Cortometraje </option>
							    <option>Desarrollo de producto multimedia </option>
							    <option>Diseño de experiencia de usuario </option>
							    <option>Diseño de interfaces multimedia  </option>
							    <option>Diseño de personajes </option>
							    <option>Entornos virtuales en multimedia </option>
							    <option>Marketing digital </option>
							    <option>Motion Graphics </option>
							    <option>Movimiento e interacción </option>
							    <option>Multimedia educativa </option>
							    <option>Museos y tecnología  </option>
							    <option>Visión por computador </option>
							</optgroup>

						</select>

					</div>
				</div>
				<div  class="input-contenedor" row="3">
					<label for="exampleInputName" class="form-label ">Breve descripcíón </label>
					<textarea  name="descrip" placeholder="Escriba una breve descripción de su proyecto"></textarea>

				</div>
				<div>
					<p class="arch" > * Los archivos permitidos son imagenes con formato jpg, png y gif. Archivos que no sobrepasen las 20MB *</p>
				    <div class="invoiceBox">
				      <label for="file">
				        <div class="boxFile" data-text="Seleccionar archivo">
				          <input type="file" name="fotoproye">
				        </div>
				      </label>
				    </div>
				</div>
				<div class="botones ">
					<input type="reset" class="btn btn-primary  " value="Reestablecer" name="reestablecer" >
					<input type="submit" class="btn btn-primary " value="Enviar" name="envio">
					<div></div>


				</div>

			</form>

		</div>
	</div>
	<div class="col align-self-end p-5 "></div>
	<script type="bootstrap.min.js"></script>

	<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</body>
</html>
