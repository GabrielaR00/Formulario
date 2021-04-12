<?php
include 'conexion.php';
$id=$_GET['id'];
$consult = "UPDATE proyectos SET apro = 'denegado' WHERE id ='$id'";
$result = mysqli_query($conn, $consult);
header('location: adminproyecto.php');
?>
