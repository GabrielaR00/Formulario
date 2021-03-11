<?php
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];

  $conexion = new mysqli('localhost','root','','formualrio');
  if ($conexion->connect_error) {
    die('Conection Failed :'.$conexion->connect_error);
  }
  else {
    $insertar = $conexion->prepare("intert into registration(nombre, correo, contraseña)VALUES(?,?,?)")
    $insertar->bind_param("sssssi", $nombre, $correo, $contraseña);
    $insertar->excute();
    echo "Registro completado";
    $insertar->close();
    $conexion->close();
  }
 ?>
