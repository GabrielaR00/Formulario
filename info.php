<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" type="text/css" href="estilo6.css">
    <meta charset="utf-8">
    

    <link rel="stylesheet" href="bootstrap.min.css" / >

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  </head>
  <body>

      <div class="ProyectosP m-3">


          <?php
          error_reporting(0);
          include "conexion.php";
          if ($var == true)
          {
             $sql ="SELECT * FROM info WHERE semestre = '11'";
             $resultado = $conn->query($sql);
             while ($row=$resultado->fetch_assoc())
             {
               ?>
               <form action="actualizarmateria.php" method="post" enctype="multipart/form-data">
                   <?php
                    $idproyecto = $row["id"];
                   ?>
                   <input type="hidden" name="id" value="<?php echo $idproyecto?>">
                    <h2 class="pb-3"><?php echo  $row["materia"] ?></h2>
                   
                   <div>
                   </div>                   
                   <textarea type="text" class="form-control descrip" name="newdescripcion" value=""><?php echo $row["Descripcion"]  ?> </textarea>
                   
                   <div class="d-flex align-items-center justify-content-center w-100 p-3">
                     <button class='botonsave btn-md ' type='submit' name='botoneditar' value='Editar'>Guardar cambios
                   </div>
               </form>
              <?php
              }
          }
         else
         {?>   
            
            <form class="" action="" method="POST">
              <h2 class="pb-5">Edición Materias</h2>
              <div  class="d-flex flex-row justify-content-center">
                <select class="semestre form-select form-select-md mb-3" name="semestre" >
                  <option selected>Elegir semestre</option>
                  <option value="1">Semestre 1</option>
                  <option value="2">Semestre 2</option>
                  <option value="3">Semestre 3</option>
                  <option value="4">Semestre 4</option>
                  <option value="5">Semestre 5</option>
                  <option value="6">Semestre 6</option>
                  <option value="7">Semestre 7</option>
                  <option value="8">Semestre 8</option>
                  <option value="9">Semestre 9</option>
                  <option value="10">Semestre 10</option>
                </select>
                <div class="pl-5">
                  <input class="buscar mx-5" type="submit" name="btn" value="Buscar">
                </div>
              </div>
            </form>
                  
            <?php
            $semestre=$_POST['semestre'];
            $sql ="SELECT * FROM info WHERE semestre = '$semestre' ";
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
                                                        <?php echo $row["materia"]  ?>
                              <span class="fa-stack fa-fw ">
                                <i class="fas fa-circle fa-stack-2x mas"></i>
                                <i class="fas fa-plus fa-stack-1x fa-inverse mas"></i>
                              </span>
                            </button>

                          </h5>
                        </div>

                        <div id="collapse<?php echo $cont ?>" class="collapse" aria-labelledby="heading<?php echo $cont ?>" data-parent="#accordion">
                          <div class="card-body">
                            <form action="actualizarmateria.php" method="post" enctype="multipart/form-data">
                              <?php $idmateria = $row["id"];?>
                              <input type="hidden" name="id" value="<?php echo $idmateria; ?>">
                              <h3 class="mt-1 mb-3"><?php echo $row["materia"]  ?></h3>
                              
                              <textarea type="text" class="form-control descrip" name="newdescripcion" value=""><?php echo $row["Descripcion"]  ?> </textarea>

                              <div class="d-flex align-items-center justify-content-center w-100 p-3">
                                  <button class='botonsave btn-md ' type='submit' name='botoneditar' value='Editar'>Guardar cambios
                              </div>                           
                            </form>
                          </div>
                        </div>
                      </div>
                   </div>
                 </div>
               <?php
                }
              }
            }
          }?>
      </div>


    <script type="bootstrap.min.js"></script>
  </body>
</html>
