<?php

    $conex = mysqli_connect("localhost","root","","formulario");
      if (!$conex)
      {
        echo "Fallo la conexion ";
      }
      else
      {
        echo "Se conectó correctamente";
      }
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $contraseña = $_POST['contraseña'];

      $consulta = "INSERT INTO datosformulario(nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";
      $resultado = mysqli_query($conex, $consulta);

      if (!$resultado)
      {
        echo "Registro Fallido";
      }
      else
      {
        echo "Registro Exitoso";
      }
 ?>
