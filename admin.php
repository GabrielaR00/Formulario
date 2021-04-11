<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    <meta charset="utf-8">
    <title>Ventana de Administrador</title>
  </head>
  <body>
    <h1>ADMINISTRADOR</h1>
    <div>
    </div>

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
    							<th>Nombre</th>
    							<th>Nombre del proyecto</th>
    							<th>Tipo</th>
                  <th>Aprovacion</th>
    						</thead>
    						<tbody>
    							<?php
    							while ($row=$resultado->fetch_assoc()) {?>
    								<tr>
    									<td><?php echo $row["id"]  ?></td>
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
    </div>
    <div class="">
    </div>
    <a href="proapro.php">Proyectos Aprovados</a>

  </body>
</html>
