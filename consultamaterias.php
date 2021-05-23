<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos aprobados</title>

    <link rel="stylesheet" type="text/css" href="estilo33.css">
    <link rel="stylesheet" href="bootstrap.min.css" / >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@600;700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  </head>
  <body>
    <div class="ProyectosAP ">             


      <?php

    		include "conexion.php";
        $materiainterac=$_REQUEST['eleccion'];
        $var=0;

  		//$ides=$_POST["materia_cl"];
        $sql ="SELECT info.id, info.Descripcion  FROM info where materia = '$materiainterac'";
        $resultado = $conn->query($sql);       

        //echo $row["Descripcion"];
        if ($resultado->num_rows>0)
        {
         while ($row=$resultado->fetch_assoc())
            {
              if ($row["id"]=='1')
              {?>
                <div class="align-items-center ">
                  <h2 >Universidad Militar Nueva Granada</h2>

                </div>
                <div class="parrafo align-items-center jext-justify m-6 px-4">
                  <?php echo $row["Descripcion"];?>
                </div>

                <?php
                if($row["id"]=='44')
                {?>
                    <div class="align-items-center m-5">
                      <h2> Ingenieria en Multimedia</h2>
                    </div>
                    <div class="parrafo align-items-center jext-justify m-5 px-5">
                      <?php echo $row["Descripcion"];?>
                    </div>
                <?php
                }
              }
              else
              {?>
                
                  <div class="align-items-center m-5">
                    <?php
                        if($materiainterac=="Animación 2D")
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Expresión Gráfica</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Animación 2D</button>                              
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php echo $row["Descripcion"];?></div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php echo $row["Descripcion"];?></div>                
                          </div>
                          <div> 
                          <?php                 
                        }
                        else if ($materiainterac=="Animación 3D y dinámicas") 
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Modelado 3D</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Animación 3D y dinámicas</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Taller digital de diseño</button>                              
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php echo $row["Descripcion"];?></div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php echo $row["Descripcion"];?></div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php echo $row["Descripcion"];?></div>                
                          </div>
                          <div> 
                         <?php 
                        }
                        else if ($materiainterac=="Dibujo") 
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Dibujo</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Diseño de personajes</button>
                                                           
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php echo $row["Descripcion"];?></div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php echo $row["Descripcion"];?></div>
                                            
                          </div>
                          <div> 
                         <?php 
                        }

                    ?>                    
                  </div>

                
                <?php

                 echo $row["Descripcion"];

              }
           }

        }
        else
        {
          $sql ="SELECT * FROM info WHERE id = '1'";
          $resultado = $conn->query($sql);
          $row1=$resultado->fetch_assoc();
          ?>
          <div class="align-items-center  m-5">
            <h2>Universidad Militar Nueva Granada</h2>

          </div>
          <div class="parrafo align-items-center jext-justify m-5 px-4">
            <?php echo $row1["Descripcion"];?>
          </div>
          <?php

          $sql1 ="SELECT * FROM info WHERE id = '44'";
          $resultado = $conn->query($sql1);
          $row2=$resultado->fetch_assoc();
          ?>
          <div class="align-items-center  m-5">
            <h2>Ingenieria en Multimedia</h2>
          </div>
          <div class="parrafo align-items-center jext-justify m-5 px-4">
            <?php echo $row2["Descripcion"];?>
          <?php

        }
        ?>
    </div>
    <script type="bootstrap.min.js"></script>

  <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
  </body>
</html>
