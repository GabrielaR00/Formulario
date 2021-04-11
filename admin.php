<?php
session_start();
$varsesion=$_SESSION['usuario'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    <meta charset="utf-8">
    <title>Ventana de Administrador</title>
  </head>
  <body>
    <div class="todo">
      <h1>ADMINISTRADOR</h1>
      <div>
      </div>
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

      echo "Nombre: ";
      echo $_SESSION['usuario'];
      echo "<div></div>";
      echo "Correo: ";
      echo $_SESSION['correo'];
      echo "<div></div>";

      ?>
      <div class="ProyectosP">

        <h2>Proyectos Pendientes</h2>
        <?php
    		include "conexion.php";
    	  $sql ="SELECT * FROM proyectos where apro=''";
    		$resultado = $conn->query($sql);
      	if ($resultado->num_rows>0)
        {
            if ($sql==true)
            {?>
      				<div class="contenedorgiant">
      					<table border="2">
      						<thead>
                    <th>Nombre del estudiante</th>
      							<th>Nombre del proyecto</th>
      							<th>Tipo</th>
                    <th>Aprovacion</th>
      						</thead>
      						<tbody>
      							<?php
      							while ($row=$resultado->fetch_assoc()) {?>
      								<tr>
      									<td><?php echo $row["nombreest"]  ?></td>
      									<td><?php echo $row["NombreDelProyecto"]  ?></td>
      									<td><?php echo $row["Tipo"]  ?></td>
                        <td><?php echo "<a href='aprovacion.php?id=".$row['id']."'> <button type='button' name='botonapro' value='aprovado'>Aprovado</button></a>"?></td>
                        <td><?php echo "<a href='denegar.php?id=".$row['id']."'> <button type='button' name='botonapro' value='denegado'>Denegado</button></a>"?></td>
                      </tr>
      							<?php   }?>
      						</tbody>
      					</table>
      				</div>
      		<?php
      		  }
        }
    	  else
      	{
      		echo "No hay proyectos";
      	}?>
        <?php
        echo "<div></div>";
        echo "<a href='cerrarsesion.php'>Cerrar Sesion";
        ?>
        <div></div>
        <a href="Casa.php">Regresar</a>
      </div>
      <div class="">
      </div>
      <a href="proapro.php">Proyectos Aprovados</a>
    </div>
  </body>
</html>
