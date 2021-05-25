<?php
session_start();
$varsesion=$_SESSION['usuario'];
$varsesion=$_SESSION['idusu'];
?>
<?php
include "conexion.php";
  $nombreus=$_SESSION['usuario'];
  $idus=$_SESSION['idusu'];

    $nombrenuevo = $_POST['nombrenew'];
    $correonuevo = $_POST['correonew'];
    $contranueva = $_POST['contranew'];
    $consulta77 = "UPDATE usuarios SET nombre = '$nombrenuevo', correo = '$correonuevo', contrasena = '$contranueva' WHERE usuarios.id = '$idus'";
    $resultado77 = mysqli_query($conn, $consulta77);

    if ($resultado77=true)
    {
      echo "<div class='correcto mb-auto'> Edicion Exitosa";
      echo "</div>";
    }

    $foto = $_FILES['foto'];
    echo $foto['tmp_name'];
    $directorio_destino = "profile";
    $tmp_name = $foto['tmp_name'];

    $img_file = $foto['name'];
    $img_type = $foto['type'];

    $destino = $directorio_destino.'/'. $img_file;
    $consulta = "UPDATE usuarios SET fotoperfil = '$destino' WHERE usuarios.id = '$idus'";
    mysqli_query($conn, $consulta);
    if (move_uploaded_file($tmp_name, $destino))
    {
      echo "se subio correctamente";
    }

  header('location: cerrarsesion.php');
?>
