<?php
session_start();
$varsesion=$_SESSION['usuario'];
$varsesion=$_SESSION['idusu'];
?>
<?php
include "conexion.php";
  $nombreus=$_SESSION['usuario'];
  $idus=$_SESSION['idusu'];
  $foto = $_FILES['foto'];

    $nombrenuevo = $_POST['nombrenew'];
    $correonuevo = $_POST['correonew'];
    $consulta77 = "UPDATE admins SET nombre = '$nombrenuevo', correo = '$correonuevo' WHERE admins.id = '$idus'";
    $resultado77 = mysqli_query($conn, $consulta77);


    if ($resultado77=true)
    {
      echo "<div class='correcto mb-auto'> Edicion Exitosa";
      echo "</div>";
    }
    else {
      echo "edicion no exitosa";
    }

    if ($foto!=null) {

      echo $foto['tmp_name'];
      $directorio_destino = "profile";
      $tmp_name = $foto['tmp_name'];

      $img_file = $foto['name'];
      $img_type = $foto['type'];

      $destino = $directorio_destino.'/'. $img_file;
      $consulta = "UPDATE admins SET fotoperfil = '$destino' WHERE admins.id = '$idus'";
      mysqli_query($conn, $consulta);
      if (move_uploaded_file($tmp_name, $destino))
      {
        echo "se subio correctamente";
      }
    }
    else {
      echo "no hay foto";
    }


  //header('location: cerrarsesion.php');
?>
