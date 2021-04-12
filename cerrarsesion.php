<?php
session_start();
session_destroy();

$_SESSION['rol_id']=2;

 header("Location:Casa.php");

?>
