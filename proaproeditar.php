<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos aprobados</title>

    <link rel="stylesheet" type="text/css" href="estilo04.css">
     <link rel="stylesheet" href="bootstrap.min.css" / >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  </head>
  <body>
    <div class="ProyectosAP m-3">

      <h2 class="pb-5">Proyectos Aprobados</h2>
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
              {
              $cont++ ?>
              <div class="contenedorgiant pt-2">
                  <div id="accordion" class="myaccordion">
                    <div class="card">
                      <div class="card-header" id="heading<?php echo $cont ?>">
                        <h5 class="mb-0">
                          <button class="btn collapsed d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapse<?php echo $cont ?>" aria-expanded="false" aria-controls="collapse<?php echo $cont ?>">
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
                          <form action="actualizarproyecto.php" method="post" enctype="multipart/form-data">
                            <ul class="list-unstyled">
                              <?php $idproyecto = $row["id"] ?>
                              <input type="hidden" name="id" value="<?php echo $idproyecto; ?>">
                              <?php $_SESSION['idproyecto']=$idproyecto; ?>

                              <li class="form-label"> Nombre estudiante:
                                 <input type="text" class="form-control" name="newnombestpro" value="<?php echo $row["nombreest"]  ?>">
                              </li>
                              <li class="form-label"> Nombre proyecto:
                                 <input type="text" class="form-control" name="newnombreproyecto" value="<?php echo $row["NombreDelProyecto"]; $nombreantiguo=$row["NombreDelProyecto"]?>">
                              </li>
                              <li class="form-label"> Tipo de proyecto:
                                 <input type="text" class="form-control" name="newtipoproyecto" value="<?php echo $row["Tipo"]  ?>">
                              </li>
                              <li class="form-label"> Materia:
                                 <input type="text" class="form-control" name="newmateriaproyecto" value="<?php echo $row["Materia"]  ?>">
                              </li>
                            </ul>
                            <div>
                              <h3 class="h5">Descripción</h3>
                              <textarea type="text" class="form-control descrip" name="newdescripcion" value="<?php echo $row["Descripcion"]  ?>"><?php echo $row["Descripcion"]  ?></textarea>
                              <div class="pt-3">
                                <img class="card-img" src="<?php echo $row["foto"]?>">
                              </div>
                              <div class="d-flex align-items-center justify-content-center w-100 p-3">
                                <button class='botonsave btn-md ' type='submit' name='botoneditar' value='Editar'>Guardar cambios
                              </div>
                            </div>
                          </form>
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
