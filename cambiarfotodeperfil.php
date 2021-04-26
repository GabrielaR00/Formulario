<?php
  session_start();
  $varsesion=$_SESSION['usuario'];
  $varsesion=$_SESSION['idusu'];
?>
<?php
  $foto = $_FILES['foto'];
  echo $foto['tmp_name'];
  $directorio_destino = "profile";
  $tmp_name = $foto['tmp_name'];
  $nombreus=$_SESSION['usuario'];
  $idus=$_SESSION['idusu'];

  $img_file = $foto['name'];
  $img_type = $foto['type'];

  $destino = $directorio_destino.'/'. $img_file;
  $consulta = "UPDATE usuarios SET fotoperfil = '$destino' WHERE usuarios.id = '$idus'";
  if (move_uploaded_file($tmp_name, $destino))
  {
    echo "se subio correctamente";
  }

?>
