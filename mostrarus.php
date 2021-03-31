<?php
 $conexion = new mysqli("localhost","root","","formulario");
 session_start();
 $iduser=$_SESSION['id'];
 $sql="SELECT id, nombre FROM datosformulario WHERE id = '$iduser'";
 $resultado = $conexion->query($sql);
 $row = $resultado->fetch_assoc();
 echo utf8_decode($row['nombre']);
 ?>
