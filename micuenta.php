<?php
  session_start();
  $varsesion=$_SESSION['usuario'];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Mi cuenta</h1>
    <?php
      if ($varsesion==null)
      {
        echo "Usted no tiene autorizacion, Registrece primero";
        echo "<div></div>";
        echo "<a href='Registro.php'>Registrate";
        echo "<div></div>";
        echo "<a href='Login.php'>Iniciar Sesion";
        echo "<div></div>";
        echo "<a href='Casa.php'>Regresar";
        echo "<div></div>";
        die();
      }
      if ($varsesion=true) {
        echo "Nombre: ";
        echo $_SESSION['usuario'];
        echo "<div></div>";
        echo "Correo: ";
        echo $_SESSION['correo'];
        echo "<div></div>";
        echo "<a href='Casa.php'>Regresar";
        echo "<div></div>";
        echo "<a href='cerrarsesion.php'>Cerrar Sesion";
      }
      ?>
      <div>
      </div>
      <a href="Input.php">Subir Proyecto</a>;
  </body>
</html>
