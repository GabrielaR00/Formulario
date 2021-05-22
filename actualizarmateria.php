
<?php
    session_start();

    include "conexion.php";
    $idformulario = $_POST['id'];
    $nuevadescrip = $_POST['newdescripcion'];
    $consulta = "UPDATE info SET Descripcion = '$nuevadescrip' WHERE info.id = '$idformulario'";
    $resul = mysqli_query($conn, $consulta);

    if ($resul==true) {
      echo "Se edito la materia correctamente";
    }
    else {
      echo "no";
    }
  header('location:perfiladmin.php');
?>
