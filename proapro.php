<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos aprobados</title>

    <link rel="stylesheet" type="text/css" href="estilo11.css">
     <link rel="stylesheet" href="bootstrap.min.css" / >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  </head>
  <body>
    <div class="ProyectosAP m-3">

      <h2 class="pb-5">Proyectos Aprobados</h2>

      <form method="POST" action="adminproyeceditar.php">
        <div class=" w-100 p-2">
          <button class='botoneditar btn-md' type='submit' name='botoneditar' value='Editar'>Editar
          <i class='fa fa-paint-brush' aria-hidden='true'></i>

        </div>
      </form>
      <?php
  		include "conexion.php";
  	  $sql ="SELECT * FROM proyectos where apro='aprovado'";
  		$resultado = $conn->query($sql);
    	if ($resultado->num_rows>0)
      {
        $cont=0;
        if ($sql==true)
        {
					while ($row=$resultado->fetch_assoc())
            {  $cont++ ?>
						<div class="contenedorgiant pt-2">
                <div id="accordion" class="myaccordion">
                  <div class="card">
                    <div class="card-header" id="heading<?php echo $cont ?>">
                      <h5 class="mb-0">
                        <button class="btn d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapse<?php echo $cont ?>" aria-expanded="true" aria-controls="collapse<?php echo $cont ?>">
                                                    <?php echo $row["NombreDelProyecto"]  ?>
                          <span class="fa-stack fa-fw ">
                            <i class="fas fa-circle fa-stack-2x mas"></i>
                            <i class="fas fa-plus fa-stack-1x fa-inverse mas"></i>
                          </span>
                        </button>

                      </h5>
                    </div>

                    <div id="collapse<?php echo $cont ?>" class="collapse" aria-labelledby="heading<?php echo $cont ?>" data-parent="#accordion">
                      <div class="card-body">

                        <ul class="list-unstyled">

                          <li> Nombre estudiante:
                            <span class="fw-medium text-nav ms-2"> <?php echo $row["nombreest"]  ?></span>
                          </li>
                          <li> Nombre proyecto:
                            <span class="fw-medium text-nav ms-2"> <?php echo $row["NombreDelProyecto"]  ?></span>
                          </li>
                          <li> Tipo de proyecto:
                            <span class="fw-medium text-nav ms-2"> <?php echo $row["Tipo"]  ?></span>
                          </li>
                          <li> Materia:
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
    		echo "No hay proyectos aprobados";
    	}?>
    </div>
    <script type="bootstrap.min.js"></script>
  </body>
</html>
