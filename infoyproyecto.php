<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		include "conexion.php";
		$sql ="SELECT info.id, info.Descripcion  FROM info where materia = '$materiainterac'";
		$resultado = $conn->query($sql);

		if ($resultado->num_rows>0)
        {
         	while ($row=$resultado->fetch_assoc())
            {
				echo $row["Descripcion"];
				?>
				<h2>Proyectos</h2>

				<?php
				$sql ="SELECT* FROM proyectos where Materia = '$materiainterac'";
				$resultado1 = $conn->query($sql);
				$cont=0;
				if ($resultado1->num_rows>0)
		        {
		        	if ($sql==true)
         			{
			        	while ($row=$resultado1->fetch_assoc())
			            {$cont++?>


						<div class="contenedorgiant pt-2">
			                <div id="accordion" class="myaccordion">
			                  <div class="card">
			                    <div class="card-header" id="heading<?php echo $cont ?>">
			                      <h5 class="mb-0">
			                        <button class="btn collapsed d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapse<?php echo $cont ?>" aria-expanded="true" aria-controls="collapse<?php echo $cont ?>">
			                                                    <?php echo $row["NombreDelProyecto"]  ?>
			                          <span class="fa-stack fa-fw ">
			                            <i class="fas fa-circle fa-stack-2x"></i>
			                            <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
			                          </span>
			                        </button>

			                      </h5>
			                    </div>

			                    <div id="collapse<?php echo $cont ?>" class="collapse" aria-labelledby="heading<?php echo $cont ?>" data-parent="#accordion">
			                      <div class="card-body">
			                        <ul class="list-unstyled">
			                          <li class="form-label"> Nombre estudiante:
			                            <span class="fw-medium text-nav ms-2"> <?php echo $row["nombreest"]  ?></span>
			                          </li>
			                          <li class="form-label"> Nombre proyecto:
			                            <span class="fw-medium text-nav ms-2"> <?php echo $row["NombreDelProyecto"]  ?></span>
			                          </li>
			                          <li class="form-label"> Tipo de proyecto:
			                            <span class="fw-medium text-nav ms-2"> <?php echo $row["Tipo"]  ?></span>
			                          </li>
			                          <li class="form-label"> Materia:
			                            <span class="fw-medium text-nav ms-2"> <?php echo $row["Materia"]  ?></span>
			                          </li>
			                        </ul>
			                        <h3 class="h5">Descripción</h3>
			                        <p> <?php echo $row["Descripcion"]  ?></p>
			                        <div>
			                          <img class="card-img" src="<?php echo $row["foto"]?>">
			                        </div>
			                        
			                      </div>
			                    </div>
			                  </div>
			               </div>
			            </div>
			            <?php
			        	}
		       		}		       		
				}
				else
	       		{
	       			echo "<h4 >No hay proyectos</h4>";
	       		}
			}
		}
	?>

</body>
</html>