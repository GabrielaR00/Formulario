<?php
include 'conexion.php';
$id=$_GET['id'];
$consult = "UPDATE proyectos SET apro = 'aprovado' WHERE id ='$id'";
$result = mysqli_query($conn, $consult);
header('location: admin.php');
?>
