<?php

$conex = mysqli_connect("localhost","root","","formulario");

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];

  $consulta = "INSERT INTO formulario(nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
  $resultado = mysqli_query($conex, $consulta);

if (!$resultado) {
    echo "se shingo algo";
  }
  else {
    echo "melaaaaaaardo";
  }

 ?>
