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


      <?php

    		include "conexion.php";
        $materiainterac=$_REQUEST['eleccion'];

  		//$ides=$_POST["materia_cl"];
        $sql ="SELECT info.id, info.Descripcion  FROM info where materia = '$materiainterac'";
        $resultado = $conn->query($sql);
        
           echo "$materiainterac";  
        
        //echo $row["Descripcion"];        
        if ($resultado->num_rows>0) 
        {
         while ($row=$resultado->fetch_assoc())
            { 
              if ($row["id"]=='1' ||  $row["id"]=='2') 
              {?>
                <div class="align-items-center  m-5">
                  <?php  echo "<h2>Universidad Militar Nueva Granada</h2>";?>
                  
                </div>
                <div class="parrafo align-items-center jext-justify m-4 px-2">
                  <?php echo $row["Descripcion"];?>
                </div> 
                 
                <?php
                if($row["id"]=='2')
                {?>
                    <div class="align-items-center  m-5">
                      <?php  echo "<h2>Ingenieria Multimedia</h2>";?>                  
                    </div>  
                    <div class="parrafo align-items-center jext-justify m-4 px-2">
                      <?php echo $row["Descripcion"];?>
                    </div>  
                <?php
                }             
              }
              else
              {
                 echo $row["Descripcion"];

              }                          
           }    
        
        }
        else
        {
          echo "No hay materias";
        }
        ?>
    </div>
    <script type="bootstrap.min.js"></script>

  <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
  </body>
</html>
