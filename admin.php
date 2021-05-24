
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="estilo5.css">
    <meta charset="utf-8">
    <title>Ventana de Administrador</title>

    <link rel="stylesheet" href="bootstrap.min.css" / >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  </head>
  <body> 

      <div class="ProyectosP m-3">

        <h2 class="p-3">Proyectos Pendientes</h2>
        <?php
    		include "conexion.php";
    	  $sql ="SELECT * FROM proyectos where apro=''";
    		$resultado = $conn->query($sql);
      	if ($resultado->num_rows>0)
        {
          $cont=0;
          if ($sql==true)
          {

            while ($row=$resultado->fetch_assoc())
            { $cont++; ?>
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
                        <div class="d-flex align-items-center justify-content-center w-100 p-2">
                          <?php echo "<a href='aprobacion.php?id=".$row['id']."'> <button class='btn btn-success  btn-lg m-2' type='button' name='botonapro' value='aprovado'>Aprobado
                            <i class='fa fa-check' aria-hidden='true'></i>
                            </button>
                            </a>"?>
                          <?php echo "<a href='denegar.php?id=".$row['id']."'> <button class='btn btn-danger btn-lg m-2' type='button' name='botonapro' value='denegado'>Denegado
                            <i class='fa fa-times' aria-hidden='true'></i>
                            </button>
                            </a>"?>
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
          echo "  <h5 class='pb-5'> No hay proyectos pendientes </h2>";
        }?>
      </div>   


    <script type="bootstrap.min.js"></script>
  </body>
</html>
