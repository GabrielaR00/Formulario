
<?php

    include "conexion.php";

    $idformulario = $_POST['id'];
    $nombreestudiante = $_POST['newnombestpro'];
    $nombreproyecto = $_POST['newnombreproyecto'];
    $tipoproyecto= $_POST['newtipoproyecto'];
    $materiaproyecto = $_POST['newmateriaproyecto'];
    $nuevadescrip = $_POST['newdescripcion'];

    $consulta = "UPDATE proyectos SET NombreDelProyecto = '$nombreproyecto', Tipo = '$tipoproyecto', Materia = '$materiaproyecto', Descripcion='$nuevadescrip', nombreest='$nombreestudiante' WHERE proyectos.id = '$idformulario'";
    $resul = mysqli_query($conn, $consulta);

    if ($resul=true) {
      echo "Se edito el proyecto correctamente";
    }
    else {
      echo "no";
    }
  header('location:adminproyeceditar.php');
?>
