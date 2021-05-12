<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos aprobados</title>

    <link rel="stylesheet" type="text/css" href="estilos22.css">
     <link rel="stylesheet" href="bootstrap.min.css" / >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  </head>
  <body>
    <div class="ProyectosAP m-3">

      <h2 class="pb-5">Consultorio Animacion 2D</h2>

      
      <?php


  		include "conexion.php";
  		//$ides=$_POST["materia_cl"];
        $sql ="SELECT * FROM proyectos where Materia='Modelado 3D'";
        $resultado = $conn->query($sql);
    	if ($resultado->num_rows>0)
      {
          $cont=0;
          if ($sql==true)
          {
						while ($row=$resultado->fetch_assoc())
              {  $cont++ ?>
							<div class="contenedorgiant p-5">
                  <div id="accordion" class="myaccordion">
                    <div class="card">
                      <div class="card-header" id="heading<?php echo $cont ?>">
                        <h5 class="mb-0">
                          <button class="btn d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapse<?php echo $cont ?>" aria-expanded="true" aria-controls="collapse<?php echo $cont ?>">
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
              <?php   }

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