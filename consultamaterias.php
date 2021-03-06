<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" href="Assests/M.png"/>
    <meta charset="utf-8">
    <title>Proyectos aprobados</title>

    <link rel="stylesheet" type="text/css" href="estilo6.css">
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
                        if($materiainterac=="Animaci??n 2D") //Mesa dibujo
                        {?>
                          <nav class="tabs align-items-center">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Expresi??n Gr??fica </button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Animaci??n 2D</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Expresi??n Gr??fica";
                                include 'infoyproyecto.php';
                              ?>
                              </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Animaci??n 2D";
                                include 'infoyproyecto.php';
                              ?>
                          </div>
                          <div>
                          <?php
                        }
                        else if ($materiainterac=="Animaci??n 3D y din??micas") //monitor animador
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Modelado 3D</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Animaci??n 3D y din??micas</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Taller digital de dise??o</button>
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
                                $materiainterac="Animaci??n 3D y din??micas";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Taller digital de dise??o";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Dibujo") //Mu??eco
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Dibujo</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Dise??o de personajes</button>
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
                                $materiainterac="Dise??o de personajes";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Integraci??n multimedia") //Tableta
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Dise??o I, II y III</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Integraci??n multimedia</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Museos y tecnolog??a</button>

                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Dise??o I, II y III";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Integraci??n multimedia";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Museos y tecnolog??a";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }
                         else if ($materiainterac=="Render") //Lampara
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Render</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Animaci??n de objetos y personajes</button>
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
                                $materiainterac="Animaci??n de objetos y personajes";
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
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Programaci??n I, II y III</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Introducci??n a la computaci??n gr??fica</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Tecnologias de la internet</button>

                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Programaci??n I, II y III";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Introducci??n a la computaci??n gr??fica";
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
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Inteligencia artificial</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Dise??o de interfaces multimedia</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Visi??n por computador</button>

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
                                $materiainterac="Dise??o de interfaces multimedia";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Visi??n por computador";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Simulaci??n") //Play
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Simulaci??n</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Aplicaciones 3D</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Simulaci??n";
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
                        else if ($materiainterac=="Computaci??n gr??fica") //pacman
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Computaci??n gr??fica</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Desarrollo de producto multimedia</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Computaci??n gr??fica";
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
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Ingeniera de Software</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Dise??o de experiencia de usuario</button>
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
                                $materiainterac="Dise??o de experiencia de usuario";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }

                        //productor
                        else if ($materiainterac=="Procesamiento de se??ales") //torre
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Procesamiento de se??ales</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Integraci??n multimedia</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Procesamiento de se??ales";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Integraci??n multimedia";
                                include 'infoyproyecto.php';
                              ?>
                            </div>

                          </div>
                          <div>
                         <?php
                        }
                        else if ($materiainterac=="Motion Graphics") //monitor video
                        {?>
                          <nav class="tabs">
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
                          <nav class="tabs">
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
                        else if ($materiainterac=="Movimiento e interacci??n") //Dron
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Movimiento e interacci??n</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Entornos virtuales en multimedia</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Movimiento e interacci??n";
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
                        else if ($materiainterac=="Introducci??n a la ingenier??a") //libros
                        {?>
                          <nav class="tabs">
                            <div class="nav nav-tabs"  role="tablist">
                              <button class="nav-link active pestana" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="presentation" aria-controls="nav-home" aria-selected="true">Introducci??n a la ingenier??a</button>
                              <button class="nav-link pestana" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="presentation" aria-controls="nav-profile" aria-selected="false">Gesti??n empresarial</button>
                              <button class="nav-link pestana" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="presentation" aria-controls="nav-contact" aria-selected="false">Gesti??n integral de proyectos</button>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active m-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                              <?php
                                $materiainterac="Introducci??n a la ingenier??a";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <?php
                                $materiainterac="Gesti??n empresarial";
                                include 'infoyproyecto.php';
                              ?>
                            </div>
                            <div class="tab-pane fade m-4" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                              <?php
                                $materiainterac="Gesti??n integral de proyectos";
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
                          <div class="tabs m-2">
                            <div class="align-items-center ">
                              <h2> Ingenier??a en Multimedia</h2>
                            </div>
                            <div class="parrafo align-items-center jext-justify px-3 mt-5 mb-2">
                              <p class="justificado"><?php echo $row["Descripcion"];?></p>
                            </div>
                            <div class="row justify-content-center my-3 ">
                            <p class="justificado2"> Ent??rate de m??s:</p>
                             <div class="col-sm-2">

                                <a href="https://www.umng.edu.co/programas/pregrados/ingenieria-multimedia" target="_blank"><img class="img-responsive w-100 h-auto " src="Assests/multi.png" ></a>
                             </div>
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
            <p class="justificado2"> Ent??rate de m??s:</p>
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
