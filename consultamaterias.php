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


      <h2 class="pb-5">Mataerias:</h2>


      <?php





    		include "conexion.php";
        $materiainterac=$_REQUEST['eleccion'];

  		//$ides=$_POST["materia_cl"];
        $sql ="SELECT info.Descripcion FROM info where materia = '$materiainterac'";
        $resultado = $conn->query($sql);
        echo "<h2 >$materiainterac";
        //echo $row["Descripcion"];

        if ($resultado->num_rows>0)
        {?>
          <table>
            <tbody>
              <?php
              while ($row=$resultado->fetch_assoc())
                {?>
                <tr>
                  <td><?php echo $row["Descripcion"]  ?></td>
                </tr>
              <?php   }?>
            </tbody>
          </table>
        <?php
        }
        else
        {
          echo "No hay materias";
        }
        ?>
    </div>
    <script type="bootstrap.min.js"></script>
  </body>
</html>
