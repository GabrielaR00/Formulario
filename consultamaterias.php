<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Proyectos aprobados</title>

    <link rel="stylesheet" type="text/css" href="estilo04.css">
    <link rel="stylesheet" href="bootstrap.min.css" / >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@600;700&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  </head>
  <body>
    <div class="proyectos ">


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
                        //animador
                        if($materiainterac=="Animación 2D") //Mesa dibujo
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Expresión Gráfica </button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Animación 2D</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Expresión Gráfica";
                                include 'infoyproyecto.php';
                              ?>
                              </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Animación 2D";
                                include 'infoyproyecto.php';
                              ?>
                          </div>
                          <div>
                          <?php
                        }
                        else if ($materiainterac=="Animación 3D y dinámicas") //monitor animador
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Modelado 3D</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Animación 3D y dinámicas</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Taller digital de diseño</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Modelado 3D";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Animación 3D y dinámicas";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Taller digital de diseño";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Dibujo") //Muñeco
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Dibujo</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Diseño de personajes</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Dibujo";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Diseño de personajes";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Integración multimedia") //Tableta
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Diseño I, II y III</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Integración multimedia</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Museos y tecnología</button>

                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Diseño I, II y III";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Integración multimedia";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Museos y tecnología";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }
                         else if ($materiainterac=="Render") //Lampara
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Render</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Animación de objetos y personajes</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Render";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Animación de objetos y personajes";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }


                        //programador
                        else if ($materiainterac=="Tecnologias de la internet") //monitor progra
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Programación I, II y III</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Introducción a la computación gráfica</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Tecnologias de la internet</button>

                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Programación I, II y III";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Introducción a la computación gráfica";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Tecnologias de la internet";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Inteligencia artificial") //gafas
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Inteligencia artificial</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Diseño de interfaces multimedia</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Visión por computador</button>

                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Inteligencia artificial";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Diseño de interfaces multimedia";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Visión por computador";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Simulación") //Play
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Simulación</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Aplicaciones 3D</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Simulación";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Aplicaciones 3D";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Computación gráfica") //pacman
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Computación gráfica</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Desarrollo de producto multimedia</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Computación gráfica";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Desarrollo de producto multimedia";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Ingeniera de Software") //torre
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Ingeniera de Software</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Diseño de experiencia de usuario</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4 " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Ingeniera de Software";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Diseño de experiencia de usuario";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }

                        //productor
                        else if ($materiainterac=="Procesamiento de señales") //torre
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Procesamiento de señales</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Integración multimedia</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Procesamiento de señales";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Integración multimedia";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Motion Graphics") //monitor video
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Procesamiento de imagenes</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Marketing digital</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Motion Graphics</button>

                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Procesamiento de imagenes";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Marketing digital";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Motion Graphics";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Audio y video") //claqueta
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Audio y video</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Cortometraje</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Audio y video";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Cortometraje";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Movimiento e interacción") //Dron
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Movimiento e interacción</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Entornos virtuales en multimedia</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Movimiento e interacción";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Entornos virtuales en multimedia";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Introducción a la ingeniería") //libros
                        {?>
                          <nav>
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Introducción a la ingeniería</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Gestión empresarial</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Gestión integral de proyectos</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Introducción a la ingeniería";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Gestión empresarial";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Gestión integral de proyectos";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }

                        //Moneda
                        else if ($materiainterac=="Informacion Carrera")
                        {?>
                          <div class="align-items-center m-2">
                            <h2> Ingenieria en Multimedia</h2>
                          </div>
                          <div class="parrafo align-items-center jext-justify px-4 mt-5 mb-2">
                            <p class="justificado"><?php echo $row["Descripcion"];?></p>
                          </div>                        
                          <div class="row justify-content-center my-3 "> 
                          <p class="justificado2"> Entérate de más:</p>  
                           <div class="col-sm-2">  

                              <a href="https://www.umng.edu.co/programas/pregrados/ingenieria-multimedia" target="_blank"><img class="img-responsive w-100 h-auto " src="Assests/multi.png" ></a>          
                           </div>   
                          </div>

                         <?php
                        }
                    ?>
                  </div>


                <?php

                 // echo $row["Descripcion"];

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
          <div class="parrafo align-items-center jext-justify mx-5 px-4 mt-5 mb-2">
            <p class="justificado"><?php echo $row1["Descripcion"];?></p>
          </div>
          <div class="row justify-content-center "> 
            <p class="justificado2"> Entérate de más:</p>   
             <div class="col-sm-2">        
             <a href="https://www.umng.edu.co" target="_blank"><img class="img-responsive w-100 h-auto " src="Assests/UMNG.png" ></a>          
             </div>   
          </div>
          <?php
        }
        ?>
    </div>
    <script type="bootstrap.min.js"></script>

  <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
  </body>
</html>
