<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="ProyectosAP">

      <h2>Proyectos Aprovados</h2>
      <?php
  		include "conexion.php";
  	  $sql ="SELECT * FROM proyectos where apro='aprovado'";
  		$resultado = $conn->query($sql);
    	if ($resultado->num_rows>0)
      {
          if ($sql==true)
          {?>
    				<div class="contenedorgiant">
    					<table border="2">
    						<thead>
    							<th>Nombre de estudiante</th>
    							<th>Nombre del proyecto</th>
    							<th>Tipo</th>
    						</thead>

    						<tbody>
    							<?php
    							while ($row=$resultado->fetch_assoc()) {?>
    								<tr>
    									<td><?php echo $row["nombreest"]  ?></td>
    									<td><?php echo $row["NombreDelProyecto"]  ?></td>
    									<td><?php echo $row["Tipo"]  ?></td>
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
    		echo "No hay proyectos aprovados";
    	}?>
    </div>
    
  </body>
</html>
