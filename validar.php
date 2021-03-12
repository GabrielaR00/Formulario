<?php



 $conexlogin = mysqli_connect("localhost","root","","formulario");
 $correo=$_POST['correo'];
 $contraseña=$_POST['contraseña'];

 $consulta="SELECT*FROM datosformulario where correo='$correo' and contraseña='$contraseña'";
 $resultado=mysqli_query($conexlogin,$consulta);

$filas=mysqli_num_rows($resultado);
if ($filas) {
  header("location:home.html");
}else {
   $message = 'Correo o Contraseña Incorrecta';
}
mysqli_free_result($resultado);
mysqli_close($conexlogin);

?>
