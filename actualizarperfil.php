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
    $consulta77 = "UPDATE usuarios SET nombre = '$nombrenuevo', correo = '$correonuevo' WHERE usuarios.id = '$idus'";
    $resultado77 = mysqli_query($conn, $consulta77);

    if ($resultado77=true)
    {
      echo "<div class='correcto mb-auto'> Edicion Exitosa";
      echo "</div>";
    }
  header('location: cerrarsesion.php');
?>
