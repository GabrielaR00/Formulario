<?php

  session_start();
  $idproyecto=$_SESSION['idproyecto'];

?>
<?php

    include "conexion.php";

    $nombreestudiante = $_POST['newnombestpro'];
    $nombreproyecto = $_POST['newnombreproyecto'];
    $tipoproyecto= $_POST['newtipoproyecto'];
    $materiaproyecto = $_POST['newmateriaproyecto'];
    $nuevadescrip = $_POST['newdescripcion'];

    echo " $idproyecto,";

    $consulta = "UPDATE proyectos SET NombreDelProyecto = '$nombreproyecto', Tipo = '$tipoproyecto', Materia = '$materiaproyecto', Descripcion='$nuevadescrip', nombreest='$nombreestudiante' WHERE proyectos.id = '$idproyecto'";
    $resul = mysqli_query($conn, $consulta);

    if ($resul=true) {
      echo "Se edito el proyecto correctamente";
    }
    else {
      echo "no";
    }
  header('location:adminproyeceditar.php');
?>
