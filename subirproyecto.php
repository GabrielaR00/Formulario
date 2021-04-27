<?php
session_start();
$varsesion=$_SESSION['usuario'];
$varsesion=$_FILES['fotoproye'];
?>

<?php
    include "conexion.php";
    $nombreest=$_SESSION['usuario'];
    if (isset($_POST['envio']))
    {
      $nombrep = $_POST['NombreP'];
      $tipo = $_POST['tipo'];
      $materia = $_POST['materia'];
      $descripcion = $_POST['descrip'];

      $foto = $_FILES['fotoproye'];
      echo $foto['tmp_name'];
      $directorio_destino = "fotosproyectos";
      $tmp_name = $foto['tmp_name'];

      $img_file = $foto['name'];
      $img_type = $foto['type'];

      $archivo = $directorio_destino.'/'. $img_file;

      $consulta = "INSERT INTO proyectos(NombreDelProyecto, Tipo, Materia, Descripcion, foto, nombreest) VALUES ('$nombrep', '$tipo', '$materia','$descripcion','$archivo','$nombreest')";
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
      if (move_uploaded_file($tmp_name, $archivo))
      {
        echo "se subio correctamente";
      }

    }



    header('location:userproyecto.php');
?>
